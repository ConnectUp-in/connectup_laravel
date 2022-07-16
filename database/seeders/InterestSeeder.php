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
            'Graphic Designing',
            'Marketing',
            'Programming',
            'Content Writing',
            'Web Development',
            'App Development',
            'Backend Development',
            'Frontend Development',
            'Finance & Accounting',
            'Business Development',
            'Human Resources',
            'Sales',
            'Project Management',
            'Law & Legality',
            'Multitasking',
            'Networking',
        ];

        foreach ($interests as $interest) {
            Interest::create([
                'name' => $interest,
            ]);
        }

    }
}
