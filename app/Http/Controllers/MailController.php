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
        // yashgulhane99@gmail.com    Yash
        // patelmuskan560@gmail.com    Muskan Patel
        $users = [
            // ["name" => "Rahul Karda", "email" => "rahulkarda2002@gmail.com"],
            // ["name" => "Sudhanshu Tiwari", "email" => "sudhanshut2017.st@gmail.com"],
            // ["name" => "Mayank Ghatpande", "email" => "mayankghatpande10@gmail.com"],
            // ["name" => "Akshay Bagde", "email" => "akshaybagde35@gmail.com"],
            // ["name" => "Vansh Saxena", "email" => "vanshsaxena26@gmail.com"],
            // ["name" => "Yogesh Magarde", "email" => "yogeshmagarde123@gmail.com"],
            // ["name" => "Chetna Patel", "email" => "patelaero100@gmail.com"],
            // ["name" => "Chitransha Varshney", "email" => "chitranshav@gmail.com"],
            // ["name" => "Himanshu Gupta", "email" => "hg343860@gmail.com"],
            // ["name" => "Shivansh Gupta", "email" => "shivanshkush254@gmail.com"],
            // ["name" => "Kush Gupta", "email" => "mekushgupta@gmail.com"],
            // ["name" => "Nikhil Patil", "email" => "nikhilpatil18012004@gmail.com"],
            // ["name" => "priyanshu mundra", "email" => "Mundrapriyanshu15@gmail.com"],
            // ["name" => "Sunil Kumar", "email" => "sunilkumar088839@gmail.com"],
            // ["name" => "Rehan Rawat", "email" => "rehanrawat100@gmail.com"],
            // ["name" => "Jaideep Singh", "email" => "jaideep320@gmail.com"],
            // ["name" => "Kritika Taank", "email" => "taank.kritika@gmail.com"],
            // ["name" => "DEVANSHU SAXENA", "email" => "devanshu.2125csme@kiet.edu"],
            // ["name" => "Alpana Choubey", "email" => "choubeyalpana545@gmail.com"],
            // ["name" => "Atharva Gade", "email" => "atharvagade.128@gmail.com"],
            // ["name" => "Pranay Pawar", "email" => "pranay.pawar.58989@gmail.com"],
            // ["name" => "Ravi Bhojane", "email" => "ravi.d.lord@gmail.com"],
            // ["name" => "Aditya jain", "email" => "ajkings007@gmail.com"],
            // ["name" => "Nithan Kambadal", "email" => "nuthanjogi@gmail.com"],
            // ["name" => "Aman Sagar", "email" => "luckysagar6265@gmail.com"],
            // ["name" => "K vamshi", "email" => "kasaramvamshi7143@gmail.com"],
            // ['name' => 'Hemant Gupta', 'email' => 'hemant9111118581@gmail.com'],
            // ['name' => 'Yash Daga', 'email' => 'yash.20bce7323@vitap.ac.in'],
            // ['name' => 'Shivam Yadav', 'email' => 'itsmeshivam00@gmail.com'],
            // ['name' => 'Santosh P', 'email' => 'purisanthosh2002@gmail.com'],
            // ['name' => 'ANUJ KUSHWAHA', 'email' => 'anuj.092775@gmail.com'],
            // ['name' => 'Ansh Sharma', 'email' => 'kushansh0904@gmail.com'],
            // ['name' => 'Anushka Kathal', 'email' => 'kathal.anushka@gmail.com'],
            // ['name' => 'ABHISHEK SINGH', 'email' => 'abhishk2181@gmail.com'],
            // ['name' => 'Ishan Marwadya', 'email' => 'ishanmarwadya02@gmail.com'],
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
                $message->subject('Congratulations!!! You are just one step away from joining ConnectUp');
            });
        }

        return 'Mail Sent';

    }
}
