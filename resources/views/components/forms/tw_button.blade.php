{{-- resources\views\components\tw_button.blade.php --}}
@props([
    "name" => "button",
    "type" => "button",
    "color" => "blue",
    "class" => "",
    "classFix" => "inline-flex items-center justify-center p-2 focus:outline-none focus:ring ",
    "icon" => null,
    "iconType" => "outline", // Default icon type, outline or solid
    "ejecuta" => "",
])

@php
  $colors = [
      "blue" =>
          "font-medium bg-blue-600 text-blue-100 hover:bg-blue-400 active:bg-blue-400 focus:ring-blue-700 disabled:bg-blue-300 disabled:cursor-not-allowed",
      "red" =>
          "font-medium bg-red-600 text-red-100 hover:bg-red-400 active:bg-red-400 focus:ring-red-700 disabled:bg-red-300 disabled:cursor-not-allowed",
      "gray" =>
          "font-medium bg-gray-600 text-gray-100 hover:bg-gray-400 active:bg-gray-400 focus:ring-gray-700 disabled:bg-gray-300 disabled:cursor-not-allowed",
      "green" =>
          "font-medium bg-green-600 text-green-100 hover:bg-green-400 active:bg-green-400 focus:ring-green-700 disabled:bg-green-300 disabled:cursor-not-allowed",
      "yellow" =>
          "font-medium bg-yellow-600 text-yellow-100 hover:bg-yellow-400 active:bg-yellow-400 focus:ring-yellow-700 disabled:bg-yellow-300 disabled:cursor-not-allowed",
      "violet" =>
          "font-medium bg-violet-600 text-violet-100 hover:bg-violet-400 active:bg-violet-400 focus:ring-violet-700 disabled:bg-violet-300 disabled:cursor-not-allowed",
      "black" =>
          "font-medium bg-black-600 text-black-100 hover:bg-black-400 active:bg-black-400 focus:ring-black-700 disabled:bg-black-300 disabled:cursor-not-allowed",
      "white" =>
          "font-medium bg-gray-50 text-gray-800 hover:bg-gray-50 active:bg-gray-50 focus:ring-gray-50 disabled:bg-gray-50 disabled:cursor-not-allowed",
      "transparent" =>
          "font-medium bg-transparent text-gray-800 hover:bg-gray-200 active:bg-gray-300 focus:ring-gray-500 disabled:bg-transparent disabled:cursor-not-allowed",
  ];
  $defaultColor = "gray"; // Definir un color por defecto

  // Comprobar si el color existe en el arreglo, si no, usar el color por defecto
  $colorClass = array_key_exists($color, $colors) ? $colors[$color] : $colors[$defaultColor];

  $buttonClass = $classFix . $colorClass . " " . $class;
@endphp

<button class="{{ $buttonClass }} {{ $slot->isEmpty() ? "min-w-1 rounded-full" : "min-w-20 max-h-10 mt-1 rounded-md" }}"
        id="{{ $name }}"
        name="{{ $name }}"
        type="{{ $type }}"
        @if ($ejecuta) wire:click="{{ $ejecuta }}" @endif>
  @if ($icon)
    <x-forms.tw_icons class="{{ $slot->isEmpty() ? "m-auto h-5 w-5" : "mr-2 h-5 w-5" }}"
                      :name="$icon"
                      :type="$iconType" />
  @endif
  {{ $slot }}
</button>
