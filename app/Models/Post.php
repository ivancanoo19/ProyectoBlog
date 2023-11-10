<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;


    protected $fillable = ['titulo', 'descripcion', 'imagen', 'categoria', 'fecha_creacion'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

}
