<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function handleGoogleCallback()
    {
        // try {

        $user = Socialite::driver('google')->stateless()->user();
        // return all data from user
        // return (array) $user;

        $finduser = User::where('google_id', $user->id)->orWhere('email', $user->email)->first();
        // return $finduser;

        if ($finduser) {

            Auth::login($finduser, true);
            // return Auth::user()->name;
            return redirect('/feed');

        } else {
            $newUser = User::create([
                'name' => $user->name,
                'email' => $user->email,
                'google_id' => $user->id,
                'password' => encrypt('123456dummy'),
                'username' => strtolower(str_replace(' ', '', $user->name)),
                'profile_photo_path' => $user->avatar_original,
            ]);

            Auth::login($newUser, true);
            sendRegistrationMail($newUser);

            return redirect('/feed');
        }

        // } catch (Exception $e) {
        //     dd($e->getMessage());
        // }
    }
}
