@extends('frontend.app')
@section('content')
    <div id="ourstory" class="about-section" style="background-image: url({{ asset('assets/frontend') }}/img/banners/banner-1.avif); background-size: cover; background-position: center;">
        <div class="main-content text-white sm-mt-4rem"
             data-appear-animation="fadeInLeftShorterPlus"
             data-appear-animation-delay="300">
            @if(json_decode(get_setting('about_section'))?->section_title)
            <h1 data-appear-animation="fadeInLeftShorterPlus"
                data-appear-animation-delay="500"
                class="display-3 text-capitalize shadow-text shadow-text">{{ json_decode(get_setting('about_section'))?->section_title }}</h1>
            @endif

            @if(json_decode(get_setting('about_section'))?->section_description)
            <p class="text-justify text-white"
               data-appear-animation="fadeInLeftShorterPlus"
               data-appear-animation-delay="800" >
                {{ json_decode(get_setting('about_section'))?->section_description }}
            </p>
            @endif

            @if(json_decode(get_setting('about_section'))?->footer_text )
            <h4 class="header-before text-white d-flex align-items-end justify-content-center text-capitalize"
                data-appear-animation="fadeInLeftShorterPlus"
                data-appear-animation-delay="1100">{{  json_decode(get_setting('about_section'))?->footer_text  }}</h4>
            @endif
        </div>
    </div>

    <div id="aspiration&vision" class="about-section" style="background-image: url({{ asset('assets/frontend') }}/img/banners/banner-2.avif); background-size: cover; background-position: center;">
        <div class="main-content text-white"
             data-appear-animation="fadeInLeftShorterPlus"
             data-appear-animation-delay="300">
            @if(json_decode(get_setting('aspiration_vision'))?->section_title)
                <h1 data-appear-animation="fadeInLeftShorterPlus"
                    data-appear-animation-delay="500"
                    class="display-3 text-capitalize shadow-text shadow-text">{{ json_decode(get_setting('aspiration_vision'))?->section_title }}</h1>
            @endif

            @if(json_decode(get_setting('aspiration_vision'))?->section_description)
                <p class="text-justify text-white"
                   data-appear-animation="fadeInLeftShorterPlus"
                   data-appear-animation-delay="800" >
                    {{ json_decode(get_setting('aspiration_vision'))?->section_description }}
                </p>
            @endif

            @if(json_decode(get_setting('aspiration_vision'))?->footer_text )
                <h4 class="header-before text-white d-flex align-items-end justify-content-center text-capitalize"
                    data-appear-animation="fadeInLeftShorterPlus"
                    data-appear-animation-delay="1100">{{  json_decode(get_setting('aspiration_vision'))?->footer_text  }}</h4>
            @endif
        </div>
    </div>

    <div id="management" class="our-team">
        <div class="container position-relative">
            <div class="row">
                @foreach($juniorEmp as $key => $emp)
                    <div class="col-md-4 mt-4"
                             data-appear-animation="fadeInLeftShorterPlus"
                             data-appear-animation-delay="{{ $key }}00">
                        <div class="card single-user-card">
                            <div class="card-img-top">
                                <img class="card-img-top" src="{{ '/storage/'.$emp->image  }}" alt="Card image cap">
                            </div>
                            <div class="card-body">
                                <h1 class="text-capitalize">{{ $emp->name }}</h1>
                                <h5 class="text-capitalize">{{ $emp->designation }}</h5>
                                <p>{{ Str::limit($emp->about, 80)  }}</p>
                                <a href="">read more</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div id="strenth" class="members bg-black">
        <div class="container position-relative">
            <h1 class="display-2 shadow-text"
                data-appear-animation="fadeInLeftShorterPlus"
                data-appear-animation-delay="500">Senior Management</h1>
            <div class="row match-height position-relative">
                @foreach($sinEmp as $key => $emp)
                    <div class="col-md-3 mt-4"
                         data-appear-animation="fadeInLeftShorterPlus"
                         data-appear-animation-delay="{{ $key }}00">
                        <div class="card border-0">
                            <div class="card-img-top">
                                <img class="card-img-top" src="{{ '/storage/'.$emp->image  }}" height="200" style="object-fit: cover" alt="Card image cap">

                            </div>
                            <div class="card-body">
                                <h1 class="mb-0 text-black fw-bold">{{ $emp->name }}</h1>
                                <p>{{ Str::limit($emp->about, 80)  }}</p>
                            </div>
                            <div class="card-footer bg-black">
                                <a href="">manage</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>



    <div class="our-gallery">
        <h1 class="display-2 shadow-text">Our Team</h1>
        <div class="row">
            @foreach($galleries as $img)
                <div class="col">
                    <img src="{{ '/storage/'.$img->image }}" class="w-100" alt="">
                </div>
            @endforeach
        </div>
    </div>


    <div class="about-section" style="background-image: url({{ asset('assets/frontend') }}/img/banners/banner-1.avif); background-size: cover; background-position: center;">
        <div class="main-content text-white mt-0"
             data-appear-animation="fadeInLeftShorterPlus"
             data-appear-animation-delay="300">
            @if(json_decode(get_setting('chairman_message'))?->section_title)
                <h1 data-appear-animation="fadeInLeftShorterPlus"
                    data-appear-animation-delay="500"
                    class="display-3 text-capitalize shadow-text shadow-text">{{ json_decode(get_setting('chairman_message'))?->section_title }}</h1>
            @endif

            @if(json_decode(get_setting('chairman_message'))?->section_description)
                <p class="text-justify text-white"
                   data-appear-animation="fadeInLeftShorterPlus"
                   data-appear-animation-delay="800" >
                    {{ json_decode(get_setting('chairman_message'))?->section_description }}
                </p>
            @endif

            @if(json_decode(get_setting('chairman_message'))?->footer_text )
                <h4 class="header-before text-white d-flex align-items-end justify-content-center text-capitalize"
                    data-appear-animation="fadeInLeftShorterPlus"
                    data-appear-animation-delay="1100">{{  json_decode(get_setting('chairman_message'))?->footer_text  }}</h4>
            @endif
        </div>
    </div>


    <div id="qpolicy" class="about-section" style="background-image: url({{ asset('assets/frontend') }}/img/banners/banner-2.avif); background-size: cover; background-position: center;">
        <div class="main-content text-white mt-0"
             data-appear-animation="fadeInLeftShorterPlus"
             data-appear-animation-delay="300">
            @if(json_decode(get_setting('quick_policy'))?->section_title)
                <h1 data-appear-animation="fadeInLeftShorterPlus"
                    data-appear-animation-delay="500"
                    class="display-3 text-capitalize shadow-text shadow-text">{{ json_decode(get_setting('quick_policy'))?->section_title }}</h1>
            @endif

            @if(json_decode(get_setting('quick_policy'))?->section_description)
                <p class="text-justify text-white"
                   data-appear-animation="fadeInLeftShorterPlus"
                   data-appear-animation-delay="800" >
                    {{ json_decode(get_setting('quick_policy'))?->section_description }}
                </p>
            @endif

            @if(json_decode(get_setting('quick_policy'))?->footer_text )
                <h4 class="header-before text-white d-flex align-items-end justify-content-center text-capitalize"
                    data-appear-animation="fadeInLeftShorterPlus"
                    data-appear-animation-delay="1100">{{  json_decode(get_setting('quick_policy'))?->footer_text  }}</h4>
            @endif
        </div>
    </div>
@endsection
