<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use App\Models\Startup;
use Auth;
class AppController extends Controller
{
    //
    public function feed()
    {
        page('feed');
        $posts = Post::where('active', 1)
            ->orderBy('created_at', 'desc')
            ->paginate(10);
        if (Auth::check()) {
            $refferals = User::where(
                'invited_by',
                Auth::user()->invite_refferal
            )
                ->select(
                    'name',
                    'username',
                    'email',
                    'profile_photo_path',
                    'created_at'
                )
                ->get();
        } else {
            $refferals = [];
        }
        $data = [
            'posts' => $posts,
            'refferals' => $refferals,
        ];

        return view('pages.feed', $data);
    }

    public function startups()
    {
        page('startups');
        $startups = Startup::where('active', 1)
            ->orderBy('created_at', 'desc')
            ->paginate(12);
        $data = [
            'startups' => $startups,
        ];
        return view('pages.startups', $data);
    }
}