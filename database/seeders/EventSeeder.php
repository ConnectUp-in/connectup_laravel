<?php

namespace Database\Seeders;

use App\Models\Event;
use App\Models\User;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // title, slug, type, content, image, r_dates, e_dates, location, attachments, active, event_link, suspended, creator, creator_type, interests, tags, required_fields, additional_fields , created_at, updated_at

        $founder = User::where('username', 'founder')->first();

        $events = [
            // Event on How to make money with Blogging
            // [
            //     'title' => 'How to make money with Blogging',
            //     'slug' => 'how-to-make-money-with-blogging',
            //     'type' => 'w',
            //     'content' => '

            //     <p><span style="font-size:11pt"><span style="font-family:Arial"><span>You are probably asking yourself, &ldquo;how do I start a blog from scratch?&rdquo; or maybe you&#39;ve discovered the website and don&#39;t know how to get ranked. You should know that you don&#39;t need millions or even thousands of dollars to create a blog site and earn good money. In fact, there are a few steps that any individual can take so he or she can start a blog without financial restrictions. This is why; In this workshop, we will discuss &quot;How to write a high-ranking Blog from scratch for true beginners allowing them to become profitable Bloggers !&quot;</span></span></span></p>

            //         <p>&nbsp;</p>

            //         <p><span style="font-size:11pt"><span style="font-family:Arial"><span>In this workshop, we will discover</span></span></span></p>

            //         <p>&nbsp;</p>

            //         <ol>
            //             <li><span style="font-size:11pt"><span style="font-family:Arial"><span>What is a blog?</span></span></span></li>
            //             <li><span style="font-size:11pt"><span style="font-family:Arial"><span>How to set up your blog site in 5 minutes?</span></span></span></li>
            //             <li><span style="font-size:11pt"><span style="font-family:Arial"><span>What are the secrets to ranking your blog high?</span></span></span></li>
            //             <li><span style="font-size:11pt"><span style="font-family:Arial"><span>How to write a High Ranking Blog from scratch?</span></span></span></li>
            //             <li><span style="font-size:11pt"><span style="font-family:Arial"><span>How to get traffic on your blog site?</span></span></span></li>
            //             <li><span style="font-size:11pt"><span style="font-family:Arial"><span>Ways to earn money from your blog site?</span></span></span></li>
            //             <li><span style="font-size:11pt"><span style="font-family:Arial"><span>How to promote your blog site?</span></span></span></li>
            //             <li><span style="font-size:11pt"><span style="font-family:Arial"><span>And a lot more!</span></span></span></li>
            //         </ol>

            //         <p>&nbsp;</p>

            //         <p><span style="font-size:11pt"><span style="font-family:Arial"><span>Register now to be part of this workshop.</span></span></span></p>

            //         <p></p>

            //     ',
            //     'image' => '/assets/defaults/eventimage.png',
            //     'r_dates' => ['2022-08-25 12:00:00', '2022-09-05 12:00:00'],
            //     'e_dates' => ['2022-08-25 12:00:00', '2022-09-05 12:00:00'],
            //     'location' => 'Youtube & Streamyard',
            //     'attachments' => [],
            //     'active' => true,
            //     'suspended' => false,
            //     'creator' => $founder->id,
            //     'creator_type' => 'e',
            //     'interests' => [1, 2, 3],
            //     'tags' => ['blogging', 'money', 'youtube'],
            //     'required_fields' => ["name", "email", "contact", "college"],
            //     'additional_fields' => [
            //         [
            //             'title' => 'Whatsapp Contact Number',
            //             'identifier' => 'field1',
            //             'type' => 'text',
            //             'required' => true,
            //         ],
            //         [
            //             'title' => 'Anything else you want to share',
            //             'identifier' => 'field2',
            //             'type' => 'textarea',
            //             'required' => false,
            //         ],
            //     ],
            //     'created_at' => now(),
            //     'updated_at' => now(),
            // ],
            [
                'title' => 'Working with Display Devices - Arduino Workshop',
                'slug' => 'Working-with-Display-Devices-Arduino-Workshop',
                'type' => 'w',
                'content' => '
                <p><span style="font-size:11pt"><span style="font-family:Arial"><span style="color:#000000">Hello Innovators!🌟🌟</span></span></span><br />
                <span style="font-size:11pt"><span style="font-family:Arial"><span style="color:#000000">&ldquo;Exploring the World of Display Devices: Illuminate Your Knowledge in our Electronic Workshop!&rdquo;</span></span></span></p>

                <p><span style="font-size:11pt"><span style="font-family:Arial"><span style="color:#000000">Presenting to you the most captivating platform, Innovations@EC by the Department of Electronics and Communication UIT RGPV. &nbsp;We are conducting a workshop on &nbsp;&ldquo;Working with Display Devices - Arduino Workshop&rdquo;.🤖</span></span></span></p>

                <p><span style="font-size:11pt"><span style="font-family:Arial"><span style="color:#000000">Grab the opportunity to get an insight into what an Arduino is and its functioning. Gain the hands-on experience of working with an Arduino, tinkering, prototyping and much more.&nbsp;</span></span></span><br />
                <span style="font-size:11pt"><span style="font-family:Arial"><span style="color:#000000">Date: 12th September 2022<br />
                Venue: EC Conference Hall</span></span></span></p>

                <p><span style="font-size:11pt"><span style="font-family:Arial"><span style="color:#000000">In this Workshop, You will be acquainted with the following:&nbsp;</span></span></span></p>

                <ul>
                    <li><span style="font-size:11pt"><span style="font-family:Arial"><span style="color:#000000">Arduino Uno</span></span></span></li>
                    <li><span style="font-size:11pt"><span style="font-family:Arial"><span style="color:#000000">Arduino specific basics&nbsp;</span></span></span></li>
                    <li><span style="font-size:11pt"><span style="font-family:Arial"><span style="color:#000000">Building circuits on breadboards.</span></span></span></li>
                    <li><span style="font-size:11pt"><span style="font-family:Arial"><span style="color:#000000">Controlling LEDs&nbsp;</span></span></span></li>
                    <li><span style="color:#000000; font-family:Arial"><span style="font-size:14.6667px">Various Projects using Arduino</span></span></li>
                </ul>
                ',
                'image' => '/assets/defaults/events/research.jpg',
                'r_dates' => ['2023-03-14 12:00:00', '2023-03-17 12:00:00'],
                'e_dates' => ['2023-03-17 14:00:00', '2023-03-17 16:30:00'],
                'location' => 'Conference Hall, EC Department, RGPV Bhopal (462033)',
                'attachments' => [],
                'active' => true,
                'suspended' => false,
                'creator' => $founder->id,
                'creator_type' => 'e',
                'interests' => [1, 2, 3],
                'tags' => [, 'rgpv', 'electronics', 'arduino'],
                'required_fields' => ["college"],
                'additional_fields' => [
                    [
                        'title' => 'Whatsapp Contact Number',
                        'identifier' => 'field1',
                        'type' => 'text',
                        'required' => true,
                    ],
                    [
                        'title' => 'Academic Branch',
                        'identifier' => 'field2',
                        'type' => 'text',
                        'required' => true,
                    ],
                    [
                        'title' => 'Semester',
                        'identifier' => 'field3',
                        'type' => 'text',
                        'required' => true,
                    ],
                    [
                        'title' => 'Why you want to join this workshop?',
                        'identifier' => 'field4',
                        'type' => 'textarea',
                        'required' => false,
                    ],
                ],
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ];

        foreach ($events as $event) {
            Event::create($event);
        }
    }
}
