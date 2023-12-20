<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
    use HasFactory;


    protected $fillable = [
        'preco_total',
        'produto_id',
        'user_id',
    ];

    public function produtos()
    {
        return $this->belongsToMany(Produto::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
