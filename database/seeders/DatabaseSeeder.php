<?php

namespace Database\Seeders;

use App\Models\User;
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
            'nik' => '1270112806050001',
            'name' => 'Muhammad Azka Lufthansa',
            'email' => 'azkalufthansa@gmail.com'
        ]);

        User::create([
            'nik' => '1270116109650002',
            'name' => 'Juminten Sukaningsih',
            'email' => 'juminten123@gmail.com'
        ]);
        
        User::create([
            'nik' => '1270112102040003',
            'name' => 'Ilham Kurniawan',
            'email' => 'ilhamkurniawan@gmail.com'
        ]);
    }
}
