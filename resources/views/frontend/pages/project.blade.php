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
            <section>
                <div class="text-white text-center"
                     data-appear-animation="fadeInLeftShorterPlus"
                     data-appear-animation-delay="300">
                    <h1 data-appear-animation="fadeInLeftShorterPlus"
                        data-appear-animation-delay="500"
                        class="display-3 text-capitalize shadow-text shadow-text text-black">{{ $category->title }}</h1>
                </div>

                <div class="container-lg">
                    <div class="row match-height">
                        @foreach($category->projects as $project)
                            <div class="col-md-6">
                                <img class="w-100" style="object-fit: cover; height: 350px" src="{{ '/storage/'.$project->image }}" alt="">
                                <h2>{{ $project->title }}</h2>
                            </div>
                        @endforeach
                    </div>
                </div>

            </section>
        @endif
    @endforeach

@endsection
