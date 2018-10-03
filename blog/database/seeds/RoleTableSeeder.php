<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Role::create(['name'=>'Admin'])
        ->givePermissionTo(Permission::all());
        Role::create(['name'=>'User'])
        ->givePermissionTo(['Create User','View Users','Edit User']);
        Role::create(['name'=>'Guest']);
        Role::create(['name'=>'Developer']);
    }
}
