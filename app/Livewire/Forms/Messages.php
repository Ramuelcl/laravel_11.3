<?php
// app\livewire\forms\messages.php
// {{-- resources\views\livewire\forms\messages.blade.php --}}
namespace App\Livewire\Forms;

use Livewire\Component;

class Messages extends Component
{
    public $type;
    public $message;
    public $position = "top"; // 'top', 'top-right', 'bottom'
    public $show = false;
    public $countdown = 0;

    protected $listeners = ["flashMessage" => "setMessage", "closeMessage" => "closeMessage"];

    public function setMessage($type, $message, $position = "top", $duration = 5000)
    {
        $this->type = $type;
        $this->message = $message;
        $this->position = $position;
        $this->countdown = $duration / 1000; // Convert milliseconds to seconds
        $this->show = true;

        $this->dispatchBrowserEvent("flash-message", ["duration" => $duration]);
    }

    public function closeMessage()
    {
        $this->show = false;
    }

    public function render()
    {
        return view("livewire.forms.messages");
    }
}
