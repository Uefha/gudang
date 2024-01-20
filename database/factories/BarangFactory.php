<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Barang>
 */
class BarangFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "nama_barang" => fake()->company(),
            "gambar"=> fake()->imageUrl(200,200),
            'stok'=> 20,
            'kondisi'=> fake()->randomElement(['baru','rusak'])

        ];
    }
}
