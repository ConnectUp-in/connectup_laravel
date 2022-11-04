<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Member;
use App\Models\Objective;
use App\Models\PageView;
use Illuminate\Http\Request;

class SuperAdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('isSuperAdmin');
    }

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
        return view('admin.blog.blogs', $data);

    }

    public function editblog($id)
    {
        $blog = Blog::find($id);
        $data = [
            'blog' => $blog,
            'way' => 'edit',
        ];
        // return $data;
        return view('admin.blog.edit', $data);
    }
    public function addblog()
    {
        $data = [

            'way' => 'add',
        ];
        // return $data;
        return view('admin.blog.edit', $data);
    }

    public function updateblog($id, Request $request)
    {
        // title, content, tags, slug, active, suspended, category, image
        // return $request->all();
        $blog = Blog::find($id);
        $blog->title = $request->title;
        $blog->content = $request->content;
        $blog->tags = $request->tags;
        $blog->slug = $request->slug;
        $blog->active = $request->active == 'on' ? 1 : 0;
        $blog->suspended = $request->suspended == 'on' ? 1 : 0;
        $blog->category = $request->category;

        // save image
        $image = $request->file('image');
        // return $image;
        if ($image) {
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $path = 'storage/covers/blogs/';
            $image->move($path, $image_name);
            $blog->image = '/' . $path . $image_name;
            // return $path . $image_name;
        }

        $blog->save();
        return redirect()->back();
    }
}
