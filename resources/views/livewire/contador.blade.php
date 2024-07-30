<div>
  <button class="px-4 py-2 m-2 text-sm text-center text-white bg-indigo-600 rounded-md hover:bg-indigo-500"
          type="button"
          wire:click="fncContador(-1)">-</button>

  {{ $contador }} <button
          class="px-4 py-2 m-2 text-sm text-center text-white bg-indigo-600 rounded-md hover:bg-indigo-500"
          type="button"
          wire:click="fncContador(+1)">+</button>
</div>
