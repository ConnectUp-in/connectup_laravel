<?php

namespace Database\Seeders;

use App\Models\Link;
use App\Models\User;
use Illuminate\Database\Seeder;

class LinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $founder = User::where('username', 'founder')->first();
        $user = User::where('username', 'user')->first();

        $link = new Link();
        $link->user = $founder->id;
        $link->title = 'Connect on Whatsapp';
        $link->link = 'https://wa.me/916264295091?text=Hi%Harsh';
        $link->save();
    }
}
