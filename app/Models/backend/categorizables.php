<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\backend\Categoria;

class Categorizable extends Model
{
    use HasFactory;

    protected $fillable = ["categoria_id", "categorizable_type", "categorizable_id"];

    // Define the relationship with the Category model
    public function category()
    {
        return $this->belongsTo(Categoria::class);
    }
}
