@php
$page['title'] = 'Startups | ConnectUp - Connecting the Dots...';
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

            {{-- <!-- SECTION FILTERS BAR ACTIONS -->
            <div class="section-filters-bar-actions">
                <!-- VIEW ACTIONS -->
                <div class="view-actions">
                    <!-- VIEW ACTION -->
                    <div class="view-action text-tooltip-tft-medium active" data-title="Big Grid">
                        <!-- VIEW ACTION ICON -->
                        <svg class="view-action-icon icon-big-grid-view">
                            <use xlink:href="#svg-big-grid-view"></use>
                        </svg>
                        <!-- /VIEW ACTION ICON -->
                    </div>
                    <!-- /VIEW ACTION -->

                    <!-- VIEW ACTION -->
                    <div class="view-action text-tooltip-tft-medium" data-title="Small Grid">
                        <!-- VIEW ACTION ICON -->
                        <svg class="view-action-icon icon-small-grid-view">
                            <use xlink:href="#svg-small-grid-view"></use>
                        </svg>
                        <!-- /VIEW ACTION ICON -->
                    </div>
                    <!-- /VIEW ACTION -->

                    <!-- VIEW ACTION -->
                    <div class="view-action text-tooltip-tft-medium" data-title="List">
                        <!-- VIEW ACTION ICON -->
                        <svg class="view-action-icon icon-list-grid-view">
                            <use xlink:href="#svg-list-grid-view"></use>
                        </svg>
                        <!-- /VIEW ACTION ICON -->
                    </div>
                    <!-- /VIEW ACTION -->
                </div>
                <!-- /VIEW ACTIONS -->
            </div>
            <!-- /SECTION FILTERS BAR ACTIONS --> --}}
        </div>
        <!-- /SECTION FILTERS BAR -->

        <!-- GRID -->
        <div class="grid grid-4-4-4 centered">
            @forelse ($startups as $startup)
                <!-- USER PREVIEW -->
                <div class="user-preview">
                    <!-- USER PREVIEW COVER -->
                    <figure class="user-preview-cover liquid">
                        <img src="{{ $startup->cover }}" alt="cover-29" />
                    </figure>
                    <!-- /USER PREVIEW COVER -->

                    <!-- USER PREVIEW INFO -->
                    <div class="user-preview-info">
                        <!-- TAG STICKER -->
                        <div class="tag-sticker">
                            <!-- TAG STICKER ICON -->
                            <svg class="tag-sticker-icon icon-public">
                                <use xlink:href="#svg-{{ $startup->funded ? 'funded' : 'public' }}"></use>
                            </svg>
                            <!-- /TAG STICKER ICON -->
                        </div>
                        <!-- /TAG STICKER -->

                        <!-- USER SHORT DESCRIPTION -->
                        <div class="user-short-description">
                            <!-- USER SHORT DESCRIPTION AVATAR -->
                            <a class="user-short-description-avatar user-avatar medium no-stats"
                                href="{{ route('startup', $startup->username) }}">
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
                                <a href="{{ route('startup', $startup->username) }}">{{ $startup->name }}</a>
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
                                <p class="user-stat-title">0</p>
                                <!-- /USER STAT TITLE -->

                                <!-- USER STAT TEXT -->
                                <p class="user-stat-text">posts</p>
                                <!-- /USER STAT TEXT -->
                            </div>
                            <!-- /USER STAT -->

                            <!-- USER STAT -->
                            <div class="user-stat">
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

                        {{-- <!-- USER AVATAR LIST -->
                        <div class="user-avatar-list medium reverse centered">
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
                            <a class="user-avatar smaller no-stats" href="group-members.html">
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
                                    <p class="user-avatar-overlay-content-text">
                                        +132
                                    </p>
                                    <!-- /USER AVATAR OVERLAY CONTENT TEXT -->
                                </div>
                                <!-- /USER AVATAR OVERLAY CONTENT -->
                            </a>
                            <!-- /USER AVATAR -->
                        </div>
                        <!-- /USER AVATAR LIST --> --}}

                        <!-- USER PREVIEW ACTIONS -->
                        <div class="user-preview-actions">
                            <!-- BUTTON -->
                            <p class="button secondary full" style="cursor: not-allowed">
                                <!-- BUTTON ICON -->
                                <svg class="button-icon icon-join-group">
                                    <use xlink:href="#svg-join-group"></use>
                                </svg>
                                <!-- /BUTTON ICON -->
                                Follow Startup
                            </p>
                            <!-- /BUTTON -->
                        </div>
                        <!-- /USER PREVIEW ACTIONS -->
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
