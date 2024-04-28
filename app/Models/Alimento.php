<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alimento extends Model
{
    protected $table = 'alimento';
    use HasFactory;

    protected $fillable = [
        'nome',
        'marca',
        'origem',
        'tipo',
        'quantidade',

    ];
}
