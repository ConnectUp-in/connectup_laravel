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

        $startup->interests = Interest::whereIn('id', $startup->interests)
            ->select('id', 'name')
            ->get();
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

            $startup = Startup::create($request->all());
            if ($request->socials) {
                $socials = json_decode($request->socials);
            } else {
                $socials = [];
            }
            if ($request->cover) {
                $cover = saveBase64($request->cover);
                $startup->cover = $cover;
            }

            if ($request->logo) {
                $logo = saveBase64($request->logo);
                $startup->logo = $logo;
            }

            $startup->socials = $socials;
            $startup->founder = Auth::user()->id;
            $startup->save();
            _action('startup_created', $startup->id, null, $startup);

            \Session::flash('success', 'Startup Created Successfully');
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
        page('startup/manage/{id}');
        $data = [
            'startup' => $startup,
        ];
        return view('pages.startup.info', $data);

    }

    public function updateSocials($id)
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
        return view('pages.startup.socials', $data);
    }

    public function update($id, Request $request)
    {

        $startup = Startup::find($id);
        $old = Startup::find($id);
        if (!$startup) {
            return view('pages.startup.404');
        }

        if ($startup->founder != Auth::user()->id) {

            \Session::flash('error', 'You are not the founder of this startup');
            return redirect()->back()->with('error', 'You are not authorized to update this startup');
        }
        page('startup/manage/{id}');
        $startup->update($request->all());

        if ($request->socials) {
            $startup->socials = json_decode($request->socials);
        }
        $startup->save();
        _action('startup_updated', $startup->id, $old, $startup);

        \Session::flash('success', 'Startup Updated Successfully');
        return redirect()
            ->back()
            ->with('success', 'Startup updated successfully');

    }

    public function updateCover($id, Request $request)
    {
        $startup = Startup::find($id);
        $old = Startup::find($id);
        if (!$startup) {
            return view('pages.startup.404');
        }
        if ($startup->founder != Auth::user()->id) {

            \Session::flash('error', 'You are not the founder of this startup');
            return redirect()->back()->with('error', 'You are not authorized to update this startup');
        }
        page('startup/manage/{id}');
        if ($request->cover) {
            $startup->cover = saveBase64($request->cover);
        }
        if ($request->logo) {
            $startup->logo = saveBase64($request->logo);
        }
        $startup->save();
        _action('startup_updated_cover', $startup->id, $old, $startup);

        \Session::flash('success', 'Startup Updated Successfully');
        return redirect()
            ->back()
            ->with('success', 'Startup updated successfully');
    }

    public function isavailableusername(Request $request)
    {
        $startup = Startup::where('username', $request->username)->first();
        if ($startup) {
            return $this->sendResponse(false, 'Username is not available');
        } else {
            return $this->sendResponse(true, 'Username is available');
        }
    }
}
