<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Anggota;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Anggota::create([
            'nama' => 'sopian',
            'email' => 'sopian@gmail.com',
        ]);
        Anggota::create([
            'nama' => 'aji',
            'email' => 'aji@gmail.com',
        ]);
    }
}
