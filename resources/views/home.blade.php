<!-- resources/views/home.blade.php -->
@props(['titulo'])
<x-layouts.main titulo="{{ $titulo }}">
  <div class="p-4 bg-white rounded-md shadow-md">
    <h1>Welcome to Guz@net!.....</h1>
    <p>This is the content of the home page.</p>
  </div>
  </x-layout.main>