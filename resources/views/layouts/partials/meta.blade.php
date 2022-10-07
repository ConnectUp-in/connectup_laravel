<title>{{ $page['title'] ?? 'ConnectUp | Connecting the Dots...' }}</title>


<meta name='keywords'
    content='{{ $page['keywords'] ?? '' }},startup, startups, startups in india, entrepreneurship, startup community, community startup, entrepreneur, entrepreneur in india, startup marketplace'>
<meta name='description'
    content='{{ $page['description'] ??
        'ConnectUp is a Centralized Startup Networking Platform that brings together startups, entrepreneurs, investors, and friends to come together to share ideas, and discuss opportunities for collaboration. .
                                                                                                                                                                    We are building the largest network of incubators, mentors, investors, and startups' }}'>
<meta name='subject' content='ConnectUp'>
<meta name='copyright' content='ConnectUp'>
<meta name='language' content='ES'>
<meta name='summary'
    content='ConnectUp is a Centralized Startup Networking Platform that brings together startups, entrepreneurs, investors, and friends to come together to share ideas, and discuss opportunities for collaboration. .
    We are building the largest network of incubators, mentors, investors, and startups'>
<meta name='Classification' content='Startup/Entrepreneurship'>
<meta name='author' content='ConnectUp, contact@connectup.in'>
<meta name='designer' content='ConnectUp'>
<meta name='reply-to' content='contact@connectup.in'>
<meta name='owner' content='ConnectUp'>
<meta name='category' content='Education'>
<meta name='subtitle'
    content='ConnectUp is a Centralized Startup Networking Platform that brings together startups, entrepreneurs, investors, and friends to come together to share ideas, and discuss opportunities for collaboration. .
We are building the largest network of incubators, mentors, investors, and startups'>
<meta name="monetization" content="$ilp.uphold.com/H82qqmD6EFq2">
<meta name="csrf-token" content="{{ csrf_token() }}">









<!-- Schema.org markup for Google+ -->
<meta itemprop="name" content="{{ $page['title'] ?? 'ConnectUp | Connecting the Dots...' }}">
<meta itemprop="description"
    content="{{ $description ??
        'ConnectUp is a Centralized Startup Networking Platform that brings together startups, entrepreneurs, investors, and friends to come together to share ideas, and discuss opportunities for collaboration. .
                                                                                                                    We are building the largest network of incubators, mentors, investors, and startups' }}">
<meta itemprop="image" content="{{ $page['image'] ?? '/assets/defaultsmaincover.jpg' }}">

<!-- Twitter Card data -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@connectupin">
<meta name="twitter:title" content="{{ $page['title'] ?? 'ConnectUp | Connecting the Dots...' }}">
<meta name="twitter:description"
    content="{{ $page['description'] ??
        'ConnectUp is a Centralized Startup Networking Platform that brings together startups, entrepreneurs, investors, and friends to come together to share ideas, and discuss opportunities for collaboration. .
                                                                    We are building the largest network of incubators, mentors, investors, and startups' }}">
<meta name="twitter:creator" content="@connectupin">
<!-- Twitter summary card with large image must be at least 280x150px -->
<meta name="twitter:image:src" content="{{ $page['image'] ?? '/assets/defaultsmaincover.jpg' }}">

<!-- Open Graph data -->
<meta property="og:title" content="{{ $page['title'] ?? 'ConnectUp | Connecting the Dots...' }}" />
<meta property="og:type" content="article" />
<meta property="og:url" content="https://connectup.in/" />
<meta property="og:image" content="{{ $page['image'] ?? '/assets/defaultsmaincover.jpg' }}" />
<meta property="og:description"
    content="{{ $page['description'] ??
        'ConnectUp is a Centralized Startup Networking Platform that brings together startups, entrepreneurs, investors, and friends to come together to share ideas, and discuss opportunities for collaboration. .
                                                                                        We are building the largest network of incubators, mentors, investors, and startups' }}" />
<meta property="og:site_name" content="{{ $page['title'] ?? 'ConnectUp | Connecting the Dots...' }}" />
<meta property="article:published_time" content="{{ $published_time ?? '' }}" />
<meta property="article:modified_time" content="{{ $updated_time ?? '' }}" />
<meta property="article:section" content="Entrepreneurship" />
<meta property="article:tag" content="Startup" />
{{-- <meta property="fb:admins" content="Facebook numberic ID" /> --}}



@include('layouts.partials.gtags')
