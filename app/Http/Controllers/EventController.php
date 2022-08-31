<?php

namespace App\Http\Controllers;

use App\Models\AcademicBackground;
use App\Models\College;
use App\Models\Country;
use App\Models\Event;
use App\Models\EventRegistration;
use App\Models\Interest;
use App\Models\Startup;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;

class EventController extends Controller
{
    //]

    public function event($slug)
    {
        $event = Event::where('slug', $slug)->first();
        if (!$event) {
            return view('pages.event.404');
        }

        page('event/{slug}', $event->id);

        $profileUpdateRequired = false;
        $registered = false;

        if (Auth::check()) {
            // Check if the user has already registered for this event
            $eventRegistration = EventRegistration::where('user_id', Auth::user()->id)->where('event_id', $event->id)->first();
            if ($eventRegistration) {
                $registered = true;
            }
        }

        if ($event->creator_type == 'e') {
            $event->creator = User::where('id', $event->creator)->select('id', 'name', 'username', 'profile_photo_path')->first();
        } elseif ($event->creator_type == 's') {
            $event->creator = Startup::where('id', $event->creator)->select('id', 'name', 'username', 'logo')->first();
        }

        if (!$registered && Auth::check()) {

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
        }

        $data = [
            'event' => $event,
            'profileUpdateRequired' => $profileUpdateRequired,
            'registered' => $registered,
        ];
        // return $data;
        return view('pages.event.event', $data);
    }

    public function register(Request $request)
    {
        $event = Event::where('id', $request->id)->select('required_fields')->first();
        $reg = new EventRegistration();
        $reg->user_id = Auth::user()->id;
        $reg->event_id = $request->id;
        $reg->name = Auth::user()->name;
        $reg->email = Auth::user()->email;
        $required_data = [];
        foreach ($event->required_fields as $field) {
            $required_data[$field] = Auth::user()->$field;
        }
        $reg->required_fields = $required_data;
        $reg->additional_fields = $request->except('id', '_token');
        $reg->save();
        return redirect()->back()->with('success', 'You have successfully registered for this event.');

    }

    public function eventredirect($slug)
    {
        return redirect(route('event', $slug));
    }

}
