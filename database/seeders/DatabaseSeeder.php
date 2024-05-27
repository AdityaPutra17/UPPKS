<?php

namespace Database\Seeders;

use App\Models\Kategori;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => "admin",
            'email' => "admin@uppks.com",
            'password' => Hash::make('admin123')
        ]);
        Kategori::create([
            'name' => "makanan"
        ]);
        Kategori::create([
            'name' => "minuman"
        ]);
        Kategori::create([
            'name' => "barang"
        ]);
        Kategori::create([
            'name' => "jasa"
        ]);
    }
}
