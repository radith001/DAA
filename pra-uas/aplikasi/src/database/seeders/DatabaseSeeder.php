<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Voli;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Membuat user admin
        $user = User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
        ]);

        $user->assignRole('super_admin');

        // Memanggil seeder untuk model Voli
        $this->call([
            VoliSeeder::class,
        ]);
    }
}
