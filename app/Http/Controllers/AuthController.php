<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
// import Hash
use Illuminate\Support\Facades\Hash;
use Auth;

class AuthController extends Controller
{
    //
    function register(Request $request)
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
        // return $user;
        Auth::login($user, true);
        return redirect('/feed');

        return "Everything went cool";
    }
}