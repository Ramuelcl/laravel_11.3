@props(['name' => ''])
@error($name)
  <span class="mt-2 text-xs text-red-600">{{ $message }}</span>
@enderror
