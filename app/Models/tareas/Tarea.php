<?php

namespace App\Models\tareas;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarea extends Model
{
  use HasFactory;

  protected $fillable = [
    'user_id', // Cambia 'usuario' a 'user_id'
    'tarea',
    'descripcion',
    'estado',
    'fecha_creacion',
    'fecha_inicio',
    'fecha_termino',
  ];

  public function user()
  {
    return $this->belongsTo(User::class); // Define la relación belongsTo

    // Obtener el usuario asociado a una tarea
    // $tarea = Tarea::find(1);
    // $usuario = $tarea->user; // Obtiene el objeto User asociado

    // // Obtener el nombre del usuario
    // echo $usuario->name; 

  }
}
