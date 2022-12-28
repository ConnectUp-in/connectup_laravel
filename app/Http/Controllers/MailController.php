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
        $usersjson = '[
            {
                "email": "abhishekvish877@gmail.com",
                "name": "Abhishek Vishwakarma "
            },
            {
                "email": "vishalvermao.pcm121@gmail.com",
                "name": "Vishal Verma"
            },
            {
                "email": "dhananjaydogne@gmail.com",
                "name": "Dhananjay Dogne Samrat Ashok"
            },
            {
                "email": "mv270302@gmail.com",
                "name": "Mohit Verma"
            },
            {
                "email": "200801011@rajalakshmi.edu.in",
                "name": "Ajaikrishna S"
            },
            {
                "email": "princepal9120111@gmail.com",
                "name": "Prince Pal"
            },
            {
                "email": "muhammadwaseem7755@gmail.com",
                "name": "Muhammad waseem "
            },
            {
                "email": "kirthibagrecha4@gmail.com",
                "name": "Kirthi Bagrecha"
            },
            {
                "email": "sans.sg1701@gmail.com",
                "name": "Sanskriti Gupta"
            },
            {
                "email": "harshprogrammer782@gmail.com",
                "name": "Harsh Vishwakarma"
            }
        ]';

        $usersjson = '[
            {
                "email": "harshprogrammer782@gmail.com",
                "name": "Harsh Vishwakarma"
            }
        ]';

        $users = json_decode($usersjson, true);
        // return $users;

        foreach ($users as $user) {
            $data = [
                'name' => $user['name'],
                'email' => $user['email'],
            ];
            // $data = [];
            Mail::send('emails.testlink', $data, function ($message) use ($data) {
                $message->from('connectup.in@gmail.com', 'Team ConnectUp');
                $message->to($data['email'], $data['name']);
                // $message->subject("Time to shine: Complete Round II | Web Developer @ConnectUp");
                $message->subject("Congratulations!!! Your application has been shortlisted for Round-I | Web Developer @ConnectUp");
                // $message->subject("[Action Required] Complete the Round-1 Test by deadline");

            });

            echo "Mail Sent to " . $user['name'] . " <" . $user['email'] . "> <BR>";
        }

        return 'Mail Sent';

    }
}
