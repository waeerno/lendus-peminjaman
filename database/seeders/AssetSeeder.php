<?php

namespace Database\Seeders;

use App\Models\Asset;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AssetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Asset::create([
            'nama' => 'Kursi',
            'jumlah' => 10,
            'kategori_id' => 1,
            'unit_id' => 1,
            'jenis' => 'Barang',
            'foto' => 'test.jpg'
        ]);

        Asset::create([
            'nama' => 'ZOOM Premium',
            'jumlah' => 1,
            'kategori_id' => 2,
            'unit_id' => 1,
            'jenis' => 'Jasa/Layanan',
            'foto' => 'test.jpg'
        ]);
    }
}
