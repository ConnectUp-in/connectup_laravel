<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use App\Models\Interest;
use Auth;
use App\Models\Country;

class ProfileController extends Controller
{
    //
    function user($username){
        $user = User::where('username', $username)->first();
        $user->startups = [];
        $user->interests = Interest::whereIn('id', $user->interests)->get();
        page('user/{username}', $user->id);
        // return $user;
        return view('pages.profile.timeline', compact('user'));
    }
    function info(){
        $user = Auth::user();
    
        $data = [
            'user' => $user,
            'countries' => Country::all(),
            'interests' => Interest::all()
        ];
        // return $user;
        return view('pages.profile.info', $data);

    }
}
