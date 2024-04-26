<div class="info-footer v1">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-3">
                <div class="footer__widget">
                    <div class="footer__widget-content">
                        <div class="footer-logo">
                            <a href="{{ route('home') }}"><img src="{{ asset('digitox/assets/img/logo/Logo.svg')}}" alt="Logo"></a>
                        </div>
                        <p>At vero eos et accusamus  dimos ducimus  praesentium At vero eos accu samus  digni ssimos At vero eos et</p>
                        <ul class="icon-links">
                            <li>
                                <a href="tel:+923036682519" class="icon-link"><span class="my-icon icon-phone-volume"></span> 021 ( 856 ) 4578</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="footer__widget">
                    <h5 class="footer__widget-title">Services</h5>
                    @php($services = \App\Models\Service::where('is_active' , 1)->get())
                    <div class="footer__widget-content">
                        @foreach ($services as $service)

                        <ul class="link-list">
                            <li><a href="{{ route('service' , $service->id) }}">{{ $service->title }}</a></li>
                        </ul>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="footer__widget">
                    <h5 class="footer__widget-title">Pages</h5>
                    <div class="footer__widget-content">
                        <div>
                            <ul class="link-list">
                                {{-- <li><a href="{{ route('home') }}">Home</a></li> --}}
                                <li><a href="{{ route('project') }}">Projects</a></li>
                                <li><a href="{{ route('about-us') }}">About Us</a></li>
                                <li><a href="{{ route('pricing') }}">Pricing</a></li>
                                <li><a href="{{ route('blog') }}">Blogs</a></li>
                                <li><a href="{{ route('contactus') }}">Contact Us</a></li>
                                <li><a href="{{ route('faq') }}">Faq's</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="footer__widget">
                    <h5 class="footer__widget-title">Newsletter</h5>
                    <div class="footer__widget-content">
                        <p>You will be notified when somthing new will be appeared</p>
                        <form action="#" class="newsletter">
                            <input type="email" placeholder="Your email here" required>
                            <button type="submit">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main-footer">
        <div class="container">
            <div class="footer-content">
                <div class="left-text">
                    <p>© <a href="#">Digitox</a>  <?php echo date("Y"); ?> | All Rights Reserved</p>
                </div>
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
