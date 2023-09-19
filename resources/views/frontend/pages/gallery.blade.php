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


    <section>
        <ul class="nav nav-tabs d-flex w-100" id="myTab" role="tablist">
            <button class="nav-link active w-50 fs-3 fw-bolder" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Photos</button>
            <button class="nav-link w-50 fs-3 fw-bolder" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Videos</button>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                home content
            </div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                projects
            </div>
        </div>
    </section>

@endsection
