@extends('digitox.layouts.master')

@section('content')
    <section class="banner v1 bg-cover-center" data-background="assets/img/banner/v1/banner-bg-1.png">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 order-lg-1">
                    <div class="banner-profile">
                        <img src="{{ asset('digitox/assets/img/banner/v1/banner-profile.jpg') }}" alt="banner-profile">
                        <div class="shap-1" data-background="assets/img/banner/v1/shap-2.png"></div>
                        <div class="shap-2" data-background="assets/img/banner/v1/shap-1.png"></div>
                        <div class="shap-3" data-background="assets/img/banner/v1/shap-3.png"></div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="banner-content">
                        <div class="section-title-white v1">
                            <h6>Boost your business</h6>
                            <h4>Leading MERN Stack Developers in Pakistan to Power Your Web App with Advanced Technology
                            </h4>
                            <p>Premier MERN Stack Development Firm in Pakistan, Crafting React JS Websites to Propel Your
                                Online Business Success.</p>
                        </div>
                        <ul class="all-btns">
                            <li>
                                <a href="#" class="link-anime v1">Discover more</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="logo-slider v1">
        <div class="container">
            <div class="slider">
                <div class="swiper-wrapper">
                    @if ($projects->count() > 0)
                        @foreach ($projects as $project)
                            <div class="swiper-slide">
                                <a href="{{ route('project.details', $project->slug) }}"><img style="width: 100px; height: 50px;"
                                        src="{{ asset('admin/assets/img/logo/' . $project->project_logo) }}" alt="logo"></a>
                            </div>
                        @endforeach
                    @else
                        <p>No projects found.</p>
                    @endif
                    {{-- <div class="swiper-slide">
                    <a href="#"><img src="{{ asset('digitox/assets/img/logo-slider/logo-2.png')}}" alt="logo"></a>
                </div>
                <div class="swiper-slide">
                    <a href="#"><img src="{{ asset('digitox/assets/img/logo-slider/logo-3.png')}}" alt="logo"></a>
                </div>
                <div class="swiper-slide">
                    <a href="#"><img src="{{ asset('digitox/assets/img/logo-slider/logo-4.png')}}" alt="logo"></a>
                </div>
                <div class="swiper-slide">
                    <a href="#"><img src="{{ asset('digitox/assets/img/logo-slider/logo-5.png')}}" alt="logo"></a>
                </div>
                <div class="swiper-slide">
                    <a href="#"><img src="{{ asset('digitox/assets/img/logo-slider/logo-6.png')}}" alt="logo"></a>
                </div>
                <div class="swiper-slide">
                    <a href="#"><img src="{{ asset('digitox/assets/img/logo-slider/logo-3.png')}}" alt="logo"></a>
                </div> --}}
                </div>
            </div>
        </div>
    </section>

    <section class="about-us v1 py-0">
        <div class="container">
            <div class="row align-items-xl-center">
                <div class="col-xl-6">
                    <div class="about-imgs">
                        <div class="about-big-img">
                            <img src="{{ asset('digitox/assets/img/about-us/v1/about-img.jpg') }}" alt="about-img">
                        </div>
                        <div class="about-small-img">
                            <img src="{{ asset('digitox/assets/img/about-us/v1/about-small-img.jpg') }}"
                                alt="about-small-img">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="about-text">
                        <div class="section-title-white v1">
                            <h6>About Company</h6>
                            <h2>We Propel Brands and Businesses into the Digital Future!</h2>
                            <p>Digitox, a Forward-Thinking Digital Agency in Pakistan. Our In-House Team of IT Experts
                                Specializes in Website Development, eCommerce, Mobile Apps, Social Media, and SEO Services,
                                Delivering Results that Speak for Themselves.</p>
                        </div>
                        <div class="about-text-content">
                            <div class="about-text-wrap">
                                <div class="about-text-left">
                                    <h4>Our <span class="color-green">mission</span></h4>
                                    <ul class="check-mark-list v1">
                                        <li>
                                            <span class="my-icon icon-check"></span>
                                            <p>Innovating Digital Excellence.</p>
                                        </li>
                                        <li>
                                            <span class="my-icon icon-check"></span>
                                            <p> We are committed to empowering brands and businesses through cutting-edge IT
                                                solutions.</p>
                                        </li>
                                        <li>
                                            <span class="my-icon icon-check"></span>
                                            <p>Our mission is not just to meet expectations but to exceed them, consistently
                                                pushing the boundaries of what's possible in the dynamic world of IT.</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="our-service v1">
        <div class="container">
            <div class="section-title-center-white v1">
                <h6>Our service</h6>
                <h2>Fueling Business Growth Through Effective Marketing.</h2>
            </div>
            <div class="row">
                @if ($latestServices->count() > 0)
                    @foreach ($latestServices as $latestService)
                        <div class="col-md-6 col-xl-3">
                            <div class="our-service-card">
                                <div class="our-service-card-header">
                                    <div class="card-icon">
                                        <img style="width: 70px; height: 70px"
                                            src="{{ asset('admin/assets/img/svg/' . $latestService->svg) }}" alt="">
                                    </div>
                                    <a href="{{ route('service-details', $latestService->slug) }}" class="link-arrow">
                                        <span class="my-icon icon-dobble-angles-right"></span>
                                    </a>
                                </div>
                                <h4><a
                                        href="{{ route('service-details', $latestService->slug) }}">{{ $latestService->title }}</a>
                                </h4>
                                <p>{{ $latestService->description }}</p>
                            </div>
                        </div>
                    @endforeach
                @else
                    <p>No Latest Services found.</p>
                @endif
                {{-- <div class="col-md-6 col-xl-3">
                <div class="our-service-card">
                    <div class="our-service-card-header">
                        <div class="card-icon">
                            <span class="my-icon icon-strong-brin"></span>
                        </div>
                        <a href="service-details.html" class="link-arrow">
                            <span class="my-icon icon-dobble-angles-right"></span>
                        </a>
                    </div>
                    <h4><a href="service-details.html">business analyses holding</a></h4>
                    <p>Aliquam eos justo, posuere lborti vive rra laoreet matti ullamc oer posu </p>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="our-service-card">
                    <div class="our-service-card-header">
                        <div class="card-icon">
                            <span class="my-icon icon-busness-mind"></span>
                        </div>
                        <a href="service-details.html" class="link-arrow">
                            <span class="my-icon icon-dobble-angles-right"></span>
                        </a>
                    </div>
                    <h4><a href="service-details.html">Design process starting</a></h4>
                    <p>Aliquam eos justo, posuere lborti vive rra laoreet matti ullamc oer posu </p>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="our-service-card">
                    <div class="our-service-card-header">
                        <div class="card-icon">
                            <span class="my-icon icon-busness-idea"></span>
                        </div>
                        <a href="service-details.html" class="link-arrow">
                            <span class="my-icon icon-dobble-angles-right"></span>
                        </a>
                    </div>
                    <h4><a href="service-details.html">update regular in businees way</a></h4>
                    <p>Aliquam eos justo, posuere lborti vive rra laoreet matti ullamc oer posu </p>
                </div>
            </div> --}}
            </div>
        </div>
    </section>

    <section class="our-company v1 bg-dotts-shap-left">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 order-xl-1">
                    <div class="our-company-img">
                        <div class="main-img">
                            <img src="{{ asset('digitox/assets/img/our-company/v1/our-company-img.jpg') }}"
                                alt="our-company-img">
                        </div>
                        <div class="pot-text">
                            <h3>20+</h3>
                            <h5>years experience</h5>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5">
                    <div class="our-company-text">
                        <div class="section-title-white v1">
                            <h6>Our Company</h6>
                            <h2>We are leads in ux solution</h2>
                            <p>Aliquam eros justo, posuere loborti vive rra laoreet matti ullamc oer posu ere viverra
                                .Aliquam eros justo, posuere lobortis non, vive rra laoreet augue mattis fermentum
                                ullamcorper viverra laoreet Aliquam eros justo, posuere loborti </p>
                        </div>
                        <ul class="all-btns">
                            <li>
                                <a href="#" class="link-anime v2">Discover more</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="our-team v1">
        <div class="container">
            <div class="section-title-center-white v1">
                <h6>Work & supporter</h6>
                <h2>Meet our volunteers & Supporter</h2>
            </div>
            <div class="row justify-content-center">
                @if ($teams->count() > 0)
                    @foreach ($teams as $team)
                        <div class="col-md-6 col-lg-4">
                            <div class="team-card">
                                <div class="team-card-img">
                                    {{-- <ul class="social-link">
                            <li><a href="#"><span class="my-icon icon-twitter"></span></a></li>
                            <li><a href="#"><span class="my-icon icon-facebook"></span></a></li>
                            <li><a href="#"><span class="my-icon icon-instagram"></span></a></li>
                        </ul> --}}
                                    <img src="{{ asset('admin/assets/img/uploads/' . $team->image) }}" alt="profile">
                                </div>
                                <div class="team-card-text">
                                    <div class="text">
                                        <h5><a href="team-details.html">{{ $team->name }}</a></h5>
                                        <p>{{ $team->designation }}</p>
                                    </div>
                                    {{-- <a class="link-btn" href="team-details.html"><span class="my-icon icon-arrow-right"></span></a> --}}
                                </div>

                            </div>
                        </div>
                    @endforeach
                @else
                    <p>No Team members available.</p>
                @endif
                {{-- <div class="col-md-6 col-lg-4">
                <div class="team-card">
                    <div class="team-card-img">
                        <ul class="social-link">
                            <li><a href="#"><span class="my-icon icon-twitter"></span></a></li>
                            <li><a href="#"><span class="my-icon icon-facebook"></span></a></li>
                            <li><a href="#"><span class="my-icon icon-instagram"></span></a></li>
                        </ul>
                        <img src="{{ asset('digitox/assets/img/team/v1/profile-2.jpg')}}" alt="profile">
                    </div>
                    <div class="team-card-text">
                        <div class="text">
                            <h5><a href="team-details.html">Shame leo suha</a></h5>
                            <p>Director</p>
                        </div>
                        <a class="link-btn" href="team-details.html"><span class="my-icon icon-arrow-right"></span></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="team-card">
                    <div class="team-card-img">
                        <ul class="social-link">
                            <li><a href="#"><span class="my-icon icon-twitter"></span></a></li>
                            <li><a href="#"><span class="my-icon icon-facebook"></span></a></li>
                            <li><a href="#"><span class="my-icon icon-instagram"></span></a></li>
                        </ul>
                        <img src="{{ asset('digitox/assets/img/team/v1/profile-3.jpg')}}" alt="profile">
                    </div>
                    <div class="team-card-text">
                        <div class="text">
                            <h5><a href="team-details.html">Shame leo suha</a></h5>
                            <p>Director</p>
                        </div>
                        <a class="link-btn" href="team-details.html"><span class="my-icon icon-arrow-right"></span></a>
                    </div>
                </div>
            </div> --}}
            </div>
        </div>
    </section>

    <section class="about-the-company v1 bg-dotts-shap-right">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-company-img">
                        <button class="play-btn v2 venobox" data-vbtype="video" data-maxwidth="800px" data-autoplay="true"
                            data-href="https://youtu.be/itIpz_Vn3hU?si=ZAJVdN7irElA62Bu&amp;t=5"><span
                                class="my-icon icon-play-t"></span></button>
                        <img src="{{ asset('digitox/assets/img/about-the-company/v1/box-img.jpg') }}" alt="box-img">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-company-text">
                        <div class="section-title-white v1">
                            <h2>we design like that part you can see here that</h2>
                            <p>Aliquam eros justo, posuere loborti vive rra laoreet matti ullamc oer posu ere viverra
                                .Aliquam eros justo, posuere lobortis non, vive rra laoreet augue mattis fermentum
                                ullamcorper viverra laoreet Aliquam eros justo, posuere loborti </p>
                        </div>
                        <ul class="check-mark-list v3">
                            <li>
                                <span class="my-icon icon-check"></span>
                                <p>Mistakes To Avoid the head</p>
                            </li>
                            <li>
                                <span class="my-icon icon-check"></span>
                                <p>Mistakes To Avoid the head</p>
                            </li>
                            <li>
                                <span class="my-icon icon-check"></span>
                                <p>Your Startup regular nds kil</p>
                            </li>
                            <li>
                                <span class="my-icon icon-check"></span>
                                <p>Your Startup regular nds kil</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="client-testomonial v1 pb-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="testomonial-header">
                        <div class="section-title-white v1">
                            <h6>About stemina</h6>
                            <h2>What Our Client says</h2>
                        </div>
                        <ul class="slider-btns">
                            <li>
                                <button class="prev-btn"><span class="my-icon icon-arrow-left"></span></button>
                            </li>
                            <li>
                                <button class="next-btn"><span class="my-icon icon-arrow-right"></span></button>
                            </li>
                        </ul>
                    </div>
                    <div class="testomonial-content">
                        <div class="slider">
                            <div class="swiper-wrapper">
                                @if ($testimonials->count() > 0)
                                    @foreach ($testimonials as $testimonial)
                                        <div class="swiper-slide">
                                            <div class="profile">
                                                <div class="profile-img">
                                                    <img src="{{ asset('admin/assets/img/uploads/' . $testimonial->image) }}"
                                                        alt="profile">
                                                </div>
                                                <div class="profile-text">
                                                    <h5>{{ $testimonial->name }}</h5>
                                                    <p>{{ $testimonial->title }}</p>
                                                </div>
                                            </div>
                                            <div class="description">
                                                <p>{{ $testimonial->comment }}</p>
                                            </div>
                                        </div>
                                        {{-- <div class="swiper-slide">
                                <div class="profile">
                                    <div class="profile-img">
                                        <img src="{{ asset('digitox/assets/img/client-testomonial/v1/profile-1.png')}}" alt="profile">
                                    </div>
                                    <div class="profile-text">
                                        <h5>Shame leo suha</h5>
                                        <p>Director</p>
                                    </div>
                                </div>
                                <div class="description">
                                    <p>Aliquam eros justo, posuere loborti vive rra laoreet matti ullamc orper posu ee viverra .Aliquam eros justo, a laoreet augue mattis fermentum ullamcorper viverra laoreet Aliquam eros justo, posuere.</p>
                                </div>
                            </div> --}}
                                    @endforeach
                                @else
                                    <p>No Testimonials found.</p>
                                @endif
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="counting-items v1">
                        <ul class="counter-item">
                            <li>
                                <div class="main-item">
                                    <h2>
                                        <span class="counter" data-count-min="1" data-count-max="210"
                                            data-count-duration="1000" data-count-delay="200">210</span>
                                    </h2>
                                    <p>Product</p>
                                </div>
                            </li>
                            <li>
                                <div class="main-item">
                                    <h2><span class="counter" data-count-min="1" data-count-max="35"
                                            data-count-duration="1000" data-count-delay="200">35</span></h2>
                                    <p>Member</p>
                                </div>
                            </li>
                            <li>
                                <div class="main-item">
                                    <h2><span class="counter" data-count-min="1" data-count-max="45"
                                            data-count-duration="1000" data-count-delay="200">45</span>K</h2>
                                    <p>Project</p>
                                </div>
                            </li>
                            <li>
                                <div class="main-item">
                                    <h2><span class="counter" data-count-min="1" data-count-max="50"
                                            data-count-duration="1000" data-count-delay="200">50</span></h2>
                                    <p>client</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="our-case-study v1">
        <div class="container">
            <div class="section-title-center-white v1">
                <h6>Our Case study</h6>
                <h2>We have complete 1000+ project here</h2>
            </div>
            <div class="slider">
                <div class="swiper-wrapper">
                    @if ($projects->count() > 0)
                        @foreach ($projects as $project)
                            <div class="swiper-slide">
                                <div class="our-card">
                                    <div class="tag">{{ $project->service->title }}</div>
                                    <div class="our-card-img">
                                        <a href="{{ route('project.details', $project->slug) }}">
                                            <img src="{{ asset('admin/assets/img/uploads/' . $project->image) }}"
                                                alt="card-img">
                                        </a>
                                    </div>
                                    <div class="our-card-info">
                                        <p>Our Case study</p>
                                        <h4><a href="{{ route('project.details', $project->slug) }}">How we actually worked
                                                your potencial business</a></h4>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <p>No Projects found.</p>
                    @endif

                </div>
                <button class="prev-btn"><span class="my-icon icon-arrow-left"></span></button>
                <button class="next-btn"><span class="my-icon icon-arrow-right"></span></button>
            </div>
        </div>
    </section>

    <section class="recent-posts v1 pt-0">
        <div class="container">
            <div class="section-title-white">
                <div class="title-left-right">
                    <div class="left-content">
                        <h6>Our Recent posts</h6>
                        <h2>Check our latest news & happenings</h2>
                    </div>
                    <a class="link-anime v1" href="{{ route('blog') }}">View all Articales</a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    @if ($recentPosts->isNotEmpty())
                        <div class="post-card">

                            <div class="post-card-img">
                                <div class="date-info">
                                    <h5>{{ $recentPosts[0]->created_at->format('d') }}</h5>
                                    <p>{{ $recentPosts[0]->created_at->format('F') }}</p>
                                </div>
                                <a href="{{ route('blog.detail', $recentPosts[0]->slug) }}"><img
                                        src="{{ asset('admin/assets/img/uploads/' . $recentPosts[0]->images[0]) }}"
                                        alt="card"></a>
                            </div>
                            <div class="post-card-info">
                                <h4><a
                                        href="{{ route('blog.detail', $recentPosts[0]->slug) }}">{{ $recentPosts[0]->title }}</a>
                                </h4>
                                <p>{{ $recentPosts[0]->description }}</p>
                                <a href="{{ route('blog.detail', $recentPosts[0]->slug) }}" class="link-arrow">Read
                                    More</a>
                            </div>
                        </div>
                    @else
                        <p>No Recent Posts found.</p>
                    @endif
                </div>
                <div class="col-lg-6">
                    <ul class="post-list">
                        @if ($recentPosts->count() > 0)
                            @foreach ($recentPosts->slice(1) as $post)
                                <li>
                                    <ul class="blog-info">
                                        <li>
                                            <span class="my-icon icon-clock"></span>
                                            <p><a href="#">{{ $post->created_at->format('F d , Y') }}</a></p>
                                        </li>
                                        {{-- <li>
                                <span class="my-icon icon-comments"></span>
                                <p><a href="#">Comments (05)</a></p>
                            </li> --}}
                                    </ul>
                                    <h5><a href="{{ route('blog.detail', $post->slug) }}">{{ $post->title }}</a></h5>
                                    <p>{{ $post->description }}</p>
                                    <a href="{{ route('blog.detail', $post->slug) }}" class="link-arrow">Read More</a>
                                </li>
                            @endforeach
                        @else
                            <p>No Recent Posts found.</p>
                        @endif
                        {{-- <li>
                        <ul class="blog-info">
                            <li>
                                <span class="my-icon icon-clock"></span>
                                <p><a href="#">january 18, 2023</a></p>
                            </li>
                            <li>
                                <span class="my-icon icon-comments"></span>
                                <p><a href="#">Comments (05)</a></p>
                            </li>
                        </ul>
                        <h5><a href="#">Children can change the worlds history</a></h5>
                        <p>Our mission is there are  variations  passages  Lorem Ipsum available, but the majority have suffered alteration Our mission is there are  variations </p>
                        <a href="#" class="link-arrow">Read More</a>
                    </li>
                    <li>
                        <ul class="blog-info">
                            <li>
                                <span class="my-icon icon-clock"></span>
                                <p><a href="#">january 18, 2023</a></p>
                            </li>
                            <li>
                                <span class="my-icon icon-comments"></span>
                                <p><a href="#">Comments (05)</a></p>
                            </li>
                        </ul>
                        <h5><a href="#">Save food for poor people dont west food & water</a></h5>
                        <p>Our mission is there are  variations  passages  Lorem Ipsum available, but the majority have suffered alteration Our mission is there are  variations </p>
                        <a href="#" class="link-arrow">Read More</a>
                    </li> --}}
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection
