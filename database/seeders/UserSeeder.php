<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // User::create([
        //     'no_induk' => '11653101555',
        //     'nama' => 'Erno Irwandi',
        //     'no_wa' => '082277958348',
        //     'email' => 'waeerno@gmail.com',
        //     'unit_id' => '1',
        //     'jenis' => 'mahasiswa',
        // ]);

        User::create([
            'nama' => 'admin',
            'email' => 'admin@themesbrand.com',
            'password' => Hash::make('123456'),
            'email_verified_at' => '2022-01-02 17:04:58',
            'created_at' => now(),
        ])->assignRole('Operator');
    }
}
