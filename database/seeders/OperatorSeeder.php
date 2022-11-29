<?php

namespace Database\Seeders;

use App\Models\Operator;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class OperatorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $op1 = Operator::create([
            'nama' => 'Operator 1',
            'email' => 'waeerno@gmail.com',
            'password' => bcrypt('adminadmin')
        ]);

        //get all permissions
        $permissions = Permission::all();
        $role = Role::find(1);

        $role->syncPermissions($permissions);

        $op1->assignRole($role);
    }
}
