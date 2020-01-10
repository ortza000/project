<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();

        $user->insert([
            'name' => 'ผู้ดูแลระบบ',
            'lastname' => 'ควบคุม',
            'username' => 'admin',
            // 'email' => 'admin@gmail.com',
            'password' => Hash::make('1234567890'),
            'remember_token' => str_random(10),
        ]);
    }
}
