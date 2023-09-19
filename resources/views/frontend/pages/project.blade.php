@extends('frontend.app')
@section('content')
    <div id="ourstory" class="about-section" style="background-image: url({{ asset('assets/frontend') }}/img/banners/banner-1.avif); height: 50vh; background-size: cover; background-position: center;">
        <div class="text-white"
             data-appear-animation="fadeInLeftShorterPlus"
             data-appear-animation-delay="300">
                <h1 data-appear-animation="fadeInLeftShorterPlus"
                    data-appear-animation-delay="500"
                    class="display-3 text-capitalize shadow-text shadow-text">Proejcts</h1>
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
                                <div class="bg-white">
                                    <div class="overflow-hidden">
                                        <img class="w-100 project-image" style="object-fit: cover; height: 350px" src="{{ '/storage/'.$project->image }}" alt="">
                                    </div>
                                    <div class="text-center p-3">
                                        <strong class="fs-4 m-0 text-black">{{ $project->title }}</strong>
                                        <p class="m-0">{{ $project->location }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
        @endif
    @endforeach

@endsection
