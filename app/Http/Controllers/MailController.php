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
                "email": "officialkowsalya@gmail.com",
                "name": "Kowsalya"
            },
            {
                "email": "anirudh0502@gmail.com",
                "name": "Anirudh Aggarwal"
            },
            {
                "email": "sheikziya21@gmail.com",
                "name": "Fathima "
            },
            {
                "email": "pranitamagarde2000@gmail.com",
                "name": "Pranita Magarde"
            },
            {
                "email": "anknalitoriya@gmail.com",
                "name": "Ankna Litoriya"
            },
            {
                "email": "kathal.anushka@gmail.com",
                "name": "Anushka Kathal "
            },
            {
                "email": "mrbhupeshsharmaa@gmail.com",
                "name": "bhupesh sharma"
            },
            {
                "email": "aviaruna08@gmail.com",
                "name": "BHUVAN S BIRADAR"
            },
            {
                "email": "chaturvedigourav675@gmail.com",
                "name": "Gourav kumar chaturvedi"
            },
            {
                "email": "kanikagupta30398@gmail.comcom",
                "name": "Kanika gupta"
            },
            {
                "email": "tntmarketing2018@gmail.com",
                "name": "Avdesh Patidar"
            },
            {
                "email": "mu4013314@gmail.com",
                "name": "Mukesh Kumar uikey "
            },
            {
                "email": "clashroya4613@gmail.com",
                "name": "Mehtab Khan"
            },
            {
                "email": "anjaliupadhyay1866@gmail.com",
                "name": "Anjali Upadhyay"
            },
            {
                "email": "deepak512panwar@gmail.com",
                "name": "Deepak Panwar "
            },
            {
                "email": "satyambaniya789@gmail.com",
                "name": "Satyam Baniya"
            },
            {
                "email": "akashk12516@gmail.com",
                "name": "Akash kumar "
            },
            {
                "email": "ashonak@gmail.com",
                "name": "SHASHANK SHONAK"
            },
            {
                "email": "zaheershaik97042@gmail.com",
                "name": "Shaik zaheer"
            },
            {
                "email": "hariprakash9219@gmail.com",
                "name": "HARI PRAKASH"
            },
            {
                "email": "payalmanghnani11@gmail.com",
                "name": "Payal Manghnani"
            },
            {
                "email": "kkabdwal178@gmail.com",
                "name": "Kartik "
            },
            {
                "email": "chinnagarianil@gmail.com",
                "name": "Chinnagari Anil"
            },
            {
                "email": "devagrawal310@gmail.com",
                "name": "Dev Agrawal"
            },
            {
                "email": "mohitpardhi58@gmail.com",
                "name": "Mohit "
            },
            {
                "email": "prathamakkewar7@gmail.com",
                "name": "Pratham Akkewar"
            },
            {
                "email": "shasvat007mishra@gmail.com",
                "name": "Shasvat Mishra "
            },
            {
                "email": "harshitb2006@gmail.com",
                "name": "Harshit Bhandari"
            },
            {
                "email": "alpmuk2001@gmail.com",
                "name": "Yogita Singh"
            },
            {
                "email": "moharanasidheswar2001@gmail.com",
                "name": "Sidheswar Moharana"
            },
            {
                "email": "gab2021147@sicsr.ac.in",
                "name": "Gautam Bagra"
            },
            {
                "email": "ayushkumar2205@gmail.com",
                "name": "Ayush Kumar"
            },
            {
                "email": "soultoluene@gmail.com",
                "name": "Johnson Tolulope"
            },
            {
                "email": "arjundhilip38@gmail.com",
                "name": "S B Arjun Dhilip"
            },
            {
                "email": "segunadeogundesigns@gmail.com",
                "name": "Segun Adeogun"
            },
            {
                "email": "onwudiweebube0@gmail.com",
                "name": "Ebubechukwu Onwudiwe "
            },
            {
                "email": "joshuadiran2000@gmail.com",
                "name": "Oluwadiran Joshua Ireoluwa "
            },
            {
                "email": "onyewuchidaniel6@gmail.com",
                "name": "Onyewuchi Daniel"
            },
            {
                "email": "balogun1069@gmail.com",
                "name": "Abdulazeez Balogun"
            },
            {
                "email": "mustofaalameen54@gmail.com",
                "name": "Mustofa Al Ameen Mustafa"
            },
            {
                "email": "berniceyydesign@gmail.com",
                "name": "Oparah-ndu Chinaza Bernice "
            },
            {
                "email": "adeola19980@gmail.com",
                "name": "Opeyemi Adeola"
            },
            {
                "email": "dynamic1sam@gmail.com",
                "name": "Samson Sokoti Oluwabunmi"
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
            Mail::send('emails.hiring.design.task', $data, function ($message) use ($data) {
                $message->from('connectup.in@gmail.com', 'Team ConnectUp');
                $message->to($data['email'], $data['name']);
                // $message->subject("Time to shine: Complete Round II | Web Developer @ConnectUp");
                $message->subject("Congratulations!!! Your application has been shortlisted for Round-I | Graphic Designer @ConnectUp");
                // $message->subject("[Action Required] Complete the Round-1 Test by deadline");
                // $message->subject(" [Reminder] Clock is Ticking: Submit your Web Development Round-2 Task ");
                // $message->subject(" [Update] Flexible deadline for Round - II | Web Developer @ConnectUp");

            });

            echo "Mail Sent to " . $user['name'] . " <" . $user['email'] . "> <BR>";
        }

        return 'Mail Sent';

    }
}
