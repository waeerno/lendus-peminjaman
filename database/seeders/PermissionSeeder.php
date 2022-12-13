<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create(['name' => 'dashboard.index', 'guard_name' => 'web']);
        Permission::create(['name' => 'unit.index', 'guard_name' => 'web']);
        Permission::create(['name' => 'unit.create', 'guard_name' => 'web']);
        Permission::create(['name' => 'unit.edit', 'guard_name' => 'web']);
        Permission::create(['name' => 'unit.delete', 'guard_name' => 'web']);
        Permission::create(['name' => 'kategori.index', 'guard_name' => 'web']);
        Permission::create(['name' => 'kategori.create', 'guard_name' => 'web']);
        Permission::create(['name' => 'kategori.edit', 'guard_name' => 'web']);
        Permission::create(['name' => 'kategori.delete', 'guard_name' => 'web']);
        Permission::create(['name' => 'asset.index', 'guard_name' => 'web']);
        Permission::create(['name' => 'asset.create', 'guard_name' => 'web']);
        Permission::create(['name' => 'asset.edit', 'guard_name' => 'web']);
        Permission::create(['name' => 'asset.delete', 'guard_name' => 'web']);
        Permission::create(['name' => 'client.index', 'guard_name' => 'web']);
        Permission::create(['name' => 'client.create', 'guard_name' => 'web']);
        Permission::create(['name' => 'client.edit', 'guard_name' => 'web']);
        Permission::create(['name' => 'client.delete', 'guard_name' => 'web']);
        Permission::create(['name' => 'peminjaman.index', 'guard_name' => 'web']);
        Permission::create(['name' => 'peminjaman.create', 'guard_name' => 'web']);
        Permission::create(['name' => 'peminjaman.proses', 'guard_name' => 'web']);
        Permission::create(['name' => 'riwayat.index', 'guard_name' => 'web']);
        Permission::create(['name' => 'operator.index', 'guard_name' => 'web']);
        Permission::create(['name' => 'operator.create', 'guard_name' => 'web']);
        Permission::create(['name' => 'operator.edit', 'guard_name' => 'web']);
        Permission::create(['name' => 'operator.delete', 'guard_name' => 'web']);
        Permission::create(['name' => 'admin.index', 'guard_name' => 'web']);
        Permission::create(['name' => 'admin.create', 'guard_name' => 'web']);
        Permission::create(['name' => 'admin.edit', 'guard_name' => 'web']);
        Permission::create(['name' => 'admin.delete', 'guard_name' => 'web']);
        Permission::create(['name' => 'profile.index', 'guard_name' => 'web']);
        Permission::create(['name' => 'profile.edit', 'guard_name' => 'web']);
        Permission::create(['name' => 'role.index', 'guard_name' => 'web']);
        Permission::create(['name' => 'role.create', 'guard_name' => 'web']);
        Permission::create(['name' => 'role.edit', 'guard_name' => 'web']);
        Permission::create(['name' => 'role.delete', 'guard_name' => 'web']);
        Permission::create(['name' => 'permission.index', 'guard_name' => 'web']);
    }
}
