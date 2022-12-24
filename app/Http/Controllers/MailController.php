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
                "email": "lingeshblogger0612@gmail.com",
                "name": "Love ngesh"
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
                "name": "Sarthak Tyagi"
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
                "email": "prathamakkewar7@gmail.com",
                "name": "Pratham Akkewar"
            },
            {
                "email": "chetanpal315@gmail.com",
                "name": "Chetan Pal"
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
                "name": "Somil Agrawal"
            },
            {
                "email": "utkarsharjariyaofficial@gmail.com",
                "name": "Utkarsh Arjariya "
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
                "email": "pathraberavishakar@gmail.com",
                "name": "Saurabh pathrabe"
            },
            {
                "email": "veddikushagra2702@gmail.com",
                "name": "Kushagra Paliwal"
            },
            {
                "email": "nabeelahammedpckdy@gmail.com",
                "name": "Nabeel Ahamed "
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
                "email": "pummys480@gmail.com",
                "name": "Pummy Baby"
            },
            {
                "email": "navneetlodhi73@gmail.com",
                "name": "Navneet lodhi "
            },
            {
                "email": "rohit7067842611@gmail.com",
                "name": "Rohit Chakrawarti"
            },
            {
                "email": "pavanverma057@gmail.com",
                "name": "Pawan Verma"
            },
            {
                "email": "dharamveersingh1715@gmail.com",
                "name": "Dharamveer Singh "
            },
            {
                "email": "boradesanket13@gmail.com",
                "name": "Sanket Borade"
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
            Mail::send('emails.testreminder', $data, function ($message) use ($data) {
                $message->from('connectup.in@gmail.com', 'Team ConnectUp');
                $message->to($data['email'], $data['name']);
                $message->subject("[Action Required] Complete the Round-1 Test by deadline");
            });

            echo "Mail Sent to " . $user['name'] . " <" . $user['email'] . "> <BR>";
        }

        return 'Mail Sent';

    }
}
