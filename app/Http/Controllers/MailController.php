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
        $users = [
            // ["name" => " Kowsalya", "email" => "officialkowsalya@gmail.com"],
            // ["name" => "Saksham Chandola", "email" => "chandolasaksham@gmail.com"],
            // ["name" => "Ankna Litoriya", "email" => "anknalitoriya@gmail.com"],
            // ["name" => "Rohan Sharma", "email" => "ro3498727@gmail.com"],
            // ["name" => "Anushka Kathal", "email" => "kathal.anushka@gmail.com"],
            // ["name" => "Faizanuddin Sheikh", "email" => "fusheikh11@gmail.com"],
            // ["name" => "Harikishan TK", "email" => "harikishantk@gmail.com"],
            // ["name" => "Ankur Kumar", "email" => "ankurkumar4715@gmail.com"],
            // ["name" => "Rahul Karda", "email" => "rahulkarda2002@gmail.com"],
            // ["name" => "Abhiram H SIVAM", "email" => "abhiramhsivam@gmail.com"],
            // ["name" => "Ishan Marwadya", "email" => "ishanmarwadya02@gmail.com"],
            // ["name" => "Ravi Bhojane", "email" => "ravi.d.lord@gmail.com"],
            // ["name" => "Vansh Saxena", "email" => "vanshsaxena26@gmail.com"],
            // ["name" => "Sandesh Verma", "email" => "sandeshv414@gmail.com"],
            // ["name" => "Aasha madhuri", "email" => "kongarapiaashamadhuri@gmail.com"],
            // ["name" => "Md Imteyaz Ahmad", "email" => "imteyazahmad5426@gmail.com"],
            // ['name' => 'Ryan Stonebanks', 'email' => 'ryan.stonebanks@gmail.com'],
            // ['name' => 'Krupesh Vithlani', 'email' => 'krupesh123vithlani@gmail.com'],
            ['name' => 'Harsh Vishwakarma', 'email' => 'harshprogrammer782@gmail.com'],
        ];

        foreach ($users as $user) {
            $data = [
                'name' => $user['name'],
                'email' => $user['email'],
            ];
            Mail::send('emails.teamjoin', $data, function ($message) use ($data) {
                $message->from('connectup.in@gmail.com', 'Team ConnectUp');
                $message->to($data['email'], $data['name']);
                $message->subject("Congratulations!!! You are just one step away from joining ConnectUp");
            });
        }

        return 'Mail Sent';

    }
}
