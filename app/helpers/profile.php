<?php

use App\Models\Event;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
// use Mail;

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
        "power",
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

function sendRegistrationMail($user)
{
    $data = [
        'name' => $user->name,
        'email' => $user->email,
        'invite_refferal' => $user->invite_refferal,
    ];
    Mail::send('emails.register', $data, function ($message) use ($user) {
        $message->from('connectup.in@gmail.com');
        $message->to($user->email);
        $message->subject('Welcome to ConnectUp');
    });

}

function sendRefferalAppliedMail($data)
{
    Mail::send('emails.refferal', $data, function ($message) use ($data) {
        $message->from('connectup.in@gmail.com');
        $message->to(Auth::user()->email);
        $message->subject('Your refferal has been applied');
    });
}

function sendJoinedUsingRefferalMail($email)
{
    $data = [
        'name' => Auth::user()->name,
        'username' => Auth::user()->username,
    ];
    Mail::send('emails.joined', $data, function ($message) use ($email) {
        $message->from('connectup.in@gmail.com');
        $message->to($email);
        $message->subject(Auth::user()->name . ' has joined using using Your refferal');
    });
}

function getTicketFromRegistration($registration)
{

    // return $registration;
    // Create Custom PDF and mail it to user
    $pdf = \PDF::loadView('pdf.eventticket', ['registration' => $registration])
        ->setOptions(['defaultFont' => 'sans-serif', 'isRemoteEnabled' => true]);

    return $pdf->output();
}

function sendConfirmationTicketMail($registration)
{
    $event = Event::where('id', $registration->event_id)->first();
    $user = User::where('id', $registration->user_id)->first();
    $registration->event = $event;
    $registration->user = $user;
    $pdf = getTicketFromRegistration($registration);
    $email = $user->email;
    $data = [
        'user' => $user,
        'event' => $event,
        'registration' => $registration,
    ];
    Mail::send('emails.ticketconfirmation', $data, function ($message) use ($email, $pdf,$event) {
        $message->from('connectup.in@gmail.com');
        $message->to($email);
        $message->subject('Your ticket has been confirmed for ' . $event->title);
        $message->attachData($pdf, 'ticket.pdf', [
            'mime' => 'application/pdf',
        ]);

    });
}
