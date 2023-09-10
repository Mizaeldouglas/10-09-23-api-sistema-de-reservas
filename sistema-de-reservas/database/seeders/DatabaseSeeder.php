<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\Hotelseeder;
use Database\Seeders\ReservaSeeder;
use Database\Seeders\RestauranteSeeder;
use Database\Seeders\SalaoDeBelezaSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call([
            Hotelseeder::class,
            RestauranteSeeder::class,
            SalaoDeBelezaSeeder::class,
            ReservaSeeder::class,
        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
