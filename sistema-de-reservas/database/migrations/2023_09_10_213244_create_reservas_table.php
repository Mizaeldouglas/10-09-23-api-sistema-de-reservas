<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('reservas', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('telefone');
            $table->string('email');
            $table->date('data_inicio');
            $table->date('data_fim');
            $table->string('numero_cadeiras')->nullable();
            $table->string('numero_mesas')->nullable();
            $table->string('numero_quartos')->nullable();
            $table->string('numero_pessoas')->nullable();
            $table->string('tipo_quarto')->nullable();
            $table->longText('observacoes')->nullable();
            $table->timestamps();
            $table->enum('status', ['confirmada', 'pendente', 'cancelada']);


            $table->foreignId('hotel_id')->constrained('hotels');
            $table->foreignId('restaurante_id')->constrained('restaurantes');
            $table->foreignId('salao_de_beleza_id')->constrained('salao_de_belezas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservas');
    }
};
