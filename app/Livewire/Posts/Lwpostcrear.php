<?php
// app/livewire/posts/lwpostcrear.php
namespace App\Livewire\Posts;

use App\Models\backend\Categoria;
use App\Models\backend\Marca;
use App\Models\post\Post;
// use Illuminate\Support\Facades\Log;
// use App\Models\User;
use Livewire\Component;

class Lwpostcrear extends Component
{
    public $categorias;
    public $marcas;
    public $posts;

    public function mount()
    {
        $this->categorias = Categoria::all();
        $this->marcas = Marca::all();
        // $user = User::first();
        // $user->whithFullData();
        $this->posts = Post::all();
    }

    public function render()
    {
        // Log::info("mostrando ejemplo");
        return view('livewire.posts.lwpostcrear');
    }
}
