<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Member;
use App\Models\Objective;
use App\Models\PageView;

class SuperAdminController extends Controller
{
    public function members()
    {
        // Get all latest members
        $members = Member::orderBy('created_at', 'desc')->get();

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
        $views = Pageview::orderBy('updated_at', 'desc')->select('user_id', 'page', 'ip_address', 'created_at', 'page', 'profile_id')->get();
        $data = [
            'views' => $views,
        ];
        // return $data;
        return view('admin.views', $data);
    }

    public function blogs()
    {
        $blogs = Blog::orderBy('created_at', 'desc')->get();
        $data = [
            'blogs' => $blogs,
        ];
        // return $data;
        return view('admin.blogs', $data);

    }
}
