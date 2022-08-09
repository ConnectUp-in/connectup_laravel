<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelperController extends Controller
{
    //
    function redirect(Request $request){
        $url = $request->url ?? "";
        return redirect($url);
    }
}
