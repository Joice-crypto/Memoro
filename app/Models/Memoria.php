<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Memoria extends Model
{
    protected $table = 'memoria';
    use HasFactory;

    protected $fillable = [
        'descricao',
        'titulo',
        'imagem',
        'alimento_id',


    ];

    public function avaliacao()
    {
        return $this->hasMany(Avaliacao::class, 'memoria_id', 'id');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class, 'memoria_id', 'id');
    }
}
