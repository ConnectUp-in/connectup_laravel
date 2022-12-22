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
                "email": "spayasi78@gmail.com",
                "name": "Santosh kumar payasi"
            },
            {
                "email": "arjundhilip38@gmail.com",
                "name": "S B Arjun Dhilip"
            },
            {
                "email": "lingeshblogger0612@gmail.com",
                "name": "Love ngesh"
            },
            {
                "email": "kanakvishwakarma000@gmail.com",
                "name": "Kanak vishwakarma"
            },
            {
                "email": "aryangupta98711@gmail.com",
                "name": "aryan gupta"
            },
            {
                "email": "amansinghkushwaha2003@gmail.com",
                "name": "Aman Kumar Singh Kushwaha"
            },
            {
                "email": "rahulkarda2002@gmail.com",
                "name": "Rahul Karda"
            },
            {
                "email": "saharshsaxena007@gmail.com",
                "name": "Saharsh Saxena"
            },
            {
                "email": "abirbhattacharya82@gmail.com",
                "name": "Abir Bhattacharya"
            },
            {
                "email": "pbansod96@gmail.com",
                "name": "Aman Bansod"
            },
            {
                "email": "ashonak@gmail.com",
                "name": "SHASHANK SHONAK"
            },
            {
                "email": "official.yadvendra@gmail.com",
                "name": "Yadvendra "
            },
            {
                "email": "viditsharma818@gmail.com",
                "name": "Vidit Parashar "
            },
            {
                "email": "fs20if022@gmail.com",
                "name": "Dhruv Pralhad Paste "
            },
            {
                "email": "vineetksc@gmail.com",
                "name": "Vineet Singh Chauhan"
            },
            {
                "email": "tanmaywaykar17@gmail.com",
                "name": "Tanmay Waykar"
            },
            {
                "email": "sanikadeshmukh353@gmail.com",
                "name": "Sanika Rajesh Deshmukh "
            },
            {
                "email": "sarthak2002tyagi@gmail.com",
                "name": "Sarthak Tyagi "
            },
            {
                "email": "prempandey812743@gmail.com",
                "name": "Prem Prakash Pandey"
            },
            {
                "email": "loveguptaofficials@gmail.com",
                "name": "love gupta"
            },
            {
                "email": "dhruvabhattacharya130102@gmail.com",
                "name": "Dhruva Bhattacharya"
            },
            {
                "email": "sandeshv414@gmail.com",
                "name": "Sandesh Verma"
            },
            {
                "email": "dharmishthad260@gmail.com",
                "name": "Dharmishtha patwariya "
            },
            {
                "email": "abhinavarya731@gmail.com",
                "name": "Abhinav Arya "
            },
            {
                "email": "mudassir222001@gmail.com",
                "name": "Mohammed Mudassir ullah Khan"
            },
            {
                "email": "prathampanchal52@gmail.com",
                "name": "Pratham Jagdish Panchal "
            },
            {
                "email": "adarshguptamalawar@gmail.com",
                "name": "Adarsh Gupta"
            },
            {
                "email": "aadishrivastava13@gmail.com",
                "name": "Aadi Shrivastava "
            },
            {
                "email": "emmanuelesin950@gmail.com",
                "name": "Emmanuel William Esin"
            },
            {
                "email": "amanbirle@gmail.com",
                "name": "Aman birle "
            },
            {
                "email": "shakyaaman0136@gmail.com",
                "name": "Aman Shakya"
            },
            {
                "email": "satishdwivedi132@gmail.com",
                "name": "Satish Kumar Dwivedi"
            },
            {
                "email": "kapiljadon5849@gmail.com",
                "name": "Kapil Jadon "
            },
            {
                "email": "prathamakkewar7@gmail.com",
                "name": "Pratham Akkewar"
            },
            {
                "email": "kachamsatwika@gmail.com",
                "name": "satwika Kacham"
            },
            {
                "email": "chetanpal315@gmail.com",
                "name": "Chetan Pal"
            },
            {
                "email": "kongarapiaashamadhuri@gmail.com",
                "name": "Aasha madhuri Kongarapi"
            },
            {
                "email": "pradyumnchandore7@gmail.com",
                "name": "Pradyumn Chandore"
            },
            {
                "email": "neetudhakad23@gmail.com",
                "name": "Neetu Dhakad"
            },
            {
                "email": "kanishkasinha154@gmail.com",
                "name": "Kanishka sinha"
            },
            {
                "email": "chehaksharma1603@gmail.com",
                "name": "Chehak Sharma"
            },
            {
                "email": "acipjibronms@gmail.com",
                "name": "JIBRON ACIP J"
            },
            {
                "email": "sadhna24io054@satiengg.in",
                "name": "Sadhna kushwaha"
            },
            {
                "email": "somilagrawal1510@gmail.com",
                "name": "Somil Agrawal "
            },
            {
                "email": "akshatmishra782@gmail.com",
                "name": "Akshat Mishra "
            },
            {
                "email": "alamshah1617@gmail.com",
                "name": "Shah Alam"
            },
            {
                "email": "utkarsharjariyaofficial@gmail.com",
                "name": "Utkarsh Arjariya "
            },
            {
                "email": "guptasurajkumar577@gmail.com",
                "name": "Suraj Kumar Gupta"
            },
            {
                "email": "dhineshwaran02@gmail.com",
                "name": "Dhineshwaran C"
            },
            {
                "email": "salonisuman06@gmail.com",
                "name": "SALONI SUMAN"
            },
            {
                "email": "pawarankit.jec@gmail.com",
                "name": "ANKIT PAWAR"
            },
            {
                "email": "rrsaggarwal@gmail.com",
                "name": "Roshni Aggarwal"
            },
            {
                "email": "pathraberavishakar@gmail.com",
                "name": "Saurabh pathrabe"
            },
            {
                "email": "veddikushagra2702@gmail.com",
                "name": "Kushagra Paliwal"
            },
            {
                "email": "sonamaafremah@gmail.com",
                "name": "Sonam Aafre "
            },
            {
                "email": "nabeelahammedpckdy@gmail.com",
                "name": "Nabeel Ahamed "
            },
            {
                "email": "ashwinihinge6666@gmail.com",
                "name": "Ashwini Hinge"
            },
            {
                "email": "shrutisingh04503@gmail.com",
                "name": "Shruti Singh"
            },
            {
                "email": "nitishapp9455@gmail.com",
                "name": "NITISH KUMAR UPADHYAY"
            },
            {
                "email": "anushkayadav7987@gmail.com",
                "name": "Anushka Yadav"
            },
            {
                "email": "piyushpjani@gmail.com",
                "name": "PIYUSH JANI"
            },
            {
                "email": "jitendraaakde8959@gmail.com",
                "name": "Jitendra Aakde "
            },
            {
                "email": "jitendraaakde8959@gmail.com",
                "name": "Jitendra Aakde "
            },
            {
                "email": "pummys480@gmail.com",
                "name": "Pummy Baby"
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
                $message->subject("Congratulations!!! You are just one step away from joining ConnectUp");
            });
        }

        return 'Mail Sent';

    }
}
