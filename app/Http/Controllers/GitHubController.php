<?php
namespace App\Http\Controllers;

use App\Models\User;
use Auth;
use Socialite;

class GitHubController extends Controller
{

    public function gitRedirect()
    {
        return Socialite::driver('github')->redirect();
    }

    public function gitCallback()
    {
        session_start();
        // try {

        $user = Socialite::driver('github')->stateless()->user();
        // return (array) $user;

        $searchUser = User::where('github_id', $user->id)->orWhere('email', $user->email)->first();

        if ($searchUser) {

            Auth::login($searchUser, true);
            _action('login_github', $searchUser->id);

            if ($_SESSION['member'] ?? false) {
                return redirect()->route('join.member');
            }
            return redirect('/feed');

        } else {
            $gitUser = User::create([
                'name' => $user->name,
                'email' => $user->email,
                'github_id' => $user->id,
                'password' => encrypt('gitpwd059'),
                'profile_photo_path' => $user->avatar_original,
            ]);

            Auth::login($gitUser, true);
            _action('user_registered_github', $gitUser->id, null, $gitUser);
            sendRegistrationMail($gitUser);

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
