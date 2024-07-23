<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\{App, Artisan, File, Route};

class principalController extends Controller
{
    public function iconos($typeIcon = "solid")
    {
        $directory = public_path("app/icons/$typeIcon"); // Asegúrate de que esta ruta es correcta
        $icons = scandir($directory);
        $svgIcons = [];

        foreach ($icons as $icon) {
            if (pathinfo($icon, PATHINFO_EXTENSION) === "php") {
                $icon = str_replace(".blade.php", "", $icon);
                $svgIcons[] = $icon;
            }
        }

        return view("principal.iconos", ["svgIcons" => $svgIcons, "typeIcon" => $typeIcon]);
    }
}
