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
                "email": "palakkothari267@gmail.com",
                "name": "Palak kothari "
            },
            {
                "email": "mustafapanjiwala@gmail.com",
                "name": "Mustafa Panjiwala "
            },
            {
                "email": "cserpunit@gmail.com",
                "name": "Punit Verma"
            },
            {
                "email": "manea3610@gmail.com",
                "name": "Aditya"
            },
            {
                "email": "charchitmishra01@gmail.com",
                "name": "Charchit Mishra"
            },
            {
                "email": "raghuwanshidhruv666@gmail.com",
                "name": "Dhruv Raghuwanshi"
            },
            {
                "email": "devasya23tech@gmail.com",
                "name": "Devasya"
            },
            {
                "email": "akanshasakhre@gmail.com",
                "name": "Akansha sakhre "
            },
            {
                "email": "samriddhishukla3303@gmail.com",
                "name": "Samriddhi Shukla "
            },
            {
                "email": "ayushgalphat@gmail.com",
                "name": "Ayush Galphat "
            },
            {
                "email": "er.amritpal17@gmail.com",
                "name": "Amritpal Singh"
            },
            {
                "email": "kumaarsiddhesh@gmail.com",
                "name": "Siddhesh Kumar "
            },
            {
                "email": "viditsharma818@gmail.com",
                "name": "Vidit Parashar "
            },
            {
                "email": "patel.yash5006@gmail.com",
                "name": "Yashwardhan Singh patel "
            },
            {
                "email": "harshsoni.softvisionbca@gmail.com",
                "name": "Harsh Soni"
            },
            {
                "email": "mrsagar850@gmail.com",
                "name": "Sagar neeraj "
            },
            {
                "email": "sanskritirit123@gmail.com",
                "name": "Sanskriti Rathore "
            },
            {
                "email": "augashish4@gmail.com",
                "name": "Ashish Kumar "
            },
            {
                "email": "yuvraj.malviya@cdgi.edu.in",
                "name": "Yuvraj Malviya"
            },
            {
                "email": "himanshunarware77@gmail.com",
                "name": "Himanshu Narware"
            },
            {
                "email": "shailendrasahu5896@gmail.com",
                "name": "Shailendra "
            },
            {
                "email": "suyashmkabra@gmail.com",
                "name": "Suyash Manoj Kabra"
            },
            {
                "email": "vishwaspatil9146@gmail.com",
                "name": "Vishwas Patil "
            },
            {
                "email": "mishrasujal64@gmail.com",
                "name": "Sujal Mishra "
            },
            {
                "email": "rohit28sagar@gmail.com",
                "name": "Sagar dubey"
            },
            {
                "email": "developerrishisahu@gmail.com",
                "name": "Rishi Sahu"
            },
            {
                "email": "jksinghthegreat@gmal.com",
                "name": "Jaskirat Singh"
            },
            {
                "email": "kirtisaraf247@gmail.com",
                "name": "Kirti Saraf"
            },
            {
                "email": "rahulniketkhatri@gmail.com",
                "name": "Rahul Khatri"
            },
            {
                "email": "gladysfernandes21@gmail.com",
                "name": "Gladys Hazel Fernandes"
            },
            {
                "email": "pratikshakirdat4@gmail.com",
                "name": "Pratiksha Kirdat "
            },
            {
                "email": "abhigns369@gmail.com",
                "name": "Abhishek Dubey"
            },
            {
                "email": "arihantguptaheadboy@gmail.com",
                "name": "Arihant Gupta"
            },
            {
                "email": "rajivpatkar01@gmail.com",
                "name": "Rajiv Jitendra Patkar "
            },
            {
                "email": "rockstarabhi736@gmail.com",
                "name": "Abhishek kumar singh"
            },
            {
                "email": "amanmishra151202@gmail.com",
                "name": "Aman Mishra "
            },
            {
                "email": "piyushbhavarjar@gmail.com",
                "name": "Piyush bhavarjar"
            },
            {
                "email": "am6840957@gmail.com",
                "name": "Anurag Mishra "
            },
            {
                "email": "miglanijatin26@gmail.com",
                "name": "Jatin Miglani"
            },
            {
                "email": "shivamvts05@gmail.com",
                "name": "Shivam kumar"
            },
            {
                "email": "vishnujyothivmallya@gmail.com",
                "name": "V Vishnu Jyothi "
            },
            {
                "email": "vaibhavtowardsdawn@gmail.com",
                "name": "Vaibhav Krishna S "
            },
            {
                "email": "aryansingh22070@gmail.com",
                "name": "Aryan Singh"
            },
            {
                "email": "deepeshbhardwaj58@gmail.com",
                "name": "Deepesh Bhardwaj"
            },
            {
                "email": "vermaakshay2204@gmail.com",
                "name": "Akshay Verma"
            },
            {
                "email": "lky9888@gmail.com",
                "name": "LOVKUSH"
            },
            {
                "email": "yashsaini24@gmail.com",
                "name": "Yash Saini"
            },
            {
                "email": "nikhiltiwari1729@gmail.com",
                "name": "Nikhil Kumar Tiwari"
            },
            {
                "email": "synosuid69@gmail.com",
                "name": "Deepanshu Barve"
            },
            {
                "email": "nknehanisha@gmail.com",
                "name": "Neha Kumari "
            },
            {
                "email": "kaurishnoor20@gmail.com",
                "name": "Ishnoor Kaur "
            },
            {
                "email": "20bei069@ietdavv.edu.in",
                "name": "Yogesh Chouhan"
            },
            {
                "email": "semwaldeepanshu@gmail.com",
                "name": "Deepanshu"
            },
            {
                "email": "nvs0108@gmail.com",
                "name": "Nitin Vishwakarma"
            },
            {
                "email": "opoojakumari3156@gmail.com",
                "name": "Pooja Kumari "
            },
            {
                "email": "davejay3002@gmail.com",
                "name": "Jay Dave"
            },
            {
                "email": "peacefulminds012@gmail.com",
                "name": "Arunesh kushwaha "
            },
            {
                "email": "amitsinghbadram@gmail.com",
                "name": "Amit Kumar "
            },
            {
                "email": "insiyahusain3@gmail.com",
                "name": "Insiya Husain "
            },
            {
                "email": "ameeshapatel105@gmail.com",
                "name": "Ameesha Patel"
            },
            {
                "email": "daskumarutkarsh@gmail.com",
                "name": "Utkarsh Kumar "
            },
            {
                "email": "ajay.kusekar2003@gmail.com",
                "name": "Ajay Digambar kusekar "
            },
            {
                "email": "diyabansal65@gmail.com",
                "name": "diya"
            },
            {
                "email": "gutkarshbalbir23@gmail.com",
                "name": "Utkarsh Gupta"
            },
            {
                "email": "murlidharkawadkar12@gmail.com",
                "name": "Murlidhar kawadkar"
            },
            {
                "email": "email.priyanshu.events@gmail.com",
                "name": "Priyanshu Tandon"
            },
            {
                "email": "amitpande1008@gmail.com",
                "name": "Pandey Amit "
            },
            {
                "email": "abhaycri9@gmail.com",
                "name": "Abhay Raj Sen "
            },
            {
                "email": "rishabhmishra1705@gmail.com",
                "name": "Rishabh Mishra "
            },
            {
                "email": "psrcofficial10@gmail.com",
                "name": "Pradeepto Sarkar"
            },
            {
                "email": "emmanuelesin950@gmail.com",
                "name": "Esin Emmanuel William "
            },
            {
                "email": "aryanankit2611@gmail.com",
                "name": "Ankit Kumar"
            },
            {
                "email": "bopcheshreeja@gmail.com",
                "name": "Shreeja Bopche "
            },
            {
                "email": "prathameshbhor000@gmail.com",
                "name": "Prathamesh Santosh Bhor"
            },
            {
                "email": "ahujakashish2003@gmail.com",
                "name": "Kashish ahuja"
            },
            {
                "email": "vishalvermao.pcm121@gmail.com",
                "name": "Vishal Verma"
            },
            {
                "email": "nayanika.mishra02@gmail.com",
                "name": "Nayanika Mishra"
            },
            {
                "email": "sstymrj@gmail.com",
                "name": "SATYAM RAJ"
            },
            {
                "email": "khushikumari2111@gmail.com",
                "name": "Khushi Kumari "
            },
            {
                "email": "swetika21102@iiitnr.edu.in",
                "name": "Swetika"
            },
            {
                "email": "aniketannu1122@gmail.com",
                "name": "Aniket Verma "
            },
            {
                "email": "hargunbit1001@gmail.com",
                "name": "Hargun Singh"
            },
            {
                "email": "adityapulast16@gmail.com",
                "name": "Aditya Pulast"
            },
            {
                "email": "harshprogrammer782@gmail.com",
                "name": "Harsh Vishwakarma"
            }
        ]';

        // $usersjson = '[
        //     {
        //         "email": "harshprogrammer782@gmail.com",
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
            Mail::send('emails.megaevent.firstround', $data, function ($message) use ($data) {
                $message->from('connectup.in@gmail.com', 'Team ConnectUp');
                $message->to($data['email'], $data['name']);
                $message->subject("Congratulations!!! Your application has been shortlisted for Round-I");
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
