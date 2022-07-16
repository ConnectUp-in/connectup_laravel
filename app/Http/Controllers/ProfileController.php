<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;

class ProfileController extends Controller
{
    //
    function user($username){
        $user = User::where('username', $username)->first();
        $user->startups = [];
        page('user/{username}', $user->id);
        return view('pages.profile.timeline', compact('user'));

    }
}
