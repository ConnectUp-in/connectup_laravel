<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Interest;

class InterestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            $interests = [
                'business'=>[
                    'Entrepreneurship',
                    'Outsourcing',
                    'Startups',
                    'Startup Accelerator',
                    'Venture Capitalist',
                    'Startup Coach and Mentor',
                    'Startup Founder',
                    'Startup Investor',
                    'Pitch Deck',
                    'Pitch Deck Review',
                    'Networking',
                ],
                'technology'=>[
                    'Full Stack Developement',
                    'Front End Development',
                    'Back End Development',
                    'Mobile Development',
                    'Web Development',
                    'Software Development',
                    'DevOps',
                    'Data Science',
                    'Cyber Security',
                    'Cloud Computing',
                    'Blockchain',
                    'Machine Learning',
                    'Artificial Intelligence',
                    'IoT',
                    'VR/AR',
                    'Robotics',
                    'RPA',                  
                ],
                'selfgrowth'=>[
                    'Investment',
                    'Public Speaking',
                    'Personal Branding',
                    'Stocks',
                    'Cryptocurrency',
                    'Upskilling',
                    'Career Development',
                    'Career Coaching',
                ],
                'marketing'=>[
                    'Performance Marketing',
                    'Marketing',
                    'SEO',
                    'SMM',
                    'SEM',
                    'Email Marketing',
                    'Social Media Marketing',
                    'Content Marketing',
                    'PR',
                    'Public Relations',
                    'Brand Marketing',
                    'Brand Development',
                    'Brand Strategy',
                    'B2B Marketing',
                    'B2C Marketing',
                    'Marketing Strategy',
                    'Market Research',
                    'Market Analysis',
                    'Influencer Marketing',
                ],
                'creativity'=>[
                    'Animation',
                    'Art',
                    'Design',
                    'Illustration',
                    'Photography',
                    'Video Production',
                    'Video Editing',
                    'Video Animation',
                    'Video Filming',
                    'Writing',
                    'Copywriting',
                    'Translation',
                    'Web Design',
                    'Graphic Design',
                    'Advertising',
                    'Media Design',
                    'Packaging',
                    'Product Design',
                    'UI/UX Design',
                ],
                'legal'=>[
                    'Law',
                    'Legal',
                    'Legal Advice',
                ]
         ];

        foreach ($interests as $category => $i) {
            foreach ($i as $interest) {
                Interest::create([
                    'category' => $category,
                    'name' => $interest
                ]);
            }
        }

    }
}
