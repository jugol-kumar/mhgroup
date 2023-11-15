@extends('frontend.app')
@section('content')
    <div id="ourstory" class="about-section" style="background-image: url({{ asset('assets/frontend') }}/img/banners/banner-1.avif); height: 50vh; background-size: cover; background-position: center;">
        <div class="text-white"
             data-appear-animation="fadeInLeftShorterPlus"
             data-appear-animation-delay="300">
                <h1 data-appear-animation="fadeInLeftShorterPlus"
                    data-appear-animation-delay="500"
                    class="display-3 text-capitalize shadow-text shadow-text">Project</h1>
        </div>
    </div>

    @foreach($category as $category)
        @if($category->projects->count())
            <section style="background: #eaeaea">
                <div class="container-lg">
                    <div class="text-white"
                         data-appear-animation="fadeInLeftShorterPlus"
                         data-appear-animation-delay="300">
                        <h1 data-appear-animation="fadeInLeftShorterPlus"
                            data-appear-animation-delay="500"
                            class="text-capitalize text-black">{{ $category->title }}</h1>
                    </div>
                    <div class="row">
                        @foreach($category->projects as $project)
                            <div class="col-md-3 mb-4">
                                @include("frontend.components.single_project_card")
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
        @endif
    @endforeach

@endsection
