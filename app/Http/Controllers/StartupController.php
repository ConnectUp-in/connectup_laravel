<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Startup;
use Auth;
use App\Models\Interest;
use App\Models\Stage;
class StartupController extends Controller
{
    //
    function startup($username)
    {
        $startup = Startup::where('username', $username)->first();
        if (!$startup) {
            return view('pages.startup.404');
        }
        page('startup/{username}', $startup->id);

        $startup->founder = User::where('id', $startup->founder)
            ->select('id', 'name', 'username', 'profile_photo_path')
            ->first();

        $data = [
            'startup' => $startup,
        ];
        // return $data;

        return view('pages.startup.timeline', $data);
    }

    function manage()
    {
        page('startup/manage');
        $startups = Startup::where('founder', Auth::user()->id)->get();
        $interests = Interest::all();
        $stages = Stage::where('active', 1)->get();
        $data = [
            'startups' => $startups,
            'interests' => $interests,
            'stages' => $stages,
        ];
        return view('pages.startup.manage', $data);
    }
}