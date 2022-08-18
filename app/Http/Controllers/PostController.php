<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use Auth;

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
        if(Auth::check()){
            $refferals = User::where('invited_by', Auth::user()->invite_refferal)->select('name', 'username','email', 'profile_photo_path', 'created_at')->get();
        }
        else{
            $refferals = [];
        }
        $data = [
            'post' => $post,
            'refferals' => $refferals,
        ];
        // return $data;
        return view('pages.post', $data);
    }
}