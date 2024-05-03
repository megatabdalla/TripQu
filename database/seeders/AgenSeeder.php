<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Agen;

class AgenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Agen::create([
            'namaAgen' => 'Dumai Express Group',
            'email' => 'dumai@gmail.com',
            'password' => '123123123'
        ]);

        Agen::create([
            'namaAgen' => 'Batam Jet',
            'email' => 'batamjet@gmail.com',
            'password' => '123123123'
        ]);
    }
}
