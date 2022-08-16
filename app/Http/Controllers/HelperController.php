<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Redirect;
use Auth;

class HelperController extends Controller
{
    //
    function redirect(Request $request)
    {
        $url = $request->url ?? "";

        $r = new Redirect();
        $r->url = $url;
        $r->user = Auth::check() ? Auth::user()->id : null;
        $r->agent = request()->header('User-Agent');
        $r->save();
        return redirect($url);
    }

    function testmail()
    {
        // send mail to harshprogrammer782@gmail.com
        $data = [
            'name' => 'Harsh',
            'email' => 'harshprogrammer782@gmail.com'
        ];
        \Mail::send('emails.test', $data, function ($message) use ($data) {
            $message->from('connectup.in@gmail.com');
            $message->to($data['email'], $data['name']);
            $message->subject('Test Mail');
        });
        
        return "done";
    }
}