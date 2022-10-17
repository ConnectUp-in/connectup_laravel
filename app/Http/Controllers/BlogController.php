<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    //
    public function blog(Request $request)
    {
        $blog = Blog::where('slug', $request->slug)->first();
        if (!$blog) {
            return view('pages.blog.404');
        }
        if ($blog->creator_type == 'e') {
            $blog->creator = User::where('id', $blog->creator)->select('id', 'name', 'username', 'profile_photo_path')->first();
        } elseif ($blog->creator_type == 's') {
            $blog->creator = Startup::where('id', $blog->creator)->select('id', 'name', 'username', 'logo')->first();
        }
        $data = [
            'blog' => $blog,
        ];
        page('blog/{slug}', $blog->id);
        return view('pages.blog.blog', $data);
    }
}
