@extends('layouts.home')

@section('content')
    <section class="wrapper bg-light">
        <div class="container-card">
            <div class="card image-wrapper bg-full bg-image bg-overlay bg-overlay-light-500 mt-2 mb-5"
                data-image-src="/assets/home/assets/img/photos/webp/bg22.webp">
                <div class="card-body py-14 px-0">
                    <div class="container">
                        <div class="row gx-md-8 gx-xl-12 gy-10 align-items-center text-center text-lg-start">
                            <div class="col-lg-6" data-cues="slideInDown" data-group="page-title" data-delay="900">
                                <h1 class="display-1 mb-4 me-xl-5 me-xxl-0">Have a <span
                                        class="text-gradient gradient-1">Startup </span><br> Let's ConnectUp</h1>
                                <p class="lead fs-23 lh-sm mb-7 pe-xxl-15">Join ConnectUp Community and accelerate your
                                    success to new heights! </p>
                                <div><a href="/join/member" class="btn btn-lg btn-gradient gradient-1 rounded">Join
                                        Now</a></div>
                            </div>
                            <!--/column -->
                            <div class="col-lg-6">
                                <img class="img-fluid mb-n18" src="/assets/home/assets/img/illustrations/webp3d6.webp"
                                    srcset="/assets/home/assets/img/illustrations/webp3d6@2x.webp 2x" data-cue="fadeIn"
                                    data-delay="300" alt="" />
                            </div>
                            <!--/column -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.container -->
                </div>
                <!--/.card-body -->
            </div>
            <!--/.card -->
        </div>
        <!-- /.container-card -->
    </section>

    <section class="wrapper image-wrapper bg-auto no-overlay bg-image text-center py-10 py-md-12 bg-map"
        data-image-src="/assets/home/assets/img/map.png">
        <div class="container py-0 py-md-9">
            <div class="row">
                <div class="col-lg-8 col-xl-7 mx-auto">
                    <h2 class="display-4 mb-3 text-center">ConnectUp Community</h2>
                    <p class="lead mb-5 px-md-16 px-lg-3">ConnectUp is a Centralized Startup Networking Platform that brings
                        together startups, entrepreneurs, investors, and friends to come together to share ideas, and
                        discuss opportunities for collaboration. . We are building the largest network of incubators,
                        mentors, investors, and startups</p>
                    {{-- <a href="#" class="btn btn-primary rounded-pill">Join Us</a> --}}
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-light">
        <div class="container py-7 py-md-8">
            <div class="row gy-10 gy-sm-13 gx-md-8 gx-xl-12 align-items-center">
                <div class="col-lg-5 offset-lg-1">
                    <figure><img class="w-auto" src="/assets/home/assets/img/illustrations/webp3d2.webp"
                            srcset="/assets/home/assets/img/illustrations/webp3d2@2x.webp 2x" alt="">
                    </figure>
                </div>
                <!--/column -->
                <div class="col-lg-6">
                    <h2 class="fs-16 text-uppercase text-muted mb-3">What Makes Us Different?</h2>
                    <h3 class="display-3 mb-10">Our <span class="underline-3 style-2 yellow">Solution</span> for
                        Entrepreneurs</h3>
                    <div class="row gy-8">
                        <div class="col-md-6">
                            <div class="d-flex flex-row">
                                <div>
                                    <img src="/assets/home/assets/img/icons/solid/bulb.svg"
                                        class="svg-inject icon-svg icon-svg-xs solid-mono text-fuchsia me-4"
                                        alt="" />
                                </div>
                                <div>
                                    <h4 class="mb-1">Networking</h4>
                                    <p class="mb-0">Connect and collaborate with like-minded peoples
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!--/column -->
                        <div class="col-md-6">
                            <div class="d-flex flex-row">
                                <div>
                                    <img src="/assets/home/assets/img/icons/solid/lamp.svg"
                                        class="svg-inject icon-svg icon-svg-xs solid-mono text-violet me-4"
                                        alt="" />
                                </div>
                                <div>
                                    <h4 class="mb-1">Mentorship</h4>
                                    <p class="mb-0">Get guidance from mentors in your niche</p>
                                </div>
                            </div>
                        </div>
                        <!--/column -->
                        <div class="col-md-6">
                            <div class="d-flex flex-row">
                                <div>
                                    <img src="/assets/home/assets/img/icons/solid/puzzle.svg"
                                        class="svg-inject icon-svg icon-svg-xs solid-mono text-orange me-4"
                                        alt="" />
                                </div>
                                <div>
                                    <h4 class="mb-1">Resources</h4>
                                    <p class="mb-0">Access a wealth of resources to help grow your business.</p>
                                </div>
                            </div>
                        </div>
                        <!--/column -->
                        <div class="col-md-6">
                            <div class="d-flex flex-row">
                                <div>
                                    <img src="/assets/home/assets/img/icons/solid/headphone.svg"
                                        class="svg-inject icon-svg icon-svg-xs solid-mono text-green me-4" alt="" />
                                </div>
                                <div>
                                    <h4 class="mb-1">Events</h4>
                                    <p class="mb-0">Attend ongoing workshops & events in the ecosystem.</p>
                                </div>
                            </div>
                        </div>
                        <!--/column -->
                    </div>
                    <!--/.row -->
                </div>
                <!--/column -->
            </div>
            <!--/.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->

    <section class="wrapper bg-light">
        <div class="overflow-hidden">
            <div class="container py-14 py-md-16">
                <div class="row">
                    <div class="col-xl-7 col-xxl-6 mx-auto text-center">
                        <i class="icn-flower text-leaf fs-30 opacity-25"></i>
                        <h2 class="display-5 text-center mt-2 mb-10">Never Miss an Hackathon, Meetup or
                            Competition again</h2>
                    </div>
                    <!--/column -->
                </div>
                <!--/.row -->
                <div class="swiper-container nav-bottom nav-color mb-14" data-margin="30" data-dots="false" data-nav="true"
                    data-items-lg="3" data-items-md="2" data-items-xs="1">
                    <div class="swiper overflow-visible pb-2">
                        <div class="swiper-wrapper">

                            @foreach (getRecentEvents() as $event)
                                <div class="swiper-slide">
                                    <article>
                                        <div class="card shadow-lg">
                                            <figure class="card-img-top overlay overlay-1"><a
                                                    href="{{ route('event', $event->slug) }}"> <img
                                                        src="{{ $event->image_compressed }}"
                                                        onerror="this.src='{{ $event->image }}'" alt="" /></a>
                                                <figcaption>
                                                    <h5 class="from-top mb-0">Know More</h5>
                                                </figcaption>
                                            </figure>
                                            <div class="card-body p-6">
                                                <div class="post-header">
                                                    {{-- <div class="post-category">
                                                        <a href="#" class="hover" rel="category">Wedding</a>
                                                    </div> --}}
                                                    <!-- /.post-category -->
                                                    <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark"
                                                            href="{{ route('event', $event->slug) }}">{{ $event->title }}</a>
                                                    </h2>
                                                </div>
                                                <!-- /.post-header -->
                                                <div class="post-footer">
                                                    <ul class="post-meta d-flex mb-0">
                                                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>
                                                                {{ $event->updated_at->diffForHumans() }}
                                                            </span></li>
                                                        <li class="post-comments"><a href="#"><i
                                                                    class="uil uil-eye"></i>{{ changeIntoKMG(profileview($event->id)) }}</a>
                                                        </li>
                                                    </ul>
                                                    <!-- /.post-meta -->
                                                </div>
                                                <!-- /.post-footer -->
                                            </div>
                                            <!--/.card-body -->
                                        </div>
                                        <!-- /.card -->
                                    </article>
                                    <!-- /article -->
                                </div>
                            @endforeach
                        </div>
                        <!--/.swiper-wrapper -->
                    </div>
                    <!-- /.swiper -->
                </div>
                <!-- /.swiper-container -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /.overflow-hidden -->
    </section>
    <!-- /section -->


    <section class="wrapper bg-light">
        <div class="container py-14 py-md-16">
            <div class="row">
                <div class="col-lg-9 col-xl-8 col-xxl-7 mx-auto">
                    <h2 class="fs-15 text-uppercase text-primary text-center">Read our Blogs</h2>
                    <h3 class="display-4 mb-6 text-center">Stay Informed with Our Latest Entrepreneurial Insights and Tips
                    </h3>
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
            <div class="position-relative">
                <div class="shape bg-dot primary rellax w-17 h-20" data-rellax-speed="1" style="top: 0; left: -1.7rem;">
                </div>
                <div class="swiper-container dots-closer blog grid-view mb-6" data-margin="0" data-dots="true"
                    data-items-xl="3" data-items-md="2" data-items-xs="1">
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            @foreach (getRecentBlogs() as $blog)
                                <div class="swiper-slide">
                                    <div class="item-inner">
                                        <article>
                                            <div class="card">
                                                <figure class="card-img-top overlay overlay-1 hover-scale"><a
                                                        href="{{ route('blog', $blog->slug) }}">
                                                        <img src="{{ $blog->image_compressed }}"
                                                            onerror="this.src='{{ $blog->image }}'"
                                                            alt="{{ $blog->title }}" /></a>
                                                    <figcaption>
                                                        <h5 class="from-top mb-0">Read More</h5>
                                                    </figcaption>
                                                </figure>
                                                <div class="card-body">
                                                    <div class="post-header">
                                                        {{-- <div class="post-category text-line">
                                                            <a href="#" class="hover" rel="category">Coding</a>
                                                        </div> --}}
                                                        <!-- /.post-category -->
                                                        <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark"
                                                                href="{{ route('blog', $blog->slug) }}">
                                                                {{ Str::limit($blog->title, 50) }}
                                                            </a>
                                                        </h2>
                                                    </div>
                                                    <!-- /.post-header -->
                                                    <div class="post-content">
                                                        <p>
                                                            {{ html2text(Str::limit($blog->title, 100)) }}
                                                        </p>
                                                    </div>
                                                    <!-- /.post-content -->
                                                </div>
                                                <!--/.card-body -->
                                                <div class="card-footer">
                                                    <ul class="post-meta d-flex mb-0">
                                                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>
                                                                {{ $blog->updated_at->diffForHumans() }}
                                                            </span></li>
                                                        {{-- <li class="post-comments"><a href="#"><i
                                                                    class="uil uil-comment"></i>4</a></li> --}}
                                                        <li class="post-likes ms-auto"><i class="uil uil-eye"></i>
                                                            {{ changeIntoKMG(profileview($blog->id)) }}
                                                        </li>
                                                    </ul>
                                                    <!-- /.post-meta -->
                                                </div>
                                                <!-- /.card-footer -->
                                            </div>
                                            <!-- /.card -->
                                        </article>
                                        <!-- /article -->
                                    </div>
                                    <!-- /.item-inner -->
                                </div>
                            @endforeach
                            <!--/.swiper-slide -->
                        </div>
                        <!--/.swiper-wrapper -->
                    </div>
                    <!-- /.swiper -->
                </div>
                <!-- /.swiper-container -->
            </div>
            <!-- /.position-relative -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->
@endsection
