<div class="m-2">
  {{ $title }}<br>
  {{ $name }} : {{ $email }}<br>
  <x-input type="text"
           wire:model="name" />
  <x-button wire:click='fncSave'>
    Save
  </x-button>
</div>
