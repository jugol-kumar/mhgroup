<style>
    .owl-item-overlay::before{
        content: '';
        width: 100%;
        height: 100%;
        background: #27242bad;
        position: absolute;
    }
</style>

<div class="owl-carousel owl-carousel-light owl-carousel-light-init-fadeIn owl-theme manual dots-inside dots-horizontal-center show-dots-hover show-dots-xs show-dots-sm show-dots-md dots-light custom-nav-arrows-1 nav-dark nav-md nav-font-size-md show-nav-hover mb-0" data-plugin-options="{'autoplayTimeout': 9000}" style="height: 100vh;">
    <div class="owl-stage-outer">
        <div class="owl-stage ">
            @forelse($sliders as $slid)
                <div class="owl-item-overlay owl-item position-relative"
                     style="background-image: url({{ '/storage/'.$slid?->bg_image }}); background-size: cover; background-position: center;">
                    <div class="container position-relative z-index-3 pb-5 h-100">
                        <div class="row align-items-center pb-5 h-100">
                            <div class="col-7">
                                <h1 class="custom-secondary-font text-color-light font-weight-extra-bold text-8 line-height-1 mb-2 line-height-sm-3 appear-animation"
                                    data-appear-animation="fadeInLeftShorterPlus" data-appear-animation-delay="500"
                                    data-plugin-options="{'minWindowWidth': 0}">
                                    <span class="custom-secondary-font text-4-5 ms-2">
                                        {{ $slid?->title }}
                                    </span>
                                </h1>
                                <p class="my-0 py-0 text-white mb-5" data-appear-animation="fadeInLeftShorterPlus" data-appear-animation-delay="1100">
                                    {{ $slid?->descriptions }}
                                </p>
                                @if($slid?->button_name )
                                    <a href="#" class="btn btn-primary btn-modern font-weight-bold text-2 py-3 btn-px-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1500">{{ $slid?->button_name ?? 'Get Started'   }}</a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="owl-item-overlay owl-item position-relative"
                     style="background-image: url({{ asset('assets/frontend') }}/img/banners/banner-1.avif); background-size: cover; background-position: center;">
                    <div class="container position-relative z-index-3 pb-5 h-100">
                        <div class="row align-items-center pb-5 h-100">
                            <div class="col-7">
                                <h1 class="custom-secondary-font text-color-light font-weight-extra-bold text-8 line-height-1 mb-2 line-height-sm-3 appear-animation"
                                    data-appear-animation="fadeInLeftShorterPlus" data-appear-animation-delay="500"
                                    data-plugin-options="{'minWindowWidth': 0}">
                        <span class="custom-secondary-font text-4-5 ms-2">
                            MH-GROUP SLIDER ITEM - 1
                        </span>
                                </h1>
                                <p class="my-0 py-0 text-white mb-5" data-appear-animation="fadeInLeftShorterPlus" data-appear-animation-delay="1100">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium eius natus officia porro recusandae unde!</p>
                                <a href="#" class="btn btn-primary btn-modern font-weight-bold text-2 py-3 btn-px-4 appear-animation"
                                   data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1500">GET STARTED</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-item-overlay owl-item position-relative"
                         style="background-image: url({{ asset('assets/frontend') }}/img/banners/banner-2.avif); background-size: cover; background-position: center;">
                        <div class="container position-relative z-index-3 pb-5 h-100">
                            <div class="row align-items-center pb-5 h-100">
                                <div class="col-7">
                                    <h1 class="custom-secondary-font text-color-light font-weight-extra-bold text-8 line-height-1 mb-2 line-height-sm-3 appear-animation"
                                        data-appear-animation="fadeInLeftShorterPlus" data-appear-animation-delay="500"
                                        data-plugin-options="{'minWindowWidth': 0}">
                            <span class="custom-secondary-font text-4-5 ms-2">
                                MH-GROUP SLIDER ITEM - 2
                            </span>
                                    </h1>
                                    <p class="my-0 py-0 text-white mb-5" data-appear-animation="fadeInLeftShorterPlus"
                                       data-appear-animation-delay="1100">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium eius natus officia porro recusandae unde!</p>
                                    <a href="#" class="btn btn-primary btn-modern font-weight-bold text-2 py-3 btn-px-4 appear-animation"
                                       data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1500">GET STARTED</a>
                                </div>
                            </div>
                        </div>
                    </div>
            @endforelse
        </div>
    </div>
    <div class="owl-nav">
        <button type="button" role="presentation" class="owl-prev" aria-label="Previous"></button>
        <button type="button" role="presentation" class="owl-next" aria-label="Next"></button>
    </div>
</div>

<section class="looking-for custom-position-1 custom-md-border-top z-index-1">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-3 d-flex justify-content-md-end mb-4 mb-md-0">
                <a class="text-decoration-none" href="tel:+00112304567" target="_blank" title="Call Us Now">
                    <span class="custom-call-to-action">
                        <span class="action-title text-color-primary">Call Us Now</span>
                        <a href="tel:+88017556599459" class="action-info text-color-light">{{ get_setting('phone') }}</a>
                    </span>
                </a>
            </div>
            <div class="col-md-3 col-lg-2">
                <a class="text-decoration-none" href="mail:{{ get_setting('email') }}" target="_blank" title="Email Us Now">
                    <span class="custom-call-to-action">
                        <span class="action-title text-color-primary">Email Us Now</span>
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
</section>
