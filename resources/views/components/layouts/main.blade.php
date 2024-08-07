<!-- resources/views/layouts/main.blade.php -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  {{-- @dd($titulo) --}}
  <title>{{ config("app.name", 'Guz@net') }} @isset($titulo)
    ' - '. $titulo
    @endisset</title>

  <!-- Fonts -->
  <link href="https://fonts.bunny.net" rel="preconnect">
  <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

  <!-- Scripts -->
  @vite(['resources/css/app.css', 'resources/js/app.js'])

  <!-- Styles -->
  @livewireStyles
</head>

<body class="font-sans antialiased">
  <div class="min-h-screen bg-gray-100">
    {{-- @dd("paro") --}}
    <!-- Page Heading -->
    <header class="bg-white shadow">
      <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <!-- Navigation Menu -->
        {{-- @livewire('navigation-menu') --}}
        @include("navigation-menu")
      </div>
    </header>

    <!-- Page Content -->
    <main class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        {{ $slot }}
      </div>
    </main>
  </div>

  @stack('modals')

  @livewireScripts
</body>

</html>