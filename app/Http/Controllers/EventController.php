<?php

namespace App\Http\Controllers;

use App\Models\AcademicBackground;
use App\Models\College;
use App\Models\Country;
use App\Models\Event;
use App\Models\Interest;
use App\Models\Startup;
use App\Models\User;

class EventController extends Controller
{
    //]

    public function event($slug)
    {
        $event = Event::where('slug', $slug)->first();
        if (!$event) {
            return view('pages.event.404');
        }

        if ($event->creator_type == 'e') {
            $event->creator = User::where('id', $event->creator)->select('id', 'name', 'username', 'profile_photo_path')->first();
        } elseif ($event->creator_type == 's') {
            $event->creator = Startup::where('id', $event->creator)->select('id', 'name', 'username', 'logo')->first();
        }

        $event->academic_background = AcademicBackground::select('id', 'name')->get();
        $event->college = array();
        $event->country = Country::select('id', 'name')->get();
        $event->interests = Interest::select('id', 'name')->get();
        $event->graduation_year = array_map(function ($year) {
            return [
                'id' => $year,
                'name' => $year,
            ];
        }, range(date('Y') + 5, date('Y') - 20));
        $data = [
            'event' => $event,
        ];
        // return $data;
        return view('pages.event.event', $data);
    }
}
