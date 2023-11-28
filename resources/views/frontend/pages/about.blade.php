@extends('frontend.app')
@section('content')



    <div class="bg-black" style="min-height:50vh; padding-top:10rem">
        <div class="container d-flex align-items-center justify-content-center">
            <h1 class="text-white display-3">About</h1>
        </div>
    </div>

    <div class="py-5" id="ourstory" style="min-height:70vh;background:#484848">
        <div class="container d-flex align-items-center justify-content-center">
            <div class="text-white"
                 data-appear-animation="fadeInLeftShorterPlus"
                 data-appear-animation-delay="300">
                @if(json_decode(get_setting('about_section'))?->section_title)
                    <h1 data-appear-animation="fadeInLeftShorterPlus"
                        data-appear-animation-delay="500"
                        class="text-capitalize text-white">{{ json_decode(get_setting('about_section'))?->section_title }}</h1>
                @endif

                @if(json_decode(get_setting('about_section'))?->section_description)
                    <p class="text-justify text-white"
                       data-appear-animation="fadeInLeftShorterPlus"
                       data-appear-animation-delay="800" >
                        {!! nl2br(json_decode(get_setting('about_section'))?->section_description)  !!}
                    </p>
                @endif

                @if(json_decode(get_setting('about_section'))?->footer_text )
                    <h4 class="header-before text-white d-flex align-items-end justify-content-center text-capitalize"
                        data-appear-animation="fadeInLeftShorterPlus"
                        data-appear-animation-delay="1100">{{  json_decode(get_setting('about_section'))?->footer_text  }}</h4>
                @endif
            </div>
        </div>
    </div>
    <div class="py-5 bg-black" id="aspiration&vision" style="min-height:70vh;">
        <div class="container d-flex align-items-center justify-content-center">
            <div class="text-white"
                 data-appear-animation="fadeInLeftShorterPlus"
                 data-appear-animation-delay="300">
                @if(json_decode(get_setting('aspiration_vision'))?->section_title)
                    <h1 data-appear-animation="fadeInLeftShorterPlus"
                        data-appear-animation-delay="500"
                        class="text-capitalize text-white">{{ json_decode(get_setting('aspiration_vision'))?->section_title }}</h1>
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
    </div>
    <div class="py-5" id="management" style="min-height:150vh; background:#484848">
        <div class="container d-flex align-items-center justify-content-center">
            <div class="row match-height">
                @foreach($juniorEmp as $key => $emp)
                    <div class="col-md-4 mt-4"
                         style="margin-top:14rem !important;"
                         data-appear-animation="fadeInLeftShorterPlus"
                         data-appear-animation-delay="{{ $key }}00">
                        <div class="card single-user-card">
                            <div class="card-img-top">
                                <img class="card-img-top" src="{{ '/storage/'.$emp->image  }}" alt="Card image cap">
                            </div>
                            <div class="card-body">
                                <h1 class="text-capitalize">{{ $emp->name }}</h1>
                                <h5 class="text-capitalize">{{ $emp->designation }}</h5>
                                <p class="text-justify">{{ $emp->about }}</p>
{{--                                <a href="">read more</a>--}}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="py-5 bg-black" id="strenth">
        <div class="container d-flex align-items-center justify-content-center">
            <div class="row match-height">
                <h1 class="text-white">Senior Management</h1>
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
{{--                            <div class="card-footer bg-black">--}}
{{--                                <a href="">manage</a>--}}
{{--                            </div>--}}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="py-5" id="qpolicy" style="min-height:70vh;background:#484848">
        <div class="container d-flex align-items-center">
            <div class="text-white"
                 data-appear-animation="fadeInLeftShorterPlus"
                 data-appear-animation-delay="300">
                @if(json_decode(get_setting('quick_policy'))?->section_title)
                    <h1 data-appear-animation="fadeInLeftShorterPlus"
                        data-appear-animation-delay="500"
                        class="text-capitalize text-white">{{ json_decode(get_setting('quick_policy'))?->section_title }}</h1>
                @endif

                @if(json_decode(get_setting('quick_policy'))?->section_description)
                    <p class="text-justify text-white"
                       data-appear-animation="fadeInLeftShorterPlus"
                       data-appear-animation-delay="800" >
                        {!! nl2br(json_decode(get_setting('quick_policy'))?->section_description) !!}
                    </p>
                @endif

                @if(json_decode(get_setting('quick_policy'))?->footer_text )
                    <h4 class="header-before text-white d-flex align-items-end justify-content-center text-capitalize"
                        data-appear-animation="fadeInLeftShorterPlus"
                        data-appear-animation-delay="1100">{{  json_decode(get_setting('quick_policy'))?->footer_text  }}</h4>
                @endif
            </div>
        </div>
    </div>
@endsection
