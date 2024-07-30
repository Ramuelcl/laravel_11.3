<div class="p-3 bg-white rounded-md shadow-md">
  <div class="flex items-center justify-between mb-2">
    <h3 class="text-lg font-semibold">{{ $titulo ?? "Tarjeta" }}</h3>
    <button class="text-gray-500 hover:text-gray-700"
            id="toggle-tarjeta">
      <div class="w-4 h-4"
           id="toggle-icon">
        <x-forms.tw_icons name="{{ $icono }}"
                          typeIcon="outline" />
      </div>
    </button>
  </div>
  <div class="transition duration-300 ease-in-out"
       class="hidden"
       id="tarjeta-content">
    {{ $slot }}
  </div>
</div>
<script>
  document.getElementById('toggle-tarjeta').addEventListener('click', function() {
    const content = document.getElementById('tarjeta-content');
    content.classList.toggle('hidden');

    // Rotate the icon
    const icon = document.getElementById('toggle-icon');
    icon.classList.toggle('rotate-180');
  });
</script>
