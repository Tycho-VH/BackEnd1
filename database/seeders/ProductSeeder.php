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
                'name' => 'Friet met',
                'description' => 'Portie friet met mayonaise.',
                'price' => 2.50,
            ],
            [
                'name' => 'Frikandel',
                'description' => 'Gehaktstaaf, typisch Nederlandse snack.',
                'price' => 1.80,
            ],
            [
                'name' => 'Kroket',
                'description' => 'Gevulde vleeskroket met knapperige korst.',
                'price' => 1.90,
            ],
            [
                'name' => 'Kaassoufflé',
                'description' => 'Vegetarische snack gevuld met gesmolten kaas.',
                'price' => 1.70,
            ],
            [
                'name' => 'Bamischijf',
                'description' => 'Gefrituurde schijf gevuld met bami.',
                'price' => 2.00,
            ],
            [
                'name' => 'Hamburger speciaal',
                'description' => 'Hamburger met gebakken ui, curry en mayo.',
                'price' => 3.50,
            ],
            [
                'name' => 'Cola',
                'description' => 'Koude blikje Coca-Cola (330ml).',
                'price' => 1.80,
            ],
            [
                'name' => 'Milkshake aardbei',
                'description' => 'Verse milkshake met aardbeiensmaak.',
                'price' => 2.75,
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
