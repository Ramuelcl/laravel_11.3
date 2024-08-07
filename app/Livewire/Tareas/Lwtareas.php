<?php
// app/livewire/Tareas/Lwtareas.php
// resources/views/livewire/tareas/lwtareas.blade.php

namespace App\Livewire\Tareas;

use App\Models\tareas\Tarea;
use Livewire\Component;

class Lwtareas extends Component
{
  public $tareas;

  public function mount()
  {
    $this->tareas = Tarea::all();
    dd($this->tareas);
  }

  public function render()
  {
    return view('livewire.tareas.lwtareas'); // No need to pass data here
  }
}
