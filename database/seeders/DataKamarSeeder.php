<?php

namespace Database\Seeders;

use App\Models\DataKamar;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class DataKamarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DataKamar::create([
            'kost_id' => 1,
            'jenis_kamar' => 'Bebas',
            'no_kamar' => 20,
            'harga' => 20000,
            'img_pertama' => '1.jpg',
            'img_kedua' => '2.jpg',
            'img_ketiga' => '3.jpg',
            'img_keempat' => '4.jpg',
            'deskripsi' => "enak banget ",
        ]);
    }
}
