<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PartnerEcellController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function registerPartner(Request $request){
        $data = $request;
        $data = $request->validate([
            'society' => [],
            'college' => [],
            'url' => [],
            'state' => [],
            'city' => [],
            'linkein' => [],
            'instagram' => [],
            'activeyears' => ['integer'],
            'role' =>[],
            'wanumber' =>[],
            'replinkedin' =>[],
        ]);

        auth()->user()->ecell()->create([
            'society' =>$data['society'],
            'college' =>$data['college'],
            'url' =>$data['url'],
            'state' =>$data['state'],
            'city' =>$data['city'],
            'linkein' =>$data['linkein'],
            'instagram' =>$data['instagram'],
            'activeyears' =>$data['activeyears'],
            'role' =>$data['role'],
            'wanumber' =>$data['wanumber'],
            'replinkedin' =>$data['replinkedin'],
        ]);
        
        return route('/feed');
    }

    public function render (){
        return view('pages.ecell.ecell_join');
    }
}