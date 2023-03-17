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
            [
                'title' => 'Working with Display Devices Arduino Workshop',
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
                'tags' => ['rgpv', 'electronics', 'arduino'],
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
