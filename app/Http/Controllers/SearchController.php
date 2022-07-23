<?php

// namespace App\Models;
namespace App\Http\Controllers;
// use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\College;

class SearchController extends Controller
{
    //
    public function college($query){
        if(isset($query)){

            $colleges = College::where('name','like','%'.$query.'%')->get();
            return $colleges;
        }else{
            return [];
        }
    }
}
