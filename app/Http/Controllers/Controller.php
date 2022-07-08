<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
// Import DOMDocument class
use DOMDocument;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    function title(){
    $url = 'https://www.youtube.com/watch?v=0JXbzEpYon4';
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
        'body' => preg_replace('/[^\00-\255]+/u', '', $body)
    );
    return $output;
    }
}
