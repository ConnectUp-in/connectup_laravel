@php
$page['title'] = $event->title . ' | ConnectUp';

@endphp

@extends('layouts/app')


@section('content')
    <!-- CONTENT GRID -->
    <div class="content-grid">


        <!-- GRID -->
        <div class="grid grid-9-3 mobile-prefer-content">
            <!-- GRID COLUMN -->
            <div class="grid-column">


                {{-- <!-- SECTION BANNER -->
                <div class="section-banner">
                    <!-- SECTION BANNER ICON -->
                    <img class="section-banner-icon" src="/assets/template/img/banner/newsfeed-icon.png" alt="newsfeed-icon" />
                    <!-- /SECTION BANNER ICON -->

                    <!-- SECTION BANNER TITLE -->
                    <p class="section-banner-title">{{ $event->title }}</p>
                    <!-- /SECTION BANNER TITLE -->

                    <!-- SECTION BANNER TEXT -->
                    <p class="section-banner-text">
                        Check what your friends have been up to!
                    </p>
                    <!-- /SECTION BANNER TEXT -->
                </div>
                <!-- /SECTION BANNER --> --}}


                <article class="post-open event">

                    <!-- POST OPEN BODY -->
                    <div class="post-open-body">
                        <!-- POST OPEN HEADING -->
                        <div class="post-open-heading">
                            <!-- POST OPEN TIMESTAMP -->
                            <p class="post-open-timestamp">
                                Published: <span class="highlighted">
                                    {{ $event->created_at->diffForHumans() }}
                                </span>
                            </p>
                            <!-- /POST OPEN TIMESTAMP -->

                            <!-- POST OPEN TITLE -->
                            <h2 class="post-open-title">
                                {{ $event->title }}
                            </h2>
                            <!-- /POST OPEN TITLE -->

                            <p class="post-open-timestamp mt-4">
                                <span>
                                    <span class="highlighted">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </span>
                                    {{ $event->location }}
                                </span>
                                <span class="float-right">
                                    <span class="highlighted">
                                        <i class="fas fa-history"></i>
                                    </span>{{ $event->updated_at->diffForHumans() }}
                                </span>
                            </p>
                        </div>
                        <!-- /POST OPEN HEADING -->

                        <img class="post-open-image mt-4" src="{{ $event->image }}" alt="{{ $event->title }}"
                            onerror="this.style.display='none'">

                        <!-- POST OPEN CONTENT -->
                        <div class="post-open-content">
                            <!-- POST OPEN CONTENT SIDEBAR -->
                            <div class="post-open-content-sidebar">
                                <!-- USER AVATAR -->
                                <a class="user-avatar small no-outline"
                                    @if ($event->creator_type == 'e') href="{{ route('user', $event->creator->username) }}"
                                @elseif($event->creator_type == 's')
                                    href="{{ route('startup', $event->creator->username) }}" @endif>
                                    <!-- USER AVATAR CONTENT -->
                                    <div class="user-avatar-content">
                                        <!-- HEXAGON -->
                                        <div class="hexagon-image-30-32"
                                            @if ($event->creator_type == 'e') data-src="{{ $event->creator->profile_photo_path }}"
                                            @elseif($event->creator_type == 's')
                                            data-src="{{ $event->creator->logo }}" @endif>

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
                                </a>
                                <!-- /USER AVATAR -->

                                <!-- POST OPEN SIDEBAR TITLE -->
                                <p class="post-open-sidebar-title">Share!</p>
                                <!-- /POST OPEN SIDEBAR TITLE -->

                                <!-- SOCIAL LINKS -->
                                <div class="social-links vertical">

                                    <a class="social-link linkedin"
                                        href="https://www.linkedin.com/shareArticle?mini=true&url=https://connectup.in/event/{{ $event->slug }}&title={{ $event->title }}&source=https://connectup.in">
                                        <svg class="icon-icon">
                                            <use xlink:href="#svg-linkedin"></use>
                                        </svg>
                                    </a>
                                    <a class="social-link whatsapp"
                                        href="whatsapp://send?text=https://connectup.in/event/{{ $event->slug }}">
                                        <svg class="icon-icon">
                                            <use xlink:href="#svg-whatsapp"></use>
                                        </svg>
                                    </a>
                                    <a class="social-link twitter"
                                        href="https://twitter.com/intent/tweet?text=https://connectup.in/event/{{ $event->slug }}&via=connectup">
                                        <svg class="icon-icon">
                                            <use xlink:href="#svg-twitter"></use>
                                        </svg>
                                    </a>

                                </div>
                                <!-- /SOCIAL LINKS -->
                            </div>
                            <!-- /POST OPEN CONTENT SIDEBAR -->

                            <!-- POST OPEN CONTENT BODY -->
                            <div class="post-open-content-body">

                                {!! $event->content !!}



                                <!-- TAG LIST -->
                                <div class="tag-list">
                                    @foreach ($event->tags as $tag)
                                        <a class="tag-item secondary" href="#">{{ $tag }}</a>
                                    @endforeach
                                </div>
                                <!-- /TAG LIST -->

                                <!-- Register Button with Trigger -->
                                <button class="button secondary popup-event-information-trigger ">
                                    Register Now {{ Carbon::parse($event->e_dates[1])->diffForHumans() }}
                                </button>
                            </div>
                            <!-- /POST OPEN CONTENT BODY -->
                        </div>
                        <!-- /POST OPEN CONTENT -->

                    </div>
                    <!-- /POST OPEN BODY -->
                </article>

            </div>
            <!-- /GRID COLUMN -->


            <!-- GRID COLUMN -->
            <div class="grid-column">
                @widget('statbox')
                {{-- @widget('refferal') --}}
            </div>
            <!-- /GRID COLUMN -->
        </div>
        <!-- /GRID -->
    </div>
    <!-- /CONTENT GRID -->



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


        <!-- POPUP EVENT INFO -->
        <div class="popup-event-info">
            <!-- POPUP EVENT TITLE -->
            <p class="popup-event-title">Register for {{ $event->title }}</p>
            <!-- /POPUP EVENT TITLE -->


            <!-- POPUP BOX CONTENT -->
            <div class="popup-box-content">

                <!-- WIDGET BOX -->
                <div class="widget-box">
                    <!-- WIDGET BOX CONTENT -->
                    <div class="widget-box-content">
                        <form class="form">
                            <!-- FORM ROW -->
                            <div class="form-row">
                                <!-- FORM ITEM -->
                                <div class="form-item">
                                    <!-- FORM INPUT -->
                                    <div class="form-input active nocursor">
                                        <label for="name">Your Name</label>
                                        <input type="text" id="name" name="" disabled
                                            value="{{ Auth::user()->name }}" />
                                    </div>
                                    <!-- /FORM INPUT -->
                                </div>
                                <!-- /FORM ITEM -->
                            </div>
                            <!-- /FORM ROW -->


                            <!-- FORM ROW -->
                            <div class="form-row">
                                <!-- FORM ITEM -->
                                <div class="form-item">
                                    <!-- FORM INPUT -->
                                    <div class="form-input active nocursor">
                                        <label for="email">Public Email</label>
                                        <input type="text" id="email" name="" disabled
                                            value="{{ Auth::user()->email }}" />
                                    </div>
                                    <!-- /FORM INPUT -->
                                </div>
                                <!-- /FORM ITEM -->
                            </div>
                            <!-- /FORM ROW -->

                        </form>
                        <!-- /FORM -->

                    </div>
                </div>
            </div>
            <!-- /POPUP BOX CONTENT -->


        </div>
        <!-- /POPUP EVENT INFO -->

    </div>
    <!-- /POPUP EVENT -->
@endsection
