<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'role' => 'admin',
            'password' => bcrypt('12345678')
        ]);

        // $admin->assignRole('admin');

        User::create([
            'name' => 'pemilik',
            'email' => 'pemilik@gmail.com',
            'role' => 'pemilik',
            'password' => bcrypt('12345678')
        ]);

        // $pemilik->assignRole('pemilik');

        User::create([
            'name' => 'pencari',
            'email' => 'pencari@gmail.com',
            'role' => 'pencari',
            'password' => bcrypt('12345678')
        ]);

        // $pencari->assignRole('pencari');
    }
}
