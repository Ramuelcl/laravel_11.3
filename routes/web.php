<?php
// routes/web.php

use App\Http\Controllers\PageController;

// Ruta para la página de inicio (sin autenticación)
Route::get('/', [PageController::class, 'home'])->name('home');

// Grupo de rutas que requieren autenticación
Route::middleware([
  'auth:sanctum',
  config('jetstream.auth_session'),
  'verified'
])->group(function () {
  // Ruta para el dashboard (con autenticación)
  Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');
  // Ruta para las tareas (con autenticación)
  Route::get('/tareas', [PageController::class, 'tareas'])->name('tareas');
});
