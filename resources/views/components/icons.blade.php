<!-- resources/views/components/icons.blade.php -->
@props(['name', 'typeIcon' => null, 'width' => '24', 'height' => '24'])

@php
if ($typeIcon) {
$iconPath = public_path("app\\icons\\{$typeIcon}\\{$name}.blade.php");
} else {
$iconPath = public_path("app\\icons\\{$name}.blade.php");
}
@endphp

@if (file_exists($iconPath))
{{-- Leer y mostrar el contenido del icono --}}
<div {{ $attributes->merge(['class' => 'h-5 w-5']) }}>
  {!! file_get_contents($iconPath) !!}
</div>
@else
{{-- Si el icono no se encuentra, mostrar un mensaje --}}
<span class="text-pretty font-extralight text-red-900">Icono no está: {{ $name }}</span>
@endif