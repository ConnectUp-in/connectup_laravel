@php
$page['title'] = $startup->name . ' - ' . $startup->bio . ' | ConnectUp ';
$page['description'] = $startup->about;

@endphp

@extends('layouts/app')


@section('content')
    <!-- CONTENT GRID -->
    <div class="content-grid">
        <!-- PROFILE HEADER -->
        <div class="profile-header v2">
            <!-- PROFILE HEADER COVER -->
            <figure class="profile-header-cover liquid">
                <img src="{{ $startup->cover }}" alt="cover-29" />
            </figure>
            <!-- /PROFILE HEADER COVER -->

            <!-- PROFILE HEADER INFO -->
            <div class="profile-header-info">
                <!-- USER SHORT DESCRIPTION -->
                <div class="user-short-description big">
                    <!-- USER SHORT DESCRIPTION AVATAR -->
                    <a class="user-short-description-avatar user-avatar big no-stats" href="#">
                        <!-- USER AVATAR BORDER -->
                        <div class="user-avatar-border">
                            <!-- HEXAGON -->
                            <div class="hexagon-148-164"></div>
                            <!-- /HEXAGON -->
                        </div>
                        <!-- /USER AVATAR BORDER -->

                        <!-- USER AVATAR CONTENT -->
                        <div class="user-avatar-content">
                            <!-- HEXAGON -->
                            <div class="hexagon-image-124-136" data-src="{{ $startup->logo }}"></div>
                            <!-- /HEXAGON -->
                        </div>
                        <!-- /USER AVATAR CONTENT -->
                    </a>
                    <!-- /USER SHORT DESCRIPTION AVATAR -->

                    <!-- USER SHORT DESCRIPTION AVATAR -->
                    <a class="user-short-description-avatar user-short-description-avatar-mobile user-avatar medium no-stats"
                        href="#">
                        <!-- USER AVATAR BORDER -->
                        <div class="user-avatar-border">
                            <!-- HEXAGON -->
                            <div class="hexagon-120-130"></div>
                            <!-- /HEXAGON -->
                        </div>
                        <!-- /USER AVATAR BORDER -->

                        <!-- USER AVATAR CONTENT -->
                        <div class="user-avatar-content">
                            <!-- HEXAGON -->
                            <div class="hexagon-image-100-110" data-src="{{ $startup->logo }}"></div>
                            <!-- /HEXAGON -->
                        </div>
                        <!-- /USER AVATAR CONTENT -->
                    </a>
                    <!-- /USER SHORT DESCRIPTION AVATAR -->

                    <!-- USER SHORT DESCRIPTION TITLE -->
                    <p class="user-short-description-title">
                        <a href="#">{{ $startup->name }}</a>
                    </p>
                    <!-- /USER SHORT DESCRIPTION TITLE -->

                    <!-- USER SHORT DESCRIPTION TEXT -->
                    <p class="user-short-description-text">
                        {{ $startup->bio }}
                    </p>
                    <!-- /USER SHORT DESCRIPTION TEXT -->
                </div>
                <!-- /USER SHORT DESCRIPTION -->

                <!-- USER STATS -->
                <div class="user-stats">
                    <!-- USER STAT -->
                    <div class="user-stat big">
                        <!-- USER STAT ICON -->
                        <div class="user-stat-icon">
                            <!-- ICON PUBLIC -->
                            <svg class="icon-public">
                                <use xlink:href="#svg-{{ $startup->funded ? 'funded' : 'public' }}"></use>
                            </svg>
                            <!-- /ICON PUBLIC -->
                        </div>
                        <!-- /USER STAT ICON -->

                        <!-- USER STAT TEXT -->
                        <p class="user-stat-text">{{ $startup->funded ? 'Funded' : 'Bootstrap' }}</p>
                        <!-- /USER STAT TEXT -->
                    </div>
                    <!-- /USER STAT -->

                    <!-- USER STAT -->
                    <div class="user-stat big">
                        <!-- USER STAT TITLE -->
                        <p class="user-stat-title">0</p>
                        <!-- /USER STAT TITLE -->

                        <!-- USER STAT TEXT -->
                        <p class="user-stat-text">Follower</p>
                        <!-- /USER STAT TEXT -->
                    </div>
                    <!-- /USER STAT -->

                    <!-- USER STAT -->
                    <div class="user-stat big">
                        <!-- USER STAT TITLE -->
                        <p class="user-stat-title">0</p>
                        <!-- /USER STAT TITLE -->

                        <!-- USER STAT TEXT -->
                        <p class="user-stat-text">posts</p>
                        <!-- /USER STAT TEXT -->
                    </div>
                    <!-- /USER STAT -->

                    <!-- USER STAT -->
                    <div class="user-stat big">
                        <!-- USER STAT TITLE -->
                        <p class="user-stat-title">{{ changeIntoKMG(profileview($startup->id)) }}</p>
                        <!-- /USER STAT TITLE -->

                        <!-- USER STAT TEXT -->
                        <p class="user-stat-text">visits</p>
                        <!-- /USER STAT TEXT -->
                    </div>
                    <!-- /USER STAT -->
                </div>
                <!-- /USER STATS -->

                <!-- TAG STICKER -->
                <div class="tag-sticker">
                    <!-- TAG STICKER ICON -->
                    <svg class="tag-sticker-icon icon-public">
                        <use xlink:href="#svg-{{ $startup->funded ? 'funded' : 'public' }}"></use>
                    </svg>
                    <!-- /TAG STICKER ICON -->
                </div>
                <!-- /TAG STICKER -->

                <!-- PROFILE HEADER INFO ACTIONS -->
                <div class="profile-header-info-actions">
                    <!-- PROFILE HEADER INFO ACTION -->
                    <p class="profile-header-info-action button secondary" style="cursor: not-allowed">
                        <!-- ICON JOIN GROUP -->
                        <svg class="icon-join-group">
                            <use xlink:href="#svg-join-group"></use>
                        </svg>
                        <!-- /ICON JOIN GROUP -->
                    </p>
                    <!-- /PROFILE HEADER INFO ACTION -->


                    @if (Auth::check() && Auth::user()->id == ($startup->founder->id ?? null))
                        <!-- PROFILE HEADER INFO ACTION -->
                        <a class="profile-header-info-action button"
                            href="{{ route('startup.update.info', $startup->id) }}">
                            <!-- ICON MORE DOTS -->
                            <svg class="icon-icon">
                                <use xlink:href="#svg-manage"></use>
                            </svg>
                            <!-- /ICON MORE DOTS -->
                        </a>
                        <!-- /PROFILE HEADER INFO ACTION -->
                    @endif
                </div>
                <!-- /PROFILE HEADER INFO ACTIONS -->
            </div>
            <!-- /PROFILE HEADER INFO -->
        </div>
        <!-- /PROFILE HEADER -->

        {{-- <!-- SECTION NAVIGATION -->
        <nav class="section-navigation">
            <!-- SECTION MENU -->
            <div id="section-navigation-medium-slider" class="section-menu secondary">
                <!-- SECTION MENU ITEM -->
                <a class="section-menu-item active" href="#">
                    <!-- SECTION MENU ITEM ICON -->
                    <svg class="section-menu-item-icon icon-timeline">
                        <use xlink:href="#svg-timeline"></use>
                    </svg>
                    <!-- /SECTION MENU ITEM ICON -->

                    <!-- SECTION MENU ITEM TEXT -->
                    <p class="section-menu-item-text">Timeline</p>
                    <!-- /SECTION MENU ITEM TEXT -->
                </a>
                <!-- /SECTION MENU ITEM -->

                <!-- SECTION MENU ITEM -->
                <a class="section-menu-item" href="#">
                    <!-- SECTION MENU ITEM ICON -->
                    <svg class="section-menu-item-icon icon-info">
                        <use xlink:href="#svg-info"></use>
                    </svg>
                    <!-- /SECTION MENU ITEM ICON -->

                    <!-- SECTION MENU ITEM TEXT -->
                    <p class="section-menu-item-text">Info</p>
                    <!-- /SECTION MENU ITEM TEXT -->
                </a>
                <!-- /SECTION MENU ITEM -->

                <!-- SECTION MENU ITEM -->
                <a class="section-menu-item" href="#">
                    <!-- SECTION MENU ITEM ICON -->
                    <svg class="section-menu-item-icon icon-members">
                        <use xlink:href="#svg-members"></use>
                    </svg>
                    <!-- /SECTION MENU ITEM ICON -->

                    <!-- SECTION MENU ITEM TEXT -->
                    <p class="section-menu-item-text">Members</p>
                    <!-- /SECTION MENU ITEM TEXT -->
                </a>
                <!-- /SECTION MENU ITEM -->

                <!-- SECTION MENU ITEM -->
                <a class="section-menu-item" href="#">
                    <!-- SECTION MENU ITEM ICON -->
                    <svg class="section-menu-item-icon icon-forum">
                        <use xlink:href="#svg-forum"></use>
                    </svg>
                    <!-- /SECTION MENU ITEM ICON -->

                    <!-- SECTION MENU ITEM TEXT -->
                    <p class="section-menu-item-text">Forum</p>
                    <!-- /SECTION MENU ITEM TEXT -->
                </a>
                <!-- /SECTION MENU ITEM -->

                <!-- SECTION MENU ITEM -->
                <a class="section-menu-item" href="#">
                    <!-- SECTION MENU ITEM ICON -->
                    <svg class="section-menu-item-icon icon-photos">
                        <use xlink:href="#svg-photos"></use>
                    </svg>
                    <!-- /SECTION MENU ITEM ICON -->

                    <!-- SECTION MENU ITEM TEXT -->
                    <p class="section-menu-item-text">Photos</p>
                    <!-- /SECTION MENU ITEM TEXT -->
                </a>
                <!-- /SECTION MENU ITEM -->

                <!-- SECTION MENU ITEM -->
                <a class="section-menu-item" href="#">
                    <!-- SECTION MENU ITEM ICON -->
                    <svg class="section-menu-item-icon icon-videos">
                        <use xlink:href="#svg-videos"></use>
                    </svg>
                    <!-- /SECTION MENU ITEM ICON -->

                    <!-- SECTION MENU ITEM TEXT -->
                    <p class="section-menu-item-text">Videos</p>
                    <!-- /SECTION MENU ITEM TEXT -->
                </a>
                <!-- /SECTION MENU ITEM -->

                <!-- SECTION MENU ITEM -->
                <a class="section-menu-item" href="#">
                    <!-- SECTION MENU ITEM ICON -->
                    <svg class="section-menu-item-icon icon-events">
                        <use xlink:href="#svg-events"></use>
                    </svg>
                    <!-- /SECTION MENU ITEM ICON -->

                    <!-- SECTION MENU ITEM TEXT -->
                    <p class="section-menu-item-text">Events</p>
                    <!-- /SECTION MENU ITEM TEXT -->
                </a>
                <!-- /SECTION MENU ITEM -->
            </div>
            <!-- /SECTION MENU -->

            <!-- SLIDER CONTROLS -->
            <div id="section-navigation-medium-slider-controls" class="slider-controls">
                <!-- SLIDER CONTROL -->
                <div class="slider-control left">
                    <!-- SLIDER CONTROL ICON -->
                    <svg class="slider-control-icon icon-small-arrow">
                        <use xlink:href="#svg-small-arrow"></use>
                    </svg>
                    <!-- /SLIDER CONTROL ICON -->
                </div>
                <!-- /SLIDER CONTROL -->

                <!-- SLIDER CONTROL -->
                <div class="slider-control right">
                    <!-- SLIDER CONTROL ICON -->
                    <svg class="slider-control-icon icon-small-arrow">
                        <use xlink:href="#svg-small-arrow"></use>
                    </svg>
                    <!-- /SLIDER CONTROL ICON -->
                </div>
                <!-- /SLIDER CONTROL -->
            </div>
            <!-- /SLIDER CONTROLS -->
        </nav>
        <!-- /SECTION NAVIGATION --> --}}

        <!-- GRID -->
        <div class="grid grid-3-6-3 mobile-prefer-content">
            <!-- GRID COLUMN -->
            <div class="grid-column">

                <!-- WIDGET BOX -->
                <div class="widget-box">

                    <!-- WIDGET BOX TITLE -->
                    <p class="widget-box-title">Group Info</p>
                    <!-- /WIDGET BOX TITLE -->

                    <!-- WIDGET BOX CONTENT -->
                    <div class="widget-box-content">
                        <!-- PARAGRAPH -->
                        <p class="paragraph">
                            {{ $startup->about }}
                        </p>
                        <!-- /PARAGRAPH -->

                        <!-- INFORMATION LINE LIST -->
                        <div class="information-line-list">
                            @php
                                $infos = [
                                    'Founded' => ['type' => 'date', 'data' => $startup->founded_at],
                                    'Website' => ['type' => 'url', 'data' => $startup->website],
                                    'Stage' => ['type' => 'text', 'data' => $startup->stage->name],
                                    'Category' => ['type' => 'text', 'data' => $startup->category->name],
                                    'Email' => ['type' => 'email', 'data' => $startup->contact_email],
                                ];
                            @endphp
                            @foreach ($infos as $key => $value)
                                @if ($value['data'])
                                    <!-- INFORMATION LINE -->
                                    <div class="information-line">
                                        <!-- INFORMATION LINE TITLE -->
                                        <p class="information-line-title">
                                            {{ $key }}
                                        </p>
                                        <!-- /INFORMATION LINE TITLE -->

                                        <!-- INFORMATION LINE TEXT -->
                                        <p class="information-line-text">
                                            @if ($value['type'] == 'date')
                                                {{ Carbon::parse($value['data'])->format('d M Y') }}
                                            @elseif ($value['type'] == 'url')
                                                <a href="{{ $value['data'] }}" target="_blank">{{ $value['data'] }}</a>
                                            @elseif ($value['type'] == 'email')
                                                <a href="mailto:{{ $value['data'] }}">{{ $value['data'] }}</a>
                                            @else
                                                {{ $value['data'] }}
                                            @endif

                                        </p>
                                        <!-- /INFORMATION LINE TEXT -->
                                    </div>
                                    <!-- /INFORMATION LINE -->
                                @endif
                            @endforeach

                        </div>
                        <!-- /INFORMATION LINE LIST -->
                    </div>
                    <!-- /WIDGET BOX CONTENT -->
                </div>
                <!-- /WIDGET BOX -->

            </div>
            <!-- /GRID COLUMN -->

            <!-- GRID COLUMN -->
            <div class="grid-column">

                <!-- WIDGET BOX -->
                <div class="widget-box no-padding">
                    <!-- WIDGET BOX SETTINGS -->
                    <div class="widget-box-settings">
                        <!-- POST SETTINGS WRAP -->
                        <div class="post-settings-wrap">
                            <!-- POST SETTINGS -->
                            <div class="post-settings widget-box-post-settings-dropdown-trigger">
                                <!-- POST SETTINGS ICON -->
                                <svg class="post-settings-icon icon-more-dots">
                                    <use xlink:href="#svg-more-dots"></use>
                                </svg>
                                <!-- /POST SETTINGS ICON -->
                            </div>
                            <!-- /POST SETTINGS -->

                            <!-- SIMPLE DROPDOWN -->
                            <div class="simple-dropdown widget-box-post-settings-dropdown">
                                <!-- SIMPLE DROPDOWN LINK -->
                                <p class="simple-dropdown-link">Edit Post</p>
                                <!-- /SIMPLE DROPDOWN LINK -->

                                <!-- SIMPLE DROPDOWN LINK -->
                                <p class="simple-dropdown-link">Delete Post</p>
                                <!-- /SIMPLE DROPDOWN LINK -->

                                <!-- SIMPLE DROPDOWN LINK -->
                                <p class="simple-dropdown-link">Make it Featured</p>
                                <!-- /SIMPLE DROPDOWN LINK -->

                                <!-- SIMPLE DROPDOWN LINK -->
                                <p class="simple-dropdown-link">Report Post</p>
                                <!-- /SIMPLE DROPDOWN LINK -->

                                <!-- SIMPLE DROPDOWN LINK -->
                                <p class="simple-dropdown-link">Report Author</p>
                                <!-- /SIMPLE DROPDOWN LINK -->
                            </div>
                            <!-- /SIMPLE DROPDOWN -->
                        </div>
                        <!-- /POST SETTINGS WRAP -->
                    </div>
                    <!-- /WIDGET BOX SETTINGS -->

                    <!-- WIDGET BOX STATUS -->
                    <div class="widget-box-status">
                        <!-- WIDGET BOX STATUS CONTENT -->
                        <div class="widget-box-status-content">
                            <!-- USER STATUS -->
                            <div class="user-status">
                                <!-- USER STATUS AVATAR -->
                                <a class="user-status-avatar" href="{{ route('startup', $startup->username) }}">
                                    <!-- USER AVATAR -->
                                    <div class="user-avatar small no-outline">
                                        <!-- USER AVATAR CONTENT -->
                                        <div class="user-avatar-content">
                                            <!-- HEXAGON -->
                                            <div class="hexagon-image-30-32" data-src="{{ $startup->logo }}">
                                            </div>
                                            <!-- /HEXAGON -->
                                        </div>
                                        <!-- /USER AVATAR CONTENT -->

                                        <!-- USER AVATAR PROGRESS BORDER -->
                                        <div class="user-avatar-progress-border">
                                            <!-- HEXAGON -->
                                            <div class="hexagon-border-40-44"></div>
                                            <!-- /HEXAGON -->
                                        </div>
                                        <!-- /USER AVATAR PROGRESS BORDER -->

                                    </div>
                                    <!-- /USER AVATAR -->
                                </a>
                                <!-- /USER STATUS AVATAR -->

                                <!-- USER STATUS TITLE -->
                                <p class="user-status-title medium"><a class="bold"
                                        href="{{ route('startup', $startup->username) }}">{{ $startup->name }}</a></p>
                                <!-- /USER STATUS TITLE -->

                                <!-- USER STATUS TEXT -->
                                <p class="user-status-text small">few minutes ago</p>
                                <!-- /USER STATUS TEXT -->
                            </div>
                            <!-- /USER STATUS -->

                            <!-- WIDGET BOX STATUS TEXT -->
                            <p class="widget-box-status-text">Soon, You will be able to Post here. Just similar to this
                                Post
                            </p>
                            <!-- /WIDGET BOX STATUS TEXT -->
                        </div>
                        <!-- /WIDGET BOX STATUS CONTENT -->

                        <!-- WIDGET BOX PICTURE -->
                        <figure class="widget-box-picture popup-picture-trigger">
                            <img src="/assets/defaults/post.png" alt="cover-04">
                        </figure>
                        <!-- /WIDGET BOX PICTURE -->

                        <!-- WIDGET BOX STATUS CONTENT -->
                        <div class="widget-box-status-content">
                            <!-- TAG LIST -->
                            <div class="tag-list">
                                <!-- TAG ITEM -->
                                <a class="tag-item secondary" href="#">Coming Soon</a>
                                <!-- /TAG ITEM -->

                                <!-- TAG ITEM -->
                                <a class="tag-item secondary" href="#">Upcoming Features</a>
                                <!-- /TAG ITEM -->

                                {{-- <!-- TAG ITEM -->
                                <a class="tag-item secondary" href="#">Art</a>
                                <!-- /TAG ITEM -->

                                <!-- TAG ITEM -->
                                <a class="tag-item secondary" href="#">Machine</a>
                                <!-- /TAG ITEM -->

                                <!-- TAG ITEM -->
                                <a class="tag-item secondary" href="#">Wasteland</a>
                                <!-- /TAG ITEM --> --}}
                            </div>
                            <!-- /TAG LIST -->

                        </div>
                        <!-- /WIDGET BOX STATUS CONTENT -->
                    </div>
                    <!-- /WIDGET BOX STATUS -->

                </div>
                <!-- /WIDGET BOX -->

            </div>
            <!-- /GRID COLUMN -->

            <!-- GRID COLUMN -->
            <div class="grid-column">

                @widget('socials', ['socials' => $startup->socials])
                <!-- WIDGET BOX -->
                <div class="widget-box">

                    <!-- WIDGET BOX TITLE -->
                    <p class="widget-box-title">Founder Info</p>
                    <!-- /WIDGET BOX TITLE -->

                    <!-- WIDGET BOX CONTENT -->
                    <div class="widget-box-content">
                        @if ($startup->founder)
                            <!-- USER STATUS LIST -->
                            <div class="user-status-list">
                                <!-- USER STATUS -->
                                <div class="user-status">
                                    <!-- USER STATUS AVATAR -->
                                    <a class="user-status-avatar" href="{{ route('user', $startup->founder->id) }}">
                                        <!-- USER AVATAR -->
                                        <div class="user-avatar small no-outline">
                                            <!-- USER AVATAR CONTENT -->
                                            <div class="user-avatar-content">
                                                <!-- HEXAGON -->
                                                <div class="hexagon-image-30-32"
                                                    data-src="{{ $startup->founder->profile_photo_path }}"></div>
                                                <!-- /HEXAGON -->
                                            </div>
                                            <!-- /USER AVATAR CONTENT -->

                                            <!-- USER AVATAR PROGRESS -->
                                            <div class="user-avatar-progress">
                                                <!-- HEXAGON -->
                                                <div class="hexagon-progress-40-44"></div>
                                                <!-- /HEXAGON -->
                                            </div>
                                            <!-- /USER AVATAR PROGRESS -->

                                            <!-- USER AVATAR PROGRESS BORDER -->
                                            <div class="user-avatar-progress-border">
                                                <!-- HEXAGON -->
                                                <div class="hexagon-border-40-44"></div>
                                                <!-- /HEXAGON -->
                                            </div>
                                            <!-- /USER AVATAR PROGRESS BORDER -->

                                        </div>
                                        <!-- /USER AVATAR -->
                                    </a>
                                    <!-- /USER STATUS AVATAR -->

                                    <!-- USER STATUS TITLE -->
                                    <p class="user-status-title">
                                        <a class="bold"
                                            href="{{ route('user', $startup->founder->username) }}">{{ $startup->founder->name }}</a>
                                    </p>
                                    <!-- /USER STATUS TITLE -->

                                    <!-- USER STATUS TEXT -->
                                    <p class="user-status-text small">
                                        {{ '@' . $startup->founder->username }}
                                    </p>
                                    <!-- /USER STATUS TEXT -->
                                </div>
                                <!-- /USER STATUS -->

                            </div>
                            <!-- /USER STATUS LIST -->
                        @endif
                    </div>
                    <!-- /WIDGET BOX CONTENT -->
                </div>
                <!-- /WIDGET BOX -->
                <!-- WIDGET BOX -->
                <div class="widget-box">

                    <!-- WIDGET BOX TITLE -->
                    <p class="widget-box-title">Interests</p>
                    <!-- /WIDGET BOX TITLE -->

                    <!-- WIDGET BOX CONTENT -->
                    <div class="widget-box-content">

                        <p class="information-line-text">
                            @if ($startup->interests)
                                @forelse ($startup->interests as $interest)
                                    {{ $interest['name'] }}

                                    @if (!$loop->last)
                                        ,
                                    @endif
                                @empty
                                @endforelse
                            @endif
                    </div>
                </div>
                <!-- /WIDGET BOX CONTENT -->
            </div>
            <!-- /WIDGET BOX -->

        </div>
        <!-- /GRID COLUMN -->
    </div>
    <!-- /GRID -->
    </div>
    <!-- /CONTENT GRID -->

    {{-- <!-- POPUP VIDEO -->
    <div class="popup-video">
        <!-- POPUP CLOSE BUTTON -->
        <div class="popup-close-button popup-video-trigger">
            <!-- POPUP CLOSE BUTTON ICON -->
            <svg class="popup-close-button-icon icon-cross">
                <use xlink:href="#svg-cross"></use>
            </svg>
            <!-- /POPUP CLOSE BUTTON ICON -->
        </div>
        <!-- /POPUP CLOSE BUTTON -->

        <!-- IFRAME WRAP -->
        <div class="iframe-wrap">
            <iframe src="https://www.youtube.com/embed/6ErE27RNLDQ?start=200" allowfullscreen></iframe>
        </div>
        <!-- /IFRAME WRAP -->
    </div>
    <!-- /POPUP VIDEO -->

    <!-- POPUP PICTURE -->
    <div class="popup-picture">
        <!-- POPUP CLOSE BUTTON -->
        <div class="popup-close-button popup-picture-trigger">
            <!-- POPUP CLOSE BUTTON ICON -->
            <svg class="popup-close-button-icon icon-cross">
                <use xlink:href="#svg-cross"></use>
            </svg>
            <!-- /POPUP CLOSE BUTTON ICON -->
        </div>
        <!-- /POPUP CLOSE BUTTON -->

        <!-- WIDGET BOX -->
        <div class="widget-box no-padding">
            <!-- WIDGET BOX SCROLLABLE -->
            <div class="widget-box-scrollable" data-simplebar>
                <!-- WIDGET BOX SETTINGS -->
                <div class="widget-box-settings">
                    <!-- POST SETTINGS WRAP -->
                    <div class="post-settings-wrap">
                        <!-- POST SETTINGS -->
                        <div class="post-settings widget-box-post-settings-dropdown-trigger">
                            <!-- POST SETTINGS ICON -->
                            <svg class="post-settings-icon icon-more-dots">
                                <use xlink:href="#svg-more-dots"></use>
                            </svg>
                            <!-- /POST SETTINGS ICON -->
                        </div>
                        <!-- /POST SETTINGS -->

                        <!-- SIMPLE DROPDOWN -->
                        <div class="simple-dropdown widget-box-post-settings-dropdown">
                            <!-- SIMPLE DROPDOWN LINK -->
                            <p class="simple-dropdown-link">Edit Post</p>
                            <!-- /SIMPLE DROPDOWN LINK -->

                            <!-- SIMPLE DROPDOWN LINK -->
                            <p class="simple-dropdown-link">Delete Post</p>
                            <!-- /SIMPLE DROPDOWN LINK -->

                            <!-- SIMPLE DROPDOWN LINK -->
                            <p class="simple-dropdown-link">
                                Make it Featured
                            </p>
                            <!-- /SIMPLE DROPDOWN LINK -->

                            <!-- SIMPLE DROPDOWN LINK -->
                            <p class="simple-dropdown-link">Report Post</p>
                            <!-- /SIMPLE DROPDOWN LINK -->

                            <!-- SIMPLE DROPDOWN LINK -->
                            <p class="simple-dropdown-link">
                                Report Author
                            </p>
                            <!-- /SIMPLE DROPDOWN LINK -->
                        </div>
                        <!-- /SIMPLE DROPDOWN -->
                    </div>
                    <!-- /POST SETTINGS WRAP -->
                </div>
                <!-- /WIDGET BOX SETTINGS -->

                <!-- WIDGET BOX STATUS -->
                <div class="widget-box-status">
                    <!-- WIDGET BOX STATUS CONTENT -->
                    <div class="widget-box-status-content">
                        <!-- USER STATUS -->
                        <div class="user-status">
                            <!-- USER STATUS AVATAR -->
                            <a class="user-status-avatar" href="#">
                                <!-- USER AVATAR -->
                                <div class="user-avatar small no-outline">
                                    <!-- USER AVATAR CONTENT -->
                                    <div class="user-avatar-content">
                                        <!-- HEXAGON -->
                                        <div class="hexagon-image-30-32" data-src="/assets/template/img/avatar/01.jpg">
                                        </div>
                                        <!-- /HEXAGON -->
                                    </div>
                                    <!-- /USER AVATAR CONTENT -->

                                    <!-- USER AVATAR PROGRESS -->
                                    <div class="user-avatar-progress">
                                        <!-- HEXAGON -->
                                        <div class="hexagon-progress-40-44"></div>
                                        <!-- /HEXAGON -->
                                    </div>
                                    <!-- /USER AVATAR PROGRESS -->

                                    <!-- USER AVATAR PROGRESS BORDER -->
                                    <div class="user-avatar-progress-border">
                                        <!-- HEXAGON -->
                                        <div class="hexagon-border-40-44"></div>
                                        <!-- /HEXAGON -->
                                    </div>
                                    <!-- /USER AVATAR PROGRESS BORDER -->

                                    <!-- USER AVATAR BADGE -->
                                    <div class="user-avatar-badge">
                                        <!-- USER AVATAR BADGE BORDER -->
                                        <div class="user-avatar-badge-border">
                                            <!-- HEXAGON -->
                                            <div class="hexagon-22-24"></div>
                                            <!-- /HEXAGON -->
                                        </div>
                                        <!-- /USER AVATAR BADGE BORDER -->

                                        <!-- USER AVATAR BADGE CONTENT -->
                                        <div class="user-avatar-badge-content">
                                            <!-- HEXAGON -->
                                            <div class="hexagon-dark-16-18"></div>
                                            <!-- /HEXAGON -->
                                        </div>
                                        <!-- /USER AVATAR BADGE CONTENT -->

                                        <!-- USER AVATAR BADGE TEXT -->
                                        <p class="user-avatar-badge-text">
                                            24
                                        </p>
                                        <!-- /USER AVATAR BADGE TEXT -->
                                    </div>
                                    <!-- /USER AVATAR BADGE -->
                                </div>
                                <!-- /USER AVATAR -->
                            </a>
                            <!-- /USER STATUS AVATAR -->

                            <!-- USER STATUS TITLE -->
                            <p class="user-status-title medium">
                                <a class="bold" href="#">Marina Valentine</a>
                            </p>
                            <!-- /USER STATUS TITLE -->

                            <!-- USER STATUS TEXT -->
                            <p class="user-status-text small">
                                29 minutes ago
                            </p>
                            <!-- /USER STATUS TEXT -->
                        </div>
                        <!-- /USER STATUS -->

                        <!-- WIDGET BOX STATUS TEXT -->
                        <p class="widget-box-status-text">
                            Here's a sneak peek of the official box cover
                            art for <a href="#">Machine Wasteland II</a>!
                            Remember that I'll be having a stream showing a
                            preview tommorrow at 9PM PCT!
                        </p>
                        <!-- /WIDGET BOX STATUS TEXT -->

                        <!-- TAG LIST -->
                        <div class="tag-list">
                            <!-- TAG ITEM -->
                            <a class="tag-item secondary" href="#">Cover</a>
                            <!-- /TAG ITEM -->

                            <!-- TAG ITEM -->
                            <a class="tag-item secondary" href="#">Preview</a>
                            <!-- /TAG ITEM -->

                            <!-- TAG ITEM -->
                            <a class="tag-item secondary" href="#">Art</a>
                            <!-- /TAG ITEM -->

                            <!-- TAG ITEM -->
                            <a class="tag-item secondary" href="#">Machine</a>
                            <!-- /TAG ITEM -->

                            <!-- TAG ITEM -->
                            <a class="tag-item secondary" href="#">Wasteland</a>
                            <!-- /TAG ITEM -->
                        </div>
                        <!-- /TAG LIST -->

                        <!-- CONTENT ACTIONS -->
                        <div class="content-actions">
                            <!-- CONTENT ACTION -->
                            <div class="content-action">
                                <!-- META LINE -->
                                <div class="meta-line">
                                    <!-- META LINE LIST -->
                                    <div class="meta-line-list reaction-item-list">
                                        <!-- REACTION ITEM -->
                                        <div class="reaction-item">
                                            <!-- REACTION IMAGE -->
                                            <img class="reaction-image reaction-item-dropdown-trigger"
                                                src="/assets/template/img/reaction/love.png" alt="reaction-love" />
                                            <!-- /REACTION IMAGE -->

                                            <!-- SIMPLE DROPDOWN -->
                                            <div class="simple-dropdown padded reaction-item-dropdown">
                                                <!-- SIMPLE DROPDOWN TEXT -->
                                                <p class="simple-dropdown-text">
                                                    <img class="reaction" src="/assets/template/img/reaction/love.png"
                                                        alt="reaction-love" />
                                                    <span class="bold">Love</span>
                                                </p>
                                                <!-- /SIMPLE DROPDOWN TEXT -->

                                                <!-- SIMPLE DROPDOWN TEXT -->
                                                <p class="simple-dropdown-text">
                                                    Destroy Dex
                                                </p>
                                                <!-- /SIMPLE DROPDOWN TEXT -->

                                                <!-- SIMPLE DROPDOWN TEXT -->
                                                <p class="simple-dropdown-text">
                                                    The Green Goo
                                                </p>
                                                <!-- /SIMPLE DROPDOWN TEXT -->

                                                <!-- SIMPLE DROPDOWN TEXT -->
                                                <p class="simple-dropdown-text">
                                                    Bearded Wonder
                                                </p>
                                                <!-- /SIMPLE DROPDOWN TEXT -->

                                                <!-- SIMPLE DROPDOWN TEXT -->
                                                <p class="simple-dropdown-text">
                                                    Sandra Strange
                                                </p>
                                                <!-- /SIMPLE DROPDOWN TEXT -->

                                                <!-- SIMPLE DROPDOWN TEXT -->
                                                <p class="simple-dropdown-text">
                                                    Matt Parker
                                                </p>
                                                <!-- /SIMPLE DROPDOWN TEXT -->

                                                <!-- SIMPLE DROPDOWN TEXT -->
                                                <p class="simple-dropdown-text">
                                                    James Murdock
                                                </p>
                                                <!-- /SIMPLE DROPDOWN TEXT -->

                                                <!-- SIMPLE DROPDOWN TEXT -->
                                                <p class="simple-dropdown-text">
                                                    <span class="bold">and 14
                                                        more...</span>
                                                </p>
                                                <!-- /SIMPLE DROPDOWN TEXT -->
                                            </div>
                                            <!-- /SIMPLE DROPDOWN -->
                                        </div>
                                        <!-- /REACTION ITEM -->

                                        <!-- REACTION ITEM -->
                                        <div class="reaction-item">
                                            <!-- REACTION IMAGE -->
                                            <img class="reaction-image reaction-item-dropdown-trigger"
                                                src="/assets/template/img/reaction/wow.png" alt="reaction-wow" />
                                            <!-- /REACTION IMAGE -->

                                            <!-- SIMPLE DROPDOWN -->
                                            <div class="simple-dropdown padded reaction-item-dropdown">
                                                <!-- SIMPLE DROPDOWN TEXT -->
                                                <p class="simple-dropdown-text">
                                                    <img class="reaction" src="/assets/template/img/reaction/wow.png"
                                                        alt="reaction-wow" />
                                                    <span class="bold">Wow</span>
                                                </p>
                                                <!-- /SIMPLE DROPDOWN TEXT -->

                                                <!-- SIMPLE DROPDOWN TEXT -->
                                                <p class="simple-dropdown-text">
                                                    Jett Spiegel
                                                </p>
                                                <!-- /SIMPLE DROPDOWN TEXT -->
                                            </div>
                                            <!-- /SIMPLE DROPDOWN -->
                                        </div>
                                        <!-- /REACTION ITEM -->

                                        <!-- REACTION ITEM -->
                                        <div class="reaction-item">
                                            <!-- REACTION IMAGE -->
                                            <img class="reaction-image reaction-item-dropdown-trigger"
                                                src="/assets/template/img/reaction/like.png" alt="reaction-like" />
                                            <!-- /REACTION IMAGE -->

                                            <!-- SIMPLE DROPDOWN -->
                                            <div class="simple-dropdown padded reaction-item-dropdown">
                                                <!-- SIMPLE DROPDOWN TEXT -->
                                                <p class="simple-dropdown-text">
                                                    <img class="reaction" src="/assets/template/img/reaction/like.png"
                                                        alt="reaction-like" />
                                                    <span class="bold">Like</span>
                                                </p>
                                                <!-- /SIMPLE DROPDOWN TEXT -->

                                                <!-- SIMPLE DROPDOWN TEXT -->
                                                <p class="simple-dropdown-text">
                                                    Neko Bebop
                                                </p>
                                                <!-- /SIMPLE DROPDOWN TEXT -->

                                                <!-- SIMPLE DROPDOWN TEXT -->
                                                <p class="simple-dropdown-text">
                                                    Nick Grissom
                                                </p>
                                                <!-- /SIMPLE DROPDOWN TEXT -->

                                                <!-- SIMPLE DROPDOWN TEXT -->
                                                <p class="simple-dropdown-text">
                                                    Sarah Diamond
                                                </p>
                                                <!-- /SIMPLE DROPDOWN TEXT -->
                                            </div>
                                            <!-- /SIMPLE DROPDOWN -->
                                        </div>
                                        <!-- /REACTION ITEM -->
                                    </div>
                                    <!-- /META LINE LIST -->

                                    <!-- META LINE TEXT -->
                                    <p class="meta-line-text">24</p>
                                    <!-- /META LINE TEXT -->
                                </div>
                                <!-- /META LINE -->
                            </div>
                            <!-- /CONTENT ACTION -->

                            <!-- CONTENT ACTION -->
                            <div class="content-action">
                                <!-- META LINE -->
                                <div class="meta-line">
                                    <!-- META LINE LINK -->
                                    <p class="meta-line-link">
                                        13 Comments
                                    </p>
                                    <!-- /META LINE LINK -->
                                </div>
                                <!-- /META LINE -->

                                <!-- META LINE -->
                                <div class="meta-line">
                                    <!-- META LINE TEXT -->
                                    <p class="meta-line-text">0 Shares</p>
                                    <!-- /META LINE TEXT -->
                                </div>
                                <!-- /META LINE -->
                            </div>
                            <!-- /CONTENT ACTION -->
                        </div>
                        <!-- /CONTENT ACTIONS -->
                    </div>
                    <!-- /WIDGET BOX STATUS CONTENT -->
                </div>
                <!-- /WIDGET BOX STATUS -->

                <!-- POST OPTIONS -->
                <div class="post-options">
                    <!-- POST OPTION WRAP -->
                    <div class="post-option-wrap">
                        <!-- POST OPTION -->
                        <div class="post-option no-text reaction-options-dropdown-trigger">
                            <!-- POST OPTION ICON -->
                            <svg class="post-option-icon icon-thumbs-up">
                                <use xlink:href="#svg-thumbs-up"></use>
                            </svg>
                            <!-- /POST OPTION ICON -->
                        </div>
                        <!-- /POST OPTION -->

                        <!-- REACTION OPTIONS -->
                        <div class="reaction-options small reaction-options-dropdown">
                            <!-- REACTION OPTION -->
                            <div class="reaction-option text-tooltip-tft" data-title="Like">
                                <!-- REACTION OPTION IMAGE -->
                                <img class="reaction-option-image" src="/assets/template/img/reaction/like.png"
                                    alt="reaction-like" />
                                <!-- /REACTION OPTION IMAGE -->
                            </div>
                            <!-- /REACTION OPTION -->

                            <!-- REACTION OPTION -->
                            <div class="reaction-option text-tooltip-tft" data-title="Love">
                                <!-- REACTION OPTION IMAGE -->
                                <img class="reaction-option-image" src="/assets/template/img/reaction/love.png"
                                    alt="reaction-love" />
                                <!-- /REACTION OPTION IMAGE -->
                            </div>
                            <!-- /REACTION OPTION -->

                            <!-- REACTION OPTION -->
                            <div class="reaction-option text-tooltip-tft" data-title="Dislike">
                                <!-- REACTION OPTION IMAGE -->
                                <img class="reaction-option-image" src="/assets/template/img/reaction/dislike.png"
                                    alt="reaction-dislike" />
                                <!-- /REACTION OPTION IMAGE -->
                            </div>
                            <!-- /REACTION OPTION -->

                            <!-- REACTION OPTION -->
                            <div class="reaction-option text-tooltip-tft" data-title="Happy">
                                <!-- REACTION OPTION IMAGE -->
                                <img class="reaction-option-image" src="/assets/template/img/reaction/happy.png"
                                    alt="reaction-happy" />
                                <!-- /REACTION OPTION IMAGE -->
                            </div>
                            <!-- /REACTION OPTION -->

                            <!-- REACTION OPTION -->
                            <div class="reaction-option text-tooltip-tft" data-title="Funny">
                                <!-- REACTION OPTION IMAGE -->
                                <img class="reaction-option-image" src="/assets/template/img/reaction/funny.png"
                                    alt="reaction-funny" />
                                <!-- /REACTION OPTION IMAGE -->
                            </div>
                            <!-- /REACTION OPTION -->

                            <!-- REACTION OPTION -->
                            <div class="reaction-option text-tooltip-tft" data-title="Wow">
                                <!-- REACTION OPTION IMAGE -->
                                <img class="reaction-option-image" src="/assets/template/img/reaction/wow.png"
                                    alt="reaction-wow" />
                                <!-- /REACTION OPTION IMAGE -->
                            </div>
                            <!-- /REACTION OPTION -->

                            <!-- REACTION OPTION -->
                            <div class="reaction-option text-tooltip-tft" data-title="Angry">
                                <!-- REACTION OPTION IMAGE -->
                                <img class="reaction-option-image" src="/assets/template/img/reaction/angry.png"
                                    alt="reaction-angry" />
                                <!-- /REACTION OPTION IMAGE -->
                            </div>
                            <!-- /REACTION OPTION -->

                            <!-- REACTION OPTION -->
                            <div class="reaction-option text-tooltip-tft" data-title="Sad">
                                <!-- REACTION OPTION IMAGE -->
                                <img class="reaction-option-image" src="/assets/template/img/reaction/sad.png"
                                    alt="reaction-sad" />
                                <!-- /REACTION OPTION IMAGE -->
                            </div>
                            <!-- /REACTION OPTION -->
                        </div>
                        <!-- /REACTION OPTIONS -->
                    </div>
                    <!-- /POST OPTION WRAP -->

                    <!-- POST OPTION -->
                    <div class="post-option no-text active">
                        <!-- POST OPTION ICON -->
                        <svg class="post-option-icon icon-comment">
                            <use xlink:href="#svg-comment"></use>
                        </svg>
                        <!-- /POST OPTION ICON -->
                    </div>
                    <!-- /POST OPTION -->

                    <!-- POST OPTION -->
                    <div class="post-option no-text">
                        <!-- POST OPTION ICON -->
                        <svg class="post-option-icon icon-share">
                            <use xlink:href="#svg-share"></use>
                        </svg>
                        <!-- /POST OPTION ICON -->
                    </div>
                    <!-- /POST OPTION -->
                </div>
                <!-- /POST OPTIONS -->

                <!-- POST COMMENT LIST -->
                <div class="post-comment-list">
                    <!-- POST COMMENT -->
                    <div class="post-comment">
                        <!-- USER AVATAR -->
                        <a class="user-avatar small no-outline" href="#">
                            <!-- USER AVATAR CONTENT -->
                            <div class="user-avatar-content">
                                <!-- HEXAGON -->
                                <div class="hexagon-image-30-32" data-src="/assets/template/img/avatar/05.jpg"></div>
                                <!-- /HEXAGON -->
                            </div>
                            <!-- /USER AVATAR CONTENT -->

                            <!-- USER AVATAR PROGRESS -->
                            <div class="user-avatar-progress">
                                <!-- HEXAGON -->
                                <div class="hexagon-progress-40-44"></div>
                                <!-- /HEXAGON -->
                            </div>
                            <!-- /USER AVATAR PROGRESS -->

                            <!-- USER AVATAR PROGRESS BORDER -->
                            <div class="user-avatar-progress-border">
                                <!-- HEXAGON -->
                                <div class="hexagon-border-40-44"></div>
                                <!-- /HEXAGON -->
                            </div>
                            <!-- /USER AVATAR PROGRESS BORDER -->

                            <!-- USER AVATAR BADGE -->
                            <div class="user-avatar-badge">
                                <!-- USER AVATAR BADGE BORDER -->
                                <div class="user-avatar-badge-border">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-22-24"></div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR BADGE BORDER -->

                                <!-- USER AVATAR BADGE CONTENT -->
                                <div class="user-avatar-badge-content">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-dark-16-18"></div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR BADGE CONTENT -->

                                <!-- USER AVATAR BADGE TEXT -->
                                <p class="user-avatar-badge-text">12</p>
                                <!-- /USER AVATAR BADGE TEXT -->
                            </div>
                            <!-- /USER AVATAR BADGE -->
                        </a>
                        <!-- /USER AVATAR -->

                        <!-- POST COMMENT TEXT -->
                        <p class="post-comment-text">
                            <a class="post-comment-text-author" href="#">Neko Bebop</a>It's always a
                            pleasure to do this streams with
                            you! If we have at least half the fun than last
                            time it will be an incredible success!
                        </p>
                        <!-- /POST COMMENT TEXT -->

                        <!-- CONTENT ACTIONS -->
                        <div class="content-actions">
                            <!-- CONTENT ACTION -->
                            <div class="content-action">
                                <!-- META LINE -->
                                <div class="meta-line">
                                    <!-- META LINE LIST -->
                                    <div class="meta-line-list reaction-item-list small">
                                        <!-- REACTION ITEM -->
                                        <div class="reaction-item">
                                            <!-- REACTION IMAGE -->
                                            <img class="reaction-image reaction-item-dropdown-trigger"
                                                src="/assets/template/img/reaction/happy.png" alt="reaction-happy" />
                                            <!-- /REACTION IMAGE -->

                                            <!-- SIMPLE DROPDOWN -->
                                            <div class="simple-dropdown padded reaction-item-dropdown">
                                                <!-- SIMPLE DROPDOWN TEXT -->
                                                <p class="simple-dropdown-text">
                                                    <img class="reaction" src="/assets/template/img/reaction/happy.png"
                                                        alt="reaction-happy" />
                                                    <span class="bold">Happy</span>
                                                </p>
                                                <!-- /SIMPLE DROPDOWN TEXT -->

                                                <!-- SIMPLE DROPDOWN TEXT -->
                                                <p class="simple-dropdown-text">
                                                    Marcus Jhonson
                                                </p>
                                                <!-- /SIMPLE DROPDOWN TEXT -->
                                            </div>
                                            <!-- /SIMPLE DROPDOWN -->
                                        </div>
                                        <!-- /REACTION ITEM -->

                                        <!-- REACTION ITEM -->
                                        <div class="reaction-item">
                                            <!-- REACTION IMAGE -->
                                            <img class="reaction-image reaction-item-dropdown-trigger"
                                                src="/assets/template/img/reaction/like.png" alt="reaction-like" />
                                            <!-- /REACTION IMAGE -->

                                            <!-- SIMPLE DROPDOWN -->
                                            <div class="simple-dropdown padded reaction-item-dropdown">
                                                <!-- SIMPLE DROPDOWN TEXT -->
                                                <p class="simple-dropdown-text">
                                                    <img class="reaction" src="/assets/template/img/reaction/like.png"
                                                        alt="reaction-like" />
                                                    <span class="bold">Like</span>
                                                </p>
                                                <!-- /SIMPLE DROPDOWN TEXT -->

                                                <!-- SIMPLE DROPDOWN TEXT -->
                                                <p class="simple-dropdown-text">
                                                    Neko Bebop
                                                </p>
                                                <!-- /SIMPLE DROPDOWN TEXT -->

                                                <!-- SIMPLE DROPDOWN TEXT -->
                                                <p class="simple-dropdown-text">
                                                    Nick Grissom
                                                </p>
                                                <!-- /SIMPLE DROPDOWN TEXT -->

                                                <!-- SIMPLE DROPDOWN TEXT -->
                                                <p class="simple-dropdown-text">
                                                    Sarah Diamond
                                                </p>
                                                <!-- /SIMPLE DROPDOWN TEXT -->
                                            </div>
                                            <!-- /SIMPLE DROPDOWN -->
                                        </div>
                                        <!-- /REACTION ITEM -->
                                    </div>
                                    <!-- /META LINE LIST -->

                                    <!-- META LINE TEXT -->
                                    <p class="meta-line-text">4</p>
                                    <!-- /META LINE TEXT -->
                                </div>
                                <!-- /META LINE -->

                                <!-- META LINE -->
                                <div class="meta-line">
                                    <!-- META LINE LINK -->
                                    <p class="meta-line-link light reaction-options-small-dropdown-trigger">
                                        React!
                                    </p>
                                    <!-- /META LINE LINK -->

                                    <!-- REACTION OPTIONS -->
                                    <div class="reaction-options small reaction-options-small-dropdown">
                                        <!-- REACTION OPTION -->
                                        <div class="reaction-option text-tooltip-tft" data-title="Like">
                                            <!-- REACTION OPTION IMAGE -->
                                            <img class="reaction-option-image"
                                                src="/assets/template/img/reaction/like.png" alt="reaction-like" />
                                            <!-- /REACTION OPTION IMAGE -->
                                        </div>
                                        <!-- /REACTION OPTION -->

                                        <!-- REACTION OPTION -->
                                        <div class="reaction-option text-tooltip-tft" data-title="Love">
                                            <!-- REACTION OPTION IMAGE -->
                                            <img class="reaction-option-image"
                                                src="/assets/template/img/reaction/love.png" alt="reaction-love" />
                                            <!-- /REACTION OPTION IMAGE -->
                                        </div>
                                        <!-- /REACTION OPTION -->

                                        <!-- REACTION OPTION -->
                                        <div class="reaction-option text-tooltip-tft" data-title="Dislike">
                                            <!-- REACTION OPTION IMAGE -->
                                            <img class="reaction-option-image"
                                                src="/assets/template/img/reaction/dislike.png" alt="reaction-dislike" />
                                            <!-- /REACTION OPTION IMAGE -->
                                        </div>
                                        <!-- /REACTION OPTION -->

                                        <!-- REACTION OPTION -->
                                        <div class="reaction-option text-tooltip-tft" data-title="Happy">
                                            <!-- REACTION OPTION IMAGE -->
                                            <img class="reaction-option-image"
                                                src="/assets/template/img/reaction/happy.png" alt="reaction-happy" />
                                            <!-- /REACTION OPTION IMAGE -->
                                        </div>
                                        <!-- /REACTION OPTION -->

                                        <!-- REACTION OPTION -->
                                        <div class="reaction-option text-tooltip-tft" data-title="Funny">
                                            <!-- REACTION OPTION IMAGE -->
                                            <img class="reaction-option-image"
                                                src="/assets/template/img/reaction/funny.png" alt="reaction-funny" />
                                            <!-- /REACTION OPTION IMAGE -->
                                        </div>
                                        <!-- /REACTION OPTION -->

                                        <!-- REACTION OPTION -->
                                        <div class="reaction-option text-tooltip-tft" data-title="Wow">
                                            <!-- REACTION OPTION IMAGE -->
                                            <img class="reaction-option-image" src="/assets/template/img/reaction/wow.png"
                                                alt="reaction-wow" />
                                            <!-- /REACTION OPTION IMAGE -->
                                        </div>
                                        <!-- /REACTION OPTION -->

                                        <!-- REACTION OPTION -->
                                        <div class="reaction-option text-tooltip-tft" data-title="Angry">
                                            <!-- REACTION OPTION IMAGE -->
                                            <img class="reaction-option-image"
                                                src="/assets/template/img/reaction/angry.png" alt="reaction-angry" />
                                            <!-- /REACTION OPTION IMAGE -->
                                        </div>
                                        <!-- /REACTION OPTION -->

                                        <!-- REACTION OPTION -->
                                        <div class="reaction-option text-tooltip-tft" data-title="Sad">
                                            <!-- REACTION OPTION IMAGE -->
                                            <img class="reaction-option-image" src="/assets/template/img/reaction/sad.png"
                                                alt="reaction-sad" />
                                            <!-- /REACTION OPTION IMAGE -->
                                        </div>
                                        <!-- /REACTION OPTION -->
                                    </div>
                                    <!-- /REACTION OPTIONS -->
                                </div>
                                <!-- /META LINE -->

                                <!-- META LINE -->
                                <div class="meta-line">
                                    <!-- META LINE LINK -->
                                    <p class="meta-line-link light">
                                        Reply
                                    </p>
                                    <!-- /META LINE LINK -->
                                </div>
                                <!-- /META LINE -->

                                <!-- META LINE -->
                                <div class="meta-line">
                                    <!-- META LINE TIMESTAMP -->
                                    <p class="meta-line-timestamp">
                                        15 min ago
                                    </p>
                                    <!-- /META LINE TIMESTAMP -->
                                </div>
                                <!-- /META LINE -->

                                <!-- META LINE -->
                                <div class="meta-line settings">
                                    <!-- POST SETTINGS WRAP -->
                                    <div class="post-settings-wrap">
                                        <!-- POST SETTINGS -->
                                        <div class="post-settings post-settings-dropdown-trigger">
                                            <!-- POST SETTINGS ICON -->
                                            <svg class="post-settings-icon icon-more-dots">
                                                <use xlink:href="#svg-more-dots"></use>
                                            </svg>
                                            <!-- /POST SETTINGS ICON -->
                                        </div>
                                        <!-- /POST SETTINGS -->

                                        <!-- SIMPLE DROPDOWN -->
                                        <div class="simple-dropdown post-settings-dropdown">
                                            <!-- SIMPLE DROPDOWN LINK -->
                                            <p class="simple-dropdown-link">
                                                Report Post
                                            </p>
                                            <!-- /SIMPLE DROPDOWN LINK -->
                                        </div>
                                        <!-- /SIMPLE DROPDOWN -->
                                    </div>
                                    <!-- /POST SETTINGS WRAP -->
                                </div>
                                <!-- /META LINE -->
                            </div>
                            <!-- /CONTENT ACTION -->
                        </div>
                        <!-- /CONTENT ACTIONS -->
                    </div>
                    <!-- /POST COMMENT -->

                    <!-- POST COMMENT -->
                    <div class="post-comment unread reply-2">
                        <!-- USER AVATAR -->
                        <a class="user-avatar small no-outline" href="#">
                            <!-- USER AVATAR CONTENT -->
                            <div class="user-avatar-content">
                                <!-- HEXAGON -->
                                <div class="hexagon-image-30-32" data-src="/assets/template/img/avatar/03.jpg"></div>
                                <!-- /HEXAGON -->
                            </div>
                            <!-- /USER AVATAR CONTENT -->

                            <!-- USER AVATAR PROGRESS -->
                            <div class="user-avatar-progress">
                                <!-- HEXAGON -->
                                <div class="hexagon-progress-40-44"></div>
                                <!-- /HEXAGON -->
                            </div>
                            <!-- /USER AVATAR PROGRESS -->

                            <!-- USER AVATAR PROGRESS BORDER -->
                            <div class="user-avatar-progress-border">
                                <!-- HEXAGON -->
                                <div class="hexagon-border-40-44"></div>
                                <!-- /HEXAGON -->
                            </div>
                            <!-- /USER AVATAR PROGRESS BORDER -->

                            <!-- USER AVATAR BADGE -->
                            <div class="user-avatar-badge">
                                <!-- USER AVATAR BADGE BORDER -->
                                <div class="user-avatar-badge-border">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-22-24"></div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR BADGE BORDER -->

                                <!-- USER AVATAR BADGE CONTENT -->
                                <div class="user-avatar-badge-content">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-dark-16-18"></div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR BADGE CONTENT -->

                                <!-- USER AVATAR BADGE TEXT -->
                                <p class="user-avatar-badge-text">16</p>
                                <!-- /USER AVATAR BADGE TEXT -->
                            </div>
                            <!-- /USER AVATAR BADGE -->
                        </a>
                        <!-- /USER AVATAR -->

                        <!-- POST COMMENT TEXT -->
                        <p class="post-comment-text">
                            <a class="post-comment-text-author" href="#">Nick Grissom</a>I wouldn't
                            miss it for anything!! Love both
                            streams!
                        </p>
                        <!-- /POST COMMENT TEXT -->

                        <!-- CONTENT ACTIONS -->
                        <div class="content-actions">
                            <!-- CONTENT ACTION -->
                            <div class="content-action">
                                <!-- META LINE -->
                                <div class="meta-line">
                                    <!-- META LINE LIST -->
                                    <div class="meta-line-list reaction-item-list small">
                                        <!-- REACTION ITEM -->
                                        <div class="reaction-item">
                                            <!-- REACTION IMAGE -->
                                            <img class="reaction-image reaction-item-dropdown-trigger"
                                                src="/assets/template/img/reaction/like.png" alt="reaction-like" />
                                            <!-- /REACTION IMAGE -->

                                            <!-- SIMPLE DROPDOWN -->
                                            <div class="simple-dropdown padded reaction-item-dropdown">
                                                <!-- SIMPLE DROPDOWN TEXT -->
                                                <p class="simple-dropdown-text">
                                                    <img class="reaction" src="/assets/template/img/reaction/like.png"
                                                        alt="reaction-like" />
                                                    <span class="bold">Like</span>
                                                </p>
                                                <!-- /SIMPLE DROPDOWN TEXT -->

                                                <!-- SIMPLE DROPDOWN TEXT -->
                                                <p class="simple-dropdown-text">
                                                    Neko Bebop
                                                </p>
                                                <!-- /SIMPLE DROPDOWN TEXT -->
                                            </div>
                                            <!-- /SIMPLE DROPDOWN -->
                                        </div>
                                        <!-- /REACTION ITEM -->
                                    </div>
                                    <!-- /META LINE LIST -->

                                    <!-- META LINE TEXT -->
                                    <p class="meta-line-text">1</p>
                                    <!-- /META LINE TEXT -->
                                </div>
                                <!-- /META LINE -->

                                <!-- META LINE -->
                                <div class="meta-line">
                                    <!-- META LINE LINK -->
                                    <p class="meta-line-link light reaction-options-small-dropdown-trigger">
                                        React!
                                    </p>
                                    <!-- /META LINE LINK -->

                                    <!-- REACTION OPTIONS -->
                                    <div class="reaction-options small reaction-options-small-dropdown">
                                        <!-- REACTION OPTION -->
                                        <div class="reaction-option text-tooltip-tft" data-title="Like">
                                            <!-- REACTION OPTION IMAGE -->
                                            <img class="reaction-option-image"
                                                src="/assets/template/img/reaction/like.png" alt="reaction-like" />
                                            <!-- /REACTION OPTION IMAGE -->
                                        </div>
                                        <!-- /REACTION OPTION -->

                                        <!-- REACTION OPTION -->
                                        <div class="reaction-option text-tooltip-tft" data-title="Love">
                                            <!-- REACTION OPTION IMAGE -->
                                            <img class="reaction-option-image"
                                                src="/assets/template/img/reaction/love.png" alt="reaction-love" />
                                            <!-- /REACTION OPTION IMAGE -->
                                        </div>
                                        <!-- /REACTION OPTION -->

                                        <!-- REACTION OPTION -->
                                        <div class="reaction-option text-tooltip-tft" data-title="Dislike">
                                            <!-- REACTION OPTION IMAGE -->
                                            <img class="reaction-option-image"
                                                src="/assets/template/img/reaction/dislike.png" alt="reaction-dislike" />
                                            <!-- /REACTION OPTION IMAGE -->
                                        </div>
                                        <!-- /REACTION OPTION -->

                                        <!-- REACTION OPTION -->
                                        <div class="reaction-option text-tooltip-tft" data-title="Happy">
                                            <!-- REACTION OPTION IMAGE -->
                                            <img class="reaction-option-image"
                                                src="/assets/template/img/reaction/happy.png" alt="reaction-happy" />
                                            <!-- /REACTION OPTION IMAGE -->
                                        </div>
                                        <!-- /REACTION OPTION -->

                                        <!-- REACTION OPTION -->
                                        <div class="reaction-option text-tooltip-tft" data-title="Funny">
                                            <!-- REACTION OPTION IMAGE -->
                                            <img class="reaction-option-image"
                                                src="/assets/template/img/reaction/funny.png" alt="reaction-funny" />
                                            <!-- /REACTION OPTION IMAGE -->
                                        </div>
                                        <!-- /REACTION OPTION -->

                                        <!-- REACTION OPTION -->
                                        <div class="reaction-option text-tooltip-tft" data-title="Wow">
                                            <!-- REACTION OPTION IMAGE -->
                                            <img class="reaction-option-image" src="/assets/template/img/reaction/wow.png"
                                                alt="reaction-wow" />
                                            <!-- /REACTION OPTION IMAGE -->
                                        </div>
                                        <!-- /REACTION OPTION -->

                                        <!-- REACTION OPTION -->
                                        <div class="reaction-option text-tooltip-tft" data-title="Angry">
                                            <!-- REACTION OPTION IMAGE -->
                                            <img class="reaction-option-image"
                                                src="/assets/template/img/reaction/angry.png" alt="reaction-angry" />
                                            <!-- /REACTION OPTION IMAGE -->
                                        </div>
                                        <!-- /REACTION OPTION -->

                                        <!-- REACTION OPTION -->
                                        <div class="reaction-option text-tooltip-tft" data-title="Sad">
                                            <!-- REACTION OPTION IMAGE -->
                                            <img class="reaction-option-image" src="/assets/template/img/reaction/sad.png"
                                                alt="reaction-sad" />
                                            <!-- /REACTION OPTION IMAGE -->
                                        </div>
                                        <!-- /REACTION OPTION -->
                                    </div>
                                    <!-- /REACTION OPTIONS -->
                                </div>
                                <!-- /META LINE -->

                                <!-- META LINE -->
                                <div class="meta-line">
                                    <!-- META LINE LINK -->
                                    <p class="meta-line-link light">
                                        Reply
                                    </p>
                                    <!-- /META LINE LINK -->
                                </div>
                                <!-- /META LINE -->

                                <!-- META LINE -->
                                <div class="meta-line">
                                    <!-- META LINE TIMESTAMP -->
                                    <p class="meta-line-timestamp">
                                        2 min ago
                                    </p>
                                    <!-- /META LINE TIMESTAMP -->
                                </div>
                                <!-- /META LINE -->

                                <!-- META LINE -->
                                <div class="meta-line settings">
                                    <!-- POST SETTINGS WRAP -->
                                    <div class="post-settings-wrap">
                                        <!-- POST SETTINGS -->
                                        <div class="post-settings post-settings-dropdown-trigger">
                                            <!-- POST SETTINGS ICON -->
                                            <svg class="post-settings-icon icon-more-dots">
                                                <use xlink:href="#svg-more-dots"></use>
                                            </svg>
                                            <!-- /POST SETTINGS ICON -->
                                        </div>
                                        <!-- /POST SETTINGS -->

                                        <!-- SIMPLE DROPDOWN -->
                                        <div class="simple-dropdown post-settings-dropdown">
                                            <!-- SIMPLE DROPDOWN LINK -->
                                            <p class="simple-dropdown-link">
                                                Report Post
                                            </p>
                                            <!-- /SIMPLE DROPDOWN LINK -->
                                        </div>
                                        <!-- /SIMPLE DROPDOWN -->
                                    </div>
                                    <!-- /POST SETTINGS WRAP -->
                                </div>
                                <!-- /META LINE -->
                            </div>
                            <!-- /CONTENT ACTION -->
                        </div>
                        <!-- /CONTENT ACTIONS -->
                    </div>
                    <!-- /POST COMMENT -->

                    <!-- POST COMMENT -->
                    <div class="post-comment">
                        <!-- USER AVATAR -->
                        <a class="user-avatar small no-outline" href="#">
                            <!-- USER AVATAR CONTENT -->
                            <div class="user-avatar-content">
                                <!-- HEXAGON -->
                                <div class="hexagon-image-30-32" data-src="/assets/template/img/avatar/02.jpg"></div>
                                <!-- /HEXAGON -->
                            </div>
                            <!-- /USER AVATAR CONTENT -->

                            <!-- USER AVATAR PROGRESS -->
                            <div class="user-avatar-progress">
                                <!-- HEXAGON -->
                                <div class="hexagon-progress-40-44"></div>
                                <!-- /HEXAGON -->
                            </div>
                            <!-- /USER AVATAR PROGRESS -->

                            <!-- USER AVATAR PROGRESS BORDER -->
                            <div class="user-avatar-progress-border">
                                <!-- HEXAGON -->
                                <div class="hexagon-border-40-44"></div>
                                <!-- /HEXAGON -->
                            </div>
                            <!-- /USER AVATAR PROGRESS BORDER -->

                            <!-- USER AVATAR BADGE -->
                            <div class="user-avatar-badge">
                                <!-- USER AVATAR BADGE BORDER -->
                                <div class="user-avatar-badge-border">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-22-24"></div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR BADGE BORDER -->

                                <!-- USER AVATAR BADGE CONTENT -->
                                <div class="user-avatar-badge-content">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-dark-16-18"></div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR BADGE CONTENT -->

                                <!-- USER AVATAR BADGE TEXT -->
                                <p class="user-avatar-badge-text">19</p>
                                <!-- /USER AVATAR BADGE TEXT -->
                            </div>
                            <!-- /USER AVATAR BADGE -->
                        </a>
                        <!-- /USER AVATAR -->

                        <!-- POST COMMENT TEXT -->
                        <p class="post-comment-text">
                            <a class="post-comment-text-author" href="#">Destroy Dex</a>YEAHHH!!
                            <a href="#">@MarinaValentine</a>
                            I really enjoyed your last stream and it also
                            was really funny! Can't wait!
                        </p>
                        <!-- /POST COMMENT TEXT -->

                        <!-- CONTENT ACTIONS -->
                        <div class="content-actions">
                            <!-- CONTENT ACTION -->
                            <div class="content-action">
                                <!-- META LINE -->
                                <div class="meta-line">
                                    <!-- META LINE LINK -->
                                    <p class="meta-line-link light reaction-options-small-dropdown-trigger">
                                        React!
                                    </p>
                                    <!-- /META LINE LINK -->

                                    <!-- REACTION OPTIONS -->
                                    <div class="reaction-options small reaction-options-small-dropdown">
                                        <!-- REACTION OPTION -->
                                        <div class="reaction-option text-tooltip-tft" data-title="Like">
                                            <!-- REACTION OPTION IMAGE -->
                                            <img class="reaction-option-image"
                                                src="/assets/template/img/reaction/like.png" alt="reaction-like" />
                                            <!-- /REACTION OPTION IMAGE -->
                                        </div>
                                        <!-- /REACTION OPTION -->

                                        <!-- REACTION OPTION -->
                                        <div class="reaction-option text-tooltip-tft" data-title="Love">
                                            <!-- REACTION OPTION IMAGE -->
                                            <img class="reaction-option-image"
                                                src="/assets/template/img/reaction/love.png" alt="reaction-love" />
                                            <!-- /REACTION OPTION IMAGE -->
                                        </div>
                                        <!-- /REACTION OPTION -->

                                        <!-- REACTION OPTION -->
                                        <div class="reaction-option text-tooltip-tft" data-title="Dislike">
                                            <!-- REACTION OPTION IMAGE -->
                                            <img class="reaction-option-image"
                                                src="/assets/template/img/reaction/dislike.png" alt="reaction-dislike" />
                                            <!-- /REACTION OPTION IMAGE -->
                                        </div>
                                        <!-- /REACTION OPTION -->

                                        <!-- REACTION OPTION -->
                                        <div class="reaction-option text-tooltip-tft" data-title="Happy">
                                            <!-- REACTION OPTION IMAGE -->
                                            <img class="reaction-option-image"
                                                src="/assets/template/img/reaction/happy.png" alt="reaction-happy" />
                                            <!-- /REACTION OPTION IMAGE -->
                                        </div>
                                        <!-- /REACTION OPTION -->

                                        <!-- REACTION OPTION -->
                                        <div class="reaction-option text-tooltip-tft" data-title="Funny">
                                            <!-- REACTION OPTION IMAGE -->
                                            <img class="reaction-option-image"
                                                src="/assets/template/img/reaction/funny.png" alt="reaction-funny" />
                                            <!-- /REACTION OPTION IMAGE -->
                                        </div>
                                        <!-- /REACTION OPTION -->

                                        <!-- REACTION OPTION -->
                                        <div class="reaction-option text-tooltip-tft" data-title="Wow">
                                            <!-- REACTION OPTION IMAGE -->
                                            <img class="reaction-option-image" src="/assets/template/img/reaction/wow.png"
                                                alt="reaction-wow" />
                                            <!-- /REACTION OPTION IMAGE -->
                                        </div>
                                        <!-- /REACTION OPTION -->

                                        <!-- REACTION OPTION -->
                                        <div class="reaction-option text-tooltip-tft" data-title="Angry">
                                            <!-- REACTION OPTION IMAGE -->
                                            <img class="reaction-option-image"
                                                src="/assets/template/img/reaction/angry.png" alt="reaction-angry" />
                                            <!-- /REACTION OPTION IMAGE -->
                                        </div>
                                        <!-- /REACTION OPTION -->

                                        <!-- REACTION OPTION -->
                                        <div class="reaction-option text-tooltip-tft" data-title="Sad">
                                            <!-- REACTION OPTION IMAGE -->
                                            <img class="reaction-option-image" src="/assets/template/img/reaction/sad.png"
                                                alt="reaction-sad" />
                                            <!-- /REACTION OPTION IMAGE -->
                                        </div>
                                        <!-- /REACTION OPTION -->
                                    </div>
                                    <!-- /REACTION OPTIONS -->
                                </div>
                                <!-- /META LINE -->

                                <!-- META LINE -->
                                <div class="meta-line">
                                    <!-- META LINE LINK -->
                                    <p class="meta-line-link light">
                                        Reply
                                    </p>
                                    <!-- /META LINE LINK -->
                                </div>
                                <!-- /META LINE -->

                                <!-- META LINE -->
                                <div class="meta-line">
                                    <!-- META LINE TIMESTAMP -->
                                    <p class="meta-line-timestamp">
                                        27 min ago
                                    </p>
                                    <!-- /META LINE TIMESTAMP -->
                                </div>
                                <!-- /META LINE -->

                                <!-- META LINE -->
                                <div class="meta-line settings">
                                    <!-- POST SETTINGS WRAP -->
                                    <div class="post-settings-wrap">
                                        <!-- POST SETTINGS -->
                                        <div class="post-settings post-settings-dropdown-trigger">
                                            <!-- POST SETTINGS ICON -->
                                            <svg class="post-settings-icon icon-more-dots">
                                                <use xlink:href="#svg-more-dots"></use>
                                            </svg>
                                            <!-- /POST SETTINGS ICON -->
                                        </div>
                                        <!-- /POST SETTINGS -->

                                        <!-- SIMPLE DROPDOWN -->
                                        <div class="simple-dropdown post-settings-dropdown">
                                            <!-- SIMPLE DROPDOWN LINK -->
                                            <p class="simple-dropdown-link">
                                                Report Post
                                            </p>
                                            <!-- /SIMPLE DROPDOWN LINK -->
                                        </div>
                                        <!-- /SIMPLE DROPDOWN -->
                                    </div>
                                    <!-- /POST SETTINGS WRAP -->
                                </div>
                                <!-- /META LINE -->
                            </div>
                            <!-- /CONTENT ACTION -->
                        </div>
                        <!-- /CONTENT ACTIONS -->
                    </div>
                    <!-- /POST COMMENT -->

                    <!-- POST COMMENT -->
                    <div class="post-comment">
                        <!-- USER AVATAR -->
                        <a class="user-avatar small no-outline" href="#">
                            <!-- USER AVATAR CONTENT -->
                            <div class="user-avatar-content">
                                <!-- HEXAGON -->
                                <div class="hexagon-image-30-32" data-src="/assets/template/img/avatar/07.jpg"></div>
                                <!-- /HEXAGON -->
                            </div>
                            <!-- /USER AVATAR CONTENT -->

                            <!-- USER AVATAR PROGRESS -->
                            <div class="user-avatar-progress">
                                <!-- HEXAGON -->
                                <div class="hexagon-progress-40-44"></div>
                                <!-- /HEXAGON -->
                            </div>
                            <!-- /USER AVATAR PROGRESS -->

                            <!-- USER AVATAR PROGRESS BORDER -->
                            <div class="user-avatar-progress-border">
                                <!-- HEXAGON -->
                                <div class="hexagon-border-40-44"></div>
                                <!-- /HEXAGON -->
                            </div>
                            <!-- /USER AVATAR PROGRESS BORDER -->

                            <!-- USER AVATAR BADGE -->
                            <div class="user-avatar-badge">
                                <!-- USER AVATAR BADGE BORDER -->
                                <div class="user-avatar-badge-border">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-22-24"></div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR BADGE BORDER -->

                                <!-- USER AVATAR BADGE CONTENT -->
                                <div class="user-avatar-badge-content">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-dark-16-18"></div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR BADGE CONTENT -->

                                <!-- USER AVATAR BADGE TEXT -->
                                <p class="user-avatar-badge-text">26</p>
                                <!-- /USER AVATAR BADGE TEXT -->
                            </div>
                            <!-- /USER AVATAR BADGE -->
                        </a>
                        <!-- /USER AVATAR -->

                        <!-- POST COMMENT TEXT -->
                        <p class="post-comment-text">
                            <a class="post-comment-text-author" href="#">Sarah Diamond</a>That
                            sounds awesome Marina! And also thanks a
                            lot for the art sneak peek! I went to the
                            GameCon last week and had a great time playing
                            the game's open demo.
                        </p>
                        <!-- /POST COMMENT TEXT -->

                        <!-- CONTENT ACTIONS -->
                        <div class="content-actions">
                            <!-- CONTENT ACTION -->
                            <div class="content-action">
                                <!-- META LINE -->
                                <div class="meta-line">
                                    <!-- META LINE LINK -->
                                    <p class="meta-line-link light reaction-options-small-dropdown-trigger">
                                        React!
                                    </p>
                                    <!-- /META LINE LINK -->

                                    <!-- REACTION OPTIONS -->
                                    <div class="reaction-options small reaction-options-small-dropdown">
                                        <!-- REACTION OPTION -->
                                        <div class="reaction-option text-tooltip-tft" data-title="Like">
                                            <!-- REACTION OPTION IMAGE -->
                                            <img class="reaction-option-image"
                                                src="/assets/template/img/reaction/like.png" alt="reaction-like" />
                                            <!-- /REACTION OPTION IMAGE -->
                                        </div>
                                        <!-- /REACTION OPTION -->

                                        <!-- REACTION OPTION -->
                                        <div class="reaction-option text-tooltip-tft" data-title="Love">
                                            <!-- REACTION OPTION IMAGE -->
                                            <img class="reaction-option-image"
                                                src="/assets/template/img/reaction/love.png" alt="reaction-love" />
                                            <!-- /REACTION OPTION IMAGE -->
                                        </div>
                                        <!-- /REACTION OPTION -->

                                        <!-- REACTION OPTION -->
                                        <div class="reaction-option text-tooltip-tft" data-title="Dislike">
                                            <!-- REACTION OPTION IMAGE -->
                                            <img class="reaction-option-image"
                                                src="/assets/template/img/reaction/dislike.png" alt="reaction-dislike" />
                                            <!-- /REACTION OPTION IMAGE -->
                                        </div>
                                        <!-- /REACTION OPTION -->

                                        <!-- REACTION OPTION -->
                                        <div class="reaction-option text-tooltip-tft" data-title="Happy">
                                            <!-- REACTION OPTION IMAGE -->
                                            <img class="reaction-option-image"
                                                src="/assets/template/img/reaction/happy.png" alt="reaction-happy" />
                                            <!-- /REACTION OPTION IMAGE -->
                                        </div>
                                        <!-- /REACTION OPTION -->

                                        <!-- REACTION OPTION -->
                                        <div class="reaction-option text-tooltip-tft" data-title="Funny">
                                            <!-- REACTION OPTION IMAGE -->
                                            <img class="reaction-option-image"
                                                src="/assets/template/img/reaction/funny.png" alt="reaction-funny" />
                                            <!-- /REACTION OPTION IMAGE -->
                                        </div>
                                        <!-- /REACTION OPTION -->

                                        <!-- REACTION OPTION -->
                                        <div class="reaction-option text-tooltip-tft" data-title="Wow">
                                            <!-- REACTION OPTION IMAGE -->
                                            <img class="reaction-option-image" src="/assets/template/img/reaction/wow.png"
                                                alt="reaction-wow" />
                                            <!-- /REACTION OPTION IMAGE -->
                                        </div>
                                        <!-- /REACTION OPTION -->

                                        <!-- REACTION OPTION -->
                                        <div class="reaction-option text-tooltip-tft" data-title="Angry">
                                            <!-- REACTION OPTION IMAGE -->
                                            <img class="reaction-option-image"
                                                src="/assets/template/img/reaction/angry.png" alt="reaction-angry" />
                                            <!-- /REACTION OPTION IMAGE -->
                                        </div>
                                        <!-- /REACTION OPTION -->

                                        <!-- REACTION OPTION -->
                                        <div class="reaction-option text-tooltip-tft" data-title="Sad">
                                            <!-- REACTION OPTION IMAGE -->
                                            <img class="reaction-option-image" src="/assets/template/img/reaction/sad.png"
                                                alt="reaction-sad" />
                                            <!-- /REACTION OPTION IMAGE -->
                                        </div>
                                        <!-- /REACTION OPTION -->
                                    </div>
                                    <!-- /REACTION OPTIONS -->
                                </div>
                                <!-- /META LINE -->

                                <!-- META LINE -->
                                <div class="meta-line">
                                    <!-- META LINE LINK -->
                                    <p class="meta-line-link light">
                                        Reply
                                    </p>
                                    <!-- /META LINE LINK -->
                                </div>
                                <!-- /META LINE -->

                                <!-- META LINE -->
                                <div class="meta-line">
                                    <!-- META LINE TIMESTAMP -->
                                    <p class="meta-line-timestamp">
                                        39 min ago
                                    </p>
                                    <!-- /META LINE TIMESTAMP -->
                                </div>
                                <!-- /META LINE -->

                                <!-- META LINE -->
                                <div class="meta-line settings">
                                    <!-- POST SETTINGS WRAP -->
                                    <div class="post-settings-wrap">
                                        <!-- POST SETTINGS -->
                                        <div class="post-settings post-settings-dropdown-trigger">
                                            <!-- POST SETTINGS ICON -->
                                            <svg class="post-settings-icon icon-more-dots">
                                                <use xlink:href="#svg-more-dots"></use>
                                            </svg>
                                            <!-- /POST SETTINGS ICON -->
                                        </div>
                                        <!-- /POST SETTINGS -->

                                        <!-- SIMPLE DROPDOWN -->
                                        <div class="simple-dropdown post-settings-dropdown">
                                            <!-- SIMPLE DROPDOWN LINK -->
                                            <p class="simple-dropdown-link">
                                                Report Post
                                            </p>
                                            <!-- /SIMPLE DROPDOWN LINK -->
                                        </div>
                                        <!-- /SIMPLE DROPDOWN -->
                                    </div>
                                    <!-- /POST SETTINGS WRAP -->
                                </div>
                                <!-- /META LINE -->
                            </div>
                            <!-- /CONTENT ACTION -->
                        </div>
                        <!-- /CONTENT ACTIONS -->
                    </div>
                    <!-- /POST COMMENT -->

                    <!-- POST COMMENT HEADING -->
                    <p class="post-comment-heading">
                        Load More Comments
                        <span class="highlighted">9+</span>
                    </p>
                    <!-- /POST COMMENT HEADING -->
                </div>
                <!-- /POST COMMENT LIST -->
            </div>
            <!-- /WIDGET BOX SCROLLABLE -->

            <!-- POST COMMENT FORM -->
            <div class="post-comment-form bordered-top">
                <!-- USER AVATAR -->
                <div class="user-avatar small no-outline">
                    <!-- USER AVATAR CONTENT -->
                    <div class="user-avatar-content">
                        <!-- HEXAGON -->
                        <div class="hexagon-image-30-32" data-src="/assets/template/img/avatar/01.jpg"></div>
                        <!-- /HEXAGON -->
                    </div>
                    <!-- /USER AVATAR CONTENT -->

                    <!-- USER AVATAR PROGRESS -->
                    <div class="user-avatar-progress">
                        <!-- HEXAGON -->
                        <div class="hexagon-progress-40-44"></div>
                        <!-- /HEXAGON -->
                    </div>
                    <!-- /USER AVATAR PROGRESS -->

                    <!-- USER AVATAR PROGRESS BORDER -->
                    <div class="user-avatar-progress-border">
                        <!-- HEXAGON -->
                        <div class="hexagon-border-40-44"></div>
                        <!-- /HEXAGON -->
                    </div>
                    <!-- /USER AVATAR PROGRESS BORDER -->

                    <!-- USER AVATAR BADGE -->
                    <div class="user-avatar-badge">
                        <!-- USER AVATAR BADGE BORDER -->
                        <div class="user-avatar-badge-border">
                            <!-- HEXAGON -->
                            <div class="hexagon-22-24"></div>
                            <!-- /HEXAGON -->
                        </div>
                        <!-- /USER AVATAR BADGE BORDER -->

                        <!-- USER AVATAR BADGE CONTENT -->
                        <div class="user-avatar-badge-content">
                            <!-- HEXAGON -->
                            <div class="hexagon-dark-16-18"></div>
                            <!-- /HEXAGON -->
                        </div>
                        <!-- /USER AVATAR BADGE CONTENT -->

                        <!-- USER AVATAR BADGE TEXT -->
                        <p class="user-avatar-badge-text">24</p>
                        <!-- /USER AVATAR BADGE TEXT -->
                    </div>
                    <!-- /USER AVATAR BADGE -->
                </div>
                <!-- /USER AVATAR -->

                <!-- FORM -->
                <form class="form">
                    <!-- FORM ROW -->
                    <div class="form-row">
                        <!-- FORM ITEM -->
                        <div class="form-item">
                            <!-- FORM INPUT -->
                            <div class="form-input small">
                                <label for="popup-post-reply">Your Reply</label>
                                <input type="text" id="popup-post-reply" name="popup_post_reply" />
                            </div>
                            <!-- /FORM INPUT -->
                        </div>
                        <!-- /FORM ITEM -->
                    </div>
                    <!-- /FORM ROW -->
                </form>
                <!-- /FORM -->
            </div>
            <!-- /POST COMMENT FORM -->
        </div>
        <!-- /WIDGET BOX -->

        <!-- POPUP PICTURE IMAGE WRAP -->
        <div class="popup-picture-image-wrap">
            <!-- POPUP PICTURE IMAGE -->
            <figure class="popup-picture-image">
                <img src="/assets/template/img/cover/04.jpg" alt="cover-04" />
            </figure>
            <!-- /POPUP PICTURE IMAGE -->
        </div>
        <!-- /POPUP PICTURE IMAGE WRAP -->
    </div>
    <!-- /POPUP PICTURE -->

    <!-- POPUP EVENT -->
    <div class="popup-event popup-event-information">
        <!-- POPUP CLOSE BUTTON -->
        <div class="popup-close-button popup-event-information-trigger">
            <!-- POPUP CLOSE BUTTON ICON -->
            <svg class="popup-close-button-icon icon-cross">
                <use xlink:href="#svg-cross"></use>
            </svg>
            <!-- /POPUP CLOSE BUTTON ICON -->
        </div>
        <!-- /POPUP CLOSE BUTTON -->

        <!-- POPUP EVENT COVER -->
        <figure class="popup-event-cover liquid">
            <img src="/assets/template/img/cover/33.jpg" alt="cover-33" />
        </figure>
        <!-- /POPUP EVENT COVER -->

        <!-- POPUP EVENT INFO -->
        <div class="popup-event-info">
            <!-- POPUP EVENT TITLE -->
            <p class="popup-event-title">CosWorld 2019 After Party</p>
            <!-- /POPUP EVENT TITLE -->

            <!-- DECORATED FEATURE LIST -->
            <div class="decorated-feature-list">
                <!-- DECORATED FEATURE -->
                <div class="decorated-feature">
                    <!-- DECORATED FEATURE ICON -->
                    <svg class="decorated-feature-icon icon-events">
                        <use xlink:href="#svg-events"></use>
                    </svg>
                    <!-- /DECORATED FEATURE ICON -->

                    <!-- DECORATED FEATURE INFO -->
                    <div class="decorated-feature-info">
                        <!-- DECORATED FEATURE TITLE -->
                        <p class="decorated-feature-title">
                            Sunday, August 26th - 2019
                        </p>
                        <!-- /DECORATED FEATURE TITLE -->

                        <!-- DECORATED FEATURE TEXT -->
                        <p class="decorated-feature-text">8:30 AM</p>
                        <!-- /DECORATED FEATURE TEXT -->
                    </div>
                    <!-- /DECORATED FEATURE INFO -->
                </div>
                <!-- /DECORATED FEATURE -->

                <!-- DECORATED FEATURE -->
                <div class="decorated-feature">
                    <!-- DECORATED FEATURE ICON -->
                    <svg class="decorated-feature-icon icon-pin">
                        <use xlink:href="#svg-pin"></use>
                    </svg>
                    <!-- /DECORATED FEATURE ICON -->

                    <!-- DECORATED FEATURE INFO -->
                    <div class="decorated-feature-info">
                        <!-- DECORATED FEATURE TITLE -->
                        <p class="decorated-feature-title">
                            CosWorld Arena
                        </p>
                        <!-- /DECORATED FEATURE TITLE -->

                        <!-- DECORATED FEATURE TEXT -->
                        <p class="decorated-feature-text">
                            Alchemists Avenue 310 - NY 10001 New York - USA
                        </p>
                        <!-- /DECORATED FEATURE TEXT -->
                    </div>
                    <!-- /DECORATED FEATURE INFO -->
                </div>
                <!-- /DECORATED FEATURE -->

                <!-- DECORATED FEATURE -->
                <div class="decorated-feature">
                    <!-- DECORATED FEATURE ICON -->
                    <svg class="decorated-feature-icon icon-ticket">
                        <use xlink:href="#svg-ticket"></use>
                    </svg>
                    <!-- /DECORATED FEATURE ICON -->

                    <!-- DECORATED FEATURE INFO -->
                    <div class="decorated-feature-info">
                        <!-- DECORATED FEATURE TITLE -->
                        <p class="decorated-feature-title">$12 U$D</p>
                        <!-- /DECORATED FEATURE TITLE -->

                        <!-- DECORATED FEATURE TEXT -->
                        <p class="decorated-feature-text">Entry Price</p>
                        <!-- /DECORATED FEATURE TEXT -->
                    </div>
                    <!-- /DECORATED FEATURE INFO -->
                </div>
                <!-- /DECORATED FEATURE -->
            </div>
            <!-- /DECORATED FEATURE LIST -->

            <!-- POPUP EVENT SUBTITLE -->
            <p class="popup-event-subtitle">Description</p>
            <!-- /POPUP EVENT SUBTITLE -->

            <!-- POPUP EVENT TEXT -->
            <p class="popup-event-text">
                Join us at the CosWorld after party! We'll be eating,
                drinking and having a great time exchanging experiences from
                the convention
            </p>
            <!-- /POPUP EVENT TEXT -->

            <!-- POPUP EVENT SUBTITLE -->
            <p class="popup-event-subtitle">Will Assist</p>
            <!-- /POPUP EVENT SUBTITLE -->

            <!-- USER AVATAR LIST -->
            <div class="user-avatar-list reverse medium">
                <!-- USER AVATAR -->
                <div class="user-avatar smaller no-stats">
                    <!-- USER AVATAR BORDER -->
                    <div class="user-avatar-border">
                        <!-- HEXAGON -->
                        <div class="hexagon-34-36"></div>
                        <!-- /HEXAGON -->
                    </div>
                    <!-- /USER AVATAR BORDER -->

                    <!-- USER AVATAR CONTENT -->
                    <div class="user-avatar-content">
                        <!-- HEXAGON -->
                        <div class="hexagon-image-30-32" data-src="/assets/template/img/avatar/03.jpg"></div>
                        <!-- /HEXAGON -->
                    </div>
                    <!-- /USER AVATAR CONTENT -->
                </div>
                <!-- /USER AVATAR -->

                <!-- USER AVATAR -->
                <div class="user-avatar smaller no-stats">
                    <!-- USER AVATAR BORDER -->
                    <div class="user-avatar-border">
                        <!-- HEXAGON -->
                        <div class="hexagon-34-36"></div>
                        <!-- /HEXAGON -->
                    </div>
                    <!-- /USER AVATAR BORDER -->

                    <!-- USER AVATAR CONTENT -->
                    <div class="user-avatar-content">
                        <!-- HEXAGON -->
                        <div class="hexagon-image-30-32" data-src="/assets/template/img/avatar/05.jpg"></div>
                        <!-- /HEXAGON -->
                    </div>
                    <!-- /USER AVATAR CONTENT -->
                </div>
                <!-- /USER AVATAR -->

                <!-- USER AVATAR -->
                <div class="user-avatar smaller no-stats">
                    <!-- USER AVATAR BORDER -->
                    <div class="user-avatar-border">
                        <!-- HEXAGON -->
                        <div class="hexagon-34-36"></div>
                        <!-- /HEXAGON -->
                    </div>
                    <!-- /USER AVATAR BORDER -->

                    <!-- USER AVATAR CONTENT -->
                    <div class="user-avatar-content">
                        <!-- HEXAGON -->
                        <div class="hexagon-image-30-32" data-src="/assets/template/img/avatar/10.jpg"></div>
                        <!-- /HEXAGON -->
                    </div>
                    <!-- /USER AVATAR CONTENT -->
                </div>
                <!-- /USER AVATAR -->

                <!-- USER AVATAR -->
                <div class="user-avatar smaller no-stats">
                    <!-- USER AVATAR BORDER -->
                    <div class="user-avatar-border">
                        <!-- HEXAGON -->
                        <div class="hexagon-34-36"></div>
                        <!-- /HEXAGON -->
                    </div>
                    <!-- /USER AVATAR BORDER -->

                    <!-- USER AVATAR CONTENT -->
                    <div class="user-avatar-content">
                        <!-- HEXAGON -->
                        <div class="hexagon-image-30-32" data-src="/assets/template/img/avatar/02.jpg"></div>
                        <!-- /HEXAGON -->
                    </div>
                    <!-- /USER AVATAR CONTENT -->
                </div>
                <!-- /USER AVATAR -->

                <!-- USER AVATAR -->
                <div class="user-avatar smaller no-stats">
                    <!-- USER AVATAR BORDER -->
                    <div class="user-avatar-border">
                        <!-- HEXAGON -->
                        <div class="hexagon-34-36"></div>
                        <!-- /HEXAGON -->
                    </div>
                    <!-- /USER AVATAR BORDER -->

                    <!-- USER AVATAR CONTENT -->
                    <div class="user-avatar-content">
                        <!-- HEXAGON -->
                        <div class="hexagon-image-30-32" data-src="/assets/template/img/avatar/06.jpg"></div>
                        <!-- /HEXAGON -->
                    </div>
                    <!-- /USER AVATAR CONTENT -->
                </div>
                <!-- /USER AVATAR -->

                <!-- USER AVATAR -->
                <div class="user-avatar smaller no-stats">
                    <!-- USER AVATAR BORDER -->
                    <div class="user-avatar-border">
                        <!-- HEXAGON -->
                        <div class="hexagon-34-36"></div>
                        <!-- /HEXAGON -->
                    </div>
                    <!-- /USER AVATAR BORDER -->

                    <!-- USER AVATAR CONTENT -->
                    <div class="user-avatar-content">
                        <!-- HEXAGON -->
                        <div class="hexagon-image-30-32" data-src="/assets/template/img/avatar/07.jpg"></div>
                        <!-- /HEXAGON -->
                    </div>
                    <!-- /USER AVATAR CONTENT -->
                </div>
                <!-- /USER AVATAR -->

                <!-- USER AVATAR -->
                <div class="user-avatar smaller no-stats">
                    <!-- USER AVATAR BORDER -->
                    <div class="user-avatar-border">
                        <!-- HEXAGON -->
                        <div class="hexagon-34-36"></div>
                        <!-- /HEXAGON -->
                    </div>
                    <!-- /USER AVATAR BORDER -->

                    <!-- USER AVATAR CONTENT -->
                    <div class="user-avatar-content">
                        <!-- HEXAGON -->
                        <div class="hexagon-image-30-32" data-src="/assets/template/img/avatar/13.jpg"></div>
                        <!-- /HEXAGON -->
                    </div>
                    <!-- /USER AVATAR CONTENT -->
                </div>
                <!-- /USER AVATAR -->

                <!-- USER AVATAR -->
                <div class="user-avatar smaller no-stats">
                    <!-- USER AVATAR BORDER -->
                    <div class="user-avatar-border">
                        <!-- HEXAGON -->
                        <div class="hexagon-34-36"></div>
                        <!-- /HEXAGON -->
                    </div>
                    <!-- /USER AVATAR BORDER -->

                    <!-- USER AVATAR CONTENT -->
                    <div class="user-avatar-content">
                        <!-- HEXAGON -->
                        <div class="hexagon-image-30-32" data-src="/assets/template/img/avatar/08.jpg"></div>
                        <!-- /HEXAGON -->
                    </div>
                    <!-- /USER AVATAR CONTENT -->
                </div>
                <!-- /USER AVATAR -->

                <!-- USER AVATAR -->
                <div class="user-avatar smaller no-stats">
                    <!-- USER AVATAR BORDER -->
                    <div class="user-avatar-border">
                        <!-- HEXAGON -->
                        <div class="hexagon-34-36"></div>
                        <!-- /HEXAGON -->
                    </div>
                    <!-- /USER AVATAR BORDER -->

                    <!-- USER AVATAR CONTENT -->
                    <div class="user-avatar-content">
                        <!-- HEXAGON -->
                        <div class="hexagon-image-30-32" data-src="/assets/template/img/avatar/16.jpg"></div>
                        <!-- /HEXAGON -->
                    </div>
                    <!-- /USER AVATAR CONTENT -->
                </div>
                <!-- /USER AVATAR -->

                <!-- USER AVATAR -->
                <div class="user-avatar smaller no-stats">
                    <!-- USER AVATAR BORDER -->
                    <div class="user-avatar-border">
                        <!-- HEXAGON -->
                        <div class="hexagon-34-36"></div>
                        <!-- /HEXAGON -->
                    </div>
                    <!-- /USER AVATAR BORDER -->

                    <!-- USER AVATAR CONTENT -->
                    <div class="user-avatar-content">
                        <!-- HEXAGON -->
                        <div class="hexagon-image-30-32" data-src="/assets/template/img/avatar/23.jpg"></div>
                        <!-- /HEXAGON -->
                    </div>
                    <!-- /USER AVATAR CONTENT -->
                </div>
                <!-- /USER AVATAR -->

                <!-- USER AVATAR -->
                <a class="user-avatar smaller no-stats" href="#">
                    <!-- USER AVATAR BORDER -->
                    <div class="user-avatar-border">
                        <!-- HEXAGON -->
                        <div class="hexagon-34-36"></div>
                        <!-- /HEXAGON -->
                    </div>
                    <!-- /USER AVATAR BORDER -->

                    <!-- USER AVATAR CONTENT -->
                    <div class="user-avatar-content">
                        <!-- HEXAGON -->
                        <div class="hexagon-image-30-32" data-src="/assets/template/img/avatar/11.jpg"></div>
                        <!-- /HEXAGON -->
                    </div>
                    <!-- /USER AVATAR CONTENT -->

                    <!-- USER AVATAR OVERLAY -->
                    <div class="user-avatar-overlay">
                        <!-- HEXAGON -->
                        <div class="hexagon-overlay-30-32"></div>
                        <!-- /HEXAGON -->
                    </div>
                    <!-- /USER AVATAR OVERLAY -->

                    <!-- USER AVATAR OVERLAY CONTENT -->
                    <div class="user-avatar-overlay-content">
                        <!-- USER AVATAR OVERLAY CONTENT TEXT -->
                        <p class="user-avatar-overlay-content-text">+31</p>
                        <!-- /USER AVATAR OVERLAY CONTENT TEXT -->
                    </div>
                    <!-- /USER AVATAR OVERLAY CONTENT -->
                </a>
                <!-- /USER AVATAR -->
            </div>
            <!-- /USER AVATAR LIST -->

            <!-- POPUP EVENT SUBTITLE -->
            <p class="popup-event-subtitle">Google Map</p>
            <!-- /POPUP EVENT SUBTITLE -->

            <!-- GOOGLE MAP -->
            <div id="g-map" class="g-map"></div>
            <!-- /GOOGLE MAP -->

            <!-- POPUP EVENT BUTTON -->
            <p class="popup-event-button button tertiary popup-event-information-trigger">
                Remove from Calendar
            </p>
            <!-- /POPUP EVENT BUTTON -->
        </div>
        <!-- /POPUP EVENT INFO -->

        <!-- CONTENT ACTIONS -->
        <div class="content-actions">
            <!-- CONTENT ACTION -->
            <div class="content-action">
                <!-- META LINE -->
                <div class="meta-line">
                    <!-- META LINE LIST -->
                    <div class="meta-line-list reaction-item-list">
                        <!-- REACTION ITEM -->
                        <div class="reaction-item">
                            <!-- REACTION IMAGE -->
                            <img class="reaction-image reaction-item-dropdown-trigger"
                                src="/assets/template/img/reaction/happy.png" alt="reaction-happy" />
                            <!-- /REACTION IMAGE -->

                            <!-- SIMPLE DROPDOWN -->
                            <div class="simple-dropdown padded reaction-item-dropdown">
                                <!-- SIMPLE DROPDOWN TEXT -->
                                <p class="simple-dropdown-text">
                                    <img class="reaction" src="/assets/template/img/reaction/happy.png"
                                        alt="reaction-happy" />
                                    <span class="bold">Happy</span>
                                </p>
                                <!-- /SIMPLE DROPDOWN TEXT -->

                                <!-- SIMPLE DROPDOWN TEXT -->
                                <p class="simple-dropdown-text">
                                    Matt Parker
                                </p>
                                <!-- /SIMPLE DROPDOWN TEXT -->

                                <!-- SIMPLE DROPDOWN TEXT -->
                                <p class="simple-dropdown-text">
                                    Destroy Dex
                                </p>
                                <!-- /SIMPLE DROPDOWN TEXT -->

                                <!-- SIMPLE DROPDOWN TEXT -->
                                <p class="simple-dropdown-text">
                                    The Green Goo
                                </p>
                                <!-- /SIMPLE DROPDOWN TEXT -->
                            </div>
                            <!-- /SIMPLE DROPDOWN -->
                        </div>
                        <!-- /REACTION ITEM -->

                        <!-- REACTION ITEM -->
                        <div class="reaction-item">
                            <!-- REACTION IMAGE -->
                            <img class="reaction-image reaction-item-dropdown-trigger"
                                src="/assets/template/img/reaction/love.png" alt="reaction-love" />
                            <!-- /REACTION IMAGE -->

                            <!-- SIMPLE DROPDOWN -->
                            <div class="simple-dropdown padded reaction-item-dropdown">
                                <!-- SIMPLE DROPDOWN TEXT -->
                                <p class="simple-dropdown-text">
                                    <img class="reaction" src="/assets/template/img/reaction/love.png"
                                        alt="reaction-love" />
                                    <span class="bold">Love</span>
                                </p>
                                <!-- /SIMPLE DROPDOWN TEXT -->

                                <!-- SIMPLE DROPDOWN TEXT -->
                                <p class="simple-dropdown-text">
                                    Sandra Strange
                                </p>
                                <!-- /SIMPLE DROPDOWN TEXT -->
                            </div>
                            <!-- /SIMPLE DROPDOWN -->
                        </div>
                        <!-- /REACTION ITEM -->

                        <!-- REACTION ITEM -->
                        <div class="reaction-item">
                            <!-- REACTION IMAGE -->
                            <img class="reaction-image reaction-item-dropdown-trigger"
                                src="/assets/template/img/reaction/like.png" alt="reaction-like" />
                            <!-- /REACTION IMAGE -->

                            <!-- SIMPLE DROPDOWN -->
                            <div class="simple-dropdown padded reaction-item-dropdown">
                                <!-- SIMPLE DROPDOWN TEXT -->
                                <p class="simple-dropdown-text">
                                    <img class="reaction" src="/assets/template/img/reaction/like.png"
                                        alt="reaction-like" />
                                    <span class="bold">Like</span>
                                </p>
                                <!-- /SIMPLE DROPDOWN TEXT -->

                                <!-- SIMPLE DROPDOWN TEXT -->
                                <p class="simple-dropdown-text">
                                    Neko Bebop
                                </p>
                                <!-- /SIMPLE DROPDOWN TEXT -->

                                <!-- SIMPLE DROPDOWN TEXT -->
                                <p class="simple-dropdown-text">
                                    Nick Grissom
                                </p>
                                <!-- /SIMPLE DROPDOWN TEXT -->

                                <!-- SIMPLE DROPDOWN TEXT -->
                                <p class="simple-dropdown-text">
                                    Sarah Diamond
                                </p>
                                <!-- /SIMPLE DROPDOWN TEXT -->

                                <!-- SIMPLE DROPDOWN TEXT -->
                                <p class="simple-dropdown-text">
                                    Jett Spiegel
                                </p>
                                <!-- /SIMPLE DROPDOWN TEXT -->

                                <!-- SIMPLE DROPDOWN TEXT -->
                                <p class="simple-dropdown-text">
                                    Marcus Jhonson
                                </p>
                                <!-- /SIMPLE DROPDOWN TEXT -->

                                <!-- SIMPLE DROPDOWN TEXT -->
                                <p class="simple-dropdown-text">
                                    Jane Rodgers
                                </p>
                                <!-- /SIMPLE DROPDOWN TEXT -->

                                <!-- SIMPLE DROPDOWN TEXT -->
                                <p class="simple-dropdown-text">
                                    <span class="bold">and 2 more...</span>
                                </p>
                                <!-- /SIMPLE DROPDOWN TEXT -->
                            </div>
                            <!-- /SIMPLE DROPDOWN -->
                        </div>
                        <!-- /REACTION ITEM -->
                    </div>
                    <!-- /META LINE LIST -->

                    <!-- META LINE TEXT -->
                    <p class="meta-line-text">12</p>
                    <!-- /META LINE TEXT -->
                </div>
                <!-- /META LINE -->

                <!-- META LINE -->
                <div class="meta-line">
                    <!-- META LINE LIST -->
                    <div class="meta-line-list user-avatar-list">
                        <!-- USER AVATAR -->
                        <div class="user-avatar micro no-stats">
                            <!-- USER AVATAR BORDER -->
                            <div class="user-avatar-border">
                                <!-- HEXAGON -->
                                <div class="hexagon-22-24"></div>
                                <!-- /HEXAGON -->
                            </div>
                            <!-- /USER AVATAR BORDER -->

                            <!-- USER AVATAR CONTENT -->
                            <div class="user-avatar-content">
                                <!-- HEXAGON -->
                                <div class="hexagon-image-18-20" data-src="/assets/template/img/avatar/09.jpg"></div>
                                <!-- /HEXAGON -->
                            </div>
                            <!-- /USER AVATAR CONTENT -->
                        </div>
                        <!-- /USER AVATAR -->

                        <!-- USER AVATAR -->
                        <div class="user-avatar micro no-stats">
                            <!-- USER AVATAR BORDER -->
                            <div class="user-avatar-border">
                                <!-- HEXAGON -->
                                <div class="hexagon-22-24"></div>
                                <!-- /HEXAGON -->
                            </div>
                            <!-- /USER AVATAR BORDER -->

                            <!-- USER AVATAR CONTENT -->
                            <div class="user-avatar-content">
                                <!-- HEXAGON -->
                                <div class="hexagon-image-18-20" data-src="/assets/template/img/avatar/08.jpg"></div>
                                <!-- /HEXAGON -->
                            </div>
                            <!-- /USER AVATAR CONTENT -->
                        </div>
                        <!-- /USER AVATAR -->

                        <!-- USER AVATAR -->
                        <div class="user-avatar micro no-stats">
                            <!-- USER AVATAR BORDER -->
                            <div class="user-avatar-border">
                                <!-- HEXAGON -->
                                <div class="hexagon-22-24"></div>
                                <!-- /HEXAGON -->
                            </div>
                            <!-- /USER AVATAR BORDER -->

                            <!-- USER AVATAR CONTENT -->
                            <div class="user-avatar-content">
                                <!-- HEXAGON -->
                                <div class="hexagon-image-18-20" data-src="/assets/template/img/avatar/12.jpg"></div>
                                <!-- /HEXAGON -->
                            </div>
                            <!-- /USER AVATAR CONTENT -->
                        </div>
                        <!-- /USER AVATAR -->

                        <!-- USER AVATAR -->
                        <div class="user-avatar micro no-stats">
                            <!-- USER AVATAR BORDER -->
                            <div class="user-avatar-border">
                                <!-- HEXAGON -->
                                <div class="hexagon-22-24"></div>
                                <!-- /HEXAGON -->
                            </div>
                            <!-- /USER AVATAR BORDER -->

                            <!-- USER AVATAR CONTENT -->
                            <div class="user-avatar-content">
                                <!-- HEXAGON -->
                                <div class="hexagon-image-18-20" data-src="/assets/template/img/avatar/16.jpg"></div>
                                <!-- /HEXAGON -->
                            </div>
                            <!-- /USER AVATAR CONTENT -->
                        </div>
                        <!-- /USER AVATAR -->

                        <!-- USER AVATAR -->
                        <div class="user-avatar micro no-stats">
                            <!-- USER AVATAR BORDER -->
                            <div class="user-avatar-border">
                                <!-- HEXAGON -->
                                <div class="hexagon-22-24"></div>
                                <!-- /HEXAGON -->
                            </div>
                            <!-- /USER AVATAR BORDER -->

                            <!-- USER AVATAR CONTENT -->
                            <div class="user-avatar-content">
                                <!-- HEXAGON -->
                                <div class="hexagon-image-18-20" data-src="/assets/template/img/avatar/06.jpg"></div>
                                <!-- /HEXAGON -->
                            </div>
                            <!-- /USER AVATAR CONTENT -->
                        </div>
                        <!-- /USER AVATAR -->
                    </div>
                    <!-- /META LINE LIST -->

                    <!-- META LINE TEXT -->
                    <p class="meta-line-text">14 Participants</p>
                    <!-- /META LINE TEXT -->
                </div>
                <!-- /META LINE -->
            </div>
            <!-- /CONTENT ACTION -->

            <!-- CONTENT ACTION -->
            <div class="content-action">
                <!-- META LINE -->
                <div class="meta-line">
                    <!-- META LINE LINK -->
                    <p class="meta-line-link">1 Comments</p>
                    <!-- /META LINE LINK -->
                </div>
                <!-- /META LINE -->

                <!-- META LINE -->
                <div class="meta-line">
                    <!-- META LINE TEXT -->
                    <p class="meta-line-text">0 Shares</p>
                    <!-- /META LINE TEXT -->
                </div>
                <!-- /META LINE -->
            </div>
            <!-- /CONTENT ACTION -->
        </div>
        <!-- /CONTENT ACTIONS -->

        <!-- POST OPTIONS -->
        <div class="post-options">
            <!-- POST OPTION WRAP -->
            <div class="post-option-wrap">
                <!-- POST OPTION -->
                <div class="post-option reaction-options-dropdown-trigger">
                    <!-- POST OPTION ICON -->
                    <svg class="post-option-icon icon-thumbs-up">
                        <use xlink:href="#svg-thumbs-up"></use>
                    </svg>
                    <!-- /POST OPTION ICON -->

                    <!-- POST OPTION TEXT -->
                    <p class="post-option-text">React!</p>
                    <!-- /POST OPTION TEXT -->
                </div>
                <!-- /POST OPTION -->

                <!-- REACTION OPTIONS -->
                <div class="reaction-options reaction-options-dropdown">
                    <!-- REACTION OPTION -->
                    <div class="reaction-option text-tooltip-tft" data-title="Like">
                        <!-- REACTION OPTION IMAGE -->
                        <img class="reaction-option-image" src="/assets/template/img/reaction/like.png"
                            alt="reaction-like" />
                        <!-- /REACTION OPTION IMAGE -->
                    </div>
                    <!-- /REACTION OPTION -->

                    <!-- REACTION OPTION -->
                    <div class="reaction-option text-tooltip-tft" data-title="Love">
                        <!-- REACTION OPTION IMAGE -->
                        <img class="reaction-option-image" src="/assets/template/img/reaction/love.png"
                            alt="reaction-love" />
                        <!-- /REACTION OPTION IMAGE -->
                    </div>
                    <!-- /REACTION OPTION -->

                    <!-- REACTION OPTION -->
                    <div class="reaction-option text-tooltip-tft" data-title="Dislike">
                        <!-- REACTION OPTION IMAGE -->
                        <img class="reaction-option-image" src="/assets/template/img/reaction/dislike.png"
                            alt="reaction-dislike" />
                        <!-- /REACTION OPTION IMAGE -->
                    </div>
                    <!-- /REACTION OPTION -->

                    <!-- REACTION OPTION -->
                    <div class="reaction-option text-tooltip-tft" data-title="Happy">
                        <!-- REACTION OPTION IMAGE -->
                        <img class="reaction-option-image" src="/assets/template/img/reaction/happy.png"
                            alt="reaction-happy" />
                        <!-- /REACTION OPTION IMAGE -->
                    </div>
                    <!-- /REACTION OPTION -->

                    <!-- REACTION OPTION -->
                    <div class="reaction-option text-tooltip-tft" data-title="Funny">
                        <!-- REACTION OPTION IMAGE -->
                        <img class="reaction-option-image" src="/assets/template/img/reaction/funny.png"
                            alt="reaction-funny" />
                        <!-- /REACTION OPTION IMAGE -->
                    </div>
                    <!-- /REACTION OPTION -->

                    <!-- REACTION OPTION -->
                    <div class="reaction-option text-tooltip-tft" data-title="Wow">
                        <!-- REACTION OPTION IMAGE -->
                        <img class="reaction-option-image" src="/assets/template/img/reaction/wow.png"
                            alt="reaction-wow" />
                        <!-- /REACTION OPTION IMAGE -->
                    </div>
                    <!-- /REACTION OPTION -->

                    <!-- REACTION OPTION -->
                    <div class="reaction-option text-tooltip-tft" data-title="Angry">
                        <!-- REACTION OPTION IMAGE -->
                        <img class="reaction-option-image" src="/assets/template/img/reaction/angry.png"
                            alt="reaction-angry" />
                        <!-- /REACTION OPTION IMAGE -->
                    </div>
                    <!-- /REACTION OPTION -->

                    <!-- REACTION OPTION -->
                    <div class="reaction-option text-tooltip-tft" data-title="Sad">
                        <!-- REACTION OPTION IMAGE -->
                        <img class="reaction-option-image" src="/assets/template/img/reaction/sad.png"
                            alt="reaction-sad" />
                        <!-- /REACTION OPTION IMAGE -->
                    </div>
                    <!-- /REACTION OPTION -->
                </div>
                <!-- /REACTION OPTIONS -->
            </div>
            <!-- /POST OPTION WRAP -->

            <!-- POST OPTION -->
            <div class="post-option active">
                <!-- POST OPTION ICON -->
                <svg class="post-option-icon icon-comment">
                    <use xlink:href="#svg-comment"></use>
                </svg>
                <!-- /POST OPTION ICON -->

                <!-- POST OPTION TEXT -->
                <p class="post-option-text">Comment</p>
                <!-- /POST OPTION TEXT -->
            </div>
            <!-- /POST OPTION -->

            <!-- POST OPTION -->
            <div class="post-option">
                <!-- POST OPTION ICON -->
                <svg class="post-option-icon icon-share">
                    <use xlink:href="#svg-share"></use>
                </svg>
                <!-- /POST OPTION ICON -->

                <!-- POST OPTION TEXT -->
                <p class="post-option-text">Share</p>
                <!-- /POST OPTION TEXT -->
            </div>
            <!-- /POST OPTION -->
        </div>
        <!-- /POST OPTIONS -->

        <!-- POST COMMENT LIST -->
        <div class="post-comment-list">
            <!-- POST COMMENT -->
            <div class="post-comment">
                <!-- USER AVATAR -->
                <a class="user-avatar small no-outline" href="#">
                    <!-- USER AVATAR CONTENT -->
                    <div class="user-avatar-content">
                        <!-- HEXAGON -->
                        <div class="hexagon-image-30-32" data-src="/assets/template/img/avatar/02.jpg"></div>
                        <!-- /HEXAGON -->
                    </div>
                    <!-- /USER AVATAR CONTENT -->

                    <!-- USER AVATAR PROGRESS -->
                    <div class="user-avatar-progress">
                        <!-- HEXAGON -->
                        <div class="hexagon-progress-40-44"></div>
                        <!-- /HEXAGON -->
                    </div>
                    <!-- /USER AVATAR PROGRESS -->

                    <!-- USER AVATAR PROGRESS BORDER -->
                    <div class="user-avatar-progress-border">
                        <!-- HEXAGON -->
                        <div class="hexagon-border-40-44"></div>
                        <!-- /HEXAGON -->
                    </div>
                    <!-- /USER AVATAR PROGRESS BORDER -->

                    <!-- USER AVATAR BADGE -->
                    <div class="user-avatar-badge">
                        <!-- USER AVATAR BADGE BORDER -->
                        <div class="user-avatar-badge-border">
                            <!-- HEXAGON -->
                            <div class="hexagon-22-24"></div>
                            <!-- /HEXAGON -->
                        </div>
                        <!-- /USER AVATAR BADGE BORDER -->

                        <!-- USER AVATAR BADGE CONTENT -->
                        <div class="user-avatar-badge-content">
                            <!-- HEXAGON -->
                            <div class="hexagon-dark-16-18"></div>
                            <!-- /HEXAGON -->
                        </div>
                        <!-- /USER AVATAR BADGE CONTENT -->

                        <!-- USER AVATAR BADGE TEXT -->
                        <p class="user-avatar-badge-text">19</p>
                        <!-- /USER AVATAR BADGE TEXT -->
                    </div>
                    <!-- /USER AVATAR BADGE -->
                </a>
                <!-- /USER AVATAR -->

                <!-- POST COMMENT TEXT -->
                <p class="post-comment-text">
                    <a class="post-comment-text-author" href="#">Destroy Dex</a>Can't wait to see
                    everyone at the party! Last year's
                    was incredible and I'm hoping this year will be even
                    better!
                </p>
                <!-- /POST COMMENT TEXT -->

                <!-- CONTENT ACTIONS -->
                <div class="content-actions">
                    <!-- CONTENT ACTION -->
                    <div class="content-action">
                        <!-- META LINE -->
                        <div class="meta-line">
                            <!-- META LINE LIST -->
                            <div class="meta-line-list reaction-item-list small">
                                <!-- REACTION ITEM -->
                                <div class="reaction-item">
                                    <!-- REACTION IMAGE -->
                                    <img class="reaction-image reaction-item-dropdown-trigger"
                                        src="/assets/template/img/reaction/happy.png" alt="reaction-happy" />
                                    <!-- /REACTION IMAGE -->

                                    <!-- SIMPLE DROPDOWN -->
                                    <div class="simple-dropdown padded reaction-item-dropdown">
                                        <!-- SIMPLE DROPDOWN TEXT -->
                                        <p class="simple-dropdown-text">
                                            <img class="reaction" src="/assets/template/img/reaction/happy.png"
                                                alt="reaction-happy" />
                                            <span class="bold">Happy</span>
                                        </p>
                                        <!-- /SIMPLE DROPDOWN TEXT -->

                                        <!-- SIMPLE DROPDOWN TEXT -->
                                        <p class="simple-dropdown-text">
                                            Marcus Jhonson
                                        </p>
                                        <!-- /SIMPLE DROPDOWN TEXT -->
                                    </div>
                                    <!-- /SIMPLE DROPDOWN -->
                                </div>
                                <!-- /REACTION ITEM -->

                                <!-- REACTION ITEM -->
                                <div class="reaction-item">
                                    <!-- REACTION IMAGE -->
                                    <img class="reaction-image reaction-item-dropdown-trigger"
                                        src="/assets/template/img/reaction/like.png" alt="reaction-like" />
                                    <!-- /REACTION IMAGE -->

                                    <!-- SIMPLE DROPDOWN -->
                                    <div class="simple-dropdown padded reaction-item-dropdown">
                                        <!-- SIMPLE DROPDOWN TEXT -->
                                        <p class="simple-dropdown-text">
                                            <img class="reaction" src="/assets/template/img/reaction/like.png"
                                                alt="reaction-like" />
                                            <span class="bold">Like</span>
                                        </p>
                                        <!-- /SIMPLE DROPDOWN TEXT -->

                                        <!-- SIMPLE DROPDOWN TEXT -->
                                        <p class="simple-dropdown-text">
                                            Neko Bebop
                                        </p>
                                        <!-- /SIMPLE DROPDOWN TEXT -->

                                        <!-- SIMPLE DROPDOWN TEXT -->
                                        <p class="simple-dropdown-text">
                                            Nick Grissom
                                        </p>
                                        <!-- /SIMPLE DROPDOWN TEXT -->

                                        <!-- SIMPLE DROPDOWN TEXT -->
                                        <p class="simple-dropdown-text">
                                            Sarah Diamond
                                        </p>
                                        <!-- /SIMPLE DROPDOWN TEXT -->
                                    </div>
                                    <!-- /SIMPLE DROPDOWN -->
                                </div>
                                <!-- /REACTION ITEM -->
                            </div>
                            <!-- /META LINE LIST -->

                            <!-- META LINE TEXT -->
                            <p class="meta-line-text">4</p>
                            <!-- /META LINE TEXT -->
                        </div>
                        <!-- /META LINE -->

                        <!-- META LINE -->
                        <div class="meta-line">
                            <!-- META LINE LINK -->
                            <p class="meta-line-link light reaction-options-small-dropdown-trigger">
                                React!
                            </p>
                            <!-- /META LINE LINK -->

                            <!-- REACTION OPTIONS -->
                            <div class="reaction-options small reaction-options-small-dropdown">
                                <!-- REACTION OPTION -->
                                <div class="reaction-option text-tooltip-tft" data-title="Like">
                                    <!-- REACTION OPTION IMAGE -->
                                    <img class="reaction-option-image" src="/assets/template/img/reaction/like.png"
                                        alt="reaction-like" />
                                    <!-- /REACTION OPTION IMAGE -->
                                </div>
                                <!-- /REACTION OPTION -->

                                <!-- REACTION OPTION -->
                                <div class="reaction-option text-tooltip-tft" data-title="Love">
                                    <!-- REACTION OPTION IMAGE -->
                                    <img class="reaction-option-image" src="/assets/template/img/reaction/love.png"
                                        alt="reaction-love" />
                                    <!-- /REACTION OPTION IMAGE -->
                                </div>
                                <!-- /REACTION OPTION -->

                                <!-- REACTION OPTION -->
                                <div class="reaction-option text-tooltip-tft" data-title="Dislike">
                                    <!-- REACTION OPTION IMAGE -->
                                    <img class="reaction-option-image" src="/assets/template/img/reaction/dislike.png"
                                        alt="reaction-dislike" />
                                    <!-- /REACTION OPTION IMAGE -->
                                </div>
                                <!-- /REACTION OPTION -->

                                <!-- REACTION OPTION -->
                                <div class="reaction-option text-tooltip-tft" data-title="Happy">
                                    <!-- REACTION OPTION IMAGE -->
                                    <img class="reaction-option-image" src="/assets/template/img/reaction/happy.png"
                                        alt="reaction-happy" />
                                    <!-- /REACTION OPTION IMAGE -->
                                </div>
                                <!-- /REACTION OPTION -->

                                <!-- REACTION OPTION -->
                                <div class="reaction-option text-tooltip-tft" data-title="Funny">
                                    <!-- REACTION OPTION IMAGE -->
                                    <img class="reaction-option-image" src="/assets/template/img/reaction/funny.png"
                                        alt="reaction-funny" />
                                    <!-- /REACTION OPTION IMAGE -->
                                </div>
                                <!-- /REACTION OPTION -->

                                <!-- REACTION OPTION -->
                                <div class="reaction-option text-tooltip-tft" data-title="Wow">
                                    <!-- REACTION OPTION IMAGE -->
                                    <img class="reaction-option-image" src="/assets/template/img/reaction/wow.png"
                                        alt="reaction-wow" />
                                    <!-- /REACTION OPTION IMAGE -->
                                </div>
                                <!-- /REACTION OPTION -->

                                <!-- REACTION OPTION -->
                                <div class="reaction-option text-tooltip-tft" data-title="Angry">
                                    <!-- REACTION OPTION IMAGE -->
                                    <img class="reaction-option-image" src="/assets/template/img/reaction/angry.png"
                                        alt="reaction-angry" />
                                    <!-- /REACTION OPTION IMAGE -->
                                </div>
                                <!-- /REACTION OPTION -->

                                <!-- REACTION OPTION -->
                                <div class="reaction-option text-tooltip-tft" data-title="Sad">
                                    <!-- REACTION OPTION IMAGE -->
                                    <img class="reaction-option-image" src="/assets/template/img/reaction/sad.png"
                                        alt="reaction-sad" />
                                    <!-- /REACTION OPTION IMAGE -->
                                </div>
                                <!-- /REACTION OPTION -->
                            </div>
                            <!-- /REACTION OPTIONS -->
                        </div>
                        <!-- /META LINE -->

                        <!-- META LINE -->
                        <div class="meta-line">
                            <!-- META LINE LINK -->
                            <p class="meta-line-link light">Reply</p>
                            <!-- /META LINE LINK -->
                        </div>
                        <!-- /META LINE -->

                        <!-- META LINE -->
                        <div class="meta-line">
                            <!-- META LINE TIMESTAMP -->
                            <p class="meta-line-timestamp">
                                15 minutes ago
                            </p>
                            <!-- /META LINE TIMESTAMP -->
                        </div>
                        <!-- /META LINE -->

                        <!-- META LINE -->
                        <div class="meta-line settings">
                            <!-- POST SETTINGS WRAP -->
                            <div class="post-settings-wrap">
                                <!-- POST SETTINGS -->
                                <div class="post-settings post-settings-dropdown-trigger">
                                    <!-- POST SETTINGS ICON -->
                                    <svg class="post-settings-icon icon-more-dots">
                                        <use xlink:href="#svg-more-dots"></use>
                                    </svg>
                                    <!-- /POST SETTINGS ICON -->
                                </div>
                                <!-- /POST SETTINGS -->

                                <!-- SIMPLE DROPDOWN -->
                                <div class="simple-dropdown post-settings-dropdown">
                                    <!-- SIMPLE DROPDOWN LINK -->
                                    <p class="simple-dropdown-link">
                                        Report Post
                                    </p>
                                    <!-- /SIMPLE DROPDOWN LINK -->
                                </div>
                                <!-- /SIMPLE DROPDOWN -->
                            </div>
                            <!-- /POST SETTINGS WRAP -->
                        </div>
                        <!-- /META LINE -->
                    </div>
                    <!-- /CONTENT ACTION -->
                </div>
                <!-- /CONTENT ACTIONS -->
            </div>
            <!-- /POST COMMENT -->

            <!-- POST COMMENT FORM -->
            <div class="post-comment-form">
                <!-- USER AVATAR -->
                <div class="user-avatar small no-outline">
                    <!-- USER AVATAR CONTENT -->
                    <div class="user-avatar-content">
                        <!-- HEXAGON -->
                        <div class="hexagon-image-30-32" data-src="/assets/template/img/avatar/01.jpg"></div>
                        <!-- /HEXAGON -->
                    </div>
                    <!-- /USER AVATAR CONTENT -->

                    <!-- USER AVATAR PROGRESS -->
                    <div class="user-avatar-progress">
                        <!-- HEXAGON -->
                        <div class="hexagon-progress-40-44"></div>
                        <!-- /HEXAGON -->
                    </div>
                    <!-- /USER AVATAR PROGRESS -->

                    <!-- USER AVATAR PROGRESS BORDER -->
                    <div class="user-avatar-progress-border">
                        <!-- HEXAGON -->
                        <div class="hexagon-border-40-44"></div>
                        <!-- /HEXAGON -->
                    </div>
                    <!-- /USER AVATAR PROGRESS BORDER -->

                    <!-- USER AVATAR BADGE -->
                    <div class="user-avatar-badge">
                        <!-- USER AVATAR BADGE BORDER -->
                        <div class="user-avatar-badge-border">
                            <!-- HEXAGON -->
                            <div class="hexagon-22-24"></div>
                            <!-- /HEXAGON -->
                        </div>
                        <!-- /USER AVATAR BADGE BORDER -->

                        <!-- USER AVATAR BADGE CONTENT -->
                        <div class="user-avatar-badge-content">
                            <!-- HEXAGON -->
                            <div class="hexagon-dark-16-18"></div>
                            <!-- /HEXAGON -->
                        </div>
                        <!-- /USER AVATAR BADGE CONTENT -->

                        <!-- USER AVATAR BADGE TEXT -->
                        <p class="user-avatar-badge-text">24</p>
                        <!-- /USER AVATAR BADGE TEXT -->
                    </div>
                    <!-- /USER AVATAR BADGE -->
                </div>
                <!-- /USER AVATAR -->

                <!-- FORM -->
                <form class="form">
                    <!-- FORM ROW -->
                    <div class="form-row">
                        <!-- FORM ITEM -->
                        <div class="form-item">
                            <!-- FORM INPUT -->
                            <div class="form-input small">
                                <label for="event-reply">Your Reply</label>
                                <input type="text" id="event-reply" name="event_reply" />
                            </div>
                            <!-- /FORM INPUT -->
                        </div>
                        <!-- /FORM ITEM -->
                    </div>
                    <!-- /FORM ROW -->
                </form>
                <!-- /FORM -->
            </div>
            <!-- /POST COMMENT FORM -->
        </div>
        <!-- /POST COMMENT LIST -->
    </div>
    <!-- /POPUP EVENT --> --}}
@endsection
