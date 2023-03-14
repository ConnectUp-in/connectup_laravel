@php
    $page['title'] = $blog->title . ' | ConnectUp';
    $page['description'] = preg_replace("/\n\s+/", "\n", rtrim(html_entity_decode(strip_tags($blog->content))));
    $page['image'] = $blog->image ?? '';
    
@endphp
{{-- 
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

                @ad('display-horizontal')

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
                @ad('display-square')

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
            font-size: 4rem;
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

            .section-wrap {
                padding: 2em 0;
            }

            .banner .banner-info {
                padding: 10vh 0;
                padding-top: 15vh;
            }

            .banner .banner-title {
                font-size: 2.5em;
            }

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
@endsection --}}


@extends('layouts.home')


@section('content')
    <section class="wrapper image-wrapper bg-image bg-overlay text-white"
        data-image-src="/assets/home/assets/img/photos/bg{{ rand(14, 26) }}.png">
        <div class="container pt-12 pb-9 pt-md-15 pb-md-13 text-center">
            <div class="row">
                <div class="col-md-10 col-xl-8 mx-auto">
                    <div class="post-header">
                        <div class="post-category text-line text-white">
                            <a href="#" class="text-reset" rel="category">{{ $blog->category->name }}</a>
                        </div>
                        <!-- /.post-category -->
                        <h1 class="display-1 mb-4 text-white">{{ $blog->title }}</h1>
                        <ul class="post-meta text-white">
                            <li class="post-date"><i
                                    class="uil uil-calendar-alt"></i><span>{{ $blog->created_at->diffForHumans() }}</span>
                            </li>
                            <li class="post-author"><i class="uil uil-user"></i><a
                                    href="{{ route('user', $blog->creator->username) }}" class="text-reset"><span>By
                                        {{ $blog->creator->name }}</span></a></li>
                            {{-- <li class="post-comments"><i class="uil uil-comment"></i><a href="#"
                                    class="text-reset">3<span> Comments</span></a></li> --}}
                            <li class="post-likes"><i
                                    class="uil uil-eye"></i>{{ changeIntoKMG(profileview($blog->id)) }}<span>
                                    Views</span></li>
                        </ul>
                        <!-- /.post-meta -->
                    </div>
                    <!-- /.post-header -->
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-light">
        <div class="container py-14 py-md-16">
            <div class="row gx-lg-8 gx-xl-12">
                <div class="col-lg-8">
                    <div class="blog single">
                        <div class="card">
                            <figure class="card-img-top"><img src="{{ $blog->image }}" alt="" />
                            </figure>
                            @ad('display-horizontal')
                            <div class="card-body">
                                <div class="classic-view">
                                    <article class="post">
                                        <div class="post-content mb-5">
                                            {!! $blog->content !!}
                                        </div>
                                        <!-- /.post-content -->
                                        <div
                                            class="post-footer d-md-flex flex-md-row justify-content-md-between align-items-center mt-8">
                                            <div>
                                                <ul class="list-unstyled tag-list mb-0">
                                                    @foreach ($blog->tags as $tag)
                                                        <li><a href="#"
                                                                class="btn btn-soft-ash btn-sm rounded-pill mb-0">{{ $tag }}</a>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                            <div class="mb-0 mb-md-2">
                                                <div class="dropdown share-dropdown btn-group">
                                                    <button
                                                        class="btn btn-sm btn-red rounded-pill btn-icon btn-icon-start dropdown-toggle mb-0 me-0"
                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i class="uil uil-share-alt"></i> Share </button>
                                                    <div class="dropdown-menu">

                                                        <a class="dropdown-item"
                                                            href="{{ shareLink('linkedin', route('blog', $blog->slug), $blog->title) }}"><i
                                                                class="uil uil-linkedin"></i>Linkedin</a>
                                                        <a class="dropdown-item"
                                                            href="{{ shareLink('twitter', route('blog', $blog->slug), $blog->title) }}"><i
                                                                class="uil uil-twitter"></i>Twitter</a>
                                                        <a class="dropdown-item"
                                                            href="{{ shareLink('facebook', route('blog', $blog->slug), $blog->title) }}"><i
                                                                class="uil uil-facebook-f"></i>Facebook</a>
                                                    </div>
                                                    <!--/.dropdown-menu -->
                                                </div>
                                                <!--/.share-dropdown -->
                                            </div>
                                        </div>
                                        <!-- /.post-footer -->
                                    </article>
                                    <!-- /.post -->
                                </div>
                                <!-- /.classic-view -->
                                {{-- <hr />
                                <div class="author-info d-md-flex align-items-center mb-3">
                                    <div class="d-flex align-items-center">
                                        <figure class="user-avatar"><img class="rounded-circle" alt=""
                                                src="/assets/home/assets/img/avatars/u5.jpg" /></figure>
                                        <div>
                                            <h6><a href="#" class="link-dark">Nikolas Brooten</a></h6>
                                            <span class="post-meta fs-15">Sales Manager</span>
                                        </div>
                                    </div>
                                    <div class="mt-3 mt-md-0 ms-auto">
                                        <a href="#"
                                            class="btn btn-sm btn-soft-ash rounded-pill btn-icon btn-icon-start mb-0"><i
                                                class="uil uil-file-alt"></i> All Posts</a>
                                    </div>
                                </div>
                                <!-- /.author-info -->
                                <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum
                                    massa justo sit amet risus. Maecenas faucibus mollis interdum. Fusce dapibus, tellus ac.
                                    Maecenas faucibus mollis interdum.</p>
                                <nav class="nav social">
                                    <a href="#"><i class="uil uil-twitter"></i></a>
                                    <a href="#"><i class="uil uil-facebook-f"></i></a>
                                    <a href="#"><i class="uil uil-dribbble"></i></a>
                                    <a href="#"><i class="uil uil-instagram"></i></a>
                                    <a href="#"><i class="uil uil-youtube"></i></a>
                                </nav> --}}
                                <!-- /.social -->
                                {{-- <hr />
                                <h3 class="mb-6">You Might Also Like</h3>
                                <div class="swiper-container blog grid-view mb-16" data-margin="30" data-dots="true"
                                    data-items-md="2" data-items-xs="1">
                                    <div class="swiper">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <article>
                                                    <figure class="overlay overlay-1 hover-scale rounded mb-5"><a
                                                            href="#"> <img src="/assets/home/assets/img/photos/b4.jpg"
                                                                alt="" /></a>
                                                        <figcaption>
                                                            <h5 class="from-top mb-0">Read More</h5>
                                                        </figcaption>
                                                    </figure>
                                                    <div class="post-header">
                                                        <div class="post-category text-line">
                                                            <a href="#" class="hover" rel="category">Coding</a>
                                                        </div>
                                                        <!-- /.post-category -->
                                                        <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark"
                                                                href="./blog-post.html">Ligula tristique quis risus</a>
                                                        </h2>
                                                    </div>
                                                    <!-- /.post-header -->
                                                    <div class="post-footer">
                                                        <ul class="post-meta mb-0">
                                                            <li class="post-date"><i
                                                                    class="uil uil-calendar-alt"></i><span>14 Apr
                                                                    2022</span></li>
                                                            <li class="post-comments"><a href="#"><i
                                                                        class="uil uil-comment"></i>4</a></li>
                                                        </ul>
                                                        <!-- /.post-meta -->
                                                    </div>
                                                    <!-- /.post-footer -->
                                                </article>
                                                <!-- /article -->
                                            </div>
                                            <!--/.swiper-slide -->
                                            <div class="swiper-slide">
                                                <article>
                                                    <figure class="overlay overlay-1 hover-scale rounded mb-5"><a
                                                            href="#"> <img
                                                                src="/assets/home/assets/img/photos/b5.jpg"
                                                                alt="" /></a>
                                                        <figcaption>
                                                            <h5 class="from-top mb-0">Read More</h5>
                                                        </figcaption>
                                                    </figure>
                                                    <div class="post-header">
                                                        <div class="post-category text-line">
                                                            <a href="#" class="hover" rel="category">Workspace</a>
                                                        </div>
                                                        <!-- /.post-category -->
                                                        <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark"
                                                                href="./blog-post.html">Nullam id dolor elit id nibh</a>
                                                        </h2>
                                                    </div>
                                                    <!-- /.post-header -->
                                                    <div class="post-footer">
                                                        <ul class="post-meta mb-0">
                                                            <li class="post-date"><i
                                                                    class="uil uil-calendar-alt"></i><span>29 Mar
                                                                    2022</span></li>
                                                            <li class="post-comments"><a href="#"><i
                                                                        class="uil uil-comment"></i>3</a></li>
                                                        </ul>
                                                        <!-- /.post-meta -->
                                                    </div>
                                                    <!-- /.post-footer -->
                                                </article>
                                                <!-- /article -->
                                            </div>
                                            <!--/.swiper-slide -->
                                            <div class="swiper-slide">
                                                <article>
                                                    <figure class="overlay overlay-1 hover-scale rounded mb-5"><a
                                                            href="#"> <img
                                                                src="/assets/home/assets/img/photos/b6.jpg"
                                                                alt="" /></a>
                                                        <figcaption>
                                                            <h5 class="from-top mb-0">Read More</h5>
                                                        </figcaption>
                                                    </figure>
                                                    <div class="post-header">
                                                        <div class="post-category text-line">
                                                            <a href="#" class="hover" rel="category">Meeting</a>
                                                        </div>
                                                        <!-- /.post-category -->
                                                        <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark"
                                                                href="./blog-post.html">Ultricies fusce porta elit</a></h2>
                                                    </div>
                                                    <!-- /.post-header -->
                                                    <div class="post-footer">
                                                        <ul class="post-meta mb-0">
                                                            <li class="post-date"><i
                                                                    class="uil uil-calendar-alt"></i><span>26 Feb
                                                                    2022</span></li>
                                                            <li class="post-comments"><a href="#"><i
                                                                        class="uil uil-comment"></i>6</a></li>
                                                        </ul>
                                                        <!-- /.post-meta -->
                                                    </div>
                                                    <!-- /.post-footer -->
                                                </article>
                                                <!-- /article -->
                                            </div>
                                            <!--/.swiper-slide -->
                                            <div class="swiper-slide">
                                                <article>
                                                    <figure class="overlay overlay-1 hover-scale rounded mb-5"><a
                                                            href="#"> <img
                                                                src="/assets/home/assets/img/photos/b7.jpg"
                                                                alt="" /></a>
                                                        <figcaption>
                                                            <h5 class="from-top mb-0">Read More</h5>
                                                        </figcaption>
                                                    </figure>
                                                    <div class="post-header">
                                                        <div class="post-category text-line">
                                                            <a href="#" class="hover" rel="category">Business
                                                                Tips</a>
                                                        </div>
                                                        <!-- /.post-category -->
                                                        <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark"
                                                                href="./blog-post.html">Morbi leo risus porta eget</a></h2>
                                                    </div>
                                                    <div class="post-footer">
                                                        <ul class="post-meta mb-0">
                                                            <li class="post-date"><i
                                                                    class="uil uil-calendar-alt"></i><span>7 Jan
                                                                    2022</span></li>
                                                            <li class="post-comments"><a href="#"><i
                                                                        class="uil uil-comment"></i>2</a></li>
                                                        </ul>
                                                        <!-- /.post-meta -->
                                                    </div>
                                                    <!-- /.post-footer -->
                                                </article>
                                                <!-- /article -->
                                            </div>
                                            <!--/.swiper-slide -->
                                        </div>
                                        <!--/.swiper-wrapper -->
                                    </div>
                                    <!-- /.swiper -->
                                </div>
                                <!-- /.swiper-container -->
                                <hr />
                                <div id="comments">
                                    <h3 class="mb-6">5 Comments</h3>
                                    <ol id="singlecomments" class="commentlist">
                                        <li class="comment">
                                            <div class="comment-header d-md-flex align-items-center">
                                                <div class="d-flex align-items-center">
                                                    <figure class="user-avatar"><img class="rounded-circle"
                                                            alt="" src="/assets/home/assets/img/avatars/u1.jpg" />
                                                    </figure>
                                                    <div>
                                                        <h6 class="comment-author"><a href="#"
                                                                class="link-dark">Connor Gibson</a></h6>
                                                        <ul class="post-meta">
                                                            <li><i class="uil uil-calendar-alt"></i>14 Jan 2022</li>
                                                        </ul>
                                                        <!-- /.post-meta -->
                                                    </div>
                                                    <!-- /div -->
                                                </div>
                                                <!-- /div -->
                                                <div class="mt-3 mt-md-0 ms-auto">
                                                    <a href="#"
                                                        class="btn btn-soft-ash btn-sm rounded-pill btn-icon btn-icon-start mb-0"><i
                                                            class="uil uil-comments"></i> Reply</a>
                                                </div>
                                                <!-- /div -->
                                            </div>
                                            <!-- /.comment-header -->
                                            <p>Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis
                                                vestibulum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula,
                                                eget lacinia odio sem nec elit. Sed posuere consectetur est at lobortis
                                                integer posuere erat ante.</p>
                                        </li>
                                        <li class="comment">
                                            <div class="comment-header d-md-flex align-items-center">
                                                <div class="d-flex align-items-center">
                                                    <figure class="user-avatar"><img class="rounded-circle"
                                                            alt="" src="/assets/home/assets/img/avatars/u2.jpg" />
                                                    </figure>
                                                    <div>
                                                        <h6 class="comment-author"><a href="#"
                                                                class="link-dark">Nikolas Brooten</a></h6>
                                                        <ul class="post-meta">
                                                            <li><i class="uil uil-calendar-alt"></i>21 Feb 2022</li>
                                                        </ul>
                                                        <!-- /.post-meta -->
                                                    </div>
                                                    <!-- /div -->
                                                </div>
                                                <!-- /div -->
                                                <div class="mt-3 mt-md-0 ms-auto">
                                                    <a href="#"
                                                        class="btn btn-soft-ash btn-sm rounded-pill btn-icon btn-icon-start mb-0"><i
                                                            class="uil uil-comments"></i> Reply</a>
                                                </div>
                                                <!-- /div -->
                                            </div>
                                            <!-- /.comment-header -->
                                            <p>Quisque tristique tincidunt metus non aliquam. Quisque ac risus sit amet quam
                                                sollicitudin vestibulum vitae malesuada libero. Mauris magna elit, suscipit
                                                non ornare et, blandit a tellus. Pellentesque dignissim ornare faucibus
                                                mollis.</p>
                                            <ul class="children">
                                                <li class="comment">
                                                    <div class="comment-header d-md-flex align-items-center">
                                                        <div class="d-flex align-items-center">
                                                            <figure class="user-avatar"><img class="rounded-circle"
                                                                    alt=""
                                                                    src="/assets/home/assets/img/avatars/u3.jpg" />
                                                            </figure>
                                                            <div>
                                                                <h6 class="comment-author"><a href="#"
                                                                        class="link-dark">Pearce Frye</a></h6>
                                                                <ul class="post-meta">
                                                                    <li><i class="uil uil-calendar-alt"></i>22 Feb 2022
                                                                    </li>
                                                                </ul>
                                                                <!-- /.post-meta -->
                                                            </div>
                                                            <!-- /div -->
                                                        </div>
                                                        <!-- /div -->
                                                        <div class="mt-3 mt-md-0 ms-auto">
                                                            <a href="#"
                                                                class="btn btn-soft-ash btn-sm rounded-pill btn-icon btn-icon-start mb-0"><i
                                                                    class="uil uil-comments"></i> Reply</a>
                                                        </div>
                                                        <!-- /div -->
                                                    </div>
                                                    <!-- /.comment-header -->
                                                    <p>Cras mattis consectetur purus sit amet fermentum. Integer posuere
                                                        erat a ante venenatis dapibus posuere velit aliquet. Etiam porta sem
                                                        malesuada magna mollis.</p>
                                                    <ul class="children">
                                                        <li class="comment">
                                                            <div class="comment-header d-md-flex align-items-center">
                                                                <div class="d-flex align-items-center">
                                                                    <figure class="user-avatar"><img
                                                                            class="rounded-circle" alt=""
                                                                            src="/assets/home/assets/img/avatars/u2.jpg" />
                                                                    </figure>
                                                                    <div>
                                                                        <h6 class="comment-author"><a href="#"
                                                                                class="link-dark">Nikolas Brooten</a></h6>
                                                                        <ul class="post-meta">
                                                                            <li><i class="uil uil-calendar-alt"></i>4 Apr
                                                                                2022</li>
                                                                        </ul>
                                                                        <!-- /.post-meta -->
                                                                    </div>
                                                                    <!-- /div -->
                                                                </div>
                                                                <!-- /div -->
                                                                <div class="mt-3 mt-md-0 ms-auto">
                                                                    <a href="#"
                                                                        class="btn btn-soft-ash btn-sm rounded-pill btn-icon btn-icon-start mb-0"><i
                                                                            class="uil uil-comments"></i> Reply</a>
                                                                </div>
                                                                <!-- /div -->
                                                            </div>
                                                            <!-- /.comment-header -->
                                                            <p>Nullam id dolor id nibh ultricies vehicula ut id. Cras mattis
                                                                consectetur purus sit amet fermentum. Aenean eu leo quam.
                                                                Pellentesque ornare sem lacinia aenean bibendum nulla
                                                                consectetur.</p>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="comment">
                                            <div class="comment-header d-md-flex align-items-center">
                                                <div class="d-flex align-items-center">
                                                    <figure class="user-avatar"><img class="rounded-circle"
                                                            alt="" src="/assets/home/assets/img/avatars/u4.jpg" />
                                                    </figure>
                                                    <div>
                                                        <h6 class="comment-author"><a href="#"
                                                                class="link-dark">Lou Bloxham</a></h6>
                                                        <ul class="post-meta">
                                                            <li><i class="uil uil-calendar-alt"></i>3 May 2022</li>
                                                        </ul>
                                                        <!-- /.post-meta -->
                                                    </div>
                                                    <!-- /div -->
                                                </div>
                                                <!-- /div -->
                                                <div class="mt-3 mt-md-0 ms-auto">
                                                    <a href="#"
                                                        class="btn btn-soft-ash btn-sm rounded-pill btn-icon btn-icon-start mb-0"><i
                                                            class="uil uil-comments"></i> Reply</a>
                                                </div>
                                                <!-- /div -->
                                            </div>
                                            <!-- /.comment-header -->
                                            <p>Sed posuere consectetur est at lobortis. Vestibulum id ligula porta felis
                                                euismod semper. Cum sociis natoque penatibus et magnis dis parturient
                                                montes, nascetur ridiculus mus.</p>
                                        </li>
                                    </ol>
                                </div>
                                <!-- /#comments -->
                                <hr />
                                <h3 class="mb-3">Would you like to share your thoughts?</h3>
                                <p class="mb-7">Your email address will not be published. Required fields are marked *
                                </p>
                                <form class="comment-form">
                                    <div class="form-floating mb-4">
                                        <input type="text" class="form-control" placeholder="Name*" id="c-name">
                                        <label for="c-name">Name *</label>
                                    </div>
                                    <div class="form-floating mb-4">
                                        <input type="email" class="form-control" placeholder="Email*" id="c-email">
                                        <label for="c-email">Email*</label>
                                    </div>
                                    <div class="form-floating mb-4">
                                        <input type="text" class="form-control" placeholder="Website" id="c-web">
                                        <label for="c-web">Website</label>
                                    </div>
                                    <div class="form-floating mb-4">
                                        <textarea name="textarea" class="form-control" placeholder="Comment" style="height: 150px"></textarea>
                                        <label>Comment *</label>
                                    </div>
                                    <button type="submit" class="btn btn-primary rounded-pill mb-0">Submit</button>
                                </form> --}}
                                <!-- /.comment-form -->
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.blog -->
                </div>
                <!-- /column -->
                <aside class="col-lg-4 sidebar mt-11 mt-lg-6">
                    {{-- <div class="widget">
                        <form class="search-form">
                            <div class="form-floating mb-0">
                                <input id="search-form" type="text" class="form-control" placeholder="Search">
                                <label for="search-form">Search</label>
                            </div>
                        </form>
                        <!-- /.search-form -->
                    </div> --}}
                    <!-- /.widget -->

                    <div class="widget">
                        <h4 class="widget-title mb-3">About Author</h4>

                        <div class="author-info d-md-flex align-items-center mb-3">
                            <div class="d-flex align-items-center">
                                <figure class="user-avatar"><img class="rounded-circle" alt=""
                                        src="{{ $blog->creator->profile_photo_path }}" /></figure>
                                <div>
                                    <h6><a href="{{ route('user', $blog->creator->username) }}"
                                            class="link-dark">{{ $blog->creator->name }}</a></h6>
                                    <span class="post-meta fs-15">{{ $blog->creator->username }}</span>
                                </div>
                            </div>
                            {{-- <div class="mt-3 mt-md-0 ms-auto">
                                <a href="#"
                                    class="btn btn-sm btn-soft-ash rounded-pill btn-icon btn-icon-start mb-0"><i
                                        class="uil uil-file-alt"></i> All Posts</a>
                            </div> --}}
                        </div>
                        {{-- <nav class="nav social">
                            <a href="#"><i class="uil uil-twitter"></i></a>
                            <a href="#"><i class="uil uil-facebook-f"></i></a>
                            <a href="#"><i class="uil uil-dribbble"></i></a>
                            <a href="#"><i class="uil uil-instagram"></i></a>
                            <a href="#"><i class="uil uil-youtube"></i></a>
                        </nav> --}}
                        <!-- /.social -->
                    </div>

                    @ad('display-square')
                    <!-- /.widget -->
                    <div class="widget">
                        <h4 class="widget-title mb-3">Recent Blogs</h4>
                        <ul class="image-list">
                            @foreach (getRecentBlogs(3) as $blog)
                                <li>
                                    <figure class="rounded"><a href="{{ route('blog', $blog->slug) }}"><img
                                                src="{{ $blog->image_compressed }}"
                                                onerror="this.src='{{ $blog->image }}'" alt="" /></a></figure>
                                    <div class="post-content">
                                        <h6 class="mb-1"> <a class="link-dark" href="{{ route('blog', $blog->slug) }}">
                                                {{ Str::limit($blog->title, 30) }}</a> </h6>
                                        <ul class="post-meta">
                                            <li class="post-date"><i
                                                    class="uil uil-calendar-alt"></i><span>{{ $blog->updated_at->diffForHumans() }}</span>
                                            </li>
                                            <li class="post-comments"><a href="#"><i
                                                        class="uil uil-eye"></i>{{ changeIntoKMG(profileview($blog->id)) }}</a>
                                            </li>
                                        </ul>
                                        <!-- /.post-meta -->
                                    </div>
                                </li>
                            @endforeach

                        </ul>
                        <!-- /.image-list -->
                    </div>
                    <!-- /.widget -->
                    {{-- <div class="widget">
                        <h4 class="widget-title mb-3">Categories</h4>
                        <ul class="unordered-list bullet-primary text-reset">
                            <li><a href="#">Teamwork (21)</a></li>
                            <li><a href="#">Ideas (19)</a></li>
                            <li><a href="#">Workspace (16)</a></li>
                            <li><a href="#">Coding (7)</a></li>
                            <li><a href="#">Meeting (12)</a></li>
                            <li><a href="#">Business Tips (14)</a></li>
                        </ul>
                    </div> --}}
                    <!-- /.widget -->
                    <div class="widget">
                        <h4 class="widget-title mb-3">Tags</h4>
                        <ul class="list-unstyled tag-list">
                            @foreach ($blog->tags as $tag)
                                <li><a href="#" class="btn btn-soft-ash btn-sm rounded-pill">{{ $tag }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <!-- /.widget -->
                    {{-- <div class="widget">
                        <h4 class="widget-title mb-3">Archive</h4>
                        <ul class="unordered-list bullet-primary text-reset">
                            <li><a href="#">February 2019</a></li>
                            <li><a href="#">January 2019</a></li>
                            <li><a href="#">December 2018</a></li>
                            <li><a href="#">November 2018</a></li>
                            <li><a href="#">October 2018</a></li>
                        </ul>
                    </div> --}}
                    <!-- /.widget -->
                </aside>
                <!-- /column .sidebar -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
@endsection
