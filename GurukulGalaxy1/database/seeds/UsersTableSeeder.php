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
            'password' => bcrypt('pass'),
        ]);
        
        DB::table('users')->insert([
            'role_id' => '2',
            'name' => 'Institutes',
            'email' => 'institutes@gmail.com',
            'password' => bcrypt('pass@institutes'),
        ]);
        
        DB::table('users')->insert([
            'role_id' => '3',
            'name' => 'Student',
            'email' => 'student@gmail.com',
            'password' => bcrypt('pass@student'),
        ]);
    }
}
