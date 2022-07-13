<?php

use Illuminate\Support\Facades\Auth;

// Import DOMDocument class
// use DOMDocument;
use App\Models\PageView;

function makeHyperText($text){
    return preg_replace('!(https://[a-z0-9_./?=&-]+)!i', '<a href="$1">$1</a> ', $text." ");
}

function getURLfromText($text){
    preg_match_all('#\bhttps?://[^,\s()<>]+(?:\([\w\d]+\)|([^,[:punct:]\s]|/))#', $text, $match);
    $string = implode(',', $match[0]);
    return $string;
}


function getMetaData($url){
    $resp = [];
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    $data = curl_exec($ch);
    curl_close($ch);
    // Load HTML to DOM Object
    $dom = new DOMDocument();
    @$dom->loadHTML($data);

    // Parse DOM to get Title
    $nodes = $dom->getElementsByTagName('title');
    $title = '';
    if($nodes->length > 0){
        $title = $nodes->item(0)->nodeValue;
    }
    // Parse DOM to get Meta Description
    $metas = $dom->getElementsByTagName('meta');
    $body = "";
    $imageURL = "";
    for ($i = 0; $i < $metas->length; $i ++) {
        $meta = $metas->item($i);
        if ($meta->getAttribute('name') == 'Description' || $meta->getAttribute('name') == 'description') {
            $body = $meta->getAttribute('content');
        }
        if ($meta->getAttribute('property') == 'og:image:url') {
            $imageURL = $meta->getAttribute('content');
        }elseif($meta->getAttribute('property') == 'og:image'){
            $imageURL = $meta->getAttribute('content');
        }
    }

    $images = $dom->getElementsByTagName('img');

    if(!isset($imageURL) && $images->length > 0){
        $imageURL = $images->item(0)->getAttribute('src');
    }

    $output = array(
        'title' => $title,
        'image_url' => $imageURL,
        'url' => $url,
        'body' => preg_replace('/[^\00-\255]+/u', '', $body)
    );
    return $output;
}


function getYoutubeVideoId($url){
    $url = parse_url($url);
    if (isset($url['query'])) {
        parse_str($url['query'], $output);
        if (isset($output['v'])) {
            return $output['v'];
        }
    }
    if (isset($url['path'])) {
        $path = explode('/', $url['path']);
        return $path[count($path) - 1];
    }
    return false;
}

function page($page){
    $p = new PageView();
    if(Auth::check()){
        $p->user_id = Auth::user()->id;
    }
    $p->page = $page;
    $p->ip_address = request()->ip();
    $p->user_agent = request()->header('User-Agent');
    $p->save();
}