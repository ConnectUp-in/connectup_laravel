<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Startup;
use App\Models\User;

class StartupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // id, name, bio, about, logo, cover, socials, founded_at, contact_email, hiring_email, founder, category, stage, contact, funded, interests, active, lookingfor, created_at, updated_at
        $founder = User::where('username', 'founder')->first();

        $startups = [
            [
                'name' => 'ConnectUp',
                'bio' => 'Connecting the Dots...',
                'about' => 'ConnectUp is a Centralized Startup Networking Platform that brings together startups, entrepreneurs, investors, and friends to come together to share ideas, and discuss opportunities for collaboration. .
                    We are building the largest network of incubators, mentors, investors, and startups',
                'logo' => '/assets/defaults/logo.png',
                'cover' => '/assets/defaults/cover.png',
                'username' => 'connectup',
                'socials' => [
                    'linkedin' =>
                        'https://www.linkedin.com/company/connectupin',
                    'instagram' => 'https://www.instagram.com/connectup.in',
                ],
                'founded_at' => '2022-08-21',
                'contact_email' => 'connectup.in@gmail.com',
                'hiring_email' => 'connectup.in@gmail.com',
                'founder' => $founder->id,
                'category' => rand(1, 3),
                'stage' => rand(1, 3),
                'contact' => '626abc5091',
                'funded' => false,
                'interests' => [1, 2, 3, 4, 5],
                'active' => true,
                'lookingfor' => [1, 2, 3, 4, 5],
            ],
        ];

        foreach ($startups as $startup) {
            Startup::create($startup);
        }
    }
}