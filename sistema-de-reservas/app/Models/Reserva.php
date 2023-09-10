<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'telefone',
        'email',
        'data_inicio',
        'data_fim',
        'numero_cadeiras',
        'numero_mesas',
        'numero_quartos',
        'numero_pessoas',
        'tipo_quarto',
        'observacoes',
        'status'
    ];

    public function hotel()
    {
        return $this->belongsTo(Hotel::class);
    }

    public function restaurante()
    {
        return $this->belongsTo(Restaurante::class);
    }

    public function salaDeBeleza()
    {
        return $this->belongsTo(SalaDeBeleza::class);
    }
}
