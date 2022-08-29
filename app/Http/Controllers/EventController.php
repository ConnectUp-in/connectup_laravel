<?php

namespace App\Http\Controllers;

use App\Models\AcademicBackground;
use App\Models\College;
use App\Models\Country;
use App\Models\Event;
use App\Models\Interest;
use App\Models\Startup;
use App\Models\User;
use Auth;

class EventController extends Controller
{
    //]

    public function event($slug)
    {
        $event = Event::where('slug', $slug)->first();
        if (!$event) {
            return view('pages.event.404');
        }
        $profileUpdateRequired = false;

        if ($event->creator_type == 'e') {
            $event->creator = User::where('id', $event->creator)->select('id', 'name', 'username', 'profile_photo_path')->first();
        } elseif ($event->creator_type == 's') {
            $event->creator = Startup::where('id', $event->creator)->select('id', 'name', 'username', 'logo')->first();
        }

        if (in_array('interests', $event->required_fields) && !Auth::user()->interests) {
            $event->interests = Interest::select('id', 'name')->get();
            $profileUpdateRequired = true;
        }
        if (in_array('academic_background', $event->required_fields) && !Auth::user()->academic_background) {
            $event->academic_background = AcademicBackground::select('id', 'name')->get();
            $profileUpdateRequired = true;
        }
        if (in_array('college', $event->required_fields) && !Auth::user()->college) {
            $event->college = array();
            $profileUpdateRequired = true;
        }
        if (in_array('country', $event->required_fields) && !Auth::user()->country) {
            $event->country = Country::select('id', 'name')->get();
            $profileUpdateRequired = true;
        }
        if (in_array('graduation_year', $event->required_fields) && !Auth::user()->graduation_year) {
            $event->graduation_year = array_map(function ($year) {
                return [
                    'id' => $year,
                    'name' => $year,
                ];
            }, range(date('Y') + 5, date('Y') - 20));
            $profileUpdateRequired = true;
        }

        foreach ($event->required_fields as $field) {
            if (!Auth::user()->$field) {
                $profileUpdateRequired = true;
            }
        }

        $data = [
            'event' => $event,
            'profileUpdateRequired' => $profileUpdateRequired,
        ];
        // return $data;
        return view('pages.event.event', $data);
    }
}
