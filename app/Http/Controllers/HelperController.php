<?php

namespace App\Http\Controllers;

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

    public function image()
    {
        // echo ini_get('allow_url_fopen') ? 'Enabled' : 'Disabled';
        // return "nothing";
        // Get all images from Event Table and compress them
        $events = \App\Models\Event::all();

        // $img = Image::make(url("/assets/defaults/events/research.jpg"));
        // return $img->response('jpg', 50);

        $flag = true;
        $try = 1;
        while ($flag && $try <= 3):
            try {
                $img = Image::make(url("/assets/defaults/events/research.jpg"));

                $img->resize(200, null, function ($constraint) {
                    $constraint->aspectRatio();
                });
                // Trim last 4 letters and add _compressed to the image name and save it
                $compressed = substr("/assets/defaults/events/research.jpg", 0, -4) . '_compressed.jpg';
                $img->save($compressed);
                $flag = false;
            } catch (\Exception$e) {
                //not throwing  error when exception occurs
            }
            $try++;
        endwhile;

        // foreach ($events as $event) {
        //     // $img = Image::make($event->image);
        //     $img = Image::make(url("/assets/defaults/events/research.jpg"));
        //     return $img->response('jpg', 50);
        //     // $img->resize(null, 200, function ($constraint) {
        //     //     $constraint->aspectRatio();
        //     // });
        //     // // Trim last 4 letters and add _compressed to the image name and save it
        //     // $compressed = substr($event->image, 0, -4) . '_compressed.jpg';
        //     // $img->save($compressed);

        //     // $image->image_compressed = $compressed;
        // }

        return "done";

    }

    public function test(Request $request)
    {
        return $request->all();
    }

}
