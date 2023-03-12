<?php

use App\Models\Action;
use App\Models\PageView;

// Import DOMDocument class
// use DOMDocument;
use Illuminate\Support\Facades\Auth;

function makeHyperText($text)
{
    return preg_replace('!(https://[a-z0-9_./?=&-]+)!i', '<a href="$1">$1</a> ', $text . " ");
}

function getURLfromText($text)
{
    preg_match_all('#\bhttps?://[^,\s()<>]+(?:\([\w\d]+\)|([^,[:punct:]\s]|/))#', $text, $match);
    $string = implode(',', $match[0]);
    return $string;
}

function getMetaData($url)
{
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
    if ($nodes->length > 0) {
        $title = $nodes->item(0)->nodeValue;
    }
    // Parse DOM to get Meta Description
    $metas = $dom->getElementsByTagName('meta');
    $body = "";
    $imageURL = "";
    for ($i = 0; $i < $metas->length; $i++) {
        $meta = $metas->item($i);
        if ($meta->getAttribute('name') == 'Description' || $meta->getAttribute('name') == 'description') {
            $body = $meta->getAttribute('content');
        }
        if ($meta->getAttribute('property') == 'og:image:url') {
            $imageURL = $meta->getAttribute('content');
        } elseif ($meta->getAttribute('property') == 'og:image') {
            $imageURL = $meta->getAttribute('content');
        }
    }

    $images = $dom->getElementsByTagName('img');

    if (!isset($imageURL) && $images->length > 0) {
        $imageURL = $images->item(0)->getAttribute('src');
    }

    $output = array(
        'title' => $title,
        'image_url' => $imageURL,
        'url' => $url,
        'body' => preg_replace('/[^\00-\255]+/u', '', $body),
    );
    return $output;
}

function getYoutubeVideoId($url)
{
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

function page($page, $profile_id = null)
{
    $p = new PageView();
    if (Auth::check()) {
        $p->user_id = Auth::user()->id;
    }
    $p->page = $page;
    $p->ip_address = request()->ip();
    $p->profile_id = $profile_id;
    $p->user_agent = request()->header('User-Agent');
    $p->save();
}
function _action($action, $action_item = null, $prev = null, $new = null)
{
    $a = new Action();
    if (Auth::check()) {
        $a->user_id = Auth::user()->id;
    }
    $a->action = $action;
    $a->ip_address = request()->ip();
    $a->action_item = $action_item;
    $a->prev = $prev;
    $a->new = $new;
    $a->user_agent = request()->header('User-Agent');
    $a->save();
}

function profileview($profile_id)
{
    $count = PageView::where('profile_id', $profile_id)->count();
    return $count;
}

function changeIntoKMG($number)
{
    if ($number > 1000000) {
        return round($number / 1000000, 1) . 'M';
    } elseif ($number > 1000) {
        return round($number / 1000, 1) . 'K';
    } else {
        return $number;
    }
}

function shorten($url)
{
    $url = urlencode($url);
    return url('/redirect?url=' . $url);
}

function html2text($html)
{
    return preg_replace("/\n\s+/", "\n", rtrim(html_entity_decode(strip_tags($html))));
}
function extract_ytlink($text)
{
    $regex = '/https?:\/\/(?:www\.)?(?:youtube\.com\/watch\?v=|youtu\.be\/)([a-zA-Z0-9_-]{11})/';
    preg_match($regex, $text, $matches);
    if (isset($matches[1])) {
        return 'https://www.youtube.com/watch?v=' . $matches[1];
    } else {
        return null;
    }
}

function getCategories()
{
    $categories = \App\Models\Category::where('active', 1)->get();
    return $categories;
}

function getRecentEvents()
{
    $events = \App\Models\Event::where('active', 1)->orderBy('id', 'desc')->limit(6)->get();
    return $events;
}
