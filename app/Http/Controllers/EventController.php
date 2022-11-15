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

    public function __construct()
    {
        $this->middleware('auth')->only([
            'scan', 'registrationConfirm',
        ]);
    }
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
        _action('event_registered', $reg->id, null, $reg);

        \Session::flash('success', 'You have successfully registered for this event.');
        return redirect()->back()->with('success', 'You have successfully registered for this event.');

    }

    public function eventredirect($slug)
    {
        return redirect(route('event', $slug));
    }

    public function registrations($id)
    {
        $event = Event::where('id', $id)->first();
        if (!$event) {
            return view('pages.event.404');
        }
        $registrations = EventRegistration::where('event_id', $id)->get();
        $data = [
            'event' => $event,
            'registrations' => $registrations,
        ];
        // return $data;
        return view('pages.event.registrations', $data);
    }

    public function registrationConfirm($id)
    {
        $registration = EventRegistration::where('id', $id)->first();
        if (!$registration) {

            \Session::flash('error', 'Invalid registration id.');
            return back()->with('error', 'Invalid registration id.');
        }
        $registration->confirmed_at = date('Y-m-d H:i:s');

        // Send Ticket to the user
        $registration->save();
        sendConfirmationTicketMail($registration);
        _action('event_registration_confirmed', $registration->id, null, $registration);

        \Session::flash('success', 'Registration confirmed.');
        return redirect()->back()->with('success', 'Registration confirmed.');
    }

    public function verify($event_id, $ticket_id)
    {
        $registration = EventRegistration::where('event_id', $event_id)->where('ticket_id', $ticket_id)->first();
        if (!$registration) {
            return [
                'status' => 'error',
                'message' => 'Invalid ticket or Event id.',
            ];
        }
        $registration->event = Event::where('id', $event_id)->first();
        // return $registration;
        $text = 'This Ticket was issued to ' . $registration->name . ' for "' . $registration->event->title . '".';
        if ($registration->confirmed_at) {
            $text .= ' This ticket has been confirmed on ' . $registration->confirmed_at . '.';
        } else {
            $text .= ' This ticket has not been confirmed yet.';

        }
        return $text;
        return view('pages.event.verify', $data);
    }

    public function scan()
    {
        return view('pages.event.scan');
    }

    public function markattendance(Request $request)
    {
        $registration = EventRegistration::where('event_id', $request->event_id)->where('ticket_id', $request->ticket_id)->first();
        if (!$registration) {
            return $this->sendError('Invalid ticket or Event id.');
        }

        if ($registration->confirmed_at) {

            if ($registration->checked_in_at) {
                return $this->sendError('This ticket has already been scanned.');
                return "Hello";
            }

            $registration->checked_in_at = date('Y-m-d H:i:s');
            $registration->save();
            _action('event_attendance_marked', $registration->id, null, $registration);
            return $this->sendResponse($registration, 'Attendance marked.');
        } else {
            return $this->sendError('This ticket has not been confirmed yet.');
        }

    }

}
