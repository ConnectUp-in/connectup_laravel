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
        function updateImage($field)
        {

            try {
                $img = Image::make(base_path($field->image));
                $img->encode('webp', 50);
                $img->resize(400, null, function ($constraint) {
                    $constraint->aspectRatio();
                });
                $compressed = substr($field->image, 0, -4) . '_compressed.webp';
                $img->save(base_path($compressed));
                $field->image_compressed = $compressed;
                $field->save();
                echo $field->image . " compressed to " . $compressed . "<br>";
            } catch (\Exception$e) {
                echo "Failed to compress " . $field->image . "<br>";
                echo $e->getMessage();
            }
        }
        $events = \App\Models\Event::all();
        foreach ($events as $event) {
            updateImage($event);
        }

        $blogs = \App\Models\Blog::all();
        foreach ($blogs as $blog) {
            updateImage($blog);
        }

    }

    public function test(Request $request)
    {
        return $request->all();
    }

    public function image0()
    {
        $image_path = 'assets/defaults/cover.png';
        // resize image with Intervention Image

        function resizeImage($src, $dst, $width, $height)
        {
            // Load the image
            $image = imagecreatefromstring(file_get_contents($src));

            // Get the original width and height of the image
            $originalWidth = imagesx($image);
            $originalHeight = imagesy($image);

            // Calculate the aspect ratio of the original image
            $aspectRatio = $originalWidth / $originalHeight;

            // Calculate the width and height of the resized image
            if ($width / $height > $aspectRatio) {
                $width = $height * $aspectRatio;
            } else {
                $height = $width / $aspectRatio;
            }

            // Create a new image with the desired dimensions
            $resizedImage = imagecreatetruecolor($width, $height);

            // Resize the image
            imagecopyresampled($resizedImage, $image, 0, 0, 0, 0, $width, $height, $originalWidth, $originalHeight);

            // Save the resized image to the destination file path
            imagejpeg($resizedImage, $dst);

            // Clean up
            imagedestroy($image);
            imagedestroy($resizedImage);
        }

        $src = '/assets/defaults/cover.png';
        $dst = 'assets/defaults/cover2.png';
        $width = 100;
        $height = 78;

        resizeImage($image_path, $dst, $width, $height);
    }

}
