<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([

            // Admin

            [
                'firstname' => 'Admin',
                'lastname' => 'User',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('password'),
                'user_type' => 1
            ],

            // Sponsor

            [
                'firstname' => 'Sponsor',
                'lastname' => 'User',
                'email' => 'sponsor@gmail.com',
                'password' => Hash::make('password'),
                'user_type' => 2
            ],

            // Guardian

            [
                'firstname' => 'Guardian',
                'lastname' => 'User',
                'email' => 'guardian@gmail.com',
                'password' => Hash::make('password'),
                'user_type' => 3
            ],
        ]);
    }
}
