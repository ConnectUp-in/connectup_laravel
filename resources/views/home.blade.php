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

                    <a class="button" href="/login">Join Now</a>
                    <a class="button" style="cursor:not-allowed" href="#">Register StartUp</a>
                </div>
                <!-- /BUTTON -->
            </div>
            <!-- /BANNER INFO -->
        </div>
        <!-- /BANNER -->
    </div>
    <!-- /BANNER WRAP -->


    {{-- <!-- ARCHITECTURE ITEM LIST -->
    <div class="architecture-item-list">
        <!-- ARCHITECTURE ITEM -->
        <div class="architecture-item">
            <!-- ARCHITECTURE IMAGE -->
            <img class="architecture-image" src="/assets/template-landing/img/architecture/html.png" alt="feature-html">
            <!-- /ARCHITECTURE IMAGE -->

            <!-- ARCHITECTURE IMAGE -->
            <img class="architecture-image-hover" src="/assets/template-landing/img/architecture/html-hover.png"
                alt="feature-html-hover">
            <!-- /ARCHITECTURE IMAGE -->
        </div>
        <!-- /ARCHITECTURE ITEM -->

        <!-- ARCHITECTURE ITEM -->
        <div class="architecture-item">
            <!-- ARCHITECTURE IMAGE -->
            <img class="architecture-image" src="/assets/template-landing/img/architecture/css.png" alt="feature-css">
            <!-- /ARCHITECTURE IMAGE -->

            <!-- ARCHITECTURE IMAGE -->
            <img class="architecture-image-hover" src="/assets/template-landing/img/architecture/css-hover.png"
                alt="feature-css-hover">
            <!-- /ARCHITECTURE IMAGE -->
        </div>
        <!-- /ARCHITECTURE ITEM -->

        <!-- ARCHITECTURE ITEM -->
        <div class="architecture-item">
            <!-- ARCHITECTURE IMAGE -->
            <img class="architecture-image" src="/assets/template-landing/img/architecture/js.png" alt="feature-js">
            <!-- /ARCHITECTURE IMAGE -->

            <!-- ARCHITECTURE IMAGE -->
            <img class="architecture-image-hover" src="/assets/template-landing/img/architecture/js-hover.png"
                alt="feature-js-hover">
            <!-- /ARCHITECTURE IMAGE -->
        </div>
        <!-- /ARCHITECTURE ITEM -->

        <!-- ARCHITECTURE ITEM -->
        <div class="architecture-item">
            <!-- ARCHITECTURE IMAGE -->
            <img class="architecture-image" src="/assets/template-landing/img/architecture/sass.png" alt="feature-sass">
            <!-- /ARCHITECTURE IMAGE -->

            <!-- ARCHITECTURE IMAGE -->
            <img class="architecture-image-hover" src="/assets/template-landing/img/architecture/sass-hover.png"
                alt="feature-sass-hover">
            <!-- /ARCHITECTURE IMAGE -->
        </div>
        <!-- /ARCHITECTURE ITEM -->

        <!-- ARCHITECTURE ITEM -->
        <div class="architecture-item">
            <!-- ARCHITECTURE IMAGE -->
            <img class="architecture-image" src="/assets/template-landing/img/architecture/googlef.png"
                alt="feature-googlef">
            <!-- /ARCHITECTURE IMAGE -->

            <!-- ARCHITECTURE IMAGE -->
            <img class="architecture-image-hover" src="/assets/template-landing/img/architecture/googlef-hover.png"
                alt="feature-googlef-hover">
            <!-- /ARCHITECTURE IMAGE -->
        </div>
        <!-- /ARCHITECTURE ITEM -->
    </div>
    <!-- /ARCHITECTURE ITEM LIST --> --}}



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


    <!-- SECTION WRAP -->
    <div id="benefits" class="section-wrap dark">
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
    <!-- /SECTION WRAP -->


    <!-- PROMO SECTION WRAP -->
    <div class="promo-section-wrap">
        <!-- PROMO SECTION -->
        <section class="promo-section grid-limit">
            <!-- PROMO SECTION INFO -->
            <div class="promo-section-info">
                <!-- PROMO SECTION PRETITLE -->
                <p class="promo-section-pretitle">Features</p>
                <!-- /PROMO SECTION PRETITLE -->

                <!-- PROMO SECTION TITLE -->
                <h2 class="promo-section-title">Super Complete Profile<br>&amp; Newsfeed Pages</h2>
                <!-- /PROMO SECTION TITLE -->

                <!-- PROMO SECTION TEXT -->
                <p class="promo-section-text">We created a super complete profile page with a sleek design and a slider
                    for easier access to all profile sections. Inside the profile you'll find the following sections:
                    about, timeline, friends, groups, photos, videos, badges, stream, posts, discussions &amp; store.
                </p>
                <!-- /PROMO SECTION TEXT -->
            </div>
            <!-- /PROMO SECTION INFO -->

            <!-- PROMO SECTION IMAGE -->
            <img class="promo-section-image" src="/assets/template-landing/img/section/02.png" alt="section-image-02">
            <!-- /PROMO SECTION IMAGE -->
        </section>
        <!-- /PROMO SECTION -->
    </div>
    <!-- /PROMO SECTION WRAP -->

    <!-- PROMO SECTION WRAP -->
    <div class="promo-section-wrap">
        <!-- PROMO SECTION -->
        <section class="promo-section inverted grid-limit">
            <!-- PROMO SECTION INFO -->
            <div class="promo-section-info">
                <!-- PROMO SECTION PRETITLE -->
                <p class="promo-section-pretitle">Features</p>
                <!-- /PROMO SECTION PRETITLE -->

                <!-- PROMO SECTION TITLE -->
                <h2 class="promo-section-title">Profile Posts Templates<br>+ Post Reactions!</h2>
                <!-- /PROMO SECTION TITLE -->

                <!-- PROMO SECTION TEXT -->
                <p class="promo-section-text">We designed several variations of posts templates to show a wide range of
                    uses, like messages, pinned, 2 versions of links, shared post, blog post, photos and more!.</p>
                <!-- /PROMO SECTION TEXT -->

                <!-- PROMO SECTION TEXT -->
                <p class="promo-section-text">We also included in the template 8 different reaction emoticons, designed
                    by us specifically for this!</p>
                <!-- /PROMO SECTION TEXT -->
            </div>
            <!-- /PROMO SECTION INFO -->

            <!-- PROMO SECTION IMAGE -->
            <img class="promo-section-image" src="/assets/template-landing/img/section/03.png" alt="section-image-03">
            <!-- /PROMO SECTION IMAGE -->
        </section>
        <!-- /PROMO SECTION -->
    </div>
    <!-- /PROMO SECTION WRAP -->

    <!-- PROMO SECTION WRAP -->
    <div class="promo-section-wrap">
        <!-- PROMO SECTION -->
        <section class="promo-section grid-limit">
            <!-- PROMO SECTION INFO -->
            <div class="promo-section-info">
                <!-- PROMO SECTION PRETITLE -->
                <p class="promo-section-pretitle">Features</p>
                <!-- /PROMO SECTION PRETITLE -->

                <!-- PROMO SECTION TITLE -->
                <h2 class="promo-section-title">Groups Timeline<br>&amp; Pages</h2>
                <!-- /PROMO SECTION TITLE -->

                <!-- PROMO SECTION TEXT -->
                <p class="promo-section-text">Besides the common profile page, we also included a group page timeline,
                    and other pages, like group events or browse groups, with 3 diferent group views.</p>
                <!-- /PROMO SECTION TEXT -->
            </div>
            <!-- /PROMO SECTION INFO -->

            <!-- PROMO SECTION IMAGE -->
            <img class="promo-section-image" src="/assets/template-landing/img/section/04.png" alt="section-image-04">
            <!-- /PROMO SECTION IMAGE -->
        </section>
        <!-- /PROMO SECTION -->
    </div>
    <!-- /PROMO SECTION WRAP -->

    <!-- PROMO SECTION WRAP -->
    <div class="promo-section-wrap">
        <!-- PROMO SECTION -->
        <section class="promo-section inverted grid-limit">
            <!-- PROMO SECTION INFO -->
            <div class="promo-section-info">
                <!-- PROMO SECTION PRETITLE -->
                <p class="promo-section-pretitle">Features</p>
                <!-- /PROMO SECTION PRETITLE -->

                <!-- PROMO SECTION TITLE -->
                <h2 class="promo-section-title">Gamification with<br>Badges &amp; Quests!</h2>
                <!-- /PROMO SECTION TITLE -->

                <!-- PROMO SECTION TEXT -->
                <p class="promo-section-text">To add a gamification element to the community, we designed two ways of
                    having fun: one is collecting badges and the other is completing quests. All elements (36 badges,
                    each one with big and small versions, and the quest coins) were designed by us for this template and
                    are included in the pack!</p>
                <!-- /PROMO SECTION TEXT -->

                <!-- PROMO SECTION TEXT -->
                <p class="promo-section-text">Also, all badges and coin elements were made with PS vectors, so you can
                    customize them with just a few clicks!</p>
                <!-- /PROMO SECTION TEXT -->
            </div>
            <!-- /PROMO SECTION INFO -->

            <!-- PROMO SECTION IMAGE -->
            <img class="promo-section-image" src="/assets/template-landing/img/section/05.png" alt="section-image-05">
            <!-- /PROMO SECTION IMAGE -->
        </section>
        <!-- /PROMO SECTION -->
    </div>
    <!-- /PROMO SECTION WRAP -->

    <!-- PROMO SECTION WRAP -->
    <div class="promo-section-wrap">
        <!-- PROMO SECTION -->
        <section class="promo-section grid-limit">
            <!-- PROMO SECTION INFO -->
            <div class="promo-section-info">
                <!-- PROMO SECTION PRETITLE -->
                <p class="promo-section-pretitle">Features</p>
                <!-- /PROMO SECTION PRETITLE -->

                <!-- PROMO SECTION TITLE -->
                <h2 class="promo-section-title">Overview<br>and Statistics Page</h2>
                <!-- /PROMO SECTION TITLE -->

                <!-- PROMO SECTION TEXT -->
                <p class="promo-section-text">We designed this overview section to showcase main stats about your
                    profile, gamification and account analytics. Inside you’ll find info like account level and
                    experience, activity, most liked post, reaction stats, montlhy reports and much more!</p>
                <!-- /PROMO SECTION TEXT -->
            </div>
            <!-- /PROMO SECTION INFO -->

            <!-- PROMO SECTION IMAGE -->
            <img class="promo-section-image" src="/assets/template-landing/img/section/06.png" alt="section-image-06">
            <!-- /PROMO SECTION IMAGE -->
        </section>
        <!-- /PROMO SECTION -->
    </div>
    <!-- /PROMO SECTION WRAP -->

    <!-- PROMO SECTION WRAP -->
    <div class="promo-section-wrap">
        <!-- PROMO SECTION -->
        <section class="promo-section inverted grid-limit">
            <!-- PROMO SECTION INFO -->
            <div class="promo-section-info">
                <!-- PROMO SECTION PRETITLE -->
                <p class="promo-section-pretitle">Features</p>
                <!-- /PROMO SECTION PRETITLE -->

                <!-- PROMO SECTION TITLE -->
                <h2 class="promo-section-title">Streams<br>&amp; Events Pages</h2>
                <!-- /PROMO SECTION TITLE -->

                <!-- PROMO SECTION TEXT -->
                <p class="promo-section-text">Keep in touch and interact with the community! We designed a streams
                    page where people browse all members streams. We also created a really complete events page with
                    monthly, weekly and daily calendars, plus events boxes.</p>
                <!-- /PROMO SECTION TEXT -->
            </div>
            <!-- /PROMO SECTION INFO -->

            <!-- PROMO SECTION IMAGE -->
            <img class="promo-section-image" src="/assets/template-landing/img/section/07.png" alt="section-image-07">
            <!-- /PROMO SECTION IMAGE -->
        </section>
        <!-- /PROMO SECTION -->
    </div>
    <!-- /PROMO SECTION WRAP -->

    <!-- PROMO SECTION WRAP -->
    <div class="promo-section-wrap">
        <!-- PROMO SECTION -->
        <section class="promo-section grid-limit">
            <!-- PROMO SECTION INFO -->
            <div class="promo-section-info">
                <!-- PROMO SECTION PRETITLE -->
                <p class="promo-section-pretitle">Features</p>
                <!-- /PROMO SECTION PRETITLE -->

                <!-- PROMO SECTION TITLE -->
                <h2 class="promo-section-title">Forums<br>&amp; Marketplace Pages</h2>
                <!-- /PROMO SECTION TITLE -->

                <!-- PROMO SECTION TEXT -->
                <p class="promo-section-text">Besides the profile pages, we created a forum so people can open
                    discussions and share about the things they are most passionate about!</p>
                <!-- /PROMO SECTION TEXT -->

                <!-- PROMO SECTION TEXT -->
                <p class="promo-section-text">We also designed super complete marketplace pages, thought for people to
                    sell their creations. The design includes main item page, category, market home, statement,
                    dashboard and more! </p>
                <!-- /PROMO SECTION TEXT -->
            </div>
            <!-- /PROMO SECTION INFO -->

            <!-- PROMO SECTION IMAGE -->
            <img class="promo-section-image" src="/assets/template-landing/img/section/08.png" alt="section-image-08">
            <!-- /PROMO SECTION IMAGE -->
        </section>
        <!-- /PROMO SECTION -->
    </div>
    <!-- /PROMO SECTION WRAP -->

    <!-- PROMO SECTION WRAP -->
    <div class="promo-section-wrap">
        <!-- PROMO SECTION -->
        <section class="promo-section inverted grid-limit">
            <!-- PROMO SECTION INFO -->
            <div class="promo-section-info">
                <!-- PROMO SECTION PRETITLE -->
                <p class="promo-section-pretitle">Features</p>
                <!-- /PROMO SECTION PRETITLE -->

                <!-- PROMO SECTION TITLE -->
                <h2 class="promo-section-title">Super Complete<br>Account Hub Pages</h2>
                <!-- /PROMO SECTION TITLE -->

                <!-- PROMO SECTION TEXT -->
                <p class="promo-section-text">We created an account hub with all the important info pages you might
                    need, like profile and account info, social networking, general settings, manage groups, items and
                    complete store stats including statements, earnings reports and much more!</p>
                <!-- /PROMO SECTION TEXT -->
            </div>
            <!-- /PROMO SECTION INFO -->

            <!-- PROMO SECTION IMAGE -->
            <img class="promo-section-image" src="/assets/template-landing/img/section/09.png" alt="section-image-09">
            <!-- /PROMO SECTION IMAGE -->
        </section>
        <!-- /PROMO SECTION -->
    </div>
    <!-- /PROMO SECTION WRAP -->

    <!-- SECTION WRAP -->
    <div class="section-wrap">
        <!-- SECTION -->
        <section class="section grid-limit">
            <!-- SECTION INFO -->
            <div class="section-info">
                <!-- SECTION PRETITLE -->
                <p class="section-pretitle">Features</p>
                <!-- /SECTION PRETITLE -->

                <!-- SECTION TITLE -->
                <h2 class="section-title">Illustrations and Icons Included!</h2>
                <!-- /SECTION TITLE -->

                <!-- SECTION TEXT -->
                <p class="section-text">Yes! All illustrations like the one in the landing, the people illustrations,
                    the badges, all the banners, forum icons and more were designed for this template by us and are all
                    included in the PSD folder of the pack! We also included all icons in SVG and PS vectors!</p>
                <!-- /SECTION TEXT -->
            </div>
            <!-- /SECTION INFO -->

            <!-- SECTION IMAGE -->
            <img class="section-image" src="/assets/template-landing/img/section/10.png" alt="section-image-10">
            <!-- /SECTION IMAGE -->
        </section>
        <!-- /SECTION -->
    </div>
    <!-- /SECTION WRAP -->
@endsection
