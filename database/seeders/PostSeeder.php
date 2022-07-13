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
        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) {
            $post = new Post();
            $post->user_id = User::all()->random()->id;
            $post->caption = $faker->sentence(10);
           $post->tags = [$faker->word, $faker->word, $faker->word];
            $post->question = $faker->sentence(10);
            $post->options = [$faker->word, $faker->word, $faker->word];
            $post->answer = $faker->word;
            // Return array of random numbers
            $post->shares =  $faker->randomElements(range(1, 10), $faker->numberBetween(1, 10));
            $post->likes =  $faker->randomElements(range(1, 10), $faker->numberBetween(1, 10));
            $post->dislikes = $faker->randomElements(range(1, 10), $faker->numberBetween(1, 10));
            $post->save();
        }
        
        
        

    }
}
