<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use Auth;
class AppController extends Controller
{
    //
    public function feed(){
        page('feed');
        $posts = Post::all();
        if(Auth::check()){

            $refferals = User::where('invited_by', Auth::user()->invite_refferal)->select('name', 'username','email', 'profile_photo_path', 'created_at')->get();
        }
        else{
            $refferals = [];
        }
        $data = [
        'posts' => $posts,
        'refferals' => $refferals,
        ];

        return view('pages.feed', $data);
    }

    public function post($id){
        page('post');
        $post = Post::find($id);
        $data = [
            'post' => $post,
        ];
        return $data;
        return view('pages.post', $data);
    }
}
