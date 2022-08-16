<?php

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


function sendRegistrationMail($user){
    $data = [
        'name' => $user->name,
        'email' => $user->email
    ];
    Mail::send('emails.register', $data, function ($message) use ($user) {
        $message->from('connectup.in@gmail.com');
        $message->to($user->email);
        $message->subject('Welcome to ConnectUp');
    });
    

}

function sendRefferalAppliedMail($data){
    Mail::send('emails.refferal', $data, function ($message) use ($data) {
        $message->from('connectup.in@gmail.com');
        $message->to(Auth::user()->email);
        $message->subject('Your refferal has been applied');
    });
}

function sendJoinedUsingRefferalMail($email){
    $data = [
        'name' => Auth::user()->name,
        'username' => Auth::user()->username
    ];
    Mail::send('emails.joined', $data, function ($message) use ($email) {
        $message->from('connectup.in@gmail.com');
        $message->to($email);
        $message->subject(Auth::user()->name.' has joined using using Your refferal');
    });
}