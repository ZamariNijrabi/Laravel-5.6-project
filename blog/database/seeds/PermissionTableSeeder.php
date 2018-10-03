<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // user permissions
        Permission::create(['name'=>'Create User']);
        Permission::create(['name'=>'Delete User']);
        Permission::create(['name'=>'Edit User']);
        Permission::create(['name'=>'View Users']);

        //Product permissions
        Permission::create(['name'=>'Create Product']);
        Permission::create(['name'=>'Delete Product']);
        Permission::create(['name'=>'Edit Product']);
        Permission::create(['name'=>'View Products']);
    }
}
