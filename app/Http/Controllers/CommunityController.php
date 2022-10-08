<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\Mentor;
use App\Models\Objective;
use Auth;
use Illuminate\Http\Request;

class CommunityController extends Controller
{
    //
    public function member()
    {

        page('Member Community');

        session_start();
        $_SESSION['member'] = true;

        $objectives = Objective::where('active', 1)->get();
        if (Auth::check()) {
            $isAlreadyMember = Member::where('user', Auth::id())->first();
        } else {
            $isAlreadyMember = null;
            session_destroy();

        }
        $data = [
            'objectives' => $objectives,
            'isAlreadyMember' => $isAlreadyMember,
        ];
        return view('pages.community.member', $data);
    }
    public function mentor()
    {
        return view('pages.community.mentor');
    }

    public function registerMember(Request $request)
    {
        $member = new Member();
        $member->user = Auth::id();
        $member->contact = $request->contact;
        $member->founder = $request->founder;
        $member->linkedin = $request->linkedin;
        if ($request->founder) {
            $member->startupname = $request->startupname;
            $member->description = $request->about;
            $member->website = $request->website;
        } else {
            $member->description = $request->idea;
        }
        $member->reasons = $request->reasons;
        $member->save();

        return back()->with('success', 'You are now a member of the community');

    }
}
