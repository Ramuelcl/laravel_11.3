<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Posts\lwlistaposts;
use App\Http\Controllers\principalController;

Route::get("/", function () {
    return view("welcome");
});

Route::middleware(["auth:sanctum", config("jetstream.auth_session"), "verified"])->group(function () {
    Route::get("/dashboard", function () {
        return view("dashboard");
    })->name("dashboard");
});

Route::controller(principalController::class)
    ->prefix("")
    ->as("")
    ->group(function () {
        Route::get("/iconos/{typeIcon?}", "iconos")->name("iconos");
        // route::get('/testInput', 'testInput')->name('testInput');
        // route::get('/porDefinir', 'porDefinir')->name('porDefinir');
        // route::get('/acercade', 'acercade')->name('acercade');
        // route::get('/todo', 'todo')->name('todo');
        // route::get('/contacto', 'contacto')->name('contacto');
        // route::post('/contacto', 'contacto')->name('contacto.enviar');

        // route::get('/direcciones', 'direcciones')->name('direcciones');

        // Route::get('/search', Search::class)->name('search');
        // Route::get('/linkStorage', 'linkStorage')->name('linkStorage');
        // Route::get('/readStorage', 'readStorage')->name('readStorage');
    });
// Route::get("/dashboard", lwlistaposts::class)->name("dashboard");
