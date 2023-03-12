@extends('layouts.home')

@section('content')
    <section class="wrapper bg-light">
        <div class="container-card">
            <div class="card image-wrapper bg-full bg-image bg-overlay bg-overlay-light-500 mt-2 mb-5"
                data-image-src="/assets/home/assets/img/photos/bg22.png">
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
                                <img class="img-fluid mb-n18" src="/assets/home/assets/img/illustrations/3d6.png"
                                    srcset="/assets/home/assets/img/illustrations/3d6@2x.png 2x" data-cue="fadeIn"
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


    <section class="wrapper bg-light">
        <div class="container py-14 py-md-16">
            <div class="row gy-10 gy-sm-13 gx-md-8 gx-xl-12 align-items-center">
                <div class="col-lg-5 offset-lg-1">
                    <figure><img class="w-auto" src="/assets/home/assets/img/illustrations/3d2.png"
                            srcset="/assets/home/assets/img/illustrations/3d2@2x.png 2x" alt="">
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
                                                        src="{{ $event->image }}" alt="" /></a>
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
                                                        <img src="{{ $blog->image }}" alt="{{ $blog->title }}" /></a>
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
    <!-- /section -->
    <section class="wrapper bg-light">
        <div class="container pt-14 pt-md-17 pb-14 pb-md-18">
            <div class="row text-center">
                <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
                    <h2 class="fs-16 text-uppercase text-gradient gradient-1 mb-3">Our Features</h2>
                    <h3 class="display-4 mb-9 px-xl-11">The service we offer is specifically designed to meet your
                        needs.</h3>
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
            <div class="row gy-8 mb-17">
                <div class="col-md-6 col-lg-4">
                    <div class="d-flex flex-row">
                        <div>
                            <img src="/assets/home/assets/img/icons/solid/script.svg"
                                class="svg-inject icon-svg icon-svg-sm solid-duo text-grape-fuchsia me-4"
                                alt="" />
                        </div>
                        <div>
                            <h3 class="fs-22 mb-1">Software & Integration</h3>
                            <p class="mb-0">Duis mollis gravida commodo id luctus erat porttitor ligula, eget
                                lacinia odio sem aget elit nullam quis risus eget.</p>
                        </div>
                    </div>
                </div>
                <!--/column -->
                <div class="col-md-6 col-lg-4">
                    <div class="d-flex flex-row">
                        <div>
                            <img src="/assets/home/assets/img/icons/solid/verify.svg"
                                class="svg-inject icon-svg icon-svg-sm solid-duo text-grape-fuchsia me-4"
                                alt="" />
                        </div>
                        <div>
                            <h3 class="fs-22 mb-1">Network Security</h3>
                            <p class="mb-0">Duis mollis gravida commodo id luctus erat porttitor ligula, eget
                                lacinia odio sem aget elit nullam quis risus eget.</p>
                        </div>
                    </div>
                </div>
                <!--/column -->
                <div class="col-md-6 col-lg-4">
                    <div class="d-flex flex-row">
                        <div>
                            <img src="/assets/home/assets/img/icons/solid/cloud-network.svg"
                                class="svg-inject icon-svg icon-svg-sm solid-duo text-grape-fuchsia me-4"
                                alt="" />
                        </div>
                        <div>
                            <h3 class="fs-22 mb-1">Cloud Services</h3>
                            <p class="mb-0">Duis mollis gravida commodo id luctus erat porttitor ligula, eget
                                lacinia odio sem aget elit nullam quis risus eget.</p>
                        </div>
                    </div>
                </div>
                <!--/column -->
                <div class="col-md-6 col-lg-4">
                    <div class="d-flex flex-row">
                        <div>
                            <img src="/assets/home/assets/img/icons/solid/director.svg"
                                class="svg-inject icon-svg icon-svg-sm solid-duo text-grape-fuchsia me-4"
                                alt="" />
                        </div>
                        <div>
                            <h3 class="fs-22 mb-1">Wireless Networking</h3>
                            <p class="mb-0">Duis mollis gravida commodo id luctus erat porttitor ligula, eget
                                lacinia odio sem aget elit nullam quis risus eget.</p>
                        </div>
                    </div>
                </div>
                <!--/column -->
                <div class="col-md-6 col-lg-4">
                    <div class="d-flex flex-row">
                        <div>
                            <img src="/assets/home/assets/img/icons/solid/setting.svg"
                                class="svg-inject icon-svg icon-svg-sm solid-duo text-grape-fuchsia me-4"
                                alt="" />
                        </div>
                        <div>
                            <h3 class="fs-22 mb-1">IT Solutions</h3>
                            <p class="mb-0">Duis mollis gravida commodo id luctus erat porttitor ligula, eget
                                lacinia odio sem aget elit nullam quis risus eget.</p>
                        </div>
                    </div>
                </div>
                <!--/column -->
                <div class="col-md-6 col-lg-4">
                    <div class="d-flex flex-row">
                        <div>
                            <img src="/assets/home/assets/img/icons/solid/server.svg"
                                class="svg-inject icon-svg icon-svg-sm solid-duo text-grape-fuchsia me-4"
                                alt="" />
                        </div>
                        <div>
                            <h3 class="fs-22 mb-1">Server Configuration</h3>
                            <p class="mb-0">Duis mollis gravida commodo id luctus erat porttitor ligula, eget
                                lacinia odio sem aget elit nullam quis risus eget.</p>
                        </div>
                    </div>
                </div>
                <!--/column -->
            </div>
            <!--/.row -->
            <div class="row gx-3 gy-10 mb-15 mb-md-18 align-items-center">
                <div class="col-lg-5 offset-lg-1">
                    <figure><img class="w-auto" src="/assets/home/assets/img/illustrations/3d2.png"
                            srcset="/assets/home/assets/img/illustrations/3d2@2x.png 2x" alt="" />
                    </figure>
                </div>
                <!--/column -->
                <div class="col-lg-5 offset-lg-1">
                    <h2 class="fs-16 text-uppercase text-gradient gradient-1 mb-3">Have Perfect Control</h2>
                    <h3 class="display-4 mb-4">We bring solutions to make life easier for our customers.</h3>
                    <p class="mb-6">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur
                        ridiculus mus. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Praesent commodo
                        cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue rutrum.
                    </p>
                    <div class="row gy-3">
                        <div class="col-xl-6">
                            <ul class="icon-list bullet-bg bullet-soft-primary mb-0">
                                <li><span><i class="uil uil-check"></i></span><span>Aenean quam ornare. Curabitur
                                        blandit.</span></li>
                                <li class="mt-3"><span><i class="uil uil-check"></i></span><span>Nullam quis
                                        risus eget urna mollis ornare.</span></li>
                            </ul>
                        </div>
                        <!--/column -->
                        <div class="col-xl-6">
                            <ul class="icon-list bullet-bg bullet-soft-primary mb-0">
                                <li><span><i class="uil uil-check"></i></span><span>Etiam porta euismod malesuada
                                        mollis.</span></li>
                                <li class="mt-3"><span><i class="uil uil-check"></i></span><span>Vivamus
                                        sagittis lacus vel augue rutrum.</span></li>
                            </ul>
                        </div>
                        <!--/column -->
                    </div>
                    <!--/.row -->
                </div>
                <!--/column -->
            </div>
            <!--/.row -->
            <div class="row gx-md-8 gy-10 align-items-center">
                <div class="col-lg-6 offset-lg-1 order-lg-2 position-relative">
                    <figure class="rounded"><img class="img-fluid" src="/assets/home/assets/img/photos/about27.jpg"
                            srcset="/assets/home/assets/img/photos/about27@2x.jpg 2x" alt="" /></figure>
                    <div class="card shadow-lg position-absolute d-none d-md-block" style="top: 15%; left: -7%">
                        <div class="card-body py-4 px-5">
                            <div class="d-flex flex-row align-items-center">
                                <div>
                                    <img src="/assets/home/assets/img/icons/solid/cloud-group.svg"
                                        class="svg-inject icon-svg icon-svg-sm solid-duo text-grape-fuchsia me-3"
                                        alt="" />
                                </div>
                                <div>
                                    <h3 class="fs-25 counter mb-0 text-nowrap">25000+</h3>
                                    <p class="fs-16 lh-sm mb-0 text-nowrap">Happy Clients</p>
                                </div>
                            </div>
                        </div>
                        <!--/.card-body -->
                    </div>
                    <!--/.card -->
                    <div class="card shadow-lg position-absolute text-center d-none d-md-block"
                        style="bottom: 10%; left: -10%;">
                        <div class="card-body p-6">
                            <div class="progressbar semi-circle fuchsia mb-3" data-value="80"></div>
                            <h4 class="mb-0">Time Saved</h4>
                        </div>
                        <!--/.card-body -->
                    </div>
                    <!--/.card -->
                </div>
                <!--/column -->
                <div class="col-lg-5">
                    <h2 class="fs-16 text-uppercase text-gradient gradient-1 mb-3">What Makes Us Different?</h2>
                    <h3 class="display-4 mb-4 me-lg-n5">We make spending stress free so you have the perfect
                        control.</h3>
                    <p class="mb-6">Etiam porta sem malesuada magna mollis euismod. Donec ullamcorper nulla non
                        metus auctor fringilla. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Fusce
                        dapibus, tellus ac cursus. Integer posuere erat a ante venenatis dapibus posuere velit.</p>
                    <ul class="icon-list bullet-bg bullet-soft-primary">
                        <li><i class="uil uil-check"></i>Aenean eu leo quam. Pellentesque ornare.</li>
                        <li><i class="uil uil-check"></i>Nullam quis risus eget urna mollis ornare.</li>
                        <li><i class="uil uil-check"></i>Donec id elit non mi porta gravida at eget.</li>
                    </ul>
                </div>
                <!--/column -->
            </div>
            <!--/.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-light">
        <div class="container-card">
            <div class="card image-wrapper bg-full bg-image bg-overlay bg-overlay-light-500 pb-15"
                data-image-src="/assets/home/assets/img/photos/bg22.png">
                <div class="card-body py-14 px-0">
                    <div class="container">
                        <div class="row gx-lg-8 gx-xl-12 gy-10 gy-lg-0">
                            <div class="col-lg-4 text-center text-lg-start">
                                <h3 class="display-4 mb-3 pe-xxl-15">We are proud of our works</h3>
                                <p class="lead fs-lg mb-0 pe-xxl-10">We bring solutions to make life easier for our
                                    customers.</p>
                            </div>
                            <!-- /column -->
                            <div class="col-lg-8 mt-lg-2">
                                <div class="row align-items-center counter-wrapper gy-6 text-center">
                                    <div class="col-md-4">
                                        <img src="/assets/home/assets/img/icons/solid/target.svg"
                                            class="svg-inject icon-svg icon-svg-sm solid-duo text-grape-fuchsia mb-3"
                                            alt="" />
                                        <h3 class="counter">1000+</h3>
                                        <p class="mb-0">Completed Projects</p>
                                    </div>
                                    <!--/column -->
                                    <div class="col-md-4">
                                        <img src="/assets/home/assets/img/icons/solid/bar-chart.svg"
                                            class="svg-inject icon-svg icon-svg-sm solid-duo text-grape-fuchsia mb-3"
                                            alt="" />
                                        <h3 class="counter">4x</h3>
                                        <p class="mb-0">Revenue Growth</p>
                                    </div>
                                    <!--/column -->
                                    <div class="col-md-4">
                                        <img src="/assets/home/assets/img/icons/solid/employees.svg"
                                            class="svg-inject icon-svg icon-svg-sm solid-duo text-grape-fuchsia mb-3"
                                            alt="" />
                                        <h3 class="counter">99.7%</h3>
                                        <p class="mb-0">Customer Satisfaction</p>
                                    </div>
                                    <!--/column -->
                                </div>
                                <!--/.row -->
                            </div>
                            <!-- /column -->
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
        <div class="container">
            <div class="grid mb-18">
                <div class="row isotope gy-6 mt-n18">
                    <div class="item col-md-6 col-xl-3">
                        <div class="card shadow-lg card-border-bottom border-soft-primary">
                            <div class="card-body">
                                <blockquote class="border-0 mb-0">
                                    <p>“Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.
                                        Vestibulum id ligula porta. Cras mattis consectetur.”</p>
                                    <div class="blockquote-details">
                                        <div class="info ps-0">
                                            <h5 class="mb-1">Coriss Ambady</h5>
                                            <p class="mb-0">Financial Analyst</p>
                                        </div>
                                    </div>
                                </blockquote>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!--/column -->
                    <div class="item col-md-6 col-xl-3">
                        <div class="card shadow-lg card-border-bottom border-soft-primary">
                            <div class="card-body">
                                <blockquote class="border-0 mb-0">
                                    <p>“Fusce dapibus, tellus ac cursus tortor mauris condimentum fermentum massa
                                        justo sit amet purus sit amet fermentum.”</p>
                                    <div class="blockquote-details">
                                        <div class="info ps-0">
                                            <h5 class="mb-1">Cory Zamora</h5>
                                            <p class="mb-0">Marketing Specialist</p>
                                        </div>
                                    </div>
                                </blockquote>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!--/column -->
                    <div class="item col-md-6 col-xl-3">
                        <div class="card shadow-lg card-border-bottom border-soft-primary">
                            <div class="card-body">
                                <blockquote class="border-0 mb-0">
                                    <p>“Curabitur blandit tempus porttitor. Vivamus sagittis lacus vel augue laoreet
                                        rutrum faucibus dolor eu rutrum. Nulla vitae libero.”</p>
                                    <div class="blockquote-details">
                                        <div class="info ps-0">
                                            <h5 class="mb-1">Nikolas Brooten</h5>
                                            <p class="mb-0">Sales Manager</p>
                                        </div>
                                    </div>
                                </blockquote>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!--/column -->
                    <div class="item col-md-6 col-xl-3">
                        <div class="card shadow-lg card-border-bottom border-soft-primary">
                            <div class="card-body">
                                <blockquote class="border-0 mb-0">
                                    <p>“Etiam adipiscing tincidunt elit convallis felis suscipit ut. Phasellus
                                        rhoncus eu tincidunt auctor nullam rutrum, pharetra augue.”</p>
                                    <div class="blockquote-details">
                                        <div class="info ps-0">
                                            <h5 class="mb-1">Coriss Ambady</h5>
                                            <p class="mb-0">Financial Analyst</p>
                                        </div>
                                    </div>
                                </blockquote>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!--/column -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.grid-view -->
            <div class="row text-center">
                <div class="col-lg-9 col-xl-8 col-xxl-7 mx-auto">
                    <h2 class="fs-16 text-uppercase text-gradient gradient-1 mb-3">Case Studies</h2>
                    <h3 class="display-4 mb-9 me-lg-n5">Check out some of our awesome projects with creative ideas
                        and great design.</h3>
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
            <div class="swiper-container blog grid-view mb-17 mb-md-20" data-margin="30" data-dots="true"
                data-items-xl="3" data-items-md="2" data-items-xs="1">
                <div class="swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <article>
                                <figure class="overlay overlay-1 hover-scale rounded mb-6"><a href="#"> <img
                                            src="/assets/home/assets/img/photos/b4.jpg" alt="" /></a>
                                    <figcaption>
                                        <h5 class="from-top mb-0">Read More</h5>
                                    </figcaption>
                                </figure>
                                <div class="post-header">
                                    <h2 class="post-title h3 mb-3"><a class="link-dark" href="./blog-post.html">Ligula
                                            tristique quis risus</a></h2>
                                </div>
                                <!-- /.post-header -->
                                <div class="post-footer">
                                    <ul class="post-meta">
                                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14 Apr
                                                2022</span></li>
                                        <li class="post-comments"><a href="#"><i
                                                    class="uil uil-file-alt fs-15"></i>Coding</a></li>
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
                                <figure class="overlay overlay-1 hover-scale rounded mb-6"><a href="#"> <img
                                            src="/assets/home/assets/img/photos/b5.jpg" alt="" /></a>
                                    <figcaption>
                                        <h5 class="from-top mb-0">Read More</h5>
                                    </figcaption>
                                </figure>
                                <div class="post-header">
                                    <h2 class="post-title h3 mb-3"><a class="link-dark" href="./blog-post.html">Nullam id
                                            dolor elit id nibh</a></h2>
                                </div>
                                <!-- /.post-header -->
                                <div class="post-footer">
                                    <ul class="post-meta">
                                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29 Mar
                                                2022</span></li>
                                        <li class="post-comments"><a href="#"><i
                                                    class="uil uil-file-alt fs-15"></i>Workspace</a></li>
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
                                <figure class="overlay overlay-1 hover-scale rounded mb-6"><a href="#"> <img
                                            src="/assets/home/assets/img/photos/b6.jpg" alt="" /></a>
                                    <figcaption>
                                        <h5 class="from-top mb-0">Read More</h5>
                                    </figcaption>
                                </figure>
                                <div class="post-header">
                                    <h2 class="post-title h3 mb-3"><a class="link-dark" href="./blog-post.html">Ultricies
                                            fusce porta elit</a></h2>
                                </div>
                                <!-- /.post-header -->
                                <div class="post-footer">
                                    <ul class="post-meta">
                                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26 Feb
                                                2022</span></li>
                                        <li class="post-comments"><a href="#"><i
                                                    class="uil uil-file-alt fs-15"></i>Meeting</a></li>
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
                                <figure class="overlay overlay-1 hover-scale rounded mb-6"><a href="#"> <img
                                            src="/assets/home/assets/img/photos/b7.jpg" alt="" /></a>
                                    <figcaption>
                                        <h5 class="from-top mb-0">Read More</h5>
                                    </figcaption>
                                </figure>
                                <div class="post-header">
                                    <h2 class="post-title h3 mb-3"><a class="link-dark" href="./blog-post.html">Morbi leo
                                            risus porta eget</a></h2>
                                </div>
                                <div class="post-footer">
                                    <ul class="post-meta">
                                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>7 Jan
                                                2022</span></li>
                                        <li class="post-comments"><a href="#"><i
                                                    class="uil uil-file-alt fs-15"></i>Business Tips</a></li>
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
            <div class="row gy-10 gy-sm-13 gx-md-8 gx-xl-12 align-items-center mb-10 mb-md-12">
                <div class="col-lg-6">
                    <div class="row gx-md-5 gy-5">
                        <div class="col-md-6">
                            <figure class="rounded"><img src="/assets/home/assets/img/photos/g12.jpg"
                                    srcset="/assets/home/assets/img/photos/g12@2x.jpg 2x" alt="">
                            </figure>
                        </div>
                        <!--/column -->
                        <div class="col-md-6 align-self-end">
                            <figure class="rounded"><img src="/assets/home/assets/img/photos/g13.jpg"
                                    srcset="/assets/home/assets/img/photos/g13@2x.jpg 2x" alt="">
                            </figure>
                        </div>
                        <!--/column -->
                        <div class="col-12">
                            <figure class="rounded mx-md-5"><img src="/assets/home/assets/img/photos/g11.jpg"
                                    srcset="/assets/home/assets/img/photos/g11@2x.jpg 2x" alt="">
                            </figure>
                        </div>
                        <!--/column -->
                    </div>
                    <!--/.row -->
                </div>
                <!--/column -->
                <div class="col-lg-6">
                    <h2 class="fs-16 text-uppercase text-gradient gradient-1 mb-3">Who Are We?</h2>
                    <h3 class="display-4 mb-4">Company that believes in the power of creative strategy.</h3>
                    <p class="mb-6">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur
                        ridiculus mus. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Praesent commodo
                        cursus magna, vel scelerisque nisl consectetur et. Cum sociis natoque penatibus et magnis
                        dis parturient montes, nascetur ridiculus mus. Aenean lacinia bibendum nulla sed.</p>
                    <div class="row gy-3 gx-xl-8">
                        <div class="col-xl-6">
                            <ul class="icon-list bullet-bg bullet-soft-primary mb-0">
                                <li><span><i class="uil uil-check"></i></span><span>Aenean eu leo quam ornare
                                        curabitur blandit tempus.</span></li>
                                <li class="mt-3"><span><i class="uil uil-check"></i></span><span>Nullam quis
                                        risus eget urna mollis ornare donec elit.</span></li>
                            </ul>
                        </div>
                        <!--/column -->
                        <div class="col-xl-6">
                            <ul class="icon-list bullet-bg bullet-soft-primary mb-0">
                                <li><span><i class="uil uil-check"></i></span><span>Etiam porta sem malesuada
                                        magna mollis euismod.</span></li>
                                <li class="mt-3"><span><i class="uil uil-check"></i></span><span>Fermentum
                                        massa vivamus faucibus amet euismod.</span></li>
                            </ul>
                        </div>
                        <!--/column -->
                    </div>
                    <!--/.row -->
                </div>
                <!--/column -->
            </div>
            <!--/.row -->
            <div class="row gx-lg-8 gx-xl-12 gy-6 mb-14 mb-md-17">
                <div class="col-lg-4">
                    <div class="d-flex flex-row">
                        <div>
                            <div class="icon btn btn-circle pe-none btn-soft-primary me-4"> <span
                                    class="number fs-18">1</span> </div>
                        </div>
                        <div>
                            <h4>Our Vision</h4>
                            <p class="mb-2">Nulla vitae elit libero, a pharetra augue. Donec id elit non mi
                                porta gravida at eget. Fusce dapibus tellus.</p>
                        </div>
                    </div>
                </div>
                <!--/column -->
                <div class="col-lg-4">
                    <div class="d-flex flex-row">
                        <div>
                            <div class="icon btn btn-circle pe-none btn-soft-primary me-4"> <span
                                    class="number fs-18">2</span> </div>
                        </div>
                        <div>
                            <h4>Our Mission</h4>
                            <p class="mb-2">Maecenas faucibus mollis interdum. Vivamus sagittis lacus vel augue
                                laoreet. Sed posuere consectetur.</p>
                        </div>
                    </div>
                </div>
                <!--/column -->
                <div class="col-lg-4">
                    <div class="d-flex flex-row">
                        <div>
                            <div class="icon btn btn-circle pe-none btn-soft-primary me-4"> <span
                                    class="number fs-18">3</span> </div>
                        </div>
                        <div>
                            <h4>Our Values</h4>
                            <p class="mb-2">Cras justo odio, dapibus ac facilisis in, egestas eget quam.
                                Praesent commodo cursus magna scelerisque.</p>
                        </div>
                    </div>
                </div>
                <!--/column -->
            </div>
            <!--/.row -->
            <div class="row gx-3 gy-10 mb-15 mb-md-18 align-items-center">
                <div class="col-lg-6">
                    <figure><img class="w-auto" src="/assets/home/assets/img/illustrations/3d3.png"
                            srcset="/assets/home/assets/img/illustrations/3d3@2x.png 2x" alt="" />
                    </figure>
                </div>
                <!--/column -->
                <div class="col-lg-5 offset-lg-1">
                    <h2 class="fs-16 text-uppercase text-gradient gradient-1 mb-3">Contact Us</h2>
                    <h3 class="display-4 mb-8">Got any questions? Don't hesitate to get in touch.</h3>
                    <div class="d-flex flex-row">
                        <div>
                            <img src="/assets/home/assets/img/icons/solid/pin.svg"
                                class="svg-inject icon-svg icon-svg-xs solid-duo text-grape-fuchsia mt-1 me-4"
                                style="width: 1.5rem; height: 1.5rem;" alt="" />
                        </div>
                        <div>
                            <h5 class="mb-0">Address</h5>
                            <address>Moonshine St. 14/05 Light City, London</address>
                        </div>
                    </div>
                    <div class="d-flex flex-row">
                        <div>
                            <img src="/assets/home/assets/img/icons/solid/rotary.svg"
                                class="svg-inject icon-svg icon-svg-xs solid-duo text-grape-fuchsia mt-1 me-4"
                                style="width: 1.5rem; height: 1.5rem;" alt="" />
                        </div>
                        <div>
                            <h5 class="mb-0">Phone</h5>
                            <p>00 (123) 456 78 90</p>
                        </div>
                    </div>
                    <div class="d-flex flex-row">
                        <div>
                            <img src="/assets/home/assets/img/icons/solid/emails.svg"
                                class="svg-inject icon-svg icon-svg-xs solid-duo text-grape-fuchsia mt-1 me-4"
                                style="width: 1.5rem; height: 1.5rem;" alt="" />
                        </div>
                        <div>
                            <h5 class="mb-0">E-mail</h5>
                            <p class="mb-0"><a href="mailto:sandbox@email.com" class="link-body">sandbox@email.com</a>
                            </p>
                        </div>
                    </div>
                </div>
                <!--/column -->
            </div>
            <!--/.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->
@endsection
