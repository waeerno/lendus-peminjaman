<?php

namespace Database\Seeders;

use App\Models\Unit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Unit::create([
            'nama' => 'Teknik Informatika',
            'pimpinan' => 'Dr. Ir. H. M. A. Muhaimin, M.Kom',
            'nip' => '196312121987031001'
        ]);
    }
}
