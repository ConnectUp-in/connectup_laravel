<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class AppController extends Controller
{
    //
    public function feed(){
        page('feed');
        $posts = Post::all();

        $data = [
            'posts' => $posts,
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
