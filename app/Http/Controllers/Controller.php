<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
require 'app/helpers/meta.php';

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    // function __construct()
    // {
        
    //         $page = [
    //             'title' => 'ufgjg | Connecting the Dots...',
    //             'description' => 'ConnectUp is a Centralized Startup Networking Platform that brings together startups, entrepreneurs, investors, and friends to come together to share ideas, and discuss opportunities for collaboration. .
    //             We are building the largest network of incubators, mentors, investors, and startups',
    //             'image' => '/assets/defaults/metaimage.png',
    //         ];
    //             // Sharing is caring
    //                 view()->share('page', $page);
    // }

}
