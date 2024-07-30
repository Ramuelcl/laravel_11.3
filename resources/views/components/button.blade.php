{{-- resources/views/components/button.blade.php --}}

@props(["color" => "green", "disabled" => false, "icon" => false])

@php
  $colors = [
      "blue" =>
          "bg-blue-600 text-blue-100 border-blue-600 hover:bg-blue-100 hover:text-blue-600 active:bg-blue-700 focus:ring-blue-700 focus:bg-blue-700 disabled:bg-blue-300 dark:bg-blue-400 dark:text-blue-800 dark:border-blue-400 dark:hover:bg-blue-800 dark:hover:text-blue-400 dark:active:bg-blue-500 dark:focus:ring-blue-500 dark:disabled:bg-blue-200 disabled:cursor-not-allowed",
      "red" =>
          "bg-red-600 text-red-100 border-red-600 hover:bg-red-100 hover:text-red-600 active:bg-red-700 focus:ring-red-700 focus:bg-red-700 disabled:bg-red-300 dark:bg-red-400 dark:text-red-800 dark:border-red-400 dark:hover:bg-red-800 dark:hover:text-red-400 dark:active:bg-red-500 dark:focus:ring-red-500 dark:disabled:bg-red-200 disabled:cursor-not-allowed",
      "gray" =>
          "bg-gray-600 text-gray-100 border-gray-600 hover:bg-gray-100 hover:text-gray-600 active:bg-gray-700 focus:ring-gray-700 focus:bg-gray-700 disabled:bg-gray-300 dark:bg-gray-400 dark:text-gray-800 dark:border-gray-400 dark:hover:bg-gray-800 dark:hover:text-gray-400 dark:active:bg-gray-500 dark:focus:ring-gray-500 dark:disabled:bg-gray-200 disabled:cursor-not-allowed",
      "green" =>
          "bg-green-600 text-green-100 border-green-600 hover:bg-green-100 hover:text-green-600 active:bg-green-700 focus:ring-green-700 focus:bg-green-700 disabled:bg-green-300 dark:bg-green-400 dark:text-green-800 dark:border-green-400 dark:hover:bg-green-800 dark:hover:text-green-400 dark:active:bg-green-500 dark:focus:ring-green-500 dark:disabled:bg-green-200 disabled:cursor-not-allowed",
      "yellow" =>
          "bg-yellow-600 text-yellow-100 border-yellow-600 hover:bg-yellow-100 hover:text-yellow-600 active:bg-yellow-700 focus:ring-yellow-700 focus:bg-yellow-700 disabled:bg-yellow-300 dark:bg-yellow-400 dark:text-yellow-800 dark:border-yellow-400 dark:hover:bg-yellow-800 dark:hover:text-yellow-400 dark:active:bg-yellow-500 dark:focus:ring-yellow-500 dark:disabled:bg-yellow-200 disabled:cursor-not-allowed",
      "violet" =>
          "bg-violet-600 text-violet-100 border-violet-600 hover:bg-violet-100 hover:text-violet-600 active:bg-violet-700 focus:ring-violet-700 focus:bg-violet-700 disabled:bg-violet-300 dark:bg-violet-400 dark:text-violet-800 dark:border-violet-400 dark:hover:bg-violet-800 dark:hover:text-violet-400 dark:active:bg-violet-500 dark:focus:ring-violet-500 dark:disabled:bg-violet-200 disabled:cursor-not-allowed",
      "black" =>
          "bg-black-600 text-black-100 border-black-600 hover:bg-black-100 hover:text-black-600 active:bg-black-700 focus:ring-black-700 focus:bg-black-700 disabled:bg-black-300 dark:bg-black-400 dark:text-black-800 dark:border-black-400 dark:hover:bg-black-800 dark:hover:text-black-400 dark:active:bg-black-500 dark:focus:ring-black-500 dark:disabled:bg-black-200 disabled:cursor-not-allowed",
      "white" =>
          "bg-white-600 text-white-100 border-white-600 hover:bg-white-100 hover:text-white-600 active:bg-white-700 focus:ring-white-700 focus:bg-white-700 disabled:bg-white-300 dark:bg-white-400 dark:text-white-800 dark:border-white-400 dark:hover:bg-white-800 dark:hover:text-white-400 dark:active:bg-white-500 dark:focus:ring-white-500 dark:disabled:bg-white-200 disabled:cursor-not-allowed",
      "transparent" =>
          "bg-transparent-600 text-transparent-100 border-transparent-600 hover:bg-transparent-100 hover:text-transparent-600 active:bg-transparent-700 focus:ring-transparent-700 focus:bg-transparent-700 disabled:bg-transparent-300 dark:bg-transparent-400 dark:text-transparent-800 dark:border-transparent-400 dark:hover:bg-transparent-800 dark:hover:text-transparent-400 dark:active:bg-transparent-500 dark:focus:ring-transparent-500 dark:disabled:bg-transparent-200 disabled:cursor-not-allowed",
  ];

  // Comprobar si el color existe en el arreglo, si no, usar el color por defecto
  $colorClass = array_key_exists($color, $colors) ? $colors[$color] : $colors["blue"]; // Definir un color por defecto

@endphp

<button {{ $attributes->merge([
    "type" => "submit",
    "class" =>
        "inline-flex items-center px-4 py-2 border border-transparent rounded-md font-semibold text-xs tracking-widest transition ease-in-out duration-150 " .
        $colorClass,
]) }}
        @if ($disabled) disabled @endif>
  @if ($icon)
    <x-icons class="{{ $slot->isEmpty() ? "m-auto h-5 w-5" : "mr-2 h-5 w-5" }}"
             :name="$icon" />
  @endif
  {{ $slot }}
</button>

{{-- <button
        {{ $attributes->merge(["type" => "submit", "class" => "inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 disabled:opacity-50 transition ease-in-out duration-150"]) }}>
  {{ $slot }}
</button> --}}
