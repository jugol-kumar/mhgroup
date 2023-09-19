@extends('frontend.app')
@section('content')
    <div id="ourstory" class="about-section" style="background-image: url({{ asset('assets/frontend') }}/img/banners/banner-1.avif); height: 50vh; background-size: cover; background-position: center;">
        <div class="text-white"
             data-appear-animation="fadeInLeftShorterPlus"
             data-appear-animation-delay="300">
            <h1 data-appear-animation="fadeInLeftShorterPlus"
                data-appear-animation-delay="500"
                class="display-3 text-capitalize shadow-text shadow-text">Galleries</h1>
        </div>
    </div>


    <section style="background: #eaeaea">
        <ul class="nav nav-tabs d-flex w-100" id="myTab" role="tablist">
            <button class="nav-link active w-50 fs-3 fw-bolder" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Photos</button>
            <button class="nav-link w-50 fs-3 fw-bolder" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Videos</button>
        </ul>
        <div class="tab-content container bg-transparent" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                <div class="row">
                    @foreach($images as $image)
                        <div class="col-md-3 mb-4">
                            <div class="bg-white">
                                <div class="overflow-hidden">
                                    <img class="w-100 project-image" style="object-fit: cover; height: 200px" src="{{ '/storage/'.$image->thumb }}" alt="">
                                </div>
                                <div class="text-center p-1">
                                    <strong class="fs-6 m-0 text-black">{{ $image->title }}</strong>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <div class="row">
                    @foreach($videos as $image)
                        <div class="col-md-3 mb-4">
                            <div class="bg-white">
                                <div class="overflow-hidden">
                                    <img class="w-100 project-image" style="object-fit: cover; height: 200px" src="{{ '/storage/'.$image->thumb }}" alt="">
                                </div>
                                <div class="text-center p-1">
                                    <strong class="fs-6 m-0 text-black">{{ $image->title }}</strong>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

@endsection
