@extends('layouts.guest')


@section('content')
    <!-- BANNER WRAP -->
    <div id="top" class="banner-wrap">
        <!-- BANNER -->
        <div class="banner grid-limit">
            <!-- BANNER INFO -->
            <div class="banner-info">

                <!-- BANNER PRETITLE -->
                <p class="banner-pretitle">
                    Last Updated: &nbsp;{{ $blog->updated_at->diffForHumans() }}
                </p>
                <!-- /BANNER PRETITLE -->

                <!-- BANNER TITLE -->
                <p class="banner-title">{{ $blog->title }}</p>
                <!-- /BANNER TITLE -->

                <!-- BANNER TEXT -->
                <p class="banner-text">

                    {{ $blog->readtime }} min read &nbsp;|&nbsp; {{ changeIntoKMG(profileview($blog->id)) }} Views

                </p>
                <!-- /BANNER TEXT -->

            </div>
            <!-- /BANNER INFO -->
        </div>
        <!-- /BANNER -->
    </div>
    <!-- /BANNER WRAP -->




    <!-- SECTION WRAP -->
    <div class="section-wrap  dark" id="about">

        <div class="container row">
            <div class="main-container col-md-9">
                <div class="cover-container">
                    <img src="{{ $blog->image }}" alt="cover" class="cover-img" onerror="this.display='none'">
                </div>

                <div class="blog-content">
                    {!! $blog->content !!}
                </div>

                <div class="category-holder">
                    <b>Category:</b>
                    <span class="category-name">
                        <a href="#">
                            {{ $blog->category->name ?? 'No Category selected' }}
                        </a>
                    </span>
                </div>
                <!-- TAG LIST -->
                <div class="tag-holder">
                    @foreach ($blog->tags as $tag)
                        <a class="tag" href="#">{{ $tag }}</a>
                    @endforeach
                </div>
                <!-- /TAG LIST -->
            </div>
            <div class="side-container col-md-3">
                Hey
            </div>
        </div>

    </div>
    <!-- /SECTION WRAP -->
@endsection


@section('styles')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mitr:wght@400;500;600&display=swap" rel="stylesheet">

    <style>
        .banner-wrap {
            background-image: url(https://cdn.wallpapersafari.com/31/2/A7C1GQ.jpg);
        }

        .banner {
            min-height: 30vh;
        }

        .banner .banner-info {
            padding: 10vh 5vh;
            padding-top: 15vh;
        }


        .banner .banner-pretitle {
            text-transform: none;
        }

        .banner .banner-title {
            font-size: 4.5rem;
            text-align: center;
            text-transform: inherit;
            font-family: 'Mitr', sans-serif;
            text-shadow: 0 0 50px #0009;
            margin-top: 0.3em;
        }

        .section-wrap {
            padding: 3em;
        }

        .container {
            width: 90%;
            margin: 0 auto;
            display: flex;
        }

        .main-container {
            width: 70%;
        }

        .side-container {
            width: 30%;
        }

        .cover-container {
            width: 100%;
            overflow: hidden;
            border-radius: 10px;
            margin-bottom: 1em;
        }

        .cover-img {
            width: 100%;
            object-fit: cover;
        }

        .blog-content {
            color: #fff !important;
            font-size: 1.4em;
        }

        .blog-content>* {
            color: #b6b7ce !important;
        }


        .blog-content p {
            margin-bottom: 0.1em;
            line-height: 1.5;
        }

        .category-holder {
            margin-top: 1em 0;
            font-family: Rajdhani, sans-serif;
            color: #b6b7ce;
            font-size: 1.2em;
        }


        .category-name a {
            color: #fff;
            text-decoration: none;
            font-weight: 500
        }

        .tag-holder {
            margin-top: 1em;
            margin-bottom: 1em;
        }

        .tag {
            display: inline-block;
            margin-right: 0.5em;
            margin-bottom: 0.5em;
            padding: 0.5em 1em;
            background-color: #23D2E2;
            border-radius: 10px;
            color: #0d1117;
            text-decoration: none;
            font-weight: 500;
            transition: 0.2s ease;
        }

        .tag:hover {
            cursor: pointer;
            transform: translateY(-3px);
        }

        @media screen and (max-width: 768px) {
            .container {
                flex-direction: column;
            }

            .main-container {
                width: 100%;
            }

            .side-container {
                width: 100%;
            }
        }
    </style>
@endsection
