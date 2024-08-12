<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            PendaftaranSeeder::class,
            // Tambahkan seeder lain jika ada
        ]);
    }
}
