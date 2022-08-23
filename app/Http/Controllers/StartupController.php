<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Startup;
use Auth;
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
        $data = [
            'startups' => $startups,
        ];
        return view('pages.startup.manage', $data);
    }
}