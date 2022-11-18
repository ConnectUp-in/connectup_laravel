<?php

namespace App\Http\Controllers;

use App\Models\User;
use Auth;
// import Hash
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //
    public function register(Request $request)
    {
        // request has name, email, password, password_confirmation

        // Create USer, Login User, Redirect to Feed Page

        // return $request->all();
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        sendRegistrationMail($user);
        _action('user_registered', $user->id, null, $user);
        Auth::login($user, true);
        return redirect('/feed');
    }
}
