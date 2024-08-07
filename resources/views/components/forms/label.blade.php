@props(['label', 'for' => ''])

<label for="{{ $for }}"
       {{ $attributes->merge(['class' => 'block text-base font-semibold text-blue-500']) }}>
  {{ $label ?? $slot }}
</label>
