<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str; // Import the Str class

return new class extends Migration {
    public $table = "posts";
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create($this->table, function (Blueprint $table) {
            $table->id();
            $table->string("titulo", 64);
            $table->string("slug", 64)->nullable()->default(null);
            $table->text("contenido")->nullable()->default(null);
            $table->tinyInteger("estado", false, 1)->nullable()->default(null); // 0=sin publicar, 1=publicado, 2=editando, 3=en revision
            $table->boolean("is_active")->nullable()->default(true);
            $table->string("image_path")->nullable()->default("null");
            //
            $table->foreignId("categoria_id")->constrained()->onDelete("cascade");
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
