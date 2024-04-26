@extends('digitox.layouts.master')

@section('content')
    <section class="breadcum v1 bg-cover-center" data-background="{{ asset('digitox/assets/img/breadcum/v1/bg.jpg') }}">
        <div class="container">
            <div class="breadcum-content">
                <h2>About Us</h2>
                <ul>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>About Us</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="about-us v2 bg-line-shap">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-imgs">
                        <div class="about-img-1">
                            <img src="{{ asset('digitox/assets/img/about-us/v2/about-img-1.jpg') }}" alt="about-img">
                        </div>
                        <div class="about-img-2">
                            <img src="{{ asset('digitox/assets/img/about-us/v2/about-img-2.jpg') }}" alt="about-img">
                        </div>
                        <div class="about-img-3">
                            <img src="{{ asset('digitox/assets/img/about-us/v2/about-img-3.jpg') }}" alt="about-img">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-text">
                        <div class="section-title-white v1">
                            <h6>About Company</h6>
                            <h2>This is All about Business matter</h2>
                            <p>Payment solutions enable businesse accept payments Payment stions enable businesses to accept
                                payments frctly customers ctly securely. stions enable businesses to accept payments.</p>
                        </div>
                        <div class="about-text-content">
                            <h4>Jhon Doe</h4>
                            <p>‘’Payment solutions enable businesses to acce payments Payment stions enable businesses to
                                accept payments from ctly customers ctly securstions enable’’</p>
                            <a href="about-us.html" class="link-anime v2">Discover more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="counting-items v3 pt-0">
        <div class="container">
            <ul class="counter-item">
                <li>
                    <span class="list-num">01</span>
                    <div class="main-item">
                        <h2>
                            <span class="counter" data-count-min="1" data-count-max="210" data-count-duration="1000"
                                data-count-delay="200">210</span>
                        </h2>
                        <p>Product</p>
                    </div>
                </li>
                <li>
                    <span class="list-num">02</span>
                    <div class="main-item">
                        <h2><span class="counter" data-count-min="1" data-count-max="35" data-count-duration="1000"
                                data-count-delay="200">35</span></h2>
                        <p>Total member</p>
                    </div>
                </li>
                <li>
                    <span class="list-num">03</span>
                    <div class="main-item">
                        <h2><span class="counter" data-count-min="1" data-count-max="45" data-count-duration="1000"
                                data-count-delay="200">45</span>K</h2>
                        <p>Project total views</p>
                    </div>
                </li>
                <li>
                    <span class="list-num">04</span>
                    <div class="main-item">
                        <h2><span class="counter" data-count-min="1" data-count-max="50" data-count-duration="1000"
                                data-count-delay="200">50</span></h2>
                        <p>Our clients</p>
                    </div>
                </li>
            </ul>
        </div>
    </section>

    <section class="client-testomonial v3 pt-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="testomonial-header">
                        <div class="section-title-white v1">
                            <h2>Here is Clients word</h2>
                        </div>
                    </div>
                    <div class="testomonial-content">
                        <div class="slider">
                            <div class="swiper-wrapper">
                                @if ($testimonials->count() > 0)
                                    @foreach ($testimonials as $testimonial)
                                        <div class="swiper-slide">
                                            <div class="description">
                                                <p>{{ $testimonial->comment }}</p>
                                            </div>
                                            <div class="profile">
                                                <div class="profile-img">
                                                    <img src="{{ asset('admin/assets/img/uploads/' . $testimonial->image) }}"
                                                        alt="profile">
                                                </div>
                                                <div class="profile-text">
                                                    <h5>{{ $testimonial->name }}</h5>
                                                    {{-- <p>Director</p> --}}
                                                </div>
                                            </div>

                                        </div>
                                    @endforeach
                                @else
                                    <p>No testimonials found.</p>
                                @endif

                            </div>
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
                </div>
                <div class="col-lg-6">
                    <div class="client-testomonial-img">
                        <button class="play-btn v1 bouns-anime venobox" data-vbtype="video" data-maxwidth="800px"
                            data-autoplay="true" data-href="https://youtu.be/itIpz_Vn3hU?si=ZAJVdN7irElA62Bu&amp;t=5"><span
                                class="my-icon icon-play-t"></span></button>
                        <img src="{{ asset('digitox/assets/img/client-testomonial/v3/testomonial-img.jpg') }}"
                            alt="box-img">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
