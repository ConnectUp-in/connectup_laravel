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
            'Management MBA/BBA',
            'Engineering B.Tech and B.Arch, M.Tech, ME, BE',
            'Computer Application-BCA/MCA',
            'Designing - Fashion/Interior/Web',
            'Mass-communication/Journalism BJMC',
            'Hospitality (Hotel) - Hotel Management',
            'Medical-BDS and MBBS',
            'Finance -B.Com/CA',
            'Arts Psychology and Sociology',
            'Law B.ALLB/LLB',
            'Education Teaching-B.Ed/M.Ed',
            'Pharmacy B.Pharma/M.Pharma',
            'Tourism management - B.Sc.',
            'Fine Arts B.F.A',
            'Nursing B.Sc. and M.Sc. in Nursing',
            'Other'
        ];

        foreach ($streams as $stream) {
            AcademicBackground::create([
                'name' => $stream
            ]);
        }

    }
}
