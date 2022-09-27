<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name' => 'Admin']);
        $role2 = Role::create(['name' => 'Pasante']);

        Permission::create(['name' => 'home'])->syncRoles([$role1, $role2]);

        Permission::create(['name' => 'courses'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'courses.add'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'course.edit'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'course.delete'])->syncRoles([$role1, $role2]);
    }
}
