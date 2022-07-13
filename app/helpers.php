<?php

use Illuminate\Support\Facades\Auth;

function makeHyperText($text){
    return preg_replace('!(https://[a-z0-9_./?=&-]+)!i', '<a href="$1">$1</a> ', $text." ");
}

function getURLfromText($text){
    preg_match_all('#\bhttps?://[^,\s()<>]+(?:\([\w\d]+\)|([^,[:punct:]\s]|/))#', $text, $match);
    $string = implode(',', $match[0]);
    return $string;
}