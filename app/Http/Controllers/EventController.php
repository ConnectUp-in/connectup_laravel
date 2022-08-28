<?php

namespace App\Http\Controllers;

use App\Models\Event;
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

        $data = [
            'event' => $event,
        ];
        // return $data;
        return view('pages.event.event', $data);
    }
}
