<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = Role::create([
            'name' => 'admin',
            'guard_name' => 'web'
        ]);

        $role2 = Role::create([
            'name' => 'customer',
            'guard_name' => 'web'
        ]);
    }
}
