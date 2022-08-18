<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    //
    public function getposts(){
        $posts = Post::where('active', 1)->get();
        return $posts;
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