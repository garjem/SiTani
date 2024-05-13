<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class MitraUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Mitra',
            'email' => 'mitra@patani.com',
            'password' => bcrypt('mitra'),
            'role' => 'mitra',
            'no_wa' => '1234567890'
        ]);
    }
}
