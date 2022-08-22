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
                'name' => 'Harsh Vishwakarma',
                'email' => 'harshprogrammer782@gmail.com',
                'password' => bcrypt('password'),
                'username' => 'founder',
                'profile_photo_path' =>
                    'https://avatars.githubusercontent.com/u/64343449?v=4',
                'cover_photo_path' =>
                    'https://lh4.googleusercontent.com/vyC6IpovxWhnAirkg-CbUisiejZzaOxnvPtU3B1mtn844oibIUuwRsLpfoiTppjPdIhIJeJCugaveXrItR3mRlI0Dpksd85e7JulZVCNggkvF_npIMP8fnnIWDMpvr0vfA=w1996',
                'role' => 111,
                'country' => 98,
                'bio' =>
                    'A guy who likes to build and learn new things. Also the one who built this platform.',
                'academic_background' => 2,
                'graduation_year' => 2024,
                'website' => 'https://connectup.in',
                'interests' => [1, 2, 3, 4],
                'skills' => [1, 2, 3, 4],
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
            ],
            [
                'name' => 'Rounak Dubey',
                'email' => 'rkdy49@gmail.com',
                'password' => bcrypt('password'),
                'username' => 'rkdy49',
                'profile_photo_path' =>
                    'https://media-exp1.licdn.com/dms/image/C4D03AQHySV4tI4XOuA/profile-displayphoto-shrink_400_400/0/1644063545757?e=1666828800&v=beta&t=tQVtFXScJoAEFrdI92gSjDhhM2oczgPKb8rsCmMJmLs',
                'cover_photo_path' =>
                    'https://media-exp1.licdn.com/dms/image/C4D16AQEUUuv1htmSuw/profile-displaybackgroundimage-shrink_350_1400/0/1646210107350?e=1666828800&v=beta&t=g0sKt7kXurn8PxiWldDluRVv9OY-tbM72VUz6ffVsJw',
                'role' => 11,
                'country' => 98,
                'bio' => '
                    Building the future of Real Estate | Co-founder of Brickstox, a marketplace for Real Estate backed Tokens',
                'academic_background' => 2,
                'graduation_year' => 2023,
                'website' => 'https://brickstox.in',
                'interests' => [1, 2, 3, 4],
                'skills' => [1, 2, 3, 4],
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
            ],
        ];

        foreach ($users as $user) {
            $user = new User($user);
            $user->save();
        }
    }
}