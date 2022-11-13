@extends('layouts.guest')


@section('content')
    <!-- BANNER WRAP -->
    <div id="top" class="banner-wrap">
        <!-- BANNER -->
        <div class="banner grid-limit">
            <!-- BANNER INFO -->
            <div class="banner-info">

                <!-- BANNER PRETITLE -->
                <p class="banner-pretitle">Welcome To</p>
                <!-- /BANNER PRETITLE -->

                <!-- BANNER TITLE -->
                <p class="banner-title">{{ $blog->title }}</p>
                <!-- /BANNER TITLE -->

                <!-- BANNER TEXT -->
                <p class="banner-text">The next generation Entrepreneurs community! <br>



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

                <div class="blog-content">
                    {!! $blog->content !!}
                </div>
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
    <link href="https://fonts.googleapis.com/css2?family=Lalezar&display=swap" rel="stylesheet">

    <style>
        .banner-wrap {
            background-image: url(https://images.unsplash.com/photo-1579546929518-9e396f3cc809?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxleHBsb3JlLWZlZWR8MXx8fGVufDB8fHx8&w=1000&q=80);
        }

        .banner {
            min-height: 30vh;
        }

        .banner .banner-info {
            padding: 10vh 5vh;
            padding-top: 15vh;
        }

        .banner-info {
            color: #0d1117;
        }

        .banner .banner-pretitle,
        .banner .banner-text,
        .banner .banner-title {
            color: unset;
            /* font-family: Rajdhani; */
        }

        .banner .banner-title {
            font-size: 4.5rem;
            text-align: center;
            text-transform: inherit;
            font-family: 'Lalezar', cursive;
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

        .blog-content {
            color: #fff !important;
            font-size: 1.4em;
        }

        .blog-content p {
            margin-bottom: 0.1em;
            color: #b6b7ce;
            line-height: 1.5;
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
