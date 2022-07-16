<?php

use Illuminate\Support\Facades\Auth;


function profileNotCompleted(){
    $user = Auth::user();
    return true;
}