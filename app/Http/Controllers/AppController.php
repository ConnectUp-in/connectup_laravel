<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Event;
use App\Models\Post;
use App\Models\Startup;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;

class AppController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->only([
            'feed',
        ]);
    }
    //

    public function home()
    {
        page('Home');
        $blogs = Blog::orderBy('updated_at', 'desc')->limit(3)->get();
        $events = Event::orderBy('updated_at', 'desc')->limit(4)->get();
        $data = [
            'blogs' => $blogs,
            'events' => $events,
        ];
        return view('welcome', $data);
    }
    public function feed(Request $request)
    {

        page('feed');
        $posts = Post::where('active', 1)
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        if ($request->ajax()) {
            // $posts = Post::where('active', 1)
            //     ->orderBy('created_at', 'desc')
            //     ->paginate(10);

            return response()->json(['data' => $posts]);
        }

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

    public function superpreneurs()
    {
        page('entrepreneurs');
// sort by last updated
        $entrepreneurs = User::where('active', true)->orderBy('updated_at', 'desc')->get();
        $data = [
            'users' => $entrepreneurs,
        ];
        // return $data;
        return view('pages.superpreneurs', $data);
    }

    public function onlyforonce()
    {
        // // Select all users and change their active status to true
        User::where('active', false)->update(['active' => true]);

        // Select all Event Registrations and change their Ticket_id to unique random number where ticket_id is null
        // $registrations = EventRegistration::where('ticket_id', null)->get();
        // foreach ($registrations as $registration) {
        //     $registration->ticket_id = rand(10000000, 99999999);
        //     $registration->save();
        // }
        return "Everything went well";
    }
    public function events()
    {
        page('events');
        $events = Event::where('active', 1)
            ->orderBy('created_at', 'desc')
            ->get();
        $data = [
            'events' => $events,
        ];
        // return $data;
        return view('pages.events', $data);
    }

    public function blogs()
    {
        page('blogs');
        $blogs = Blog::where('active', 1)
            ->orderBy('created_at', 'desc')
            ->paginate(12);
        $data = [
            'blogs' => $blogs,
        ];
        // return $data;
        return view('pages.blogs', $data);
    }
}
