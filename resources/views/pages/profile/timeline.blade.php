@php
    $page['title'] = $user->name . '`s Profile Timeline | ConnectUp';
    $page['image'] = $user->profile_photo_path;
    $page['description'] = $user->bio ?? null;
    
@endphp
@extends('layouts.app')

@section('content')
    <!-- CONTENT GRID -->
    <div class="content-grid">
        <!-- PROFILE HEADER -->
        <div class="profile-header">
            <!-- PROFILE HEADER COVER -->
            <figure class="profile-header-cover liquid">
                <img src="{{ $user->cover_photo_path }}" alt="cover-01">
            </figure>
            <!-- /PROFILE HEADER COVER -->

            <!-- PROFILE HEADER INFO -->
            <div class="profile-header-info">
                <!-- USER SHORT DESCRIPTION -->
                <div class="user-short-description big">
                    <!-- USER SHORT DESCRIPTION AVATAR -->
                    <a class="user-short-description-avatar user-avatar big" href="#">
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
                            <div class="hexagon-image-100-110" data-src="{{ $user->profile_photo_path }}"></div>
                            <!-- /HEXAGON -->
                        </div>
                        <!-- /USER AVATAR CONTENT -->

                        <!-- USER AVATAR PROGRESS -->
                        <div class="user-avatar-progress">
                            <!-- HEXAGON -->
                            <div class="hexagon-progress-124-136"></div>
                            <!-- /HEXAGON -->
                        </div>
                        <!-- /USER AVATAR PROGRESS -->

                        <!-- USER AVATAR PROGRESS BORDER -->
                        <div class="user-avatar-progress-border">
                            <!-- HEXAGON -->
                            <div class="hexagon-border-124-136"></div>
                            <!-- /HEXAGON -->
                        </div>
                        <!-- /USER AVATAR PROGRESS BORDER -->

                    </a>
                    <!-- /USER SHORT DESCRIPTION AVATAR -->

                    <!-- USER SHORT DESCRIPTION AVATAR -->
                    <a class="user-short-description-avatar user-short-description-avatar-mobile user-avatar medium"
                        href="#">
                        <!-- USER AVATAR BORDER -->
                        <div class="user-avatar-border">
                            <!-- HEXAGON -->
                            <div class="hexagon-120-132"></div>
                            <!-- /HEXAGON -->
                        </div>
                        <!-- /USER AVATAR BORDER -->

                        <!-- USER AVATAR CONTENT -->
                        <div class="user-avatar-content">
                            <!-- HEXAGON -->
                            <div class="hexagon-image-82-90" data-src="{{ $user->profile_photo_path }}"></div>
                            <!-- /HEXAGON -->
                        </div>
                        <!-- /USER AVATAR CONTENT -->

                        <!-- USER AVATAR PROGRESS -->
                        <div class="user-avatar-progress">
                            <!-- HEXAGON -->
                            <div class="hexagon-progress-100-110"></div>
                            <!-- /HEXAGON -->
                        </div>
                        <!-- /USER AVATAR PROGRESS -->

                        <!-- USER AVATAR PROGRESS BORDER -->
                        <div class="user-avatar-progress-border">
                            <!-- HEXAGON -->
                            <div class="hexagon-border-100-110"></div>
                            <!-- /HEXAGON -->
                        </div>
                        <!-- /USER AVATAR PROGRESS BORDER -->

                    </a>
                    <!-- /USER SHORT DESCRIPTION AVATAR -->

                    <!-- USER SHORT DESCRIPTION TITLE -->
                    <p class="user-short-description-title"><a href="#">{{ $user->name }}</a></p>
                    <!-- /USER SHORT DESCRIPTION TITLE -->

                    <!-- USER SHORT DESCRIPTION TEXT -->
                    <p class="user-short-description-text"><a href="#">{{ '@' . $user->username }}</a></p>
                    <!-- /USER SHORT DESCRIPTION TEXT -->
                </div>
                <!-- /USER SHORT DESCRIPTION -->

                <!-- PROFILE HEADER SOCIAL LINKS WRAP -->
                <div class="profile-header-social-links-wrap">
                    <!-- PROFILE HEADER SOCIAL LINKS -->
                    <div id="profile-header-social-links-slider" class="profile-header-social-links">


                        <div class="profile-header-social-link">
                            <!-- SOCIAL LINK -->
                            <a class="social-link email" href="#">
                                <!-- ICON TWITCH -->
                                <svg class="icon-icon">
                                    <use xlink:href="#svg-email"></use>
                                </svg>
                                <!-- /ICON TWITCH -->
                            </a>
                            <!-- /SOCIAL LINK -->
                        </div>

                        @foreach ($user->socials as $social => $link)
                            <div class="profile-header-social-link">
                                <!-- SOCIAL LINK -->
                                <a class="social-link {{ $social }}" href="{{ shorten($link) }}">
                                    <!-- ICON FACEBOOK -->
                                    <svg class="icon-icon">
                                        <use xlink:href="#svg-{{ $social }}"></use>
                                    </svg>
                                    <!-- /ICON FACEBOOK -->
                                </a>
                                <!-- /SOCIAL LINK -->
                            </div>
                        @endforeach

                    </div>
                    <!-- /PROFILE HEADER SOCIAL LINKS -->
                    <!-- SLIDER CONTROLS -->
                    <div id="profile-header-social-links-slider-controls" class="slider-controls">
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
                </div>
                <!-- /PROFILE HEADER SOCIAL LINKS WRAP -->

                <!-- USER STATS -->
                <div class="user-stats">
                    <!-- USER STAT -->
                    <div class="user-stat big">
                        <!-- USER STAT TITLE -->
                        <p class="user-stat-title">{{ $user->postcount }}</p>
                        <!-- /USER STAT TITLE -->

                        <!-- USER STAT TEXT -->
                        <p class="user-stat-text">Posts</p>
                        <!-- /USER STAT TEXT -->
                    </div>
                    <!-- /USER STAT -->

                    <!-- USER STAT -->
                    <div class="user-stat big">
                        <!-- USER STAT TITLE -->
                        <p class="user-stat-title" id="followers">{{ $user->followers ?? 0 }}</p>
                        <!-- /USER STAT TITLE -->

                        <!-- USER STAT TEXT -->
                        <p class="user-stat-text">Followers</p>
                        <!-- /USER STAT TEXT -->
                    </div>
                    <!-- /USER STAT -->

                    <!-- USER STAT -->
                    <div class="user-stat big">
                        <!-- USER STAT TITLE -->
                        <p class="user-stat-title">
                            {{ changeIntoKMG(profileview($user->id)) }}
                        </p>
                        <!-- /USER STAT TITLE -->

                        <!-- USER STAT TEXT -->
                        <p class="user-stat-text">visits</p>
                        <!-- /USER STAT TEXT -->
                    </div>
                    <!-- /USER STAT -->

                    <!-- USER STAT -->
                    <div class="user-stat big">
                        <!-- USER STAT IMAGE -->
                        <img class="user-stat-image" src="https://countryflagsapi.com/png/{{ $user->country->code }}"
                            alt="flag-usa" style="border-radius:2px">
                        <!-- /USER STAT IMAGE -->

                        <!-- USER STAT TEXT -->
                        <p class="user-stat-text">{{ $user->country->name }}</p>
                        <!-- /USER STAT TEXT -->
                    </div>
                    <!-- /USER STAT -->
                </div>
                <!-- /USER STATS -->
                @if (Auth::check())
                    <!-- PROFILE HEADER INFO ACTIONS -->
                    <div class="profile-header-info-actions">


                        @if ($user->username == Auth::user()->username)
                            <a href="{{ route('profile.info') }}" class="profile-header-info-action button secondary">Edit
                                <span class="hide-text-mobile">Profile</span></a>
                        @else
                            <!-- PROFILE HEADER INFO ACTION -->
                            {{-- <a href="#" class="profile-header-info-action button secondary"><span
                                class="hide-text-mobile">Add</span>
                            Friend +</a>
                        <!-- /PROFILE HEADER INFO ACTION -->

                        <!-- PROFILE HEADER INFO ACTION -->
                        <p class="profile-header-info-action button primary"><span class="hide-text-mobile">Send</span>
                            Message</p>
                        <!-- /PROFILE HEADER INFO ACTION --> --}}
                            <!-- PROFILE HEADER INFO ACTION -->

                            @if ($is_following)
                                <div id="follow" class="profile-header-info-action button secondary"
                                    onclick="follow('{{ $user->id }}')">
                                    Unfollow
                                </div>
                            @else
                                <div id="follow" class="profile-header-info-action button primary"
                                    onclick="follow('{{ $user->id }}')">
                                    Follow
                                </div>
                            @endif
                            <!-- /PROFILE HEADER INFO ACTION -->
                        @endif
                    </div>
                    <!-- /PROFILE HEADER INFO ACTIONS -->
                @endif
            </div>
            <!-- /PROFILE HEADER INFO -->
        </div>
        <!-- /PROFILE HEADER -->

        {{-- <!-- SECTION NAVIGATION -->
        <nav class="section-navigation">
            <!-- SECTION MENU -->
            <div id="section-navigation-slider" class="section-menu">
                <!-- SECTION MENU ITEM -->
                <a class="section-menu-item" href="#">
                    <!-- SECTION MENU ITEM ICON -->
                    <svg class="section-menu-item-icon icon-profile">
                        <use xlink:href="#svg-profile"></use>
                    </svg>
                    <!-- /SECTION MENU ITEM ICON -->

                    <!-- SECTION MENU ITEM TEXT -->
                    <p class="section-menu-item-text">About</p>
                    <!-- /SECTION MENU ITEM TEXT -->
                </a>
                <!-- /SECTION MENU ITEM -->

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
                    <svg class="section-menu-item-icon icon-friend">
                        <use xlink:href="#svg-friend"></use>
                    </svg>
                    <!-- /SECTION MENU ITEM ICON -->

                    <!-- SECTION MENU ITEM TEXT -->
                    <p class="section-menu-item-text">Friends</p>
                    <!-- /SECTION MENU ITEM TEXT -->
                </a>
                <!-- /SECTION MENU ITEM -->

                <!-- SECTION MENU ITEM -->
                <a class="section-menu-item" href="#">
                    <!-- SECTION MENU ITEM ICON -->
                    <svg class="section-menu-item-icon icon-group">
                        <use xlink:href="#svg-group"></use>
                    </svg>
                    <!-- /SECTION MENU ITEM ICON -->

                    <!-- SECTION MENU ITEM TEXT -->
                    <p class="section-menu-item-text">Groups</p>
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
                    <svg class="section-menu-item-icon icon-badges">
                        <use xlink:href="#svg-badges"></use>
                    </svg>
                    <!-- /SECTION MENU ITEM ICON -->

                    <!-- SECTION MENU ITEM TEXT -->
                    <p class="section-menu-item-text">Badges</p>
                    <!-- /SECTION MENU ITEM TEXT -->
                </a>
                <!-- /SECTION MENU ITEM -->

                <!-- SECTION MENU ITEM -->
                <a class="section-menu-item" href="#">
                    <!-- SECTION MENU ITEM ICON -->
                    <svg class="section-menu-item-icon icon-streams">
                        <use xlink:href="#svg-streams"></use>
                    </svg>
                    <!-- /SECTION MENU ITEM ICON -->

                    <!-- SECTION MENU ITEM TEXT -->
                    <p class="section-menu-item-text">Streams</p>
                    <!-- /SECTION MENU ITEM TEXT -->
                </a>
                <!-- /SECTION MENU ITEM -->

                <!-- SECTION MENU ITEM -->
                <a class="section-menu-item" href="#">
                    <!-- SECTION MENU ITEM ICON -->
                    <svg class="section-menu-item-icon icon-blog-posts">
                        <use xlink:href="#svg-blog-posts"></use>
                    </svg>
                    <!-- /SECTION MENU ITEM ICON -->

                    <!-- SECTION MENU ITEM TEXT -->
                    <p class="section-menu-item-text">Blog</p>
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
                    <svg class="section-menu-item-icon icon-store">
                        <use xlink:href="#svg-store"></use>
                    </svg>
                    <!-- /SECTION MENU ITEM ICON -->

                    <!-- SECTION MENU ITEM TEXT -->
                    <p class="section-menu-item-text">Store</p>
                    <!-- /SECTION MENU ITEM TEXT -->
                </a>
                <!-- /SECTION MENU ITEM -->
            </div>
            <!-- /SECTION MENU -->

            <!-- SLIDER CONTROLS -->
            <div id="section-navigation-slider-controls" class="slider-controls">
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

                @widget('redeemrefferal')
                @if (Auth::check() && Auth::user()->id == $user->id)
                    @widget('profilecompletion')
                @endif
                <!-- WIDGET BOX -->
                <div class="widget-box">
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
                                <a href="{{ route('profile.info') }}" class="simple-dropdown-link">Edit Profile</a>

                                <!-- /SIMPLE DROPDOWN LINK -->
                            </div>
                            <!-- /SIMPLE DROPDOWN -->
                        </div>
                        <!-- /POST SETTINGS WRAP -->
                    </div>
                    <!-- /WIDGET BOX SETTINGS -->

                    <!-- WIDGET BOX TITLE -->
                    <p class="widget-box-title">About Me</p>
                    <!-- /WIDGET BOX TITLE -->

                    <!-- WIDGET BOX CONTENT -->
                    <div class="widget-box-content">
                        <!-- PARAGRAPH -->
                        <p class="paragraph">{{ $user->bio }}</p>
                        <!-- /PARAGRAPH -->

                        <!-- INFORMATION LINE LIST -->
                        <div class="information-line-list">
                            @if (isset($user->academic_background))
                                <!-- INFORMATION LINE -->
                                <div class="information-line">
                                    <!-- INFORMATION LINE TITLE -->
                                    <p class="information-line-title">Background</p>
                                    <!-- /INFORMATION LINE TITLE -->

                                    <!-- INFORMATION LINE TEXT -->
                                    <p class="information-line-text">{{ $user->academic_background->display_name }}</p>
                                    <!-- /INFORMATION LINE TEXT -->
                                </div>
                                <!-- /INFORMATION LINE -->
                            @endif

                            @if (isset($user->website))
                                <!-- INFORMATION LINE -->
                                <div class="information-line">
                                    <!-- INFORMATION LINE TITLE -->
                                    <p class="information-line-title">Website</p>
                                    <!-- /INFORMATION LINE TITLE -->

                                    <!-- INFORMATION LINE TEXT -->
                                    <p class="information-line-text"><a href="#">{{ $user->website }}</a></p>
                                    <!-- /INFORMATION LINE TEXT -->
                                </div>
                                <!-- /INFORMATION LINE -->
                            @endif

                            @if (isset($user->college))
                                <!-- INFORMATION LINE -->
                                <div class="information-line">
                                    <!-- INFORMATION LINE TITLE -->
                                    <p class="information-line-title">College</p>
                                    <!-- /INFORMATION LINE TITLE -->

                                    <!-- INFORMATION LINE TEXT -->
                                    <p class="information-line-text">{{ $user->college->name }}</p>

                                    <!-- /INFORMATION LINE TEXT -->
                                </div>
                                <!-- /INFORMATION LINE -->
                            @endif
                        </div>
                        <!-- /INFORMATION LINE LIST -->
                    </div>
                    <!-- /WIDGET BOX CONTENT -->
                </div>
                <!-- /WIDGET BOX -->

                {{-- <!-- WIDGET BOX -->
                <div class="widget-box">
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
                                <p class="simple-dropdown-link">Widget Settings</p>
                                <!-- /SIMPLE DROPDOWN LINK -->
                            </div>
                            <!-- /SIMPLE DROPDOWN -->
                        </div>
                        <!-- /POST SETTINGS WRAP -->
                    </div>
                    <!-- /WIDGET BOX SETTINGS -->

                    <!-- WIDGET BOX TITLE -->
                    <p class="widget-box-title">Badges <span class="highlighted">13</span></p>
                    <!-- /WIDGET BOX TITLE -->

                    <!-- WIDGET BOX CONTENT -->
                    <div class="widget-box-content">
                        <!-- BADGE LIST -->
                        <div class="badge-list">
                            <!-- BADGE ITEM -->
                            <div class="badge-item text-tooltip-tft" data-title="Gold User">
                                <img src="/assets/template/img/badge/gold-s.png" alt="badge-gold-s">
                            </div>
                            <!-- /BADGE ITEM -->

                            <!-- BADGE ITEM -->
                            <div class="badge-item text-tooltip-tft" data-title="Profile Age">
                                <img src="/assets/template/img/badge/age-s.png" alt="badge-age-s">
                            </div>
                            <!-- /BADGE ITEM -->

                            <!-- BADGE ITEM -->
                            <div class="badge-item text-tooltip-tft" data-title="Caffeinatted">
                                <img src="/assets/template/img/badge/caffeinated-s.png" alt="badge-caffeinated-s">
                            </div>
                            <!-- /BADGE ITEM -->

                            <!-- BADGE ITEM -->
                            <div class="badge-item text-tooltip-tft" data-title="The Warrior">
                                <img src="/assets/template/img/badge/warrior-s.png" alt="badge-warrior-s">
                            </div>
                            <!-- /BADGE ITEM -->

                            <!-- BADGE ITEM -->
                            <div class="badge-item text-tooltip-tft" data-title="Forum Traveller">
                                <img src="/assets/template/img/badge/traveller-s.png" alt="badge-traveller-s">
                            </div>
                            <!-- /BADGE ITEM -->

                            <!-- BADGE ITEM -->
                            <div class="badge-item text-tooltip-tft" data-title="Crazy Scientist">
                                <img src="/assets/template/img/badge/scientist-s.png" alt="badge-scientist-s">
                            </div>
                            <!-- /BADGE ITEM -->

                            <!-- BADGE ITEM -->
                            <div class="badge-item text-tooltip-tft" data-title="Night Creature">
                                <img src="/assets/template/img/badge/ncreature-s.png" alt="badge-ncreature-s">
                            </div>
                            <!-- /BADGE ITEM -->

                            <!-- BADGE ITEM -->
                            <div class="badge-item text-tooltip-tft" data-title="Mightier Than Sword">
                                <img src="/assets/template/img/badge/mightiers-s.png" alt="badge-mightiers-s">
                            </div>
                            <!-- /BADGE ITEM -->

                            <!-- BADGE ITEM -->
                            <div class="badge-item text-tooltip-tft" data-title="The Phantom">
                                <img src="/assets/template/img/badge/phantom-s.png" alt="badge-phantom-s">
                            </div>
                            <!-- /BADGE ITEM -->

                            <!-- BADGE ITEM -->
                            <div class="badge-item text-tooltip-tft" data-title="The Collector">
                                <img src="/assets/template/img/badge/collector-s.png" alt="badge-collector-s">
                            </div>
                            <!-- /BADGE ITEM -->

                            <!-- BADGE ITEM -->
                            <div class="badge-item text-tooltip-tft" data-title="Bronze Cup">
                                <img src="/assets/template/img/badge/bronzec-s.png" alt="badge-bronzec-s">
                            </div>
                            <!-- /BADGE ITEM -->

                            <!-- BADGE ITEM -->
                            <div class="badge-item text-tooltip-tft" data-title="Silver Cup">
                                <img src="/assets/template/img/badge/silverc-s.png" alt="badge-silverc-s">
                            </div>
                            <!-- /BADGE ITEM -->

                            <!-- BADGE ITEM -->
                            <div class="badge-item text-tooltip-tft" data-title="Gold Cup">
                                <img src="/assets/template/img/badge/goldc-s.png" alt="badge-goldc-s">
                            </div>
                            <!-- /BADGE ITEM -->
                        </div>
                        <!-- /BADGE LIST -->
                    </div>
                    <!-- /WIDGET BOX CONTENT -->
                </div>
                <!-- /WIDGET BOX -->

                <!-- WIDGET BOX -->
                <div class="widget-box">
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
                                <p class="simple-dropdown-link">Widget Settings</p>
                                <!-- /SIMPLE DROPDOWN LINK -->
                            </div>
                            <!-- /SIMPLE DROPDOWN -->
                        </div>
                        <!-- /POST SETTINGS WRAP -->
                    </div>
                    <!-- /WIDGET BOX SETTINGS -->

                    <!-- WIDGET BOX TITLE -->
                    <p class="widget-box-title">Friends <span class="highlighted">82</span></p>
                    <!-- /WIDGET BOX TITLE -->

                    <!-- WIDGET BOX CONTENT -->
                    <div class="widget-box-content">
                        <!-- USER STATUS LIST -->
                        <div class="user-status-list">
                            <!-- USER STATUS -->
                            <div class="user-status request-small">
                                <!-- USER STATUS AVATAR -->
                                <a class="user-status-avatar" href="#">
                                    <!-- USER AVATAR -->
                                    <div class="user-avatar small no-outline">
                                        <!-- USER AVATAR CONTENT -->
                                        <div class="user-avatar-content">
                                            <!-- HEXAGON -->
                                            <div class="hexagon-image-30-32"
                                                data-src="/assets/template/img/avatar/07.jpg"></div>
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
                                    </div>
                                    <!-- /USER AVATAR -->
                                </a>
                                <!-- /USER STATUS AVATAR -->

                                <!-- USER STATUS TITLE -->
                                <p class="user-status-title"><a class="bold" href="#">Sarah
                                        Diamond</a></p>
                                <!-- /USER STATUS TITLE -->

                                <!-- USER STATUS TEXT -->
                                <p class="user-status-text small">2 friends in common</p>
                                <!-- /USER STATUS TEXT -->

                                <!-- ACTION REQUEST LIST -->
                                <div class="action-request-list">
                                    <!-- ACTION REQUEST -->
                                    <div class="action-request accept">
                                        <!-- ACTION REQUEST ICON -->
                                        <svg class="action-request-icon icon-add-friend">
                                            <use xlink:href="#svg-add-friend"></use>
                                        </svg>
                                        <!-- /ACTION REQUEST ICON -->
                                    </div>
                                    <!-- /ACTION REQUEST -->
                                </div>
                                <!-- ACTION REQUEST LIST -->
                            </div>
                            <!-- /USER STATUS -->

                            <!-- USER STATUS -->
                            <div class="user-status request-small">
                                <!-- USER STATUS AVATAR -->
                                <a class="user-status-avatar" href="#">
                                    <!-- USER AVATAR -->
                                    <div class="user-avatar small no-outline">
                                        <!-- USER AVATAR CONTENT -->
                                        <div class="user-avatar-content">
                                            <!-- HEXAGON -->
                                            <div class="hexagon-image-30-32"
                                                data-src="/assets/template/img/avatar/03.jpg"></div>
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
                                    </div>
                                    <!-- /USER AVATAR -->
                                </a>
                                <!-- /USER STATUS AVATAR -->

                                <!-- USER STATUS TITLE -->
                                <p class="user-status-title"><a class="bold" href="#">Nick
                                        Grissom</a></p>
                                <!-- /USER STATUS TITLE -->

                                <!-- USER STATUS TEXT -->
                                <p class="user-status-text small">5 friends in common</p>
                                <!-- /USER STATUS TEXT -->

                                <!-- ACTION REQUEST LIST -->
                                <div class="action-request-list">
                                    <!-- ACTION REQUEST -->
                                    <div class="action-request accept">
                                        <!-- ACTION REQUEST ICON -->
                                        <svg class="action-request-icon icon-add-friend">
                                            <use xlink:href="#svg-add-friend"></use>
                                        </svg>
                                        <!-- /ACTION REQUEST ICON -->
                                    </div>
                                    <!-- /ACTION REQUEST -->
                                </div>
                                <!-- ACTION REQUEST LIST -->
                            </div>
                            <!-- /USER STATUS -->

                            <!-- USER STATUS -->
                            <div class="user-status request-small">
                                <!-- USER STATUS AVATAR -->
                                <a class="user-status-avatar" href="#">
                                    <!-- USER AVATAR -->
                                    <div class="user-avatar small no-outline">
                                        <!-- USER AVATAR CONTENT -->
                                        <div class="user-avatar-content">
                                            <!-- HEXAGON -->
                                            <div class="hexagon-image-30-32"
                                                data-src="/assets/template/img/avatar/02.jpg"></div>
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
                                            <p class="user-avatar-badge-text">13</p>
                                            <!-- /USER AVATAR BADGE TEXT -->
                                        </div>
                                        <!-- /USER AVATAR BADGE -->
                                    </div>
                                    <!-- /USER AVATAR -->
                                </a>
                                <!-- /USER STATUS AVATAR -->

                                <!-- USER STATUS TITLE -->
                                <p class="user-status-title"><a class="bold" href="#">Destroy
                                        Dex</a></p>
                                <!-- /USER STATUS TITLE -->

                                <!-- USER STATUS TEXT -->
                                <p class="user-status-text small">0 friends in common</p>
                                <!-- /USER STATUS TEXT -->

                                <!-- ACTION REQUEST LIST -->
                                <div class="action-request-list">
                                    <!-- ACTION REQUEST -->
                                    <div class="action-request accept">
                                        <!-- ACTION REQUEST ICON -->
                                        <svg class="action-request-icon icon-add-friend">
                                            <use xlink:href="#svg-add-friend"></use>
                                        </svg>
                                        <!-- /ACTION REQUEST ICON -->
                                    </div>
                                    <!-- /ACTION REQUEST -->
                                </div>
                                <!-- ACTION REQUEST LIST -->
                            </div>
                            <!-- /USER STATUS -->

                            <!-- USER STATUS -->
                            <div class="user-status request-small">
                                <!-- USER STATUS AVATAR -->
                                <a class="user-status-avatar" href="#">
                                    <!-- USER AVATAR -->
                                    <div class="user-avatar small no-outline">
                                        <!-- USER AVATAR CONTENT -->
                                        <div class="user-avatar-content">
                                            <!-- HEXAGON -->
                                            <div class="hexagon-image-30-32"
                                                data-src="/assets/template/img/avatar/05.jpg"></div>
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
                                    </div>
                                    <!-- /USER AVATAR -->
                                </a>
                                <!-- /USER STATUS AVATAR -->

                                <!-- USER STATUS TITLE -->
                                <p class="user-status-title"><a class="bold" href="#">Neko
                                        Bebop</a></p>
                                <!-- /USER STATUS TITLE -->

                                <!-- USER STATUS TEXT -->
                                <p class="user-status-text small">1 friends in common</p>
                                <!-- /USER STATUS TEXT -->

                                <!-- ACTION REQUEST LIST -->
                                <div class="action-request-list">
                                    <!-- ACTION REQUEST -->
                                    <div class="action-request decline">
                                        <!-- ACTION REQUEST ICON -->
                                        <svg class="action-request-icon icon-remove-friend">
                                            <use xlink:href="#svg-remove-friend"></use>
                                        </svg>
                                        <!-- /ACTION REQUEST ICON -->
                                    </div>
                                    <!-- /ACTION REQUEST -->
                                </div>
                                <!-- ACTION REQUEST LIST -->
                            </div>
                            <!-- /USER STATUS -->

                            <!-- USER STATUS -->
                            <div class="user-status request-small">
                                <!-- USER STATUS AVATAR -->
                                <a class="user-status-avatar" href="#">
                                    <!-- USER AVATAR -->
                                    <div class="user-avatar small no-outline">
                                        <!-- USER AVATAR CONTENT -->
                                        <div class="user-avatar-content">
                                            <!-- HEXAGON -->
                                            <div class="hexagon-image-30-32"
                                                data-src="/assets/template/img/avatar/10.jpg"></div>
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
                                            <p class="user-avatar-badge-text">5</p>
                                            <!-- /USER AVATAR BADGE TEXT -->
                                        </div>
                                        <!-- /USER AVATAR BADGE -->
                                    </div>
                                    <!-- /USER AVATAR -->
                                </a>
                                <!-- /USER STATUS AVATAR -->

                                <!-- USER STATUS TITLE -->
                                <p class="user-status-title"><a class="bold" href="#">The Green
                                        Goo</a></p>
                                <!-- /USER STATUS TITLE -->

                                <!-- USER STATUS TEXT -->
                                <p class="user-status-text small">8 friends in common</p>
                                <!-- /USER STATUS TEXT -->

                                <!-- ACTION REQUEST LIST -->
                                <div class="action-request-list">
                                    <!-- ACTION REQUEST -->
                                    <div class="action-request accept">
                                        <!-- ACTION REQUEST ICON -->
                                        <svg class="action-request-icon icon-add-friend">
                                            <use xlink:href="#svg-add-friend"></use>
                                        </svg>
                                        <!-- /ACTION REQUEST ICON -->
                                    </div>
                                    <!-- /ACTION REQUEST -->
                                </div>
                                <!-- ACTION REQUEST LIST -->
                            </div>
                            <!-- /USER STATUS -->
                        </div>
                        <!-- /USER STATUS LIST -->
                    </div>
                    <!-- WIDGET BOX CONTENT -->

                    <!-- WIDGET BOX BUTTON -->
                    <a class="widget-box-button button small secondary" href="#">See all Friends</a>
                    <!-- /WIDGET BOX BUTTON -->
                </div>
                <!-- /WIDGET BOX -->

                <!-- WIDGET BOX -->
                <div class="widget-box">
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
                                <p class="simple-dropdown-link">Widget Settings</p>
                                <!-- /SIMPLE DROPDOWN LINK -->
                            </div>
                            <!-- /SIMPLE DROPDOWN -->
                        </div>
                        <!-- /POST SETTINGS WRAP -->
                    </div>
                    <!-- /WIDGET BOX SETTINGS -->

                    <!-- WIDGET BOX TITLE -->
                    <p class="widget-box-title">Videos <span class="highlighted">7</span></p>
                    <!-- /WIDGET BOX TITLE -->

                    <!-- WIDGET BOX CONTENT -->
                    <div class="widget-box-content">
                        <!-- VIDEO BOX LIST -->
                        <div class="video-box-list">
                            <!-- VIDEO BOX -->
                            <div class="video-box small">
                                <!-- VIDEO BOX COVER -->
                                <div class="video-box-cover popup-video-trigger">
                                    <!-- VIDEO BOX COVER IMAGE -->
                                    <figure class="video-box-cover-image liquid">
                                        <img src="/assets/template/img/cover/08.jpg" alt="cover-08">
                                    </figure>
                                    <!-- /VIDEO BOX COVER IMAGE -->

                                    <!-- PLAY BUTTON -->
                                    <div class="play-button">
                                        <!-- PLAY BUTTON ICON -->
                                        <svg class="play-button-icon icon-play">
                                            <use xlink:href="#svg-play"></use>
                                        </svg>
                                        <!-- /PLAY BUTTON ICON -->
                                    </div>
                                    <!-- /PLAY BUTTON -->

                                    <!-- VIDEO BOX INFO -->
                                    <div class="video-box-info">
                                        <!-- VIDEO BOX TITLE -->
                                        <p class="video-box-title">Mochi's Island Story Mode</p>
                                        <!-- /VIDEO BOX TITLE -->

                                        <!-- VIDEO BOX TEXT -->
                                        <p class="video-box-text">1 hour ago</p>
                                        <!-- /VIDEO BOX TEXT -->
                                    </div>
                                    <!-- /VIDEO BOX INFO -->
                                </div>
                                <!-- /VIDEO BOX COVER -->
                            </div>
                            <!-- /VIDEO BOX -->

                            <!-- VIDEO BOX -->
                            <div class="video-box small">
                                <!-- VIDEO BOX COVER -->
                                <div class="video-box-cover popup-video-trigger">
                                    <!-- VIDEO BOX COVER IMAGE -->
                                    <figure class="video-box-cover-image liquid">
                                        <img src="/assets/template/img/cover/09.jpg" alt="cover-09">
                                    </figure>
                                    <!-- /VIDEO BOX COVER IMAGE -->

                                    <!-- PLAY BUTTON -->
                                    <div class="play-button">
                                        <!-- PLAY BUTTON ICON -->
                                        <svg class="play-button-icon icon-play">
                                            <use xlink:href="#svg-play"></use>
                                        </svg>
                                        <!-- /PLAY BUTTON ICON -->
                                    </div>
                                    <!-- /PLAY BUTTON -->

                                    <!-- VIDEO BOX INFO -->
                                    <div class="video-box-info">
                                        <!-- VIDEO BOX TITLE -->
                                        <p class="video-box-title">Sunset Cowboys - Walkthrough</p>
                                        <!-- /VIDEO BOX TITLE -->

                                        <!-- VIDEO BOX TEXT -->
                                        <p class="video-box-text">3 days ago</p>
                                        <!-- /VIDEO BOX TEXT -->
                                    </div>
                                    <!-- /VIDEO BOX INFO -->
                                </div>
                                <!-- /VIDEO BOX COVER -->
                            </div>
                            <!-- /VIDEO BOX -->

                            <!-- VIDEO BOX -->
                            <div class="video-box small">
                                <!-- VIDEO BOX COVER -->
                                <div class="video-box-cover popup-video-trigger">
                                    <!-- VIDEO BOX COVER IMAGE -->
                                    <figure class="video-box-cover-image liquid">
                                        <img src="/assets/template/img/cover/05.jpg" alt="cover-05">
                                    </figure>
                                    <!-- /VIDEO BOX COVER IMAGE -->

                                    <!-- PLAY BUTTON -->
                                    <div class="play-button">
                                        <!-- PLAY BUTTON ICON -->
                                        <svg class="play-button-icon icon-play">
                                            <use xlink:href="#svg-play"></use>
                                        </svg>
                                        <!-- /PLAY BUTTON ICON -->
                                    </div>
                                    <!-- /PLAY BUTTON -->

                                    <!-- VIDEO BOX INFO -->
                                    <div class="video-box-info">
                                        <!-- VIDEO BOX TITLE -->
                                        <p class="video-box-title">Quest of the Ogre II: The Revenge USA...</p>
                                        <!-- /VIDEO BOX TITLE -->

                                        <!-- VIDEO BOX TEXT -->
                                        <p class="video-box-text">5 days ago</p>
                                        <!-- /VIDEO BOX TEXT -->
                                    </div>
                                    <!-- /VIDEO BOX INFO -->
                                </div>
                                <!-- /VIDEO BOX COVER -->
                            </div>
                            <!-- /VIDEO BOX -->
                        </div>
                        <!-- /VIDEO BOX LIST -->
                    </div>
                    <!-- WIDGET BOX CONTENT -->
                </div>
                <!-- /WIDGET BOX -->

                <!-- WIDGET BOX -->
                <div class="widget-box">
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
                                <p class="simple-dropdown-link">Widget Settings</p>
                                <!-- /SIMPLE DROPDOWN LINK -->
                            </div>
                            <!-- /SIMPLE DROPDOWN -->
                        </div>
                        <!-- /POST SETTINGS WRAP -->
                    </div>
                    <!-- /WIDGET BOX SETTINGS -->

                    <!-- WIDGET BOX TITLE -->
                    <p class="widget-box-title">Blog Posts <span class="highlighted">5</span></p>
                    <!-- /WIDGET BOX TITLE -->

                    <!-- WIDGET BOX CONTENT -->
                    <div class="widget-box-content">
                        <!-- POST PEEK LIST -->
                        <div class="post-peek-list">
                            <!-- POST PEEK -->
                            <div class="post-peek">
                                <!-- POST PEEK IMAGE -->
                                <a class="post-peek-image" href="#">
                                    <figure class="picture small round liquid">
                                        <img src="/assets/template/img/cover/19.jpg" alt="cover-19">
                                    </figure>
                                </a>
                                <!-- /POST PEEK IMAGE -->

                                <!-- POST PEEK TITLE -->
                                <p class="post-peek-title"><a href="#">Here's the how and why did I became
                                        a full time Gaming Streamer</a></p>
                                <!-- /POST PEEK TITLE -->

                                <!-- POST PEEK TEXT -->
                                <p class="post-peek-text">6 days ago</p>
                                <!-- /POST PEEK TEXT -->
                            </div>
                            <!-- /POST PEEK -->

                            <!-- POST PEEK -->
                            <div class="post-peek">
                                <!-- POST PEEK IMAGE -->
                                <a class="post-peek-image" href="#">
                                    <figure class="picture small round liquid">
                                        <img src="/assets/template/img/cover/10.jpg" alt="cover-10">
                                    </figure>
                                </a>
                                <!-- /POST PEEK IMAGE -->

                                <!-- POST PEEK TITLE -->
                                <p class="post-peek-title"><a href="#">I spoke with the developers of
                                        RoBot SaMurai II at the 2019 GamingCon</a></p>
                                <!-- /POST PEEK TITLE -->

                                <!-- POST PEEK TEXT -->
                                <p class="post-peek-text">3 weeks ago</p>
                                <!-- /POST PEEK TEXT -->
                            </div>
                            <!-- /POST PEEK -->

                            <!-- POST PEEK -->
                            <div class="post-peek">
                                <!-- POST PEEK IMAGE -->
                                <a class="post-peek-image" href="#">
                                    <figure class="picture small round liquid">
                                        <img src="/assets/template/img/cover/20.jpg" alt="cover-20">
                                    </figure>
                                </a>
                                <!-- /POST PEEK IMAGE -->

                                <!-- POST PEEK TITLE -->
                                <p class="post-peek-title"><a href="#">I will be at this month's StreamCon
                                        with NekoBebop</a></p>
                                <!-- /POST PEEK TITLE -->

                                <!-- POST PEEK TEXT -->
                                <p class="post-peek-text">4 weeks ago</p>
                                <!-- /POST PEEK TEXT -->
                            </div>
                            <!-- /POST PEEK -->

                            <!-- POST PEEK -->
                            <div class="post-peek">
                                <!-- POST PEEK IMAGE -->
                                <a class="post-peek-image" href="#">
                                    <figure class="picture small round liquid">
                                        <img src="/assets/template/img/cover/06.jpg" alt="cover-06">
                                    </figure>
                                </a>
                                <!-- /POST PEEK IMAGE -->

                                <!-- POST PEEK TITLE -->
                                <p class="post-peek-title"><a href="#">[Exclusive!] Check out all the new
                                        missions and story of the Fire Witch DLC!</a></p>
                                <!-- /POST PEEK TITLE -->

                                <!-- POST PEEK TEXT -->
                                <p class="post-peek-text">1 month ago</p>
                                <!-- /POST PEEK TEXT -->
                            </div>
                            <!-- /POST PEEK -->

                            <!-- POST PEEK -->
                            <div class="post-peek">
                                <!-- POST PEEK IMAGE -->
                                <a class="post-peek-image" href="#">
                                    <figure class="picture small round liquid">
                                        <img src="/assets/template/img/cover/07.jpg" alt="cover-07">
                                    </figure>
                                </a>
                                <!-- /POST PEEK IMAGE -->

                                <!-- POST PEEK TITLE -->
                                <p class="post-peek-title"><a href="#">Old Super Mochi's Island is getting
                                        a remake!</a></p>
                                <!-- /POST PEEK TITLE -->

                                <!-- POST PEEK TEXT -->
                                <p class="post-peek-text">1 month ago</p>
                                <!-- /POST PEEK TEXT -->
                            </div>
                            <!-- /POST PEEK -->
                        </div>
                        <!-- /POST PEEK LIST -->
                    </div>
                    <!-- /WIDGET BOX CONTENT -->
                </div>
                <!-- /WIDGET BOX --> --}}
            </div>
            <!-- /GRID COLUMN -->

            <!-- GRID COLUMN -->
            <div class="grid-column">
                {{-- @widget('quickpost') --}}


                @forelse ($user->posts as $post)
                    @include('pages.components.post', ['post' => $post])
                @empty

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
                                    <a class="user-status-avatar" href="{{ route('user', $user->id) }}">
                                        <!-- USER AVATAR -->
                                        <div class="user-avatar small no-outline">
                                            <!-- USER AVATAR CONTENT -->
                                            <div class="user-avatar-content">
                                                <!-- HEXAGON -->
                                                <div class="hexagon-image-30-32"
                                                    data-src="{{ $user->profile_photo_path }}">
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

                                        </div>
                                        <!-- /USER AVATAR -->
                                    </a>
                                    <!-- /USER STATUS AVATAR -->

                                    <!-- USER STATUS TITLE -->
                                    <p class="user-status-title medium"><a class="bold"
                                            href="#">{{ $user->name }}</a></p>
                                    <!-- /USER STATUS TITLE -->

                                    <!-- USER STATUS TEXT -->
                                    <p class="user-status-text small">few minutes ago</p>
                                    <!-- /USER STATUS TEXT -->
                                </div>
                                <!-- /USER STATUS -->

                                <!-- WIDGET BOX STATUS TEXT -->
                                <p class="widget-box-status-text">
                                    User hasn't posted anything yet!
                                </p>
                                <!-- /WIDGET BOX STATUS TEXT -->
                            </div>
                            <!-- /WIDGET BOX STATUS CONTENT -->

                            <!-- WIDGET BOX PICTURE -->
                            <figure class="widget-box-picture popup-picture-trigger">
                                <img src="/assets/defaults/nopost.png" alt="cover-04">
                            </figure>
                            <!-- /WIDGET BOX PICTURE -->

                            {{-- <!-- WIDGET BOX STATUS CONTENT -->
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
                    <!-- /WIDGET BOX STATUS CONTENT --> --}}
                @endforelse




                <!-- LOADER BARS -->
                <div class="loader-bars">
                    <div class="loader-bar"></div>
                    <div class="loader-bar"></div>
                    <div class="loader-bar"></div>
                    <div class="loader-bar"></div>
                    <div class="loader-bar"></div>
                    <div class="loader-bar"></div>
                    <div class="loader-bar"></div>
                    <div class="loader-bar"></div>
                </div>
                <!-- /LOADER BARS -->
            </div>
            <!-- /GRID COLUMN -->

            <!-- GRID COLUMN -->
            <div class="grid-column">
                {{-- <!-- WIDGET BOX -->
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
                                <p class="simple-dropdown-link">Widget Settings</p>
                                <!-- /SIMPLE DROPDOWN LINK -->
                            </div>
                            <!-- /SIMPLE DROPDOWN -->
                        </div>
                        <!-- /POST SETTINGS WRAP -->
                    </div>
                    <!-- /WIDGET BOX SETTINGS -->

                    <!-- WIDGET BOX TITLE -->
                    <p class="widget-box-title">Stream Box</p>
                    <!-- /WIDGET BOX TITLE -->

                    <!-- WIDGET BOX CONTENT -->
                    <div class="widget-box-content small-margin-top">
                        <!-- STREAM BOX -->
                        <div class="stream-box no-video-radius">
                            <!-- STREAM BOX VIDEO -->
                            <div class="stream-box-video">
                                <iframe src="https://player.twitch.tv/?channel=cohhcarnage" allowfullscreen></iframe>
                            </div>
                            <!-- /STREAM BOX VIDEO -->

                            <!-- STREAM BOX IMAGE -->
                            <div class="stream-box-image">
                                <figure class="picture tiny circle liquid">
                                    <img src="/assets/template/img/avatar/01-social.png" alt="avatar-01-social">
                                </figure>
                            </div>
                            <!-- /STREAM BOX IMAGE -->

                            <!-- STREAM BOX INFO -->
                            <div class="stream-box-info">
                                <!-- STREAM BOX TITLE -->
                                <p class="stream-box-title"><a href="#">I'm Playing Athena’s Goddess
                                        Story...</a></p>
                                <!-- /STREAM BOX TITLE -->

                                <!-- STREAM BOX TEXT -->
                                <p class="stream-box-text"><a href="https://www.twitch.tv/"
                                        target="_blank">@GameHuntress</a></p>
                                <!-- /STREAM BOX TEXT -->
                            </div>
                            <!-- /STREAM BOX INFO -->
                        </div>
                        <!-- /STREAM BOX -->
                    </div>
                    <!-- WIDGET BOX CONTENT -->
                </div>
                <!-- /WIDGET BOX --> --}}


                @widget('startups')
                {{-- @widget('refferal') --}}

                <!-- WIDGET BOX -->
                <div class="widget-box">

                    <!-- WIDGET BOX TITLE -->
                    <p class="widget-box-title">Interests</p>
                    <!-- /WIDGET BOX TITLE -->

                    <!-- WIDGET BOX CONTENT -->
                    <div class="widget-box-content">

                        <p class="information-line-text">
                            @if ($user->interests)
                                @forelse ($user->interests as $interest)
                                    {{ $interest['name'] }}

                                    @if (!$loop->last)
                                        ,
                                    @endif
                                @empty
                                @endforelse
                            @endif
                    </div>
                </div>

                {{-- <!-- WIDGET BOX -->
                <div class="widget-box">
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
                                <p class="simple-dropdown-link">Widget Settings</p>
                                <!-- /SIMPLE DROPDOWN LINK -->
                            </div>
                            <!-- /SIMPLE DROPDOWN -->
                        </div>
                        <!-- /POST SETTINGS WRAP -->
                    </div>
                    <!-- /WIDGET BOX SETTINGS -->

                    <!-- WIDGET BOX TITLE -->
                    <p class="widget-box-title">Twitter Feed</p>
                    <!-- /WIDGET BOX TITLE -->

                    <!-- WIDGET BOX CONTENT -->
                    <div class="widget-box-content">
                        <!-- TWEET FEED -->
                        <div class="tweet-feed"></div>
                        <!-- /TWEET FEED -->
                    </div>
                    <!-- /WIDGET BOX CONTENT -->
                </div>
                <!-- /WIDGET BOX -->

                <!-- WIDGET BOX -->
                <div class="widget-box">
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
                                <p class="simple-dropdown-link">Widget Settings</p>
                                <!-- /SIMPLE DROPDOWN LINK -->
                            </div>
                            <!-- /SIMPLE DROPDOWN -->
                        </div>
                        <!-- /POST SETTINGS WRAP -->
                    </div>
                    <!-- /WIDGET BOX SETTINGS -->

                    <!-- WIDGET BOX TITLE -->
                    <p class="widget-box-title">Groups <span class="highlighted">7</span></p>
                    <!-- /WIDGET BOX TITLE -->

                    <!-- WIDGET BOX CONTENT -->
                    <div class="widget-box-content">
                        <!-- FILTERS -->
                        <div class="filters">
                            <!-- FILTER -->
                            <p class="filter">Newest</p>
                            <!-- /FILTER -->

                            <!-- FILTER -->
                            <p class="filter active">Popular</p>
                            <!-- /FILTER -->

                            <!-- FILTER -->
                            <p class="filter">Active</p>
                            <!-- /FILTER -->
                        </div>
                        <!-- /FILTERS -->

                        <!-- USER STATUS LIST -->
                        <div class="user-status-list">
                            <!-- USER STATUS -->
                            <div class="user-status request-small">
                                <!-- USER STATUS AVATAR -->
                                <a class="user-status-avatar" href="#">
                                    <!-- USER AVATAR -->
                                    <div class="user-avatar small no-border">
                                        <!-- USER AVATAR CONTENT -->
                                        <div class="user-avatar-content">
                                            <!-- HEXAGON -->
                                            <div class="hexagon-image-40-44"
                                                data-src="/assets/template/img/avatar/29.jpg"></div>
                                            <!-- /HEXAGON -->
                                        </div>
                                        <!-- /USER AVATAR CONTENT -->
                                    </div>
                                    <!-- /USER AVATAR -->
                                </a>
                                <!-- /USER STATUS AVATAR -->

                                <!-- USER STATUS TITLE -->
                                <p class="user-status-title"><a class="bold" href="#">Twitch
                                        Streamers</a></p>
                                <!-- /USER STATUS TITLE -->

                                <!-- USER STATUS TEXT -->
                                <p class="user-status-text small">265 members</p>
                                <!-- /USER STATUS TEXT -->

                                <!-- ACTION REQUEST LIST -->
                                <div class="action-request-list">
                                    <!-- ACTION REQUEST -->
                                    <div class="action-request accept">
                                        <!-- ACTION REQUEST ICON -->
                                        <svg class="action-request-icon icon-join-group">
                                            <use xlink:href="#svg-join-group"></use>
                                        </svg>
                                        <!-- /ACTION REQUEST ICON -->
                                    </div>
                                    <!-- /ACTION REQUEST -->
                                </div>
                                <!-- ACTION REQUEST LIST -->
                            </div>
                            <!-- /USER STATUS -->

                            <!-- USER STATUS -->
                            <div class="user-status request-small">
                                <!-- USER STATUS AVATAR -->
                                <a class="user-status-avatar" href="#">
                                    <!-- USER AVATAR -->
                                    <div class="user-avatar small no-border">
                                        <!-- USER AVATAR CONTENT -->
                                        <div class="user-avatar-content">
                                            <!-- HEXAGON -->
                                            <div class="hexagon-image-40-44"
                                                data-src="/assets/template/img/avatar/24.jpg"></div>
                                            <!-- /HEXAGON -->
                                        </div>
                                        <!-- /USER AVATAR CONTENT -->
                                    </div>
                                    <!-- /USER AVATAR -->
                                </a>
                                <!-- /USER STATUS AVATAR -->

                                <!-- USER STATUS TITLE -->
                                <p class="user-status-title"><a class="bold" href="#">Cosplayers
                                        of the World</a></p>
                                <!-- /USER STATUS TITLE -->

                                <!-- USER STATUS TEXT -->
                                <p class="user-status-text small">139 members</p>
                                <!-- /USER STATUS TEXT -->

                                <!-- ACTION REQUEST LIST -->
                                <div class="action-request-list">
                                    <!-- ACTION REQUEST -->
                                    <div class="action-request accept">
                                        <!-- ACTION REQUEST ICON -->
                                        <svg class="action-request-icon icon-join-group">
                                            <use xlink:href="#svg-join-group"></use>
                                        </svg>
                                        <!-- /ACTION REQUEST ICON -->
                                    </div>
                                    <!-- /ACTION REQUEST -->
                                </div>
                                <!-- ACTION REQUEST LIST -->
                            </div>
                            <!-- /USER STATUS -->

                            <!-- USER STATUS -->
                            <div class="user-status request-small">
                                <!-- USER STATUS AVATAR -->
                                <a class="user-status-avatar" href="#">
                                    <!-- USER AVATAR -->
                                    <div class="user-avatar small no-border">
                                        <!-- USER AVATAR CONTENT -->
                                        <div class="user-avatar-content">
                                            <!-- HEXAGON -->
                                            <div class="hexagon-image-40-44"
                                                data-src="/assets/template/img/avatar/25.jpg"></div>
                                            <!-- /HEXAGON -->
                                        </div>
                                        <!-- /USER AVATAR CONTENT -->
                                    </div>
                                    <!-- /USER AVATAR -->
                                </a>
                                <!-- /USER STATUS AVATAR -->

                                <!-- USER STATUS TITLE -->
                                <p class="user-status-title"><a class="bold" href="#">Stream
                                        Designers</a></p>
                                <!-- /USER STATUS TITLE -->

                                <!-- USER STATUS TEXT -->
                                <p class="user-status-text small">466 members</p>
                                <!-- /USER STATUS TEXT -->

                                <!-- ACTION REQUEST LIST -->
                                <div class="action-request-list">
                                    <!-- ACTION REQUEST -->
                                    <div class="action-request accept">
                                        <!-- ACTION REQUEST ICON -->
                                        <svg class="action-request-icon icon-join-group">
                                            <use xlink:href="#svg-join-group"></use>
                                        </svg>
                                        <!-- /ACTION REQUEST ICON -->
                                    </div>
                                    <!-- /ACTION REQUEST -->
                                </div>
                                <!-- ACTION REQUEST LIST -->
                            </div>
                            <!-- /USER STATUS -->

                            <!-- USER STATUS -->
                            <div class="user-status request-small">
                                <!-- USER STATUS AVATAR -->
                                <a class="user-status-avatar" href="#">
                                    <!-- USER AVATAR -->
                                    <div class="user-avatar small no-border">
                                        <!-- USER AVATAR CONTENT -->
                                        <div class="user-avatar-content">
                                            <!-- HEXAGON -->
                                            <div class="hexagon-image-40-44"
                                                data-src="/assets/template/img/avatar/28.jpg"></div>
                                            <!-- /HEXAGON -->
                                        </div>
                                        <!-- /USER AVATAR CONTENT -->
                                    </div>
                                    <!-- /USER AVATAR -->
                                </a>
                                <!-- /USER STATUS AVATAR -->

                                <!-- USER STATUS TITLE -->
                                <p class="user-status-title"><a class="bold" href="#">Street
                                        Artists</a></p>
                                <!-- /USER STATUS TITLE -->

                                <!-- USER STATUS TEXT -->
                                <p class="user-status-text small">951 members</p>
                                <!-- /USER STATUS TEXT -->

                                <!-- ACTION REQUEST LIST -->
                                <div class="action-request-list">
                                    <!-- ACTION REQUEST -->
                                    <div class="action-request decline">
                                        <!-- ACTION REQUEST ICON -->
                                        <svg class="action-request-icon icon-leave-group">
                                            <use xlink:href="#svg-leave-group"></use>
                                        </svg>
                                        <!-- /ACTION REQUEST ICON -->
                                    </div>
                                    <!-- /ACTION REQUEST -->
                                </div>
                                <!-- ACTION REQUEST LIST -->
                            </div>
                            <!-- /USER STATUS -->

                            <!-- USER STATUS -->
                            <div class="user-status request-small">
                                <!-- USER STATUS AVATAR -->
                                <a class="user-status-avatar" href="#">
                                    <!-- USER AVATAR -->
                                    <div class="user-avatar small no-border">
                                        <!-- USER AVATAR CONTENT -->
                                        <div class="user-avatar-content">
                                            <!-- HEXAGON -->
                                            <div class="hexagon-image-40-44"
                                                data-src="/assets/template/img/avatar/27.jpg"></div>
                                            <!-- /HEXAGON -->
                                        </div>
                                        <!-- /USER AVATAR CONTENT -->
                                    </div>
                                    <!-- /USER AVATAR -->
                                </a>
                                <!-- /USER STATUS AVATAR -->

                                <!-- USER STATUS TITLE -->
                                <p class="user-status-title"><a class="bold" href="#">Gaming
                                        Watchtower</a></p>
                                <!-- /USER STATUS TITLE -->

                                <!-- USER STATUS TEXT -->
                                <p class="user-status-text small">2.365 members</p>
                                <!-- /USER STATUS TEXT -->

                                <!-- ACTION REQUEST LIST -->
                                <div class="action-request-list">
                                    <!-- ACTION REQUEST -->
                                    <div class="action-request accept">
                                        <!-- ACTION REQUEST ICON -->
                                        <svg class="action-request-icon icon-join-group">
                                            <use xlink:href="#svg-join-group"></use>
                                        </svg>
                                        <!-- /ACTION REQUEST ICON -->
                                    </div>
                                    <!-- /ACTION REQUEST -->
                                </div>
                                <!-- ACTION REQUEST LIST -->
                            </div>
                            <!-- /USER STATUS -->
                        </div>
                        <!-- /USER STATUS LIST -->
                    </div>
                    <!-- WIDGET BOX CONTENT -->
                </div>
                <!-- /WIDGET BOX -->

                <!-- WIDGET BOX -->
                <div class="widget-box">
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
                                <p class="simple-dropdown-link">Widget Settings</p>
                                <!-- /SIMPLE DROPDOWN LINK -->
                            </div>
                            <!-- /SIMPLE DROPDOWN -->
                        </div>
                        <!-- /POST SETTINGS WRAP -->
                    </div>
                    <!-- /WIDGET BOX SETTINGS -->

                    <!-- WIDGET BOX TITLE -->
                    <p class="widget-box-title">Latest Item</p>
                    <!-- /WIDGET BOX TITLE -->

                    <!-- WIDGET BOX CONTENT -->
                    <div class="widget-box-content">
                        <!-- PRODUCT PREVIEW -->
                        <div class="product-preview small">
                            <!-- PRODUCT PREVIEW IMAGE -->
                            <a href="#">
                                <figure class="product-preview-image liquid">
                                    <img src="/assets/template/img/marketplace/items/01.jpg" alt="item-01">
                                </figure>
                            </a>
                            <!-- /PRODUCT PREVIEW IMAGE -->

                            <!-- PRODUCT PREVIEW INFO -->
                            <div class="product-preview-info">
                                <!-- TEXT STICKER -->
                                <p class="text-sticker"><span class="highlighted">$</span> 12.00</p>
                                <!-- /TEXT STICKER -->

                                <!-- PRODUCT PREVIEW TITLE -->
                                <p class="product-preview-title"><a href="#">Twitch Stream UI
                                        Pack</a></p>
                                <!-- /PRODUCT PREVIEW TITLE -->

                                <!-- PRODUCT PREVIEW CATEGORY -->
                                <p class="product-preview-category digital"><a href="#">Stream
                                        Packs</a></p>
                                <!-- /PRODUCT PREVIEW CATEGORY -->
                            </div>
                            <!-- /PRODUCT PREVIEW INFO -->
                        </div>
                        <!-- /PRODUCT PREVIEW -->
                    </div>
                    <!-- /WIDGET BOX CONTENT -->
                </div>
                <!-- /WIDGET BOX --> --}}
            </div>
            <!-- /GRID COLUMN -->
        </div>
        <!-- /GRID -->
    </div>
    <!-- /CONTENT GRID -->
@endsection

@push('scripts')
    <script>
        var loaderHTML = `<div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>`;

        function follow(id) {
            $('#follow').html(loaderHTML);
            console.log(id);
            // post request ajax
            $.ajax({
                url: "{{ route('follow') }}",
                type: 'POST',
                data: {
                    id: id,
                    type: 'user'
                },
                success: function(data) {
                    // console.log(data);
                    if (!data.data) {
                        $('#follow').html('Follow').removeClass('secondary').addClass('primary');
                        document.querySelector('#followers').innerHTML -= 1;
                    } else {
                        $('#follow').html('Unfollow').removeClass('primary').addClass('secondary');
                        document.querySelector('#followers').innerHTML = parseInt(document.querySelector(
                            '#followers').innerHTML) + 1;
                    }
                }
            });

        }
    </script>
@endpush
