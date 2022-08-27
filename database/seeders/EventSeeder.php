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
            [
                'title' => 'How to make money with Blogging',
                'slug' => 'how-to-make-money-with-blogging',
                'type' => 'w',
                'content' => '<p>This is a simple tutorial on how to make money with blogging. You can read this tutorial on <a href="https://www.youtube.com/watch?v=_q-Q-q-Q-Q">YouTube</a>.</p>',
                'image' => '',
                'r_dates' => ['2022-08-25 12:00:00', '2022-09-05 12:00:00'],
                'e_dates' => ['2022-08-25 12:00:00', '2022-09-05 12:00:00'],
                'location' => 'Youtube & Streamyard',
                'attachments' => [],
                'active' => true,
                'suspended' => false,
                'creator' => $founder->id,
                'creator_type' => 'e',
                'interests' => [1, 2, 3],
                'tags' => ['blogging', 'money', 'youtube'],
                'required_fields' => ["name", "email", "contact", "college"],
                'additional_fields' => [],
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ];

        foreach ($events as $event) {
            Event::create($event);
        }
    }
}
