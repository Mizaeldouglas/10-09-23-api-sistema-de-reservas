<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'telefone',
        'email',
        'numero_quartos',
        'tipo_quarto',
        'numero_pessoas',
        'quantidade_camas',
        'observacoes',
    ];


    public function reserva()
    {
        return $this->hasMany(Reserva::class);
    }
}
