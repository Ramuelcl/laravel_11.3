<?php

namespace App\Models\post;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use App\Models\post\Post;
use App\Models\backend\Categoria;
use App\Models\backend\Marca;
use Illuminate\Support\Str; // Import the Str class

class post extends Model
{
    use HasFactory;

    protected $fillable = ["titulo", "contenido", "estado", "is_active", "image_path", "categoria_id"];
    protected $hidden = ["slug"];

    // Accessor for the slug attribute
    public function getSlugAttribute()
    {
        return Str::slug($this->nombre); // Generate the slug
    }

    // relacion uno a muchos inversa
    public function categorias()
    {
        return $this->belongsTo(Categoria::class);
    }

    // relacion muchos a muchos
    public function marcas()
    {
        return $this->belongsToMany(Marca::class);
    }
}
