<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Avaliacao extends Model
{
    protected $table = 'avaliacao';
    use HasFactory;

     protected $fillable = [
        'avaliacaoAparencia',
        'avaliacaoSabor',
        'avaliacaoTextura',
        'avaliacaoGeral',
        'observacao',
        'memoria_id',
          
    ];

}
