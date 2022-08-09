<?php

use Illuminate\Support\Facades\Auth;


function profileNotCompleted()
{
    $user = Auth::user();

    $factors = [
        "academic_background",
        "college",
        "country",
        "bio",
        "graduation_year",
        "website",
        "skills",
        "interests",
        "socials",
        "birthday",
        "power"
    ];

    $total = count($factors);
    $completed = 0;

    foreach ($factors as $factor) {
        if ($user->$factor) {
            $completed++;
        }
    }

    $percent = ($completed / $total) * 100;
    $percent = round($percent);

    if ($percent == 100) {
        return false;
    } else {
        return $percent;
    }
}
