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
        <div class="grid grid-3-3-3-3 centered">

            @foreach ($events as $event)
                <!-- EVENT PREVIEW -->
                <div class="event-preview">
                    <!-- EVENT PREVIEW COVER -->
                    <figure class="event-preview-cover liquid">
                        <img src="{{ $event->image }}" alt="cover-47" />
                    </figure>
                    <!-- /EVENT PREVIEW COVER -->

                    <!-- EVENT PREVIEW INFO -->
                    <div class="event-preview-info">
                        <!-- EVENT PREVIEW INFO TOP -->
                        <div class="event-preview-info-top">
                            <!-- DATE STICKER -->
                            <div class="date-sticker">
                                <!-- DATE STICKER DAY -->
                                <p class="date-sticker-day">
                                    {{ Carbon::parse($event->e_dates[0])->format('d') }}
                                </p>
                                <!-- /DATE STICKER DAY -->

                                <!-- DATE STICKER MONTH -->
                                <p class="date-sticker-month">
                                    {{ Carbon::parse($event->e_dates[0])->format('M') }}
                                </p>
                                <!-- /DATE STICKER MONTH -->
                            </div>
                            <!-- /DATE STICKER -->

                            <!-- EVENT PREVIEW TITLE -->
                            <p class="event-preview-title popup-event-information-trigger">
                                {{ $event->title }}
                            </p>
                            <!-- /EVENT PREVIEW TITLE -->

                            <!-- EVENT PREVIEW TIMESTAMP -->
                            <p class="event-preview-timestamp">
                                {{ Carbon::parse($event->e_dates[0])->format('g:i A') }}


                                <span class="float-right">
                                    <i class="fa fa-eye"></i>

                                    {{ changeIntoKMG(profileview($event->id)) }}
                                </span>

                            </p>
                            <!-- /EVENT PREVIEW TIMESTAMP -->

                            {{-- <!-- EVENT PREVIEW TEXT -->
                            <p class="event-preview-text">
                                Hi Neko! I'm creating this event to invite you
                                to have breakfast before work. Meet me at
                                Coffebucks.
                            </p>
                            <!-- /EVENT PREVIEW TEXT --> --}}
                        </div>
                        <!-- /EVENT PREVIEW INFO TOP -->

                        <!-- EVENT PREVIEW INFO BOTTOM -->
                        <div class="event-preview-info-bottom">
                            <!-- DECORATED TEXT -->
                            <div class="decorated-text">
                                <!-- DECORATED TEXT ICON -->
                                <svg class="decorated-text-icon icon-pin">
                                    <use xlink:href="#svg-pin"></use>
                                </svg>
                                <!-- /DECORATED TEXT ICON -->

                                <!-- DECORATED TEXT CONTENT -->
                                <p class="decorated-text-content">
                                    {{ $event->location }}
                                </p>
                                <!-- /DECORATED TEXT CONTENT -->



                            </div>
                            <!-- /DECORATED TEXT -->

                            {{-- <!-- META LINE -->
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
                                            <div class="hexagon-image-18-20" data-src="/assets/template/img/avatar/05.jpg">
                                            </div>
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
                                            <div class="hexagon-image-18-20" data-src="/assets/template/img/avatar/01.jpg">
                                            </div>
                                            <!-- /HEXAGON -->
                                        </div>
                                        <!-- /USER AVATAR CONTENT -->
                                    </div>
                                    <!-- /USER AVATAR -->
                                </div>
                                <!-- /META LINE LIST -->

                                <!-- META LINE TEXT -->
                                <p class="meta-line-text">will assist</p>
                                <!-- /META LINE TEXT -->
                            </div>
                            <!-- /META LINE --> --}}

                            <!-- BUTTON -->
                            <p class="button white white-secondary">
                                View Event
                            </p>
                            <!-- /BUTTON -->
                        </div>
                        <!-- /EVENT PREVIEW INFO BOTTOM -->
                    </div>
                    <!-- /EVENT PREVIEW INFO -->
                </div>
                <!-- /EVENT PREVIEW -->
            @endforeach
        </div>
        <!-- /GRID -->
    </div>
    <!-- /CONTENT GRID -->
@endsection
