<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UserRolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //create Permission
        // Permission::firstOrCreate(['name'=>'user_view']);
        // Permission::firstOrCreate(['name'=>'user_add']);

        // Permission::firstOrCreate(['name'=>'user_edit']);
        // Permission::firstOrCreate(['name'=>'user_delete']);
        // Create roles
        $admin = Role::firstOrCreate(['name'=>'admin']);
        $customer = Role::firstOrCreate(['name'=>'customer']);
        // Give permission to certain role
        $admin->givePermissionTo(['user_add','user_edit','user_delete','user_view']);
        $customer->givePermissionTo(['user_view']);
        // Assign role to user
        User::find(1)->assignRole(['admin']);
        User::find(2)->assignRole(['customer']);
    }
}
