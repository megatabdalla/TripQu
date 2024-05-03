<?php

namespace Database\Seeders;

use App\Models\Agen;
use Carbon\Carbon;
use App\Models\Ferry;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
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

        $date = Carbon::now()->addDays(rand(1, 30));

        Ferry::create([
            'agenID' => '1',
            'namaKapal' => 'E2337',
            'berangkat' => '07:30:00',
            'sampai' => '11:00:00',
            'kelas' => 'Reguler',
            'asal' => 'Batam',
            'tujuan' => 'Selatpanjang',
            'pelAsal' => 'Sekupang',
            'pelTuj' => 'Tanjung Harapan',
            'tanggal' => $date,
            'harga' => 270000
        ]);

        Ferry::create([
            'agenID' => '1',
            'namaKapal' => 'E2337',
            'berangkat' => '07:30:00',
            'sampai' => '11:00:00',
            'kelas' => 'Reguler',
            'asal' => 'Batam',
            'tujuan' => 'Selatpanjang',
            'pelAsal' => 'Sekupang',
            'pelTuj' => 'Tanjung Harapan',
            'tanggal' => $date,
            'harga' => 270000
        ]);

        Ferry::create([
            'agenID' => '2',
            'namaKapal' => 'F2817',
            'berangkat' => '11:00:00',
            'sampai' => '15:00:00',
            'kelas' => 'VIP',
            'asal' => 'Batam',
            'tujuan' => 'Selatpanjang',
            'pelAsal' => 'Sekupang',
            'pelTuj' => 'Tanjung Harapan',
            'tanggal' => $date,
            'harga' => 350000
        ]);

        Ferry::create([
            'agenID' => '2',
            'namaKapal' => 'F2817',
            'berangkat' => '11:00:00',
            'sampai' => '15:00:00',
            'kelas' => 'VIP',
            'asal' => 'Batam',
            'tujuan' => 'Selatpanjang',
            'pelAsal' => 'Sekupang',
            'pelTuj' => 'Tanjung Harapan',
            'tanggal' => $date,
            'harga' => 350000
        ]);

        Ferry::create([
            'agenID' => '1',
            'namaKapal' => 'R8281',
            'berangkat' => '13:30:00',
            'sampai' => '17:30:00',
            'kelas' => 'VIP',
            'asal' => 'Batam',
            'tujuan' => 'Selatpanjang',
            'pelAsal' => 'Sekupang',
            'pelTuj' => 'Tanjung Harapan',
            'tanggal' => $date,
            'harga' => 350000
        ]);

        Ferry::create([
            'agenID' => '1',
            'namaKapal' => 'R8281',
            'berangkat' => '13:30:00',
            'sampai' => '15:30:00',
            'kelas' => 'VIP',
            'asal' => 'Batam',
            'tujuan' => 'Selatpanjang',
            'pelAsal' => 'Sekupang',
            'pelTuj' => 'Tanjung Harapan',
            'tanggal' => $date,
            'harga' => 350000
        ]);
    }
}