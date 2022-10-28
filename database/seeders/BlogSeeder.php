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

        $blogs = [
            [
                'title' => 'Elon Musk is now in charge of Twitter and has fired CEO Parag Agrawal, as well as several top executives',
                'slug' => 'elonmusk-fires-twitter-ceo-parag-agrawal',
                'content' => '
                <p>According to media sources, Elon Musk finalized his takeover of Twitter and sacked a number of top executives hours before the deadline set by the court.</p>

                <p><br />
                Elon Musk is now in charge of operations at Twitter following the departures of its CEO Parag Agrawal and chief financial officer Ned Segal, according to US media.</p>

                <p>Both of them, according to sources cited by CNBC, won&#39;t be coming back, and Vijaya Gadde, the head of legal policy, trust, and safety who decided to block Trump&#39;s account, was also sacked, according to the Washington Post.</p>

                <p>The 51-year-old tycoon had until October 28 to finish his $44 billion acquisition deal, failing which he would be tried in November.</p>

                <p>Musk had indicated an interest in purchasing the microblogging platform in April, but he later withdrew his offer in May.</p>

                <p>He later changed his mind once more after Twitter filed a lawsuit to have Musk finalize the agreement.</p>

                <p>This week, Musk has been meeting with Twitter staff; he will likely speak to them on Friday.</p>

                <p>According to the New York Stock Exchange website, Friday&#39;s trading in the shares of the social media platform has been halted.</p>

                <p>Musk previously claimed that he purchased Twitter to benefit humanity and create &quot;a shared digital town square for civilization.&quot;</p>

                <p>There is currently a significant risk that social media will fragment into far-right and far-left echo chambers that incite more hatred and split our society, according to Musk.</p>

                <p>&quot;Many traditional media outlets have fueled and catered to those polarised extremes in the constant search of clicks since they believe that is what brings in the money, but, in doing so, the chance for dialogue is lost,&quot; Musk stated.</p>

                <p>The richest man in the world tweeted a video of himself carrying a kitchen sink into Twitter&#39;s San Francisco headquarters earlier this week with the comment, &quot;Let that sink in!&quot;</p>

                <p>He also altered the name of his Twitter account to &quot;Chief Twit.&quot;</p>

                <p>&nbsp;</p>
                ',
                'image' => '/assets/defaults/blogs/twitter.jpg',
                'attachments' => [],
                'creator' => $founder->id,
                'creator_type' => 'e',
                'category' => 14,
                'tags' => ['twitter', 'elonmusk', 'layoff', 'firing'],
                'readtime' => 8,
            ],

        ];

        foreach ($blogs as $blog) {
            Blog::create($blog);
        }
    }
}
