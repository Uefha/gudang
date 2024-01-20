<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
         \App\Models\Barang::factory(10)->create();
        \App\Models\User::create([
            'username' => 'fadil',
            'password' => Hash::make("12345678"),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ]);
    }
}
