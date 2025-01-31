<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IkanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ikans')->insert([
            [
                'nama' => 'Arwana Super Red',
                'ukuran' => '30 cm',
                'harga' => 3500000,
            ],
            [
                'nama' => 'Black Diamond Piranha',
                'ukuran' => '12 cm',
                'harga' => 1500000,
            ],
            [
                'nama' => 'Alligator Gar',
                'ukuran' => '50 cm',
                'harga' => 150000,
            ],
            [
                'nama' => 'Peacock Bass Monoculus',
                'ukuran' => '60 cm',
                'harga' => 200000,
            ],
            [
                'nama' => 'Redtail Catfish',
                'ukuran' => '80 cm',
                'harga' => 500000,
            ],
        ]);
    }
}
