@extends('layouts.guest')

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
            <img class="section-image" src="/assets/template-landing/img/section/01.png" alt="section-image-01">
            <!-- /SECTION IMAGE -->

            <!-- SECTION BUTTON -->
            <a class="section-button button tertiary" href="{{ route('login') }}">Join Now</a>
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
