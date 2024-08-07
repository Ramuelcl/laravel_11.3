<?php

// config/guzanet.php
return [
  // General Application Settings
  "clave" => "valor",
  "appEmpresa" => "Guzanet",
  "appLogo" => "app/logo/guzanet.png", //public\app\logo
  "appNombre" => "Ramuel Gonzalez",
  "appMail" => "Ramuelcl@gmail.com",
  "appLargoClave" => 3,
  "appFechaDesde" => "07/08/2024",

  // Language and Localization
  "idioma" => "es-CL",

  // Icon Paths
  "icon_paths" => [
    "raiz" => "app/icons", //public\app\icons
    "solid" => "app/icons/solid", //public\app\icons
    "outline" => "app/icons/outline", //public\app\icons
  ],

  // Themes and Styling
  "appThemes" => [
    "colores" => ["azul", "verde", "amarillo", "rojo"],
    "fondo" => "images/app/fondo.png",
    "appTheme" => [
      "default" => "layout01",
      "layout01",
      "layout02",
    ],
  ],

  // Database Settings (if needed)
  'database' => [
    'host' => env('DB_HOST'),
    'database' => env('DB_DATABASE'),
    'username' => env('DB_USERNAME'),
    'password' => env('DB_PASSWORD'),
  ],

  // Other System Settings
  // ...
];

/**
 *
// Acceder a un valor específico
$valor = config('nombre-del-archivo.clave');

// Acceder a todos los valores como un array asociativo
$configuracion = config('nombre-del-archivo');

// Obtener el valor actual de la configuración
$valorActual = config('nombre-del-archivo.clave');

// Modificar el valor en tiempo de ejecución
config(['nombre-del-archivo.clave' => 'nuevo_valor']);
///////////////////////////////////////////////////
// Example: Get the application name
$appName = config('guzanet.appEmpresa');

// Example: Get the default theme
$defaultTheme = config('guzanet.appThemes.appTheme.default');

// Example: Get the database host
$dbHost = config('guzanet.database.host');

// In a Controller or View
use Illuminate\Support\Facades\Config;

class MyController extends Controller
{
    public function index()
    {
        // Get the application name
        $appName = Config::get('guzanet.appEmpresa');

        // ... other logic using configuration values
    }
}

 */
