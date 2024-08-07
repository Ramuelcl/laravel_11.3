<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  public $table = "tareas";
  /**
   * Run the migrations.
   */
  public function up(): void
  {

    Schema::create($this->table, function (Blueprint $table) {
      $table->id();
      $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Agrega la columna user_id
      $table->string('tarea');
      $table->text('descripcion');
      $table->tinyInteger('estado')->default(1); // 1=activa, 2=por revisar, 3=terminada
      $table->timestamp('fecha_creacion')->useCurrent();
      $table->timestamp('fecha_inicio')->nullable();
      $table->timestamp('fecha_termino')->nullable();
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists($this->table);
  }
};
