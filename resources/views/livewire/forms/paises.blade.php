<div class="container">
  {{-- <form class="flex justify-between w-40 col-span-2"
        wire:submit="submitForm">
    <input class="mr-2 rounded-lg w-36"
           id="pais"
           wire:model="pais"
           placeholder="Pais"
           @keydown.enter="submitForm" />
    <button class="px-2 bg-blue-400 border-blue-800 rounded-lg"
            type="submit">+</button>

  </form>
  <div class="container flex w-48 h-auto p-1 overflow-scroll border-2 max-h-32">
    @foreach ($paises as $pais)
      {{ $pais }}
    @endforeach
  </div> --}}
  <div class="mt-4">
    <h2 class="text-xl font-semibold">Opciones</h2>
    <pre class="p-2 bg-gray-100 rounded-md">{{ json_encode($paises) }}</pre>
  </div>

  <div class="mt-4">
    <h2 class="text-xl font-semibold">Seleccionadas</h2>
    <pre class="p-2 bg-gray-100 rounded-md">{{ json_encode($seleccionadas) }}</pre>
  </div>
  <div class="mt-1">
    @livewire("forms.select2", [$paises, $seleccionadas])
    <br>
    @livewire("forms.select2", [
        "opciones" => [["id" => 1, "name" => "Option 1"], ["id" => 2, "name" => "Option 2"], ["id" => 3, "name" => "Option 3"]],
        "seleccionadas" => [],
        "eliminar" => true,
        "multiple" => true,
    ])
  </div>
</div>
