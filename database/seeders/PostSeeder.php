<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
// Import Faker
use Faker\Factory as Faker;
use App\Models\User;
class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // id, user, caption, images, tags, ytlink, type, question,  options, answer, active, shares, likes, dislikes, created_at, updated_at

        // Create Random Posts
        // $faker = Faker::create();

        // for ($i = 0; $i < 10; $i++) {
        //     $post = new Post();
        //     $post->user_id = User::all()->random()->id;
        //     $post->caption = $faker->sentence(10);
        //    $post->tags = [$faker->word, $faker->word, $faker->word];
        //     $post->question = $faker->sentence(10);
        //     $post->options = [$faker->word, $faker->word, $faker->word];
        //     $post->answer = $faker->word;
        //     // Return array of random numbers
        //     $post->shares =  $faker->randomElements(range(1, 10), $faker->numberBetween(1, 10));
        //     $post->likes =  $faker->randomElements(range(1, 10), $faker->numberBetween(1, 10));
        //     $post->dislikes = $faker->randomElements(range(1, 10), $faker->numberBetween(1, 10));
        //     $post->save();
        // }

        // get id of user with username founder
        $founder = User::where('username', 'founder')->first();

        $initialposts = [
            [
                'user_id' => $founder->id,
                'caption' =>
                    'Welcome to the family of Entrepreneurs & Startups. As this Platform is under development, soon you will be able to post your own posts, blogs, quizzes, discussion and a lot more... Stay tuned!',
                'tags' => ['welcome', 'entrepreneurs', 'startups'],
            ],
            [
                'user_id' => $founder->id,
                'caption' =>
                    'ConnectUp is having a Refferal Program. You can earn ConnectUp Swags, Goodies and other platform benefits by referring your friends and family to this platform. You can refer as many people as you want. You can watch the video below to know more about the program.',
                'tags' => ['refferal', 'goodies', 'swags'],
                'ytlink' => 'https://www.youtube.com/watch?v=1Sry7p5OVAE',
            ],
            [
                'user_id' => $founder->id,
                'caption' =>
                    'Along with Refferal Program, We are also having a giveaway. You can win exciting goodies and other platform benefits by participating in the giveaway. You can watch the video below to know more about the program.',
                'tags' => ['refferal', 'goodies', 'swags'],
                'ytlink' => 'https://www.youtube.com/watch?v=1Sry7p5OVAE',
            ],
        ];

        foreach ($initialposts as $post) {
            $post = new Post($post);
            $post->save();
        }
    }
}