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

        session_start();
        // try {

        $user = Socialite::driver('google')->stateless()->user();
        // return all data from user
        // return (array) $user;

        $finduser = User::where('google_id', $user->id)->orWhere('email', $user->email)->first();
        // return $finduser;

        if ($finduser) {

            Auth::login($finduser, true);
            _action('login_google', $finduser->id);

            if ($_SESSION['member'] ?? false) {
                return redirect()->route('join.member');
            }

            if ($_SESSION['prev_url'] ?? false) {
                return redirect($_SESSION['prev_url']);
            }

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
            _action('user_registered_google', $newUser->id, null, $newUser);
            sendRegistrationMail($newUser);

            if ($_SESSION['member'] ?? false) {
                return redirect()->route('join.member');
            }

            if ($_SESSION['prev_url'] ?? false) {
                return redirect($_SESSION['prev_url']);
            }
            return redirect('/feed');
        }

        // } catch (Exception $e) {
        //     dd($e->getMessage());
        // }
    }
}
