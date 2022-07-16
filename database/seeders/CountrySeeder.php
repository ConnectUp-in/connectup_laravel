<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Country;
class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // Get Data from countries.json 
        // and insert into database
        $countries = json_decode(file_get_contents(__DIR__ . '/../../data/countries.json'), true);

        foreach ($countries as $country) {
            Country::create($country);
        }
    }
}
