<?php

namespace Database\Seeders;

use App\Models\Transaction;
use Database\Factories\OrderFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class orderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        OrderFactory::factory()
            ->count(10) // Jumlah data yang ingin Anda buat
            ->create();
    }
}
