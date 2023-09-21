@extends('frontend.app')
@push('css')
    <style>
        .video_frincybox{
            height:auto !important;
        }
/*        .readMore{
            background:red;
            border-radius: 50px !important;
        }*/
    </style>
@endpush
@section('content')
    <div id="ourstory" class="about-section" style="background-image: url({{ asset('assets/frontend') }}/img/banners/banner-1.avif); height: 50vh; background-size: cover; background-position: center;">
        <div class="text-white"
             data-appear-animation="fadeInLeftShorterPlus"
             data-appear-animation-delay="300">
            <h1 data-appear-animation="fadeInLeftShorterPlus"
                data-appear-animation-delay="500"
                class="display-3 text-capitalize shadow-text shadow-text">News & Events</h1>
        </div>
    </div>


    <section style="background: #eaeaea">
        <div class="container-fluid py-5">
            <div class="d-flex flex-column gap-4">
                <div class="row match-height">
                    <div class="col-md-7">
                        <div class="card">
                            <div class="card-body">
                                <h2 class="card-title">DIFE Certified</h2>
                                <div>
                                    <p>Qtex Solutions Ltd. has achieved Department of Inspection for Factories and Establishments (DIFE) approval for Pressure Vessel & Lifting Equipment Inspection in December, 2018.</p>
                                    <p>Qtex Solutions Ltd. has achieved Department of Inspection for Factories and Establishments (DIFE) approval for Pressure Vessel & Lifting Equipment Inspection in December, 2018.</p>
                                    <p>Qtex Solutions Ltd. has achieved Department of Inspection for Factories and Establishments (DIFE) approval for Pressure Vessel & Lifting Equipment Inspection in December, 2018.</p>
                                </div>
                                <button class="btn readMore btn-danger">Read More...</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="card">
                            <div class="card-body">
                                <img class="w-100 h-100" src="{{ asset('event.webp') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row match-height">
                    <div class="col-md-5">
                        <div class="card">
                            <div class="card-body">
                                <img class="w-100 h-100" src="{{ asset('event.webp') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="card">
                            <div class="card-body">
                                <h2 class="card-title">DIFE Certified</h2>
                                <div>
                                    <p>Qtex Solutions Ltd. has achieved Department of Inspection for Factories and Establishments (DIFE) approval for Pressure Vessel & Lifting Equipment Inspection in December, 2018.</p>
                                    <p>Qtex Solutions Ltd. has achieved Department of Inspection for Factories and Establishments (DIFE) approval for Pressure Vessel & Lifting Equipment Inspection in December, 2018.</p>
                                    <p>Qtex Solutions Ltd. has achieved Department of Inspection for Factories and Establishments (DIFE) approval for Pressure Vessel & Lifting Equipment Inspection in December, 2018.</p>
                                </div>
                                <button class="btn readMore btn-danger">Read More...</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
