<?php

namespace App\Http\Controllers;

class SuperAdminController extends Controller
{
    public function members()
    {
        return view('admin.community.members');
    }
}
