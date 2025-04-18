<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Maak een admin user aan met de role 'admin'
        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('123456789'),
            'role' => 'admin', // Zorg ervoor dat je een kolom 'role' hebt in je gebruikersdatabase
        ]);

        // Maak een klant user aan met de role 'customer'
        User::factory()->create([
            'name' => 'customer',
            'email' => 'klant@gmail.com',
            'password' => Hash::make('12345678'), // Sterk wachtwoord gebruiken
            'role' => 'customer', // Rol voor klant
        ]);

        // Voer de ProductSeeder uit
        $this->call([
            ProductSeeder::class,
        ]);
    }
}
