<?php

namespace App\Livewire\Posts;

use Livewire\Component;
use App\Models\User;
use App\Models\backend\Post;

class Lwlistaposts extends Component
{
    public $title, $name, $email;

    public function mount(User $user)
    {
        // $this->name = $user->name;
        // $this->email = $user->email;
        $this->fill($user->only(["name", "email"]));
    }

    public function render()
    {
        return view("livewire.posts.lwlistaposts");
    }
}
