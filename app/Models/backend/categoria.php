<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\backend\Categorizable;
use App\Models\post\Post;
use Illuminate\Support\Str; // Import the Str class

class categoria extends Model
{
    use HasFactory;

    protected $fillable = ["nombre"];
    protected $hidden = ["slug"];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    // Define the relationship with other models
    public function categorizables()
    {
        return $this->morphMany(Categorizable::class, "categorizable");
    }

    // Accessor for the slug attribute
    public function getSlugAttribute()
    {
        return Str::slug($this->nombre); // Generate the slug
    }
}
