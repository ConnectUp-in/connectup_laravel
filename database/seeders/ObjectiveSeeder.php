<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Objective;

class ObjectiveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $objectives = [
            'Finding Investors',
            'Connecting with Mentors',
            'Other Startups',
            'Hiring Interns',
            'Finding Co-Founders',
            'Organizing Events',
            'Conduct Workshops/Sessions',
            'Product Testing',
            'Promoting Startup',
            'Be a Part of Community',
            'Other',
        ];

        foreach ($objectives as $objective) {
            Objective::create([
                'name' => $objective,
            ]);
        }
    }
}