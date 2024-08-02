@props(['disabled' => false, 'idName' => 'select', 'opciones' => []])
<div>
    <!-- resources/views/components/input-select.blade.php -->
    <select
        class="block w-full px-3 py-2 mt-1 placeholder-gray-400 transition duration-150 ease-in-out border border-gray-300 rounded-md shadow-sm appearance-none focus:outline-none focus:ring-blue focus:border-blue-300 sm:text-sm sm:leading-5">
        @foreach ($opciones as $id => $name)
            @dd($name)
            <option value="{{ $id }}">{{ $name }}</option>
        @endforeach
    </select>

    <x-input-error for="{{ $idName }}"></x-input-error>
