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
        $rkdy49 = User::where('username', 'rkdy49')->first();

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
            [
                'name' => 'Brickstox',
                'bio' => 'RealEstate ecosystem in Decentralized Finance.',
                'about' =>
                    'Brickstox is a blockchain powered platform where users can invest in RealEstate backed NFTs and leverage inly in the DeFi world.',
                'logo' =>
                    'https://cdn.discordapp.com/icons/886972630320676894/ed34537ba9f74f31750ebb2668123a6c.webp?size=240',
                'cover' =>
                    'https://media-exp1.licdn.com/dms/image/C4D16AQEUUuv1htmSuw/profile-displaybackgroundimage-shrink_350_1400/0/1646210107350?e=1666828800&v=beta&t=g0sKt7kXurn8PxiWldDluRVv9OY-tbM72VUz6ffVsJw',
                'username' => 'brickstox',
                'socials' => [
                    'linkedin' => 'https://www.linkedin.com/company/brickstox',
                    'instagram' => 'https://www.instagram.com/brickstox',
                ],
                'founded_at' => '2022-08-21',
                'contact_email' => 'rkdy49@gmail.com',
                'hiring_email' => 'rkdy49@gmail.com',
                'founder' => $rkdy49->id,
                'category' => rand(1, 3),
                'stage' => rand(1, 3),
                'contact' => '9479861680',
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