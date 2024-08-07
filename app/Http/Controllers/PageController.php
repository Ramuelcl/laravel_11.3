<?php
// app/Http/Controllers/PageController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
  public function home()
  {
    $user = Auth::user();
    $layout = 'main'; // Layout por defecto
    if ($user && $user->isAdmin()) {
      $layout = 'admin';
    } elseif ($user) {
      $layout = 'user';
    }
    return view('home', ['titulo' => $layout]);
  }

  public function dashboard()
  {
    // Obtiene el usuario autenticado
    $user = Auth::user();

    // Verifica si el usuario tiene el rol 'admin'
    if ($user->hasRole('admin')) {
      // Si es administrador, retorna la vista 'admin.dashboard'
      return view('admin.dashboard', compact('user'));
    }

    // Si no es administrador, retorna la vista 'dashboard' con el usuario
    return view('dashboard', compact('user'));
  }

  public function tareas()
  {
    // Obtiene el usuario autenticado
    $user = Auth::user();

    // Retorna la vista 'livewire.tareas.lwtareas' con el usuario
    return view('livewire.tareas.lwtareas', ['user' => $user]);
  }
}
