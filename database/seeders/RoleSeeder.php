<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            ['role_name' => 'Admin', 'description' => 'Administrator role with full access'],
            ['role_name' => 'Cashier', 'description' => 'Regular cashier role with limited access'],
            ['role_name' => 'Chef', 'description' => 'Chef role with access to kitchen operations'],
            ['role_name' => 'Customer', 'description' => 'Customer role with access to order and view menu'],
        ];

        DB::table('roles')->insert($roles);
    }
}
