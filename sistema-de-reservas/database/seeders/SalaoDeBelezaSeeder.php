<?php

namespace Database\Seeders;

use App\Models\SalaoDeBeleza;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SalaoDeBelezaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SalaoDeBeleza::factory()->count(10)->create();
    }
}