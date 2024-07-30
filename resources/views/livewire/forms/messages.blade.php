{{-- resources\views\livewire\forms\messages.blade.php
app\livewire\forms\messages.php --}}
<div class="{{ $position == "top" ? "top-0 left-1/2 transform -translate-x-1/2" : ($position == "top-right" ? "top-0 right-0" : "bottom-0 right-0") }} bg-{{ $type == "success" ? "green" : ($type == "error" ? "red" : "blue") }}-500 fixed z-50 w-full max-w-xs rounded-lg p-4 text-sm text-white shadow-lg"
     role="alert"
     x-data="{ show: @entangle("show"), countdown: @entangle("countdown") }"
     x-show="show"
     x-transition:enter="transition ease-out duration-300"
     x-transition:enter-start="transform opacity-0 scale-95"
     x-transition:enter-end="transform opacity-100 scale-100"
     x-transition:leave="transition ease-in duration-300"
     x-transition:leave-start="transform opacity-100 scale-100"
     x-transition:leave-end="transform opacity-0 scale-95"
     @keydown.window.escape="show = false">
  <div class="flex items-center">
    <span class="flex-grow">{{ $message }}</span>
    <button class="ml-2 text-white hover:text-gray-200 focus:outline-none"
            @click="show = false">
      &times;
    </button>
  </div>
  <div class="mt-2 text-xs text-gray-200"
       x-show="countdown > 0">
    <span x-text="countdown"></span> seconds remaining
  </div>
</div>

<script>
  document.addEventListener('livewire:load', () => {
    Livewire.on('flash-message', event => {
      if (event.duration) {
        setTimeout(() => {
          Livewire.emit('closeMessage');
        }, event.duration);
      }
    });

    window.addEventListener('flash-message', event => {
      if (event.detail.duration) {
        setTimeout(() => {
          Livewire.emit('closeMessage');
        }, event.detail.duration);
      }
    });

    window.addEventListener('start-countdown', event => {
      let countdown = event.detail.duration / 1000;
      const countdownElement = document.querySelector('[x-data] [x-text]');
      if (countdownElement) {
        const interval = setInterval(() => {
          countdown -= 1;
          countdownElement.textContent = countdown;
          if (countdown <= 0) {
            clearInterval(interval);
            Livewire.emit('closeMessage');
          }
        }, 1000);
      }
    });
  });
</script>
