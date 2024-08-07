<!-- resources/views/layouts/livewire.blade.php -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

  <!-- Scripts -->
  @vite(['resources/css/app.css', 'resources/js/app.js'])

  <!-- Styles -->
  @livewireStyles
</head>

<body>
  <header>
    Encabezado común para Livewire
  </header>

  <main>
    <div class="container mx-auto">
      {{ $slot }}
    </div>
  </main>

  <footer>
    Pie de página común para Livewire
  </footer>

  @livewireScripts
</body>

</html>