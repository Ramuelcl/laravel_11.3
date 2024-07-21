<?php

namespace App\Livewire\Forms;

use Livewire\Component;
use Livewire\Attributes\On;
//
use Illuminate\Support\Str;

class Paises extends Component
{
    public $seleccionActualizada;
    public $pais;
    public $paises = [["id" => 1, "name" => "Peru"], ["id" => 2, "name" => "Colombia"], ["id" => 5, "name" => "Argentina"]];
    public $seleccionadas = [2];
    protected $listeners = ["select2" => "Select2Updated"];

    public function mount()
    {
        //
    }

    public function render()
    {
        return view("livewire.forms.paises", ["opciones" => $this->paises, "seleccionadas" => [2]]);
    }

    public function Select2($opciones, $seleccionadas)
    {
        dd($opciones, $seleccionadas);
        $this->paises = $opciones;
        $this->seleccionadas = $seleccionadas;
    }

    public function submitForm()
    {
        $this->pais = Str::ucfirst($this->pais);
        // $this->fncVerifica($this->pais);
        $id = max(array_column($this->paises, "id")) + 1;

        array_push($this->paises, ["id" => $id, "name" => $this->pais]);
        $this->reset(["pais"]);
        $this->pais = "";
        if ($id == 10) {
            dump(["paises" => $this->paises]);
        }
        // Envía el formulario (simplemente actualiza el componente en este ejemplo)
        $this->dispatch("select2", "refresh");
    }

    #[On("seleccionActualizada")]
    public function seleccionActualizada($array)
    {
        $this->seleccionadas = $array;
    }
}
