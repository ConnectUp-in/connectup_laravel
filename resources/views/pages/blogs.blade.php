@php
    $page['title'] = 'Blogs | ConnectUp - Connecting the Dots...';
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

        {{-- <!-- SECTION FILTERS BAR -->
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

                    <!-- FORM SELECT -->
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
                    <!-- /FORM SELECT -->
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

            <!-- SECTION FILTERS BAR ACTIONS -->
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
            <!-- /SECTION FILTERS BAR ACTIONS -->
        </div>
        <!-- /SECTION FILTERS BAR --> --}}



        <!-- SECTION FILTERS BAR -->
        <div class="section-filters-bar ">

            <center style="width: 100%">
                <h3>Blogs</h3>
            </center>
        </div>
        <!-- /SECTION FILTERS BAR -->
        <!-- GRID -->
        <div class="grid grid-4-4-4 centered">

            @forelse ($blogs as $blog)
                <!-- POST PREVIEW -->
                <div class="post-preview">
                    <!-- POST PREVIEW IMAGE -->
                    <figure class="post-preview-image liquid">
                        <img src="{{ $blog->image }}" alt="cover-19" />
                    </figure>
                    <!-- /POST PREVIEW IMAGE -->

                    <!-- POST PREVIEW INFO -->
                    <div class="post-preview-info fixed-height">
                        <!-- POST PREVIEW INFO TOP -->
                        <div class="post-preview-info-top">
                            <!-- POST PREVIEW TIMESTAMP -->
                            <p class="post-preview-timestamp">{{ $blog->updated_at->diffForHumans() }}</p>
                            <!-- /POST PREVIEW TIMESTAMP -->

                            <!-- POST PREVIEW TITLE -->
                            <p class="post-preview-title">
                                <a style="color:#fff" href="{{ route('blog', $blog->slug) }}">{{ $blog->title }}</a>
                            </p>
                            <!-- /POST PREVIEW TITLE -->
                        </div>
                        <!-- /POST PREVIEW INFO TOP -->

                        <!-- POST PREVIEW INFO BOTTOM -->
                        <div class="post-preview-info-bottom">
                            <!-- POST PREVIEW TEXT -->
                            <p class="post-preview-text">
                                {{-- {{ html2text($blog->content) }} --}}
                                {{ Str::limit(html2text($blog->content), 280) }}
                            </p>
                            <!-- /POST PREVIEW TEXT -->

                            <!-- POST PREVIEW LINK -->
                            <a class="post-preview-link" href="{{ route('blog', $blog->slug) }}">Read more...</a>
                            <!-- /POST PREVIEW LINK -->
                        </div>
                        <!-- /POST PREVIEW INFO BOTTOM -->
                    </div>
                    <!-- /POST PREVIEW INFO -->

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
                                            src="assets/template/img/reaction/wow.png" alt="reaction-wow" />
                                        <!-- /REACTION IMAGE -->

                                        <!-- SIMPLE DROPDOWN -->
                                        <div class="simple-dropdown padded reaction-item-dropdown">
                                            <!-- SIMPLE DROPDOWN TEXT -->
                                            <p class="simple-dropdown-text">
                                                <img class="reaction" src="assets/template/img/reaction/wow.png"
                                                    alt="reaction-wow" />
                                                <span class="bold">Wow</span>
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
                                            src="assets/template/img/reaction/happy.png" alt="reaction-happy" />
                                        <!-- /REACTION IMAGE -->

                                        <!-- SIMPLE DROPDOWN -->
                                        <div class="simple-dropdown padded reaction-item-dropdown">
                                            <!-- SIMPLE DROPDOWN TEXT -->
                                            <p class="simple-dropdown-text">
                                                <img class="reaction" src="assets/template/img/reaction/happy.png"
                                                    alt="reaction-happy" />
                                                <span class="bold">Happy</span>
                                            </p>
                                            <!-- /SIMPLE DROPDOWN TEXT -->

                                            <!-- SIMPLE DROPDOWN TEXT -->
                                            <p class="simple-dropdown-text">
                                                Jett Spiegel
                                            </p>
                                            <!-- /SIMPLE DROPDOWN TEXT -->

                                            <!-- SIMPLE DROPDOWN TEXT -->
                                            <p class="simple-dropdown-text">
                                                Jane Rodgers
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
                                            src="assets/template/img/reaction/like.png" alt="reaction-like" />
                                        <!-- /REACTION IMAGE -->

                                        <!-- SIMPLE DROPDOWN -->
                                        <div class="simple-dropdown padded reaction-item-dropdown">
                                            <!-- SIMPLE DROPDOWN TEXT -->
                                            <p class="simple-dropdown-text">
                                                <img class="reaction" src="assets/template/img/reaction/like.png"
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
                                                <span class="bold">and 7 more...</span>
                                            </p>
                                            <!-- /SIMPLE DROPDOWN TEXT -->
                                        </div>
                                        <!-- /SIMPLE DROPDOWN -->
                                    </div>
                                    <!-- /REACTION ITEM -->
                                </div>
                                <!-- /REACTION ITEM LIST -->

                                <!-- META LINE TEXT -->
                                <p class="meta-line-text">0</p>
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
                                <a class="meta-line-link" href="{{ route('blog', $blog->slug) }}#comments">0 Comments</a>
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
                <!-- /POST PREVIEW -->
            @empty
                <div class="post-preview">
                    <div class="post-preview-text">
                        <p class="text-header">No Posts Found</p>
                    </div>
                </div>
            @endforelse
        </div>
        <!-- /GRID -->
    </div>
    <!-- /CONTENT GRID -->
@endsection
