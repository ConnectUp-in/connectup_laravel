<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
            'name' => 'Test User',
            'email' => 'email@gmail.com',
            'password' => bcrypt('password'),
            'username' => 'testuser',
            'role' => 0,
            ],
            [
                'name' => 'Harsh Vishwakarma',
                'email' => 'harshprogrammer782@gmail.com',
                'password' => bcrypt('password'),
                'username' => 'founder',
                'role' => 111,
            ]
    
    ];

        foreach ($users as $user) {
            $user =  new User($user);
            $user->save();
        }

    }
}
