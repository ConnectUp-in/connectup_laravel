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
                "email": "cserpunit@gmail.com",
                "name": "Punit Verma"
            },
            {
                "email": "harshprogrammer782@gmail.com",
                "name": "Harsh Vishwakarma"
            }
        ]';

        // $usersjson = '[
        //     {
        //         "email": "cserpunit@gmail.com",
        //         "name": "Harsh Vishwakarma"
        //     }
        // ]';

        $users = json_decode($usersjson, true);
        // return $users;

        foreach ($users as $user) {
            $data = [
                'name' => $user['name'],
                'email' => $user['email'],
            ];
            // $data = [];
            Mail::send('emails.taponn.02', $data, function ($message) use ($data) {
                $message->from('connectup.in@gmail.com', 'Team ConnectUp');
                $message->to($data['email'], $data['name']);
                $message->subject("Taponn Mail Campaign");
                // $message->subject("Time to shine: Complete Round II | Web Developer @ConnectUp");
                // $message->subject("Congratulations!!! Your application has been shortlisted for Round-I | Graphic Designer @ConnectUp");
                // $message->subject("[Action Required] Complete the Round-1 Test by deadline");
                // $message->subject(" [Reminder] Clock is Ticking: Submit your Web Development Round-2 Task ");
                // $message->subject(" [Update] Flexible deadline for Round - II | Web Developer @ConnectUp");

            });

            echo "Mail Sent to " . $user['name'] . " <" . $user['email'] . "> <BR>";
        }

        return 'Mail Sent';

    }
}
