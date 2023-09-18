{{--
<nav class="navbar navbar-expand-lg fixed-top navbar-dark py-3">
    <div class="container">
        <a class="navbar-brand font-weight-bold text-uppercase" href="#">BRAND NAME</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav font-weight-bold ms-auto">
                <li class="nav-item"> <a class="nav-link" href="#">Home</a> </li>
                <li class="nav-item"> <a class="nav-link" href="#">About</a> </li>
                <li class="nav-item"> <a class="nav-link" href="#">Portfolio</a> </li>
                <li class="nav-item"> <a class="nav-link" href="#">Services</a> </li>
                <li class="nav-item"> <a class="nav-link" href="#">Testimonials</a> </li>
                <li class="nav-item"> <a class="nav-link" href="#">Contact</a> </li>
            </ul>
        </div>
    </div>
</nav>
--}}
@include('frontend.partials.header')

<div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-ride="carousel">
    <div class="carousel-inner text-white">
        @foreach($sliders as $slid)
        <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
            <img src="/storage/{{ $slid?->bg_image }}" class="d-block w-100" alt="...">
            <div class="background-overlay"></div>
            <div class="carousel-caption">
                <h5 class="display-4 h4-md mb-4 font-weight-bold text-white">
                    {{ $slid?->title }}
                </h5>
                <p class="h4 mb-5 pb-3 text-white">
                    {{ $slid?->descriptions }}
                </p>
                @if($slid->button_name)
                    <a href="" class="btn btn-lg btn-danger text-white">View More</a>
                @endif
            </div>
        </div>
        @endforeach
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<div class="p-5 text-center font-weight-bold h3 bg-black m-0">0
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 d-flex justify-content-md-end mb-4 mb-md-0 flex-column">
                <span class="action-title text-color-white">Call Us Now</span>
                <a class="text-decoration-none" href="tel:+00112304567" target="_blank" title="Call Us Now">
                    {{ get_setting('phone') }}
                </a>
            </div>
            <div class="col-md-6 col-lg-6">
                <a class="text-decoration-none" href="mail:{{ get_setting('email') }}" target="_blank" title="Email Us Now">
                <span class="custom-call-to-action">
                    <span class="action-title text-white">Email Us Now</span>
                    <span class="action-info text-color-light">
                        <a href="mailto:{{ get_setting('email') }}" class="__cf_email__"
                           data-cfemail="90fdf1f9fcd0f5e8f1fde0fcf5bef3fffd">
                             {{ get_setting('email') }}
                        </a>
                    </span>
                </span>
                </a>
            </div>
        </div>
    </div>
</div>
