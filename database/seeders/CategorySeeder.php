<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            'Agriculture',
            'AR/VR/MR/XR',
            'AI/Machine Learning',
            'B2B',
            'Blockchain',
            'Citizen Services',
            'Drones',
            'FinTech',
            'FMCG',
            'Hardware',
            'Healthcare',
            'Media',
            'Robotics',
            'SaaS',
            'Foodtech',
            'F&B',
            'Education/Edutech',
            'Transportation',
            'Social Welfare & Development',
            'Others',
        ];
        foreach ($categories as $category) {
            Category::create([
                'name' => $category,
            ]);
        }
    }
}