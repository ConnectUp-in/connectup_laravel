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
                'title' => 'Physics Wallah acquihired PrepOnline and Altis Vortex',
                'slug' => 'physicswallah-acquired-preponline-and-altisvortex',
                'content' => '
                <p>Edtech unicorn Physics Wallah(PW) acquihires PrepOnline and Altis Vortex other startups in the edtech segment. PrepOnline is an edtech platform for NEET, JEE and board exams, founded by Vivek Gaur, Manish Kumar and Anurag Pathak in 2019. Altis Vortex, founded by Vivek Gaur and Manish Kumar in 2015, is a publisher for NCERT books for classes 11 and 12, NEET and CET-UG exams.<br />
                    Physics Wallah brings in experienced teachers from PrepOnline into the unicorn. Along with seven plus years of publication experience from Altis Vortex.<br />
                    Physics Wallah aims to bring the same quality and affordability that they already give to JEE and NEET aspirants, to those aspiring government jobs.</p>

                    <p><br />
                    &ldquo;Our acquisition thesis is more towards acqui-hiring, where we are looking to have better entrepreneur leadership in place. We are also entering into multiple exam categories, so we are considering better content creation areas or the missing segments in those categories, as we build. We are aspiring to go global and will look at international assets as well,&rdquo; cofounder Prateek Maheshwari said, referring to acquisitions.</p>

                    <p><br />
                    As a part of the acqui hiring, Vivek joined PW as its chief growth officer and Manish Kumar as Chief of projects.</p>

                    <p><br />
                    Altis Vortex will merge with the Physics Wallah editorial team to enhance the PW study material for the PW publication, with focus to cover exams like GATE, SSC, UPSC, NDA, to name a few.<br />
                    The new acquisitions will also support PW in other domains such as ecommerce and retail marketing to name a few. The sum amount of the acquisition is not publicly disclosed.</p>

                    <p><br />
                    Physics Wallah was launched by Alakh Pandey and Prateek Maheshwari 2020 and became an unicorn in June this year, raising $100 million in its maiden funding round from West Bridge Capital and GSV ventures, at an evaluation of $1.1 billion. PW became India&rsquo;s 101st unicorn.</p>

                    <p><br />
                    The company is also earmarking $20 million for acquisitions this year from the recent fundraise, Maheshwari told &lsquo;The Economic Times&rsquo;.</p>

                    <p><br />
                    This acquisition is PW&rsquo;s third major announcement thi s year, after becoming an unicorn and acquiring FreeCo, a doubt-solving and resource management startup, in August. In June the company also announced the launch of its offline learning centres &lsquo;PW Vidyapeeth&rsquo; in cities like Kota, Jaipur and Delhi to begin with.</p>
                ',
                'image' => '/assets/defaults/events/pwpreponline.jpg',
                'attachments' => [],
                'creator' => $founder->id,
                'creator_type' => 'e',
                'category' => 17,
                'tags' => ['physicswallah', 'preponline', 'altis vortex', 'acqui-hire', 'edtech'],
                'readtime' => 8,
            ],

        ];

        foreach ($blogs as $blog) {
            Blog::create($blog);
        }
    }
}
