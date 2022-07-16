<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\AcademicBackground;
class AcadBackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $streams = [
            ['Management MBA/BBA','Management'],
            ['Engineering B.Tech and B.Arch, M.Tech, ME, BE','Engineering'],
            ['Computer Application-BCA/MCA','Computer Application'],
            ['Designing - Fashion/Interior/Web','Designing'],
            ['Mass-communication/Journalism BJMC','Mass Communication'],
            ['Hospitality (Hotel) - Hotel Management','Hospitality'],
            ['Medical-BDS and MBBS','Medical'],
            ['Finance -B.Com/CA','Finance'],
            ['Arts Psychology and Sociology','Arts'],
            ['Law B.ALLB/LLB','Law'],
            ['Education Teaching-B.Ed/M.Ed','Education'],
            ['Pharmacy B.Pharma/M.Pharma','Pharmacy'],
            ['Tourism management - B.Sc.','Tourism'],
            ['Fine Arts B.F.A','Fine Arts'],
            ['Nursing B.Sc. and M.Sc. in Nursing','Nursing'],
            ['Other','Other']
        ];

        foreach ($streams as $stream) {
            AcademicBackground::create([
                'name' => $stream[0],
                'display_name' => $stream[1]
            ]);
        }

    }
}
