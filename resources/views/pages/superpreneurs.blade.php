@php
$page['title'] = 'Entrepreneurs | ConnectUp - Connecting the Dots...';
$currenturl = Request::url() . '?';
$requests = Request::all();
foreach ($requests as $key => $value) {
    $currenturl .= '&' . $key . '=' . $value;
}

$tabitems = [
    'new' => 'Newly Created',
    'members' => 'Most Members',
    'alpha' => 'Alphabetical',
];
if ($requests['sort'] ?? '') {
    $stab = $requests['sort'];
} else {
    $stab = 'new';
}

@endphp

@extends('layouts/app')


@section('content')
    <!-- CONTENT GRID -->
    <div class="content-grid">

        <!-- SECTION FILTERS BAR -->
        <div class="section-filters-bar v1">
            <!-- SECTION FILTERS BAR ACTIONS -->
            <div class="section-filters-bar-actions">
                <!-- FORM -->
                <form class="form" action="{{ $currenturl }}">
                    <!-- FORM INPUT -->
                    <div class="form-input small with-button {{ $requests['q'] ?? '' ? 'active' : '' }}">
                        <label for="groups-search ">Search Groups</label>
                        <input type="text" id="groups-search" name="q" value="{{ $requests['q'] ?? '' }}" />
                        <input type="hidden" name="sort" value="{{ $stab }}" />

                        <!-- BUTTON -->
                        <button class="button primary">
                            <!-- ICON MAGNIFYING GLASS -->
                            <svg class="icon-magnifying-glass">
                                <use xlink:href="#svg-magnifying-glass"></use>
                            </svg>
                            <!-- /ICON MAGNIFYING GLASS -->
                        </button>
                        <!-- /BUTTON -->
                    </div>
                    <!-- /FORM INPUT -->

                    {{-- <!-- FORM SELECT -->
                    <div class="form-select">
                        <label for="groups-filter-category">Filter By</label>
                        <select id="groups-filter-category" name="groups_filter_category">
                            <option value="0">Newly Created</option>
                            <option value="1">Most Members</option>
                            <option value="2">Alphabetical</option>
                        </select>
                        <!-- FORM SELECT ICON -->
                        <svg class="form-select-icon icon-small-arrow">
                            <use xlink:href="#svg-small-arrow"></use>
                        </svg>
                        <!-- /FORM SELECT ICON -->
                    </div>
                    <!-- /FORM SELECT --> --}}
                </form>
                <!-- /FORM -->

                <!-- FILTER TABS -->
                <div class="filter-tabs">


                    @foreach ($tabitems as $tab => $title)
                        <!-- FILTER TAB -->
                        <div class="filter-tab {{ $stab == $tab ? 'active' : '' }}">
                            <!-- FILTER TAB TEXT -->
                            <a href="{{ $currenturl }}&sort={{ $tab }}"
                                class="filter-tab-text">{{ $title }}</a>
                            <!-- /FILTER TAB TEXT -->
                        </div>
                        <!-- /FILTER TAB -->
                    @endforeach
                </div>
                <!-- /FILTER TABS -->
            </div>
            <!-- /SECTION FILTERS BAR ACTIONS -->
        </div>
        <!-- /SECTION FILTERS BAR -->

        <!-- GRID -->
        <div class="grid grid-4-4-4 centered">
            @forelse ($users as $user)
                <!-- USER PREVIEW -->
                <div class="user-preview">
                    <!-- USER PREVIEW COVER -->
                    <figure class="user-preview-cover liquid">
                        <img src="{{ $user->cover_photo_path }}" alt="cover-04" />
                    </figure>
                    <!-- /USER PREVIEW COVER -->

                    <!-- USER PREVIEW INFO -->
                    <div class="user-preview-info">
                        <!-- USER SHORT DESCRIPTION -->
                        <div class="user-short-description">
                            <!-- USER SHORT DESCRIPTION AVATAR -->
                            <a class="user-short-description-avatar user-avatar medium"
                                href="{{ route('user', $user->username) }}">
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
                            <p class="user-short-description-title">
                                <a href="{{ route('user', $user->username) }}">{{ $user->name }}</a>
                            </p>
                            <!-- /USER SHORT DESCRIPTION TITLE -->

                            <!-- USER SHORT DESCRIPTION TEXT -->
                            <p class="user-short-description-text">
                                <a href="#">{{ '@' . $user->username }}</a>
                            </p>
                            <!-- /USER SHORT DESCRIPTION TEXT -->
                        </div>
                        <!-- /USER SHORT DESCRIPTION -->

                        {{-- <!-- BADGE LIST -->
                        <div class="badge-list small">
                            <!-- BADGE ITEM -->
                            <div class="badge-item">
                                <img src="/assets/template/img/badge/silver-s.png" alt="badge-silver-s" />
                            </div>
                            <!-- /BADGE ITEM -->

                            <!-- BADGE ITEM -->
                            <div class="badge-item">
                                <img src="/assets/template/img/badge/fcultivator-s.png" alt="badge-fcultivator-s" />
                            </div>
                            <!-- /BADGE ITEM -->

                            <!-- BADGE ITEM -->
                            <div class="badge-item">
                                <img src="/assets/template/img/badge/scientist-s.png" alt="badge-scientist-s" />
                            </div>
                            <!-- /BADGE ITEM -->

                            <!-- BADGE ITEM -->
                            <div class="badge-item">
                                <img src="/assets/template/img/badge/rmachine-s.png" alt="badge-rmachine-s" />
                            </div>
                            <!-- /BADGE ITEM -->

                            <!-- BADGE ITEM -->
                            <a class="badge-item" href="profile-badges.html">
                                <img src="/assets/template/img/badge/blank-s.png" alt="badge-blank-s" />
                                <!-- BADGE ITEM TEXT -->
                                <p class="badge-item-text">+29</p>
                                <!-- /BADGE ITEM TEXT -->
                            </a>
                            <!-- /BADGE ITEM -->
                        </div>
                        <!-- /BADGE LIST --> --}}

                        <!-- USER PREVIEW STATS SLIDES -->
                        <div id="user-preview-stats-slides-01" class="user-preview-stats-slides">
                            <!-- USER PREVIEW STATS SLIDE -->
                            <div class="user-preview-stats-slide">
                                <!-- USER STATS -->
                                <div class="user-stats">
                                    <!-- USER STAT -->
                                    <div class="user-stat">
                                        <!-- USER STAT TITLE -->
                                        <p class="user-stat-title">{{ $user->postcount }}</p>
                                        <!-- /USER STAT TITLE -->

                                        <!-- USER STAT TEXT -->
                                        <p class="user-stat-text">posts</p>
                                        <!-- /USER STAT TEXT -->
                                    </div>
                                    <!-- /USER STAT -->

                                    <!-- USER STAT -->
                                    <div class="user-stat">
                                        <!-- USER STAT TITLE -->
                                        <p class="user-stat-title">0</p>
                                        <!-- /USER STAT TITLE -->

                                        <!-- USER STAT TEXT -->
                                        <p class="user-stat-text">Followers</p>
                                        <!-- /USER STAT TEXT -->
                                    </div>
                                    <!-- /USER STAT -->

                                    <!-- USER STAT -->
                                    <div class="user-stat">
                                        <!-- USER STAT TITLE -->
                                        <p class="user-stat-title">{{ changeIntoKMG(profileview($user->id)) }}</p>
                                        <!-- /USER STAT TITLE -->

                                        <!-- USER STAT TEXT -->
                                        <p class="user-stat-text">visits</p>
                                        <!-- /USER STAT TEXT -->
                                    </div>
                                    <!-- /USER STAT -->
                                </div>
                                <!-- /USER STATS -->
                            </div>
                            <!-- /USER PREVIEW STATS SLIDE -->

                            {{-- <!-- USER PREVIEW STATS SLIDE -->
                            <div class="user-preview-stats-slide">
                                <!-- USER PREVIEW TEXT -->
                                <p class="user-preview-text">
                                    Hello! I'm James Hart, but I go by the name
                                    of Destroy Dex on my stream channel. Come to
                                    check out the latest gaming news!
                                </p>
                                <!-- /USER PREVIEW TEXT -->
                            </div>
                            <!-- /USER PREVIEW STATS SLIDE --> --}}
                        </div>
                        <!-- /USER PREVIEW STATS SLIDES -->

                        <!-- USER PREVIEW STATS ROSTER -->
                        <div id="user-preview-stats-roster-01" class="user-preview-stats-roster slider-roster">
                            <!-- SLIDER ROSTER ITEM -->
                            <div class="slider-roster-item"></div>
                            <!-- /SLIDER ROSTER ITEM -->

                            <!-- SLIDER ROSTER ITEM -->
                            <div class="slider-roster-item"></div>
                            <!-- /SLIDER ROSTER ITEM -->
                        </div>
                        <!-- /USER PREVIEW STATS ROSTER -->

                        <!-- SOCIAL LINKS -->
                        <div class="social-links small">

                            @if ($user->socials)
                                @forelse ($user->socials as $key => $link)
                                    <!-- SOCIAL LINK -->
                                    <a class="social-link small {{ $key }}" href="{{ $link }}">
                                        <!-- SOCIAL LINK ICON -->
                                        <svg class="social-link-icon icon-icon">
                                            <use xlink:href="#svg-{{ $key }}"></use>
                                        </svg>
                                        <!-- /SOCIAL LINK ICON -->
                                    </a>
                                    <!-- /SOCIAL LINK -->
                                @empty
                                    <p>No social links</p>
                                @endforelse
                            @endif

                        </div>
                        <!-- /SOCIAL LINKS -->

                        {{-- <!-- USER PREVIEW ACTIONS -->
                        <div class="user-preview-actions">
                            <!-- BUTTON -->
                            <p class="button secondary">Add Friend +</p>
                            <!-- /BUTTON -->

                            <!-- BUTTON -->
                            <p class="button primary">Send Message</p>
                            <!-- /BUTTON -->
                        </div>
                        <!-- /USER PREVIEW ACTIONS --> --}}
                    </div>
                    <!-- /USER PREVIEW INFO -->
                </div>
                <!-- /USER PREVIEW -->

            @empty
            @endforelse
        </div>
        <!-- /GRID -->
    </div>
    <!-- /CONTENT GRID -->
@endsection
