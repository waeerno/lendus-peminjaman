<?php

namespace Database\Seeders;

use App\Models\Client;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Client::create([
            'no_induk' => '11653101555',
            'nama' => 'Erno Irwandi',
            'no_wa' => '081234567890',
            'email' => 'waeerno@gmail.com',
            'unit_id' => '1',
            'jenis' => 'Mahasiswa'
        ]);
    }
}
