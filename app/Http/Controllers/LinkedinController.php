<?php

namespace App\Http\Controllers;

use App\Models\User;
use Auth;
use Socialite;

class LinkedinController extends Controller
{
    public function linkedinRedirect()
    {
        return Socialite::driver('linkedin')->redirect();
    }

    public function linkedinCallback()
    {
        session_start();
        // try {

        $user = Socialite::driver('linkedin')->stateless()->user();
        // return (array) $user;

        $linkedinUser = User::where('linkedin_id', $user->id)->orWhere('email', $user->email)->first();

        if ($linkedinUser) {

            Auth::login($linkedinUser, true);

            if ($_SESSION['member'] ?? false) {
                return redirect()->route('join.member');
            }
            return redirect('/feed');

        } else {
            $user = User::create([
                'name' => $user->name,
                'email' => $user->email,
                'linkedin_id' => $user->id,
                'password' => encrypt('admin12345'),
                'profile_photo_path' => $user->avatar_original,
            ]);

            Auth::login($user, true);
            sendRegistrationMail($user);

            if ($_SESSION['member'] ?? false) {
                return redirect()->route('join.member');
            }
            return redirect('/feed');
        }

        // } catch (Exception $e) {
        //     dd($e->getMessage());
        // }
    }
}
