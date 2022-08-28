<?php

namespace App\Http\Controllers;

use App\Models\Event;

class EventController extends Controller
{
    //]

    public function event($slug)
    {
        $event = Event::where('slug', $slug)->first();
        $data = [
            'event' => $event,
        ];
        return $data;
        return view('event', $data);
    }
}
