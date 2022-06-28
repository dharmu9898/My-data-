<?php

use Illuminate\Database\Seeder;

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
            'role_name' => 'Institute',
            'role_slug' => 'institute',
        ]);
        
        DB::table('roles')->insert([
            'role_name' => 'Student',
            'role_slug' => 'student',
        ]);
        
    }
}
