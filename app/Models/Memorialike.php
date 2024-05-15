<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Memorialike extends Model
{
    protected $table = 'memoria_like';
    use HasFactory;

    protected $fillable = [
        'compartilhamentos_id',
        'created_at',
        'updated_at',
        'user_id'
    ];

    public function compartilhamento()
    {
        return $this->belongsTo(Compartilhamentos::class, 'compartilhamento_id');
    }
}
