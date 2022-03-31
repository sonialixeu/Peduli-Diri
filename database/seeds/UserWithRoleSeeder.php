<?php

use Illuminate\Database\Seeder;
use App\User;
class UserWithRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'nik' => '0921921912121212',
            'name' => 'administrator',
            'password' => bcrypt('password'),
            'password_confirmation' => bcrypt('password'),
            'role' => 'admin'
        ]);

        DB::table('users')->insert([
            'nik' => '0921921912721621',
            'name' => 'User',
            'password' => bcrypt('password'),
            'password_confirmation' => bcrypt('password'),
            'role' => 'user'
        ]);
    }
}
