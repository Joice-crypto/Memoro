<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compartilhamentos extends Model
{
    use HasFactory;

    protected $fillable = [
        'memoria_id',
        'usuario_id'
    ];

    public function memoria()
    {
        return $this->belongsTo(Memoria::class, 'memoria_id');
    }

    public function comments()
    {
        return $this->memoria->comments();
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'usuario_id');
    }
}
