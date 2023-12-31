<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'preco',
        'categoria_id',
        'user_id',
    ];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }

    public function notas() {
        return $this->belongsToMany(Nota::class);
    }
}
