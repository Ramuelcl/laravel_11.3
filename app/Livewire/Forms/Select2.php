<?php

namespace App\Livewire\Forms;

use Livewire\Component;

class Select2 extends Component
{
    public $check, $opcion, $opciones, $seleccionadas;
    public $claveUnica, $Activa, $eliminar;
    public $vIndex = false;
    public $newOption = "";
    protected $listeners = ["select2" => "Select2Updated"];

    public function mount($opciones = [], $seleccionadas = [], $eliminar = false, $multiple = true)
    {
        $this->claveUnica = substr(str_shuffle("abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, config("guzanet.appLargoClave", 3));
        $this->opciones = $opciones;
        $this->seleccionadas = $seleccionadas;
        $this->multiple = $multiple;
        $this->eliminar = $eliminar;
    }

    public function addOption()
    {
        if (!empty($this->newOption)) {
            // Convertir la nueva opción a minúsculas y eliminar tildes
            $normalizedNewOption = fncNormalizeString($this->newOption);

            // Verificar si la descripción ya existe en las opciones
            $existingDescriptions = array_map("fncNormalizeString", array_column($this->opciones, "name"));
            // dd($normalizedNewOption, $existingDescriptions);
            if (in_array($normalizedNewOption, $existingDescriptions)) {
                // Si la descripción ya existe, puedes manejarlo aquí (por ejemplo, mostrar un mensaje de error)
                // $this->dispatch("flashMessage", ["error", "Esta opción ya existe.", "top", 5000]);

                session()->flash("error", "Esta opción ya existe.");
                return;
            }

            // Encontrar el ID máximo existente en el arreglo $opciones
            $maxId = !empty($this->opciones) ? max(array_column($this->opciones, "id")) : 0;

            // Asignar un nuevo ID único incrementando el máximo ID encontrado
            $newId = $maxId + 1;

            // Añadir la nueva opción con el ID único
            $this->opciones[] = ["id" => $newId, "name" => ucfirst($this->newOption)];
            $this->seleccionadas[] = $newId;
            // dump([$this->opciones, $this->seleccionadas]);
            $this->reset(["newOption"]);

            // Despachar el evento con las nuevas opciones y seleccionadas
            $this->dispatch("select2", ["opciones" => $this->opciones, "seleccionadas" => $this->seleccionadas]);
        }
    }

    public function actualizarSeleccion($opcionId)
    {
        if (in_array($opcionId, $this->seleccionadas)) {
            $this->seleccionadas = array_diff($this->seleccionadas, [$opcionId]);
        } else {
            $this->seleccionadas[] = $opcionId;
        }

        // dd($opcionId);
        $this->dispatch("select2", ["opciones" => $this->opciones, "seleccionadas" => $this->seleccionadas]);
    }

    public function Select2Updated($data)
    {
        $this->opciones = $data["opciones"];
        $this->seleccionadas = $data["seleccionadas"];
    }

    public function delete($index)
    {
        $this->opciones = array_values(
            array_filter($this->opciones, function ($opcion) use ($index) {
                return $opcion["id"] != $index;
            }),
        );
        $this->dispatch("select2", ["opciones" => $this->opciones, "seleccionadas" => $this->seleccionadas]);
    }

    public function render()
    {
        return view("livewire.forms.select2", [
            "opciones" => $this->opciones,
            "seleccionadas" => $this->seleccionadas,
        ]);
    }
}
