<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\EventRegistration;
use App\Models\Redirect;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;
use Image;

class HelperController extends Controller
{
    //
    public function redirect(Request $request)
    {
        $url = $request->url ?? "";

        $r = new Redirect();
        $r->url = $url;
        $r->user = Auth::check() ? Auth::user()->id : null;
        $r->agent = request()->header('User-Agent');
        $r->save();
        return redirect($url);
    }

    public function testmail()
    {
        sendRegistrationMail(Auth::user());
        return "done";
    }
    // public function image()
    // {
    //     $text = 'TEst text';

    //     $img = Image::make('assets/defaults/cover.png');

    //     // Resize image instance
    //     $img->resize(null, 200, function ($constraint) {
    //         $constraint->aspectRatio();
    //     });

    //     $img->text($text, 20, 20, function ($font) {
    //         $font->size(4);
    //         $font->color("#FFF");
    //     });

    //     return $img->response("jpg");
    // }

    public function image()
    {
        // // Create Custom PDF and mail it to user
        // $pdf = \PDF::loadView('pdf.invoice', ['text' => 'test text'])
        //     ->setOptions(['defaultFont' => 'sans-serif', 'isRemoteEnabled' => true]);
        // return $pdf->stream('invoice.pdf');

        $registration = EventRegistration::skip(1)->first();
        $registration->event = Event::where('id', $registration->event_id)->first();
        $registration->user = User::where('id', $registration->user_id)->first();
        // return $registration;

        return getTicketFromRegistration($registration);

    }

    public function test(Request $request)
    {
        return $request->all();
    }

}
