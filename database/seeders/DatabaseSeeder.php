<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        for ($i = 1; $i <= 10; $i++) {
            Product::create([
                'kode' => 'k-' . $i,
                'nama' => 'nama barang ' . $i,
                'harga' => 200 . $i,
                'is_ready' => true,
                'bestseller' => true,
                'gambar' =>  $i . '.jpg'
            ]);
        }
        for ($i = 1; $i <= 10; $i++) {
            Product::create([
                'kode' => 'k-' . $i,
                'nama' => 'nama barang ' . $i,
                'harga' => 200 . $i,
                'is_ready' => true,
                'bestseller' => false,
                'gambar' =>  $i . '.jpg'
            ]);
        }
    }
}
