<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\Objective;
use App\Models\Pageview;

class SuperAdminController extends Controller
{
    public function members()
    {
        $members = Member::all();

        // attach objectives
        foreach ($members as $member) {
            $member->reasons = Objective::whereIn('id', $member->reasons)->get();
        }

        $data = [
            'members' => $members,
        ];
        // return $data;

        return view('admin.community.members', $data);
    }

    public function views()
    {
        // get 1000 latest pageviews
        $views = Pageview::orderBy('updated_at', 'desc')->limit(1000)->get();
        $data = [
            'views' => $views,
        ];
        return view('admin.views', $data);
    }
}
