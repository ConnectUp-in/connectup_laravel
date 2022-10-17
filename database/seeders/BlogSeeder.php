<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\User;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $founder = User::where('username', 'founder')->first();

        // $table->string('title');
        // $table->longText('content');
        // $table->string('creator');
        // $table->string('creator_type');
        // $table->integer('category')->nullable();
        // $table->json('attachments')->nullable();
        // $table->string('slug');
        // $table->string('tags')->nullable();
        // $table->integer('readtime')->nullable();
        // $table->string('image');

        $events = [
            [
                'title' => 'Techfest - IIT Bombay Workshop',
                'slug' => 'Techfest-IIT-Bombay-Workshop',
                'content' => '
                <p><span style="font-size:11pt"><span style="font-family:Arial"><span style="color:#000000">Hey Innovators 🚀🚀<br />
                Techfest, IIT Bombay, Asia&#39;s largest Science and Technology Festival, is organizing a workshop at UIT RGPV with Innovations@EC.</span></span></span></p>

                <p><span style="font-size:11pt"><span style="font-family:Arial"><span style="color:#000000">Grab the opportunity to learn Robotics and dive into its abstraction. This one-day workshop will aid in learning robotics that can help in engineering fields and explore technology to the best extent.🤖</span></span></span></p>

                <p><span style="font-size:11pt"><span style="font-family:Arial"><span style="color:#000000">This workshop will help in the upcoming magnificent nationwide Zonal Competition, Technorion&#39;22 in Bhopal. The top 5 teams from the center will get direct entry to compete against each other for the final Techfest Trophy in IIT Bombay.</span></span></span></p>

                <p><span style="font-size:11pt"><span style="font-family:Arial"><span style="color:#000000">Speaker of the Event: Mr. Arpit Soni, Center Head &amp; Certified Trainer in Robonauts India.<br />
                Date:19 September<br />
                Venue: RGPV Conference Hall</span></span></span></p>

                <p><span style="font-size:11pt"><span style="font-family:Arial"><span style="color:#000000">Here is the chance to begin your journey of competing in unique and breathtaking challenges. Hurry up and register now.</span></span></span></p>



                ',
                'image' => '/assets/defaults/events/techfest.jpg',
                'attachments' => [],
                'creator' => $founder->id,
                'creator_type' => 'e',
                'tags' => ['techfest', 'electronics', 'robotics'],
                'readtime' => 5,
            ],

        ];

        foreach ($blogs as $blog) {
            Blog::create($blog);
        }
    }
}
