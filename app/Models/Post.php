<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory;


    protected $fillable = ['titulo', 'descripcion', 'imagen', 'categoria', 'fecha_creacion'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function scopeCategoria($query, $categoria)
    {
        return $query->where('categoria', $categoria);
    }

}
