<?php

namespace App\Http\Controllers;

class CommunityController extends Controller
{
    //
    public function member()
    {
        return view('pages.community.member');
    }
    public function mentor()
    {
        return view('pages.community.mentor');
    }
}
