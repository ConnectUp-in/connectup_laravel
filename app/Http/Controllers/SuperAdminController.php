<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Event;
use App\Models\EventRegistration;
use App\Models\Member;
use App\Models\Objective;
use App\Models\PageView;
use Auth;
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
        $old = Blog::find($id);
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
        _action('blog_updated', $blog->id, $old, $blog);
        return redirect()->back();
    }
    public function createblog(Request $request)
    {
        // title, content, tags, slug, active, suspended, category, image
        // return $request->all();
        $blog = new Blog;
        $blog->title = $request->title;
        $blog->content = $request->content;
        $blog->tags = $request->tags;
        $blog->creator = Auth::user()->id;
        $blog->creator_type = 'e';
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
        } else {
            $blog->image = '/assets/defauls/blog.jpg';
        }

        $blog->save();
        _action('blog_created', $blog->id, null, $blog);
        // redirect to edit page
        return redirect()->route('superadmin.blog.edit', $blog->id);
    }

    public function events()
    {
        $events = Event::orderBy('created_at', 'desc')->get();
        $data = [
            'events' => $events,
        ];
        // return $data;
        return view('admin.events.events', $data);

    }

    public function editevent($id)
    {
        $event = Event::find($id);
        $data = [
            'event' => $event,
            'way' => 'edit',
        ];
        // return $data;
        return view('admin.events.edit', $data);
    }

    public function addevent()
    {
        $data = [

            'way' => 'add',
        ];
        // return $data;
        return view('admin.events.edit', $data);
    }

    public function updateevent($id, Request $request)
    {
        // title, content, tags, slug, active, suspended, category, image, r_dates, e_dates, link
        // return $request->all();
        $event = Event::find($id);
        $old = Event::find($id);
        $event->title = $request->title;
        $event->content = $request->content;
        $event->tags = $request->tags;
        $event->slug = $request->slug;
        $event->active = $request->active == 'on' ? 1 : 0;
        $event->suspended = $request->suspended == 'on' ? 1 : 0;
        $event->location = $request->location;
        $event->link = $request->link;
        $event->r_dates = [$request->r_date_start, $request->r_date_end];
        $event->e_dates = [$request->e_date_start, $request->e_date_end];

// save image
        $image = $request->file('image');
        // return $image;
        if ($image) {
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $path = 'storage/covers/events/';
            $image->move($path, $image_name);
            $event->image = '/' . $path . $image_name;
            // return $path . $image_name;
        }
        $event->save();
        _action('event_updated', $event->id, $old, $event);
        return redirect()->back();
    }

    public function createevent(Request $request)
    {
        // title, content, tags, slug, active, suspended, category, image, r_dates, e_dates, link, required_fields, additional_fields
        // return $request->all();
        $event = new Event;
        $event->title = $request->title;
        $event->content = $request->content;
        $event->tags = $request->tags;
        $event->creator = Auth::user()->id;
        $event->creator_type = 'e';
        $event->slug = $request->slug;
        $event->active = $request->active == 'on' ? 1 : 0;
        $event->suspended = $request->suspended == 'on' ? 1 : 0;
        $event->location = $request->location;
        $event->link = $request->link;
        $event->r_dates = [$request->r_date_start, $request->r_date_end];
        $event->e_dates = [$request->e_date_start, $request->e_date_end];
        $event->required_fields = [];
        $event->additional_fields = [];

        // save image
        $image = $request->file('image');
        // return $image;
        if ($image) {
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $path = 'storage/covers/events/';
            $image->move($path, $image_name);
            $event->image = '/' . $path . $image_name;
            // return $path . $image_name;
        } else {
            $event->image = '/assets/defauls/event.jpg';
        }

        $event->save();
        _action('event_created', $event->id, null, $event);
        // redirect to edit page
        return redirect()->route('superadmin.event.edit', $event->id);
    }

    public function eventAttendance($id)
    {
        $event = Event::where('id', $id)->first();
        $registrations = EventRegistration::where('event_id', $id)->where('checked_in_at', '!=', null)->get();
        $data = [
            'event' => $event,
            'registrations' => $registrations,
        ];
        // return $data;
        return view('admin.events.attendance', $data);
    }
}
