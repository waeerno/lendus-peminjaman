<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

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

        $this->call([
            PermissionSeeder::class,
            RoleSeeder::class,
            OperatorSeeder::class,
            KategoriSeeder::class,
            // UserSeeder::class,
            // UnitSeeder::class,
            // KategoriSeeder::class,
        ]);
    }
}
