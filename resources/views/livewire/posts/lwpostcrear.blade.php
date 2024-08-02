{{-- resources/views/livewire/posts/lwpostcrear.blade.php --}}
@extends("layouts.app")
@section('content')
<div>
    <div class="p-6 bg-white rounded-md shadow-lg">
        <form>
            <div class="mb-4">
                <x-label>Título</x-label>
                <x-input class="w-full" />
            </div>
            <div class="mb-4">
                <x-label>Contenido</x-label>
                <x-input-textarea class="w-full">

                </x-input-textarea>
            </div>

            <div class="mb-4">
                <x-label>Categoria</x-label>
                <select>
                    @foreach ($categorias as $categoria)
                        <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-4">
                <x-label>Categoría</x-label>
                <x-input-select :opciones="$categorias"></x-input-select>
            </div>
        </form>
    </div>
</div>
  
@endsection