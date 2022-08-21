<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Startup;

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

        $data = [
            'startup' => $startup,
        ];

        return view('pages.startup.timeline', $data);
    }
}