<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function getposts()
    {
        $posts = Post::where('active', 1)->get();
        return $posts;
    }

    public function post($id)
    {
        page('post');
        $post = Post::find($id);
        if (Auth::check()) {
            $refferals = User::where('invited_by', Auth::user()->invite_refferal)->select('name', 'username', 'email', 'profile_photo_path', 'created_at')->get();
        } else {
            $refferals = [];
        }
        $data = [
            'post' => $post,
            'refferals' => $refferals,
        ];
        // return $data;
        return view('pages.post', $data);
    }

    public function create(Request $request)
    {

        $content = html2text($request->content);
        $post = new Post;
        $post->caption = $content;
        $post->ytlink = extract_ytlink($content);
        $url = getURLfromText($content);
        if ($url) {
            $post->metadata = getMetaData();
        }

        $post->user_id = Auth::id();
        $post->save();
        _action('post_created', $post->id, null, $post);
        // return $post;
        return redirect()->route('post', $post->id);
    }

    public function delete(Request $request)
    {
        try {
            $post = Post::find($request->id);
            if ($post->user_id == Auth::id()) {
                $post->delete();
                _action('post_deleted', $post->id, null, $post);
                return $this->sendResponse(true, 'Post deleted successfully');
            } else {
                return $this->sendResponse(false, 'You are not authorized to delete this post');
            }
        } catch (\Throwable$th) {
            return $this->sendResponse(false, 'Post not deleted');
        }
    }
}
