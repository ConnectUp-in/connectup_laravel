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
                "email": "alamshah1617@gmail.com",
                "name": "Shah Alam"
            },
            {
                "email": "piyushpjani@gmail.com",
                "name": "PIYUSH JANI"
            },
            {
                "email": "spayasi78@gmail.com",
                "name": "Santosh kumar Payasi"
            },
            {
                "email": "loveguptaofficials@gmail.com",
                "name": "love gupta"
            },
            {
                "email": "kapiljadon5849@gmail.com",
                "name": "Kapil Jadon"
            },
            {
                "email": "rrsaggarwal@gmail.com",
                "name": "Roshni Aggarwal"
            },
            {
                "email": "sonamaafremah@gmail.com",
                "name": "Sonam Aafre"
            },
            {
                "email": "anushkayadav7987@gmail.com",
                "name": "Anushka yadav "
            },
            {
                "email": "kongarapiaashamadhuri@gmail.com",
                "name": "K.Aasha madhuri"
            },
            {
                "email": "guptasurajkumar577@gmail.com",
                "name": "Suraj Kumar"
            },
            {
                "email": "fs20if022@gmail.com",
                "name": "Dhruv Pralhad Paste"
            },
            {
                "email": "ashwinihinge6666@gmail.com",
                "name": "Ashwini hinge"
            },
            {
                "email": "jitendraaakde8959@gmail.com",
                "name": "Jitendra Aakde "
            },
            {
                "email": "akshatmishra782@gmail.com",
                "name": "Akshat Mishra "
            },
            {
                "email": "saharshsaxena007@gmail.com",
                "name": "Saharsh Saxena"
            },
            {
                "email": "ravirungta51@gmail.com",
                "name": "Ravi Kumar Singh"
            },
            {
                "email": "pbansod96@gmail.com",
                "name": "AMAN NARENDRA BANSOD"
            },
            {
                "email": "tanmaywaykar17@gmail.com",
                "name": "Tanmay Waykar"
            },
            {
                "email": "pathraberavishakar@gmail.com",
                "name": "Saurabh pathrabe "
            },
            {
                "email": "amansinghkushwaha2003@gmail.com",
                "name": "Aman Kumar Singh Kushwaha"
            },
            {
                "email": "utkarsharjariyaofficial@gmail.com",
                "name": "Utkarsh Arjariya"
            },
            {
                "email": "emmanuelesin950@gmail.com",
                "name": "Esin Emmanuel William "
            },
            {
                "email": "prathamakkewar7@gmail.com",
                "name": "Pratham Manoj Akkewar"
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
            Mail::send('emails.hiring.dev.examsupdate', $data, function ($message) use ($data) {
                $message->from('connectup.in@gmail.com', 'Team ConnectUp');
                $message->to($data['email'], $data['name']);
                // $message->subject("Time to shine: Complete Round II | Web Developer @ConnectUp");
                // $message->subject("Congratulations!!! Your application has been shortlisted for Round-I | Web Developer @ConnectUp");
                // $message->subject("[Action Required] Complete the Round-1 Test by deadline");
                // $message->subject(" [Reminder] Clock is Ticking: Submit your Web Development Round-2 Task ");
                $message->subject(" [Update] Flexible deadline for Round - II | Web Developer @ConnectUp");

            });

            echo "Mail Sent to " . $user['name'] . " <" . $user['email'] . "> <BR>";
        }

        return 'Mail Sent';

    }
}
