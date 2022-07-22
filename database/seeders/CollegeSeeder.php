<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\College;

class CollegeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $collegess = json_decode(file_get_contents(__DIR__ . '/../../data/colleges.json'), true);

        foreach ($collegess as $college) {
            College::create($college);
        }


    }
}
