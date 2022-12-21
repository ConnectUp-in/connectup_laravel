@extends('layouts.guest')

@section('styles')
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />

    <!-- Demo styles -->
    <style>
        .swiper {
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .swiper-slide {
            max-height: 90px;
            /* text-align: center;
                                                                                                                            font-size: 18px;
                                                                                                                            background: #fff; */

            /* Center slide text vertically */
            display: -webkit-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-align-items: center;
            align-items: center;
        }

        .swiper-slide img {
            height: 90px;
            object-fit: cover;
        }

        .swiper-wrapper {
            width: auto;
        }

        @media (max-width: 768px) {
            .swiper-wrapper {
                width: 100%;
            }
        }
    </style>
@endsection

@section('content')
    <!-- BANNER WRAP -->
    <div id="top" class="banner-wrap">
        <!-- BANNER -->
        <div class="banner grid-limit">
            <!-- BANNER INFO -->
            <div class="banner-info">
                {{-- <!-- BANNER IMAGE -->
                <img class="banner-image" src="/assets/template-landing/img/banner/banner-tag.png" alt="HTML Version">
                <!-- /BANNER IMAGE --> --}}

                <!-- BANNER PRETITLE -->
                <p class="banner-pretitle">Welcome To</p>
                <!-- /BANNER PRETITLE -->

                <!-- BANNER TITLE -->
                <p class="banner-title">ConnectUp</p>
                <!-- /BANNER TITLE -->

                <!-- BANNER TEXT -->
                <p class="banner-text">The next generation Entrepreneurs community! <br>
                    {{-- Platform that brings together startups, entrepreneurs, investors, and friends to come together to 
                    share ideas, and discuss opportunities for collaboration. --}}


                </p>
                <!-- /BANNER TEXT -->

                <!-- BUTTON -->
                <div>

                    <a class="button" href="{{ route('join.member') }}">Join Community</a>
                    <a class="button" style="cursor:not-allowed" href="#">Register StartUp</a>
                </div>
                <!-- /BUTTON -->
            </div>
            <!-- /BANNER INFO -->
        </div>
        <!-- /BANNER -->
    </div>
    <!-- /BANNER WRAP -->




    <!-- SECTION WRAP -->
    <div class="section-wrap dark" id="about">

        <!-- SECTION -->
        <section class="section grid-limit">
            <!-- SECTION INFO -->
            <div class="section-info">
                <!-- SECTION PRETITLE -->
                <p class="section-pretitle">What we are</p>
                <!-- /SECTION PRETITLE -->

                <!-- SECTION TITLE -->
                <h2 class="section-title">About ConnectUp</h2>
                <!-- /SECTION TITLE -->

                <!-- SECTION TEXT -->
                <p class="section-text">ConnectUp is a Centralized Startup Networking Platform that brings together
                    startups, entrepreneurs, investors, and friends to come together to share ideas, and discuss
                    opportunities for collaboration. .
                    We are building the largest network of incubators, mentors, investors, and startups</p>
                <!-- /SECTION TEXT -->
            </div>
            <!-- /SECTION INFO -->

            <!-- SECTION IMAGE -->
            <img class="section-image" src="/assets/template-landing/img/section/01.webp" height="auto" width="100%"
                alt="ConnectUp Screenshot">
            <!-- /SECTION IMAGE -->

            <!-- SECTION BUTTON -->
            <a class="section-button button tertiary" href="{{ route('login') }}">Join Now</a>
            <!-- /SECTION BUTTON -->
        </section>
        <!-- /SECTION -->
    </div>
    <!-- /SECTION WRAP -->


    <!-- SECTION WRAP -->
    <div class="section-wrap dark" id="partners">
        <!-- SECTION -->
        <section class="section grid-limit">
            <!-- SECTION INFO -->
            <div class="section-info">
                <!-- SECTION PRETITLE -->
                <p class="section-pretitle">Our Lovely</p>
                <!-- /SECTION PRETITLE -->

                <!-- SECTION TITLE -->
                <h2 class="section-title">Partners</h2>
                <!-- /SECTION TITLE -->

                <!-- SECTION TEXT -->
                {{-- <p class="section-text">Articles and Blogs, just for you</p> --}}
                <!-- /SECTION TEXT -->
            </div>
            <!-- /SECTION INFO -->
            <!-- Swiper -->
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <a href="https://bnest.in/" target="_blank">
                            <img src="/assets/defaults/partners/bnest.webp" height="90px" width="auto"
                                alt="Bnest Incubation Partner">
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="http://ahoy.twilio.com/startup" target="_blank">
                            <img src="/assets/defaults/partners/twillio.webp" height="90px" width="auto"
                                alt="Twillio Customer Engagement Partner">
                        </a>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>

        </section>
        <!-- /SECTION -->
    </div>
    <!-- /SECTION WRAP -->


    <!-- SECTION WRAP -->
    <div class="section-wrap dark" id="blogs">
        <!-- SECTION -->
        <section class="section grid-limit">
            <!-- SECTION INFO -->
            <div class="section-info">
                <!-- SECTION PRETITLE -->
                <p class="section-pretitle"></p>
                <!-- /SECTION PRETITLE -->

                <!-- SECTION TITLE -->
                <h2 class="section-title">Latest Blogs</h2>
                <!-- /SECTION TITLE -->

                <!-- SECTION TEXT -->
                <p class="section-text">Articles and Blogs, just for you</p>
                <!-- /SECTION TEXT -->
            </div>
            <!-- /SECTION INFO -->

            <div class="grid grid-4-4-4 centered">

                @forelse ($blogs as $blog)
                    <!-- POST PREVIEW -->
                    <div class="post-preview">
                        <!-- POST PREVIEW IMAGE -->
                        <figure class="post-preview-image liquid">
                            <img src="{{ $blog->image_compressed }}" onerror="this.src='{{ $blog->image }}'"
                                alt="cover-19" />
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
                                    <a style="color:#fff" href="{{ route('blog', $blog->slug) }}">
                                        {{ Str::limit($blog->title, 60) }}</a>
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

                    </div>
                    <!-- /POST PREVIEW -->
                @empty
                    <div class="post-preview">
                        <div class="post-preview-text">
                            <p class="text-header">No Blogs Found</p>
                        </div>
                    </div>
                @endforelse
            </div>

            <!-- SECTION BUTTON -->
            <a class="section-button button tertiary" href="{{ route('blogs') }}">More Blogs...</a>
            <!-- /SECTION BUTTON -->
        </section>
        <!-- /SECTION -->
    </div>
    <!-- /SECTION WRAP -->

    <!-- SECTION WRAP -->
    <div class="section-wrap dark" id="events">
        <!-- SECTION -->
        <section class="section grid-limit">
            <!-- SECTION INFO -->
            <div class="section-info">
                <!-- SECTION PRETITLE -->
                <p class="section-pretitle"></p>
                <!-- /SECTION PRETITLE -->

                <!-- SECTION TITLE -->
                <h2 class="section-title">Recent Events</h2>
                <!-- /SECTION TITLE -->

                <!-- SECTION TEXT -->
                <p class="section-text"> Events going on around you, so you can't miss anything.</p>
                <!-- /SECTION TEXT -->
            </div>
            <!-- /SECTION INFO -->

            <!-- GRID -->
            <div class="grid grid-3-3-3-3 centered">

                @foreach ($events as $event)
                    <!-- EVENT PREVIEW -->
                    <div class="event-preview">
                        <!-- EVENT PREVIEW COVER -->
                        <figure class="event-preview-cover liquid">
                            <img src="{{ $event->image_compressed }}" onerror="this.src='{{ $event->image }}'"
                                alt="cover-47" />
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
                                <a href="{{ route('event', $event->slug) }}" class="button white white-secondary">
                                    View Event
                                </a>
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

            <!-- SECTION BUTTON -->
            <a class="section-button button tertiary" href="{{ route('events') }}">More Events...</a>
            <!-- /SECTION BUTTON -->
        </section>
        <!-- /SECTION -->
    </div>
    <!-- /SECTION WRAP -->


    {{-- <!-- SECTION WRAP -->
    <div id="benefits" class="section-wrap">
        <!-- SECTION -->
        <section class="section grid-limit">
            <!-- SECTION INFO -->
            <div class="section-info">
                <!-- SECTION PRETITLE -->
                <p class="section-pretitle">What you'll get</p>
                <!-- /SECTION PRETITLE -->

                <!-- SECTION TITLE -->
                <h2 class="section-title">Benefits & Perks</h2>
                <!-- /SECTION TITLE -->

                <!-- SECTION TEXT -->
                <p class="section-text">Read here about all the cool features and sections that the template includes!
                    We made sure that the template is easy to customize including Google Fonts, Help Documentation, PSD
                    Files, Custom Icons and more!</p>
                <!-- /SECTION TEXT -->
            </div>
            <!-- /SECTION INFO -->

            <!-- GRID -->
            <div class="grid grid-4">


                <?php
                
                $benefits = [
                    [
                        'title' => 'Networking Sessions',
                        'text' => 'We included in the pack HTML, CSS and JS files for you to customize them all you like! (Photos not included).',
                        'image' => '/assets/template-landing/img/feature/html5.png',
                    ],
                    [
                        'title' => 'Fundraising Opportunities',
                        'text' => 'We made the template compatible with Bootstrap v4.4.1, and ensured that there are no style conflicts.',
                        'image' => '/assets/template-landing/img/feature/bootstrap.png',
                    ],
                    [
                        'title' => 'Product Testing',
                        'text' => 'We included in the pack 56 Photoshop PSD files for you to customize them all you like! (Photos not included).',
                        'image' => '/assets/template-landing/img/feature/psd.png',
                    ],
                    [
                        'title' => 'Idea Validation',
                        'text' => 'Easily customize styles by using variables, nesting, mixins, inheritance and more!',
                        'image' => '/assets/template-landing/img/feature/sass.png',
                    ],
                    [
                        'title' => 'Mentoring Sessions',
                        'text' => "You'll find inside the PSD files all illustrations, like the forum icons, badges, banners and more!",
                        'image' => '/assets/template-landing/img/feature/illustrations.png',
                    ],
                    [
                        'title' => 'Early Userbase',
                        'text' => 'Includes a preconfigured version using npm &amp; Grunt, just start customizing and let them do the work!',
                        'image' => '/assets/template-landing/img/feature/npmgrunt.png',
                    ],
                    [
                        'title' => 'Rewards &amp; Badges',
                        'text' => "Inside the pack you'll find custom SVG icons made for this template! Easily change things like color via code!",
                        'image' => '/assets/template-landing/img/feature/svg.png',
                    ],
                    [
                        'title' => 'Accelerator Kits',
                        'text' => 'template is fully responsive so you can easily browse it from any device: desktop, tablets and smartphones.',
                        'image' => '/assets/template-landing/img/feature/responsive.png',
                    ],
                    [
                        'title' => 'Offline Meetups',
                        'text' => "Inside the documentation file you'll find help to guide you with all the features and plugins included.",
                        'image' => '/assets/template-landing/img/feature/documentation.png',
                    ],
                ];
                
                ?>


                @foreach ($benefits as $b)
                    <article class="feature-item">
                        <!-- FEATURE ITEM IMAGE -->
                        <img class="feature-item-image" src="{{ $b['image'] }}">
                        <!-- /FEATURE ITEM IMAGE -->

                        <!-- FEATURE ITEM TITLE -->
                        <h2 class="feature-item-title">{!! $b['title'] !!}</h2>
                        <!-- /FEATURE ITEM TITLE -->

                        <!-- FEATURE ITEM TEXT -->
                        <p class="feature-item-text">
                            {{ $b['text'] }}
                        </p>
                        <!-- /FEATURE ITEM TEXT -->
                    </article>
                @endforeach
                <!-- /FEATURE ITEM -->
            </div>
            <!-- /GRID -->
        </section>
        <!-- /SECTION -->
    </div>
    <!-- /SECTION WRAP --> --}}
@endsection

@section('scripts')
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        // Responsive breakpoints
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 3,
            spaceBetween: 30,
            freeMode: true,
            breakpoints: {
                320: {
                    slidesPerView: 1,
                    spaceBetween: 10,
                },
                480: {
                    slidesPerView: 1,
                    spaceBetween: 20,
                },
                640: {
                    slidesPerView: 3,
                    spaceBetween: 30,
                },
            },
        });
    </script>
@endsection
