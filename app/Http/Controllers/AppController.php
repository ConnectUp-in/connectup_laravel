<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
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
}