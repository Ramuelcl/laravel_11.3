<div class="w-40 p-2">
  <div class="flex items-center mb-1">
    <form class="flex items-center justify-between"
          wire:submit="addOption">
      <x-input class="px-2 py-2 border border-gray-300 rounded-md max-w-24"
               type="text"
               wire:model="newOption"
               placeholder="new..."
               wire:keydown.enter="addOption" />
      <x-button class="px-4 py-2 ml-1 text-white bg-blue-500 rounded-md"
                wire:click="addOption">+</x-button>
      {{--
      actualizar desde un componente padre
      <x-button class="px-4 py-2 ml-1 text-white bg-blue-500 rounded-md"
                wire:click="$parent.Select2">1</x-button>
      o cambiar el estado de una propiedad
      <x-button wire:click="$set('show', false)">2</x-button>
      cambia entre true y false
      <x-button wire:click="$togle('show')">3</x-button>
      --}}
    </form>
  </div>

  <div
       class="w-full p-1 m-0 overflow-auto bg-white border border-gray-300 rounded-md shadow-md min-h-32 border-1 max-h-32 shadow-blue-500">
    <div class="scrollbar-w-2 scrollbar-track-blue-100 scrollbar-thumb-blue-400">
      @foreach ($opciones as $opcion)
        {{-- {{ $claveUnica }}-{{ $opcion["id"] }} --}}
        <div class="flex items-center justify-between p-1"
             wire:key="{{ $claveUnica }}-{{ $opcion["id"] }}">
          <label class="flex items-center">
            <input class="w-3 h-3 mr-2 text-blue-500 bg-blue-500 rounded-sm"
                   type="checkbox"
                   value="{{ $opcion["id"] }}"
                   wire:click="actualizarSeleccion('{{ $opcion["id"] }}')"
                   {{ in_array($opcion["id"], $seleccionadas) ? "checked" : "" }}>
            <span class="overflow-auto whitespace-nowrap">
              @if ($vIndex)
                {{ $opcion["id"] }}:
              @endif
              {{ $opcion["name"] }}
            </span>
          </label>
          @if ($eliminar)
            <button class="px-1 bg-red-400 rounded-full"
                    type="button"
                    wire:click="delete({{ $opcion["id"] }})">x</button>
          @endif
        </div>
      @endforeach
    </div>
  </div>

  {{-- <script>
    document.addEventListener('livewire:load', function() {
      Livewire.on('opcionesActualizadas', event => {
        document.getElementById('opciones-container').innerHTML = '<pre>' + JSON.stringify(event.opciones, null,
          2) + '</pre>';
      });

      Livewire.on('seleccionActualizada', event => {
        document.getElementById('seleccionadas-container').innerHTML = '<pre>' + JSON.stringify(event
          .seleccionadas, null, 2) + '</pre>';
      });
    });
  </script> --}}
</div>
