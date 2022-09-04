<?php

namespace App\Http\Controllers;

use App\Models\Redirect;
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
        // Create Custom PDF and mail it to user
        $pdf = \PDF::loadView('pdf.invoice', ['text' => 'test text'])
            ->setOptions(['defaultFont' => 'sans-serif', 'isRemoteEnabled' => true]);
        return $pdf->stream('invoice.pdf');

    }
}
