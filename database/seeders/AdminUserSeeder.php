<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        User::create([
            'name' => 'Admin Portofolio',
            'email' => 'admin@portofolio.com',
            'password' => Hash::make('Rashid260718'), // Ganti dengan password yang lebih kuat
            'email_verified_at' => now(),
        ]);
        
        // Tambahkan user lain jika diperlukan
        User::create([
            'name' => 'Developer',
            'email' => 'dev@portofolio.com',
            'password' => Hash::make('Rashid260718'),
            'email_verified_at' => now(),
        ]);
    }
}
