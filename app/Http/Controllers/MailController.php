<?php

namespace App\Http\Controllers;

use Mail;

class MailController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('isSuperAdmin');
    }
    //
    public function teamjoin()
    {
//         officialkowsalya@gmail.com    Kowsalya
// chandolasaksham@gmail.com    Saksham Chandola
// anknalitoriya@gmail.com    Ankna Litoriya
// ro3498727@gmail.com    Rohan Sharma
// kathal.anushka@gmail.com    Anushka Kathal
// fusheikh11@gmail.com    Faizanuddin Sheikh
// harikishantk@gmail.com    Harikishan TK
// ankurkumar4715@gmail.com    Ankur Kumar
// rahulkarda2002@gmail.com    Rahul Karda
// abhiramhsivam@gmail.com    ABHIRAM H SIVAM
// ishanmarwadya02@gmail.com    Ishan Marwadya
// ravi.d.lord@gmail.com    Ravi Bhojane
// vanshsaxena26@gmail.com    Vansh Saxena
// sandeshv414@gmail.com    Sandesh Verma
// kongarapiaashamadhuri@gmail.com    Aasha madhuri
// imteyazahmad5426@gmail.com    Md Imteyaz Ahmad
        $users = [
            // ['name' => 'Ryan Stonebanks', 'email' => 'ryan.stonebanks@gmail.com'],
            // ['name' => 'Krupesh Vithlani', 'email' => 'krupesh123vithlani@gmail.com'],
            ['name' => 'Harsh Vishwakarma', 'email' => 'harshprogrammer782@gmail.com'],
        ];

        foreach ($users as $user) {
            $data = [
                'name' => $user['name'],
                'email' => $user['email'],
            ];
            Mail::send('emails.testsite', $data, function ($message) use ($data) {
                $message->from('connectup.in@gmail.com', 'Team ConnectUp');
                $message->to($data['email'], $data['name']);
                $message->subject("Hurrah! You've been selected to proceed to the next round");
            });
        }

        return 'Mail Sent';

    }
}
