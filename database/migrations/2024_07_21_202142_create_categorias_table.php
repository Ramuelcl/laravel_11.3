<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public $table = "categorias";

    public function up(): void
    {
        Schema::create($this->table, function (Blueprint $table) {
            $table->id();
            $table->string("nombre", 32)->unique();
            $table->string("slug", 32);
            // $table->foreignId("categoria_id")->contrained()->onDelete("cascade");
            $table->timestamps();
        });

        // Schema::create("categorizables", function (Blueprint $table) {
        //     $table->id();
        //     $table->foreignId("categoria_id")->constrained()->onDelete("cascade");
        //     $table->morphs("categorizable");
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("categorizables");
        Schema::dropIfExists($this->table);
    }
};
