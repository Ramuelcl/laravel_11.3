<x-app-layout>
  <x-slot name="header">
    <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
      {{ __("Dashboard") }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
      <div class="overflow-hidden bg-white shadow-xl dark:bg-gray-800 sm:rounded-lg">

        {{-- @livewire("forms.paises") --}}
        <x-tarjeta titulo="Mi Tarjeta">
          {{-- @livewire("contador") --}}
          @livewire("posts.lwlistaposts", [
              "title" => "hola mundo desde la vista",
              "user" => 1,
          ])
        </x-tarjeta>
      </div>
    </div>
  </div>
</x-app-layout>
