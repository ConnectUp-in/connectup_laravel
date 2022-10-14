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

        // Rahul Karda    rahulkarda2002@gmail.com
        // Sudhanshu Tiwari    sudhanshut2017.st@gmail.com
        // Mayank Ghatpande     mayankghatpande10@gmail.com
        // Akshay Bagde     akshaybagde35@gmail.com
        // Vansh Saxena    vanshsaxena26@gmail.com
        // Yogesh Magarde     yogeshmagarde123@gmail.com
        // Chetna Patel    patelaero100@gmail.com
        // Chitransha Varshney    chitranshav@gmail.com
        // Himanshu Gupta     hg343860@gmail.com
        // Shivansh Gupta    shivanshkush254@gmail.com
        // Kush Gupta    mekushgupta@gmail.com
        // Nikhil Patil    nikhilpatil18012004@gmail.com
        // priyanshu mundra    Mundrapriyanshu15@gmail.com
        // Sunil Kumar     sunilkumar088839@gmail.com
        // Rehan Rawat    rehanrawat100@gmail.com
        // Jaideep Singh    jaideep320@gmail.com
        // Kritika Taank    taank.kritika@gmail.com
        // DEVANSHU SAXENA    devanshu.2125csme@kiet.edu
        // Alpana Choubey     choubeyalpana545@gmail.com
        // Atharva Gade    atharvagade.128@gmail.com
        // Pranay Pawar    pranay.pawar.58989@gmail.com
        // Ravi Bhojane     ravi.d.lord@gmail.com
        // Aditya jain     ajkings007@gmail.com
        // Nithan Kambadal    nuthanjogi@gmail.com
        // Aman Sagar    luckysagar6265@gmail.com
        // K vamshi     kasaramvamshi7143@gmail.com
        $users = [
            [
                'name' => 'Harsh Vishwakarma',
                'email' => 'harshprogrammer782@gmail.com',
            ],
        ];

        foreach ($users as $user) {
            $data = [
                'name' => $user['name'],
                'email' => $user['email'],
            ];
            Mail::send('emails.teamjoin', $data, function ($message) use ($data) {
                $message->from('connectup.in@gmail.com', 'Team ConnectUp');
                $message->to($data['email'], $data['name']);
                $message->subject('Congratulations!!! You are just one step away from joining ConnectUp');
            });
        }

        return 'Mail Sent';

    }
}
