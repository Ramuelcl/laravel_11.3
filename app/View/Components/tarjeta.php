<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class tarjeta extends Component
{
    public $titulo,
        $icono = "chevron-up";

    public function __construct($titulo = "Tarjeta")
    {
        $this->titulo = $titulo;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view("components.tarjeta");
    }
}
