<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use App\Models\Interest;
use Auth;
use App\Models\Country;
use App\Models\College;
use App\Models\AcademicBackground as AcadBack;


class ProfileController extends Controller
{

    function saveBase64($base64, $path = '/uploads/'){
            $image = str_replace('data:image/png;base64,', '', $base64);
            $image = str_replace(' ', '+', $image);
            $imageName = $path.Auth::user()->name.time().'.'.'png';
            \File::put(storage_path() . $imageName, base64_decode($image));
            return '/storage'.$imageName;
    }

    //
    function user($username){
        $user = User::where('username', $username)->first();
        if(!$user){
            return view('pages.profile.404');
        }
        $user->startups = [];
        $user->interests = Interest::whereIn('id', $user->interests)->get();
        if(!$user->interests){
            $user->interests = [];
         }
        page('user/{username}', $user->id);
        $refferals = User::where('invited_by', $user->invite_refferal)->select('name', 'username','email', 'profile_photo_path', 'created_at')->get();

        // return $user;
        return view('pages.profile.timeline', compact('user', 'refferals'));
    }
    function info(){
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
    function socials(){
        $user = Auth::user();
        return view('pages.profile.socials', compact('user'));
    }
    
    function update(Request $request){

        // if $request contains invited_by
        if($request->invited_by){
            $refferedby = User::where('invite_refferal', $request->invited_by)->first();
            if($refferedby){
                
                $data = [
                    'found' => true,
                    'name' => $refferedby->name,
                    'username' => $refferedby->username,
                ];
             }
             else{
                $data = [
                    'found' => false
                ];
             }

             sendRefferalAppliedMail($data);
            
        }



        $user = Auth::user();
        $user->update($request->all());
        return redirect()->back()->with('success', 'Profile updated successfully');
    }
    function updateCoverPhoto(Request $request){
        $user = Auth::user();
        if($request->cover_photo_path){
            $image = $this->saveBase64($request->cover_photo_path, '/uploads/cover_photos/');
            $user->cover_photo_path = $image;
            $user->save();
        }
        return redirect()->back()->with('success', 'Cover Image Updated');
    }
    function refferals(){
        $user = Auth::user();
        $refferals = User::where('invited_by', $user->invite_refferal)->select('name', 'username','email', 'profile_photo_path', 'created_at')->get();
        // return $refferals;
        return view('pages.profile.refferal', compact('user','refferals'));
    }
}