<!-- resources/views/admin/dashboard.blade.php -->
@props(['user'])
<x-layouts.user user="{{ $user }}">
  <div class="p-4 bg-white rounded-md shadow-md">
    <h1>Welcome to Guz@net!.....</h1>
    <p>This is the content of the user {{ $user->name }}.</p>
  </div>
  </x-layout.user>