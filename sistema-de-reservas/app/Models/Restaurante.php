<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurante extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'telefone',
        'email',
        'numero_cadeiras',
        'numero_mesas',
        'numero_pessoas',
        'observacoes',
    ];

    public function reserva()
    {
        return $this->hasMany(Reserva::class);
    }
}
