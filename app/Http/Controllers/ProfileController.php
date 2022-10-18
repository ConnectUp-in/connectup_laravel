<?php

namespace App\Http\Controllers;

use App\Models\AcademicBackground as AcadBack;
use App\Models\College;
use App\Models\Country;
use App\Models\Follow;
use App\Models\Interest;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;

class ProfileController extends Controller
{

    public function saveBase64($base64, $path = '/uploads/')
    {
        $image = str_replace('data:image/png;base64,', '', $base64);
        $image = str_replace(' ', '+', $image);
        $imageName = $path . Auth::user()->name . time() . '.' . 'png';
        \File::put(storage_path() . $imageName, base64_decode($image));
        return '/storage' . $imageName;
    }

    //
    public function user($username)
    {
        $user = User::where('username', $username)->first();
        if (!$user) {
            return view('pages.profile.404');
        }
        $user->startups = [];
        $user->interests = Interest::whereIn('id', $user->interests)->get();
        if (!$user->interests) {
            $user->interests = [];
        }
        page('user/{username}', $user->id);
        $refferals = User::where('invited_by', $user->invite_refferal)->select('name', 'username', 'email', 'profile_photo_path', 'created_at')->get();
        $is_following = Follow::where('user', Auth::user()->id)->where('followed_id', $user->id)->count();
        // return $user;
        return view('pages.profile.timeline', compact('user', 'refferals', 'is_following'));
    }
    public function info()
    {
        $user = Auth::user();

        $data = [
            'user' => $user,
            'countries' => Country::all(),
            'interests' => Interest::all(),
            'colleges' => College::select('id', 'name')->get(),
            'backgrounds' => AcadBack::all(),
        ];
        // return $user;
        return view('pages.profile.info', $data);

    }
    public function socials()
    {
        $user = Auth::user();
        return view('pages.profile.socials', compact('user'));
    }

    public function update(Request $request)
    {
        // if $request contains invited_by
        if ($request->invited_by) {
            $refferedby = User::where('invite_refferal', $request->invited_by)->first();
            if ($refferedby) {

                $data = [
                    'found' => true,
                    'name' => $refferedby->name,
                    'username' => $refferedby->username,
                ];

                sendJoinedUsingRefferalMail($refferedby->email);
            } else {
                $data = [
                    'found' => false,
                ];
            }

            sendRefferalAppliedMail($data);

        }

        $user = Auth::user();
        $user->update($request->all());
        return redirect()->back()->with('success', 'Profile updated successfully');
    }
    public function apiupdate(Request $request)
    {
        // return $request->all();

        try {
            $user = Auth::user();
            // return $user;
            $user->update($request->all());
            return $this->sendResponse($user->id, 'Profile updated successfully');
        } catch (\Exception$e) {
            return $this->sendError('Error updating profile', $e->getMessage());
        }
    }
    public function updateCoverPhoto(Request $request)
    {
        $user = Auth::user();
        if ($request->cover_photo_path) {
            $image = $this->saveBase64($request->cover_photo_path, '/uploads/cover_photos/');
            $user->cover_photo_path = $image;
            $user->save();
        }
        return redirect()->back()->with('success', 'Cover Image Updated');
    }
    public function refferals()
    {
        $user = Auth::user();
        $refferals = User::where('invited_by', $user->invite_refferal)->select('name', 'username', 'email', 'profile_photo_path', 'created_at')->get();
        // return $refferals;
        return view('pages.profile.refferal', compact('user', 'refferals'));
    }

    public function isavailableusername(Request $request)
    {
        $user = User::where('username', $request->username)->first();
        if ($user) {
            return $this->sendResponse(false, 'Username is not available');
        } else {
            return $this->sendResponse(true, 'Username is available');
        }
    }

    public function isavailableemail(Request $request)
    {
        $user = User::where('email', $request->email)->first();
        if ($user) {
            return $this->sendResponse(false, 'Email is not available');
        } else {
            return $this->sendResponse(true, 'Email is available');
        }
    }

    public function follow(Request $request)
    {
        $user = Auth::user();
        $follow = Follow::where('user', $user->id)->where('followed_id', $request->id)->first();
        if ($follow) {
            $follow->delete();
            return $this->sendResponse(null, 'Unfollowed');
        } else {
            $follow = new Follow;
            $follow->user = $user->id;
            $follow->followed_id = $request->id;
            $follow->type = $request->type;
            $follow->save();
            return $this->sendResponse(true, 'Followed');
        }
    }

}
