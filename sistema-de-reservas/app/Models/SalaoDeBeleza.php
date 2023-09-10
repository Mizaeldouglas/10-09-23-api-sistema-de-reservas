<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalaoDeBeleza extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'telefone',
        'email',
        'data',
        'hora',
        'observacoes',
    ];

    public function reserva()
    {
        return $this->hasMany(Reserva::class);
    }
}
