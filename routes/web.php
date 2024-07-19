<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Posts\lwlistaposts;

Route::get("/", function () {
    return view("welcome");
});

Route::middleware(["auth:sanctum", config("jetstream.auth_session"), "verified"])->group(function () {
    Route::get("/dashboard", function () {
        return view("dashboard");
    })->name("dashboard");
});

// Route::get("/dashboard", lwlistaposts::class)->name("dashboard");
