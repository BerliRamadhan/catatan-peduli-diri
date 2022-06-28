<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Catatan;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'nik' => '31134521231004',
            'name' => 'Berlian Ramadhan',
            'email' => 'berlianpratama2810@gmail.com',
            'password' => bcrypt('23456')
        ]);

        User::create([
            'nik' => '1270116109650002',
            'name' => 'Juminten Sukaningsih',
            'email' => 'juminten123@gmail.com',
            'password' => bcrypt('12345')
        ]);
        
        User::create([
            'nik' => '1270112102040003',
            'name' => 'Ilham Kurniawan',
            'email' => 'ilhamkurniawan@gmail.com',
            'password' => bcrypt('12345')
        ]);

        Catatan::create([
            'user_id' => 1,
            'tanggal' => '2022/06/27',
            'waktu' => '10.00',
            'lokasi' => 'Toko Buku Merauke',
            'suhu' => '35.5'
        ]);

        Catatan::create([
            'user_id' => 1,
            'tanggal' => '2022/06/27',
            'waktu' => '13.00',
            'lokasi' => 'MDI Putsal',
            'suhu' => '36.2'
        ]);

        Catatan::create([
            'user_id' => 1,
            'tanggal' => '2022/06/27',
            'waktu' => '15:00',
            'lokasi' => 'Teras Depan Rumah',
            'suhu' => '36.5'
        ]);
    }
}
