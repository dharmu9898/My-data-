<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'role_id' => '1',
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('pass@admin'),
        ]);
        
        DB::table('users')->insert([
            'role_id' => '2',
            'name' => 'Manager',
            'email' => 'manager@gmail.com',
            'password' => bcrypt('pass@manager'),
        ]);
        
        DB::table('users')->insert([
            'role_id' => '3',
            'name' => 'Institute',
            'email' => 'institute@gmail.com',
            'password' => bcrypt('pass@ins'),
        ]);

        DB::table('users')->insert([
            'role_id' => '4',
            'name' => 'Students',
            'email' => 'students@gmail.com',
            'password' => bcrypt('pass@students'),
        ]);
    }
}
