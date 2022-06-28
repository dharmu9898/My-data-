<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'role_name' => 'Admin',
            'role_slug' => 'admin',
        ]);
        
        DB::table('roles')->insert([
            'role_name' => 'Manager',
            'role_slug' => 'manager',
        ]);
        
        DB::table('roles')->insert([
            'role_name' => 'Institute',
            'role_slug' => 'institute',
        ]);

        DB::table('roles')->insert([
            'role_name' => 'Students',
            'role_slug' => 'students',
        ]);
    }
}
