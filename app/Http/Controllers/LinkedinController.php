<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use Exception;
use Socialite;
use App\Models\User;

class LinkedinController extends Controller
{
    public function linkedinRedirect()
    {
        return Socialite::driver('linkedin')->redirect();
    }
       

    public function linkedinCallback()
    {
        try {
     
            $user = Socialite::driver('linkedin')->user();
            // return (array) $user;
      
            $linkedinUser = User::where('linkedin_id', $user->id)->orWhere('email',$user->email)->first();
      
            if($linkedinUser){
      
                Auth::login($linkedinUser, true);
     
                return redirect('/feed');
      
            }else{
                $user = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'linkedin_id' => $user->id,
                    'password' => encrypt('admin12345'),
                    'profile_photo_path' => $user->avatar_original,
                ]);
     
                Auth::login($user, true);
                sendRegistrationMail($user);
      
                return redirect('/dash');
            }
     
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}