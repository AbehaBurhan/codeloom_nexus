<div class="top-bar v1">
    <div class="container">
        <div class="top-bar-content">
            <ul class="contact">
                <li>
                    <span class="my-icon icon-location-dot"></span>
                    <p><a href="#">6391 Elgin St. Celina, 10299</a></p>
                </li>
            </ul>
            <ul class="social">
                <li><a href="#"><span class="my-icon icon-facebook"></span></a></li>
                <li><a href="#"><span class="my-icon icon-instagram"></span></a></li>
                <li><a href="#"><span class="my-icon icon-twitter"></span></a></li>
                <li><a href="#"><span class="my-icon icon-linkedin-in"></span></a></li>
            </ul>
        </div>
    </div>
</div>
<!-- Top Bar End -->
<!-- Menu Bar Start -->
<div class="menu-bar v1">
    <div class="container">
        <div class="menu-bar-content">
            <div class="menu-logo">
                <a href="{{ route('home') }}"><img src="{{ asset('digitox/assets/img/logo/Logo.svg')}}" alt="Logo"></a>
            </div>
            <nav class="main-menu">
                <ul>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li class="has-dropdown">
                        <a href="#">Services</a>
                        @php($services = \App\Models\Service::where('is_active' , 1)->get())
                        <ul>
                            @foreach ($services as $service)
                            <li><a href="{{ route('service' , $service->slug) }}">{{ $service->title }}</a></li>

                            @endforeach
                            {{-- <li><a href="">Web Development</a></li>
                            <li><a href="">Shopify Stores</a></li>
                            <li><a href="">App Development</a></li>
                            <li><a href="">Software Development</a></li>
                            <li><a href="">Graphic Designing</a></li>
                            <li><a href="">Social Media Marketing</a></li> --}}
                        </ul>

                    </li>
                    <li><a href="{{ route('project') }}">Projects</a></li>
                    <li><a href="{{ route('about-us') }}">About Us</a></li>
                    <li><a href="{{ route('pricing') }}">Pricing</a></li>
                    <li>
                        <a href="{{ route('blog') }}">Blogs</a>
                        {{-- <ul>
                            <li><a href="{{ route('blog') }}">Blog</a></li>
                            <li><a href="{{ route('blog-detail') }}">Blog Details</a></li>
                        </ul> --}}
                    </li>
                    <li><a href="{{ route('contactus') }}">Contact Us</a></li>
                </ul>
            </nav>
            {{-- <div class="menu-right">
                <button class="search-close">
                    <span class="my-icon icon-close"></span>
                </button>
                <form class="header-search" action="#">
                    <input type="search" placeholder="Search here">
                    <button type="submit">
                        <span class="my-icon icon-magnifying-glass"></span>
                    </button>
                </form>
                <button class="search-option-open">
                    <span class="my-icon icon-magnifying-glass"></span>
                </button>
                <button class="mobile-menu-btn">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div> --}}
        </div>
    </div>
</div>
