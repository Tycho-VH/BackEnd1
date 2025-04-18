<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'naam' => 'Friet met',
                'beschrijving' => 'Portie friet met mayonaise.',
                'prijs' => 2.50,
            ],
            [
                'naam' => 'Frikandel',
                'beschrijving' => 'Gehaktstaaf, typisch Nederlandse snack.',
                'prijs' => 1.80,
            ],
            [
                'naam' => 'Kroket',
                'beschrijving' => 'Gevulde vleeskroket met knapperige korst.',
                'prijs' => 1.90,
            ],
            [
                'naam' => 'Kaassoufflé',
                'beschrijving' => 'Vegetarische snack gevuld met gesmolten kaas.',
                'prijs' => 1.70,
            ],
            [
                'naam' => 'Bamischijf',
                'beschrijving' => 'Gefrituurde schijf gevuld met bami.',
                'prijs' => 2.00,
            ],
            [
                'naam' => 'Hamburger speciaal',
                'beschrijving' => 'Hamburger met gebakken ui, curry en mayo.',
                'prijs' => 3.50,
            ],
            [
                'naam' => 'Cola',
                'beschrijving' => 'Koude blikje Coca-Cola (330ml).',
                'prijs' => 1.80,
            ],
            [
                'naam' => 'Milkshake aardbei',
                'beschrijving' => 'Verse milkshake met aardbeiensmaak.',
                'prijs' => 2.75,
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
