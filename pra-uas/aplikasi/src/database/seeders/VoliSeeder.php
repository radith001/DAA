<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Voli;

class VoliSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Voli::create([
            'nama_atlet' => 'Rizky Maulana',
            'usia' => 18,
            'posisi' => 'Tosser',
            'tinggi' => 180.5,
            'berat' => 75.2,
            'performa' => 80,
            'status_bertanding' => 'Siap Bertanding',
        ]);

        Voli::create([
            'nama_atlet' => 'Dimas Saputra',
            'usia' => 20,
            'posisi' => 'Spiker',
            'tinggi' => 185.0,
            'berat' => 78.0,
            'performa' => 85,
            'status_bertanding' => 'Siap Bertanding',
        ]);

        Voli::create([
            'nama_atlet' => 'Siti Aisyah',
            'usia' => 19,
            'posisi' => 'Libero',
            'tinggi' => 170.2,
            'berat' => 60.5,
            'performa' => 90,
            'status_bertanding' => 'Belum Bertanding',
        ]);

        Voli::create([
            'nama_atlet' => 'Aulia Amanda',
            'usia' => 19,
            'posisi' => 'Spiker',
            'tinggi' => 170.0,
            'berat' => 65.0,
            'performa' => 88,
            'status_bertanding' => 'Siap Bertanding',
        ]);
    }
}
