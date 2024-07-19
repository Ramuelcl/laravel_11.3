<div class="m-2">
  Be like water.<br>
  {{ $name }} : {{ $email }}<br>
  <x-input type="text"
           wire:model="name" />
  <x-button color="green"
            wire:click="">Save</x-button>
</div>
