<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Interest;
use App\Models\Objective;
use App\Models\Stage;
use App\Models\Startup;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;

function saveBase64($base64, $path = '/uploads/')
{
    $image = str_replace('data:image/png;base64,', '', $base64);
    $image = str_replace(' ', '+', $image);
    $imageName = $path . Auth::user()->name . time() . rand(1, 1000) . '.' . 'png';
    \File::put(storage_path() . $imageName, base64_decode($image));
    echo 'Image Uploaded: ' . $imageName . '<br>';
    return '/storage' . $imageName;
}
class StartupController extends Controller
{
    //
    public function startup($username)
    {
        $startup = Startup::where('username', $username)->first();
        if (!$startup) {
            return view('pages.startup.404');
        }
        page('startup/{username}', $startup->id);

        $startup->founder = User::where('id', $startup->founder)
            ->select('id', 'name', 'username', 'profile_photo_path')
            ->first();

        $data = [
            'startup' => $startup,
        ];
        // return $data;

        return view('pages.startup.timeline', $data);
    }

    public function manage()
    {
        page('startup/manage');
        $startups = Startup::where('founder', Auth::user()->id)->get();
        $interests = Interest::all();
        $stages = Stage::where('active', 1)->get();
        $categories = Category::where('active', 1)->get();
        $objectives = Objective::where('active', 1)->get();
        $data = [
            'startups' => $startups,
            'interests' => $interests,
            'stages' => $stages,
            'categories' => $categories,
            'objectives' => $objectives,
        ];
        return view('pages.startup.manage', $data);
    }

    public function create(Request $request)
    {
        try {
            if ($request->socials) {
                $socials = json_decode($request->socials);
            } else {
                $socials = [];
            }
            if ($request->cover) {
                $cover = saveBase64($request->cover);
            } else {
                $cover = '/storage/uploads/default.png';
            }

            if ($request->logo) {
                $logo = saveBase64($request->logo);
            } else {
                $logo = '/storage/uploads/default.png';
            }

            $startup = Startup::create($request->all());
            $startup->logo = $logo;
            $startup->cover = $cover;
            $startup->socials = $socials;
            $startup->founder = Auth::user()->id;
            $startup->save();
            return redirect()
                ->back()
                ->with('success', 'Startup created successfully');
        } catch (\Exception$e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function updateInfo($id)
    {
        $startup = Startup::find($id);
        if (!$startup) {
            return view('pages.startup.404');
        }
        $interests = Interest::all();
        $stages = Stage::where('active', 1)->get();
        $categories = Category::where('active', 1)->get();
        $objectives = Objective::where('active', 1)->get();
        page('startup/manage/{id}');
        $data = [
            'startup' => $startup,
            'interests' => $interests,
            'stages' => $stages,
            'categories' => $categories,
            'objectives' => $objectives,
        ];
        return view('pages.startup.info', $data);

    }
}
