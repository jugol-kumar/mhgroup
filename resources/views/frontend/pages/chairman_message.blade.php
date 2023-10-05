@extends('frontend.app')
@section('content')


<div id="ourstory" class="about-section" style="background-image: url({{ asset('assets/frontend') }}/img/banners/banner-1.avif); height: 50vh; background-size: cover; background-position: center;">
    <div class="text-white page-title"
         data-appear-animation="fadeInLeftShorterPlus"
         data-appear-animation-delay="300">
        <h1 data-appear-animation="fadeInLeftShorterPlus"
            data-appear-animation-delay="500"
            class="display-3 text-capitalize shadow-text shadow-text">Chairman Message
        </h1>
    </div>
</div>


<section class="py-5" style="background: #eaeaea">
    <div class="container-lg main-content text-black mt-0"
         data-appear-animation="fadeInLeftShorterPlus"
         data-appear-animation-delay="300">
        <div class="row match-height">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        @if(json_decode(get_setting('chairman_message'))?->section_title)
                            <h1 data-appear-animation="fadeInLeftShorterPlus"
                                data-appear-animation-delay="500"
                                class="display-3 text-capitalize">{{ json_decode(get_setting('chairman_message'))?->section_title }}</h1>
                        @endif

                        @if(json_decode(get_setting('chairman_message'))?->section_description)
                            <p class="text-justify text-black"
                               data-appear-animation="fadeInLeftShorterPlus"
                               data-appear-animation-delay="800" >
                                {{ json_decode(get_setting('chairman_message'))?->section_description }}
                            </p>
                        @endif

                        @if(json_decode(get_setting('chairman_message'))?->footer_text )
                            <h4 class="header-before text-black d-flex align-items-end justify-content-center text-capitalize"
                                data-appear-animation="fadeInLeftShorterPlus"
                                data-appear-animation-delay="1100">{{  json_decode(get_setting('chairman_message'))?->footer_text  }}</h4>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <img class="w-100 h-100" style="object-fit:cover" src="/storage/{{ get_setting('profile') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
