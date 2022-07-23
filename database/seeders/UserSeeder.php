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
                'profile_photo_path' => 'https://avatars.githubusercontent.com/u/64343449?v=4',
                'cover_photo_path' => 'https://lh4.googleusercontent.com/vyC6IpovxWhnAirkg-CbUisiejZzaOxnvPtU3B1mtn844oibIUuwRsLpfoiTppjPdIhIJeJCugaveXrItR3mRlI0Dpksd85e7JulZVCNggkvF_npIMP8fnnIWDMpvr0vfA=w1996',
                'role' => 111,
                'country'=>98,
                'bio' => 'A guy who likes to build and learn new things. Also the one who built this platform.',
                'academic_background' => 2,
                'graduation_year' => 2024,
                'website' => 'https://connectup.in',
                'interests' => [1,2,3,4],
                'skills' => [1,2,3,4],
                'birthday' => '2002-08-07',
                'college' => 28772,
                'socials' => json_encode([
                    'github' => 'https://github.com/meinhoonharsh',
                    'linkedin' => 'https://www.linkedin.com/in/meinhoonharsh',
                    'facebook' => 'https://www.facebook.com/meinhoonharsh',
                    'instagram' => 'https://www.instagram.com/meinhoonharsh',
                    'twitter' => 'https://twitter.com/meinhoonharsh',
                    'youtube' => 'https://www.youtube.com/c/harshvishwakarma7',
                ]),
            ]
    
    ];

        foreach ($users as $user) {
            $user =  new User($user);
            $user->save();
        }

    }
}
