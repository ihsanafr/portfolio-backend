<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            AdminUserSeeder::class,
            // Tambahkan seeder lain jika ada
            // TechstackSeeder::class,
            // ProjectSeeder::class,
            // ExperienceSeeder::class,
            // CertificateSeeder::class,
        ]);
    }
}