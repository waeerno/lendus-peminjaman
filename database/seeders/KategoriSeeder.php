<?php

namespace Database\Seeders;

use App\Models\Kategori;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        Kategori::create([
            'nama' => 'Layanan IT',
        ]);

        Kategori::create([
            'nama' => 'Ruangan',
        ]);

        Kategori::create([
            'nama' => 'Kendaraan',
        ]);

        Kategori::create([
            'nama' => 'Lainnya',
        ]);

        Kategori::create([
            'nama' => 'Peralatan',
        ]);

        Kategori::create([
            'nama' => 'Gedung',
        ]);
    }
}
