<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Stage;

class StageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // stages of a startup
        $stages = [
            'Idea',
            'Prototype',
            'Product Testing',
            'Production',
            'Launch',
            'Scaling',
        ];

        foreach ($stages as $stage) {
            $s = new Stage();
            $s->name = $stage;
            $s->save();
        }
    }
}