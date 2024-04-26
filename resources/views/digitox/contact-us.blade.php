@extends('digitox.layouts.master')

@section('content')
    <section class="breadcum v1 bg-cover-center" data-background="{{ asset('digitox/assets/img/breadcum/v1/bg.jpg') }}">
        <div class="container">
            <div class="breadcum-content">
                <h2>Contact Us</h2>
                <ul>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Contact Us</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="contact-us v1">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-xl-8">
                    <div class="section-title-white v1">
                        {{-- <x-alert /> --}}

                        @if (session('success'))
                            <div class="alert alert-success alert-dismissible" role="alert">
                                {{ session('success') }}
                                {{-- <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button> --}}
                            </div>
                        @endif

                        @if (session('error'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{ session('error') }}
                                {{-- <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button> --}}
                            </div>
                        @endif

                        {{-- @if (session('success'))
                            <div class="alert alert-success">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">x
                                </button>
                                {{ session('success') }}

                            </div>
                        @endif --}}
                        <h6>Contact us now</h6>
                        <h2>Message for your next project work</h2>
                        <p>Aliquam eros justo, posuere loborti viverra laoreet matti ullamcorper posuere viverra .Aliquam
                            eros justo, posuere lobortis non</p>
                    </div>
                    <form action="{{ route('contactus.mail.send') }}" method="POST" class="contact-form">
                        @csrf
                        <div class="group-box">
                            <input type="text" name="name" placeholder="Your Name" required>
                            <input type="email" name="email" placeholder="Your Email" required>
                        </div>
                        <textarea name="message" placeholder="Write your Message"></textarea>
                        <button type="submit" class="btn-anime v1">submit now</button>
                        <p class="response"></p>
                    </form>
                </div>
                <div class="col-lg-5 col-xl-4">
                    <div class="contact-left">
                        <h3>Contact Info</h3>
                        <ul class="contact-info">
                            <li>
                                <div class="my-icon icon-phone"></div>
                                <div class="text">
                                    <h4>Call us</h4>
                                    <p>Mobile: <a href="#">012 345 678 9101</a></p>
                                    <p>Hotline: <a href="#">012 345 678 9101</a></p>
                                </div>
                            </li>
                            <li>
                                <div class="my-icon icon-envelope"></div>
                                <div class="text">
                                    <h4>Email</h4>
                                    <p><a href="#">info@example.com</a></p>
                                    <p><a href="#">info@exampleyourmail.com</a></p>
                                </div>
                            </li>
                            <li>
                                <div class="my-icon icon-location-dot"></div>
                                <div class="text">
                                    <h4>Location</h4>
                                    <p>Dhaka 102, utl 1216, road 45 stert linehouse street</p>
                                </div>
                            </li>
                        </ul>
                        <h3>Follow us</h3>
                        <ul class="social">
                            <li><a href="#"><span class="my-icon icon-facebook"></span></a></li>
                            <li><a href="#"><span class="my-icon icon-instagram"></span></a></li>
                            <li><a href="#"><span class="my-icon icon-twitter"></span></a></li>
                            <li><a href="#"><span class="my-icon icon-linkedin-in"></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-map v1">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14613.167032861855!2d90.433811!3d23.701273!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b767a022cd4b%3A0xaf33907e219d127!2sRayerbag%2C%20Dhaka!5e0!3m2!1sen!2sbd!4v1675146270950!5m2!1sen!2sbd"></iframe>
    </section>
@endsection
