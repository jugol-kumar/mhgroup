@extends('frontend.app')
@push('css')
    <style>
        .con-image{
            position: relative;
            z-index: 1;
            overflow: hidden;
        }
        .con-image img{
            transition: 1s all ease-in-out;
        }
        .con-image img:hover{
            transform: scale(1.2);
        }
        .main-con-content{
            position: relative;
            top: -7rem;
        }

        .main-con-content .card{
            background: #f3fffe;
            border: 0;
            box-shadow: 1px 2px 27px -17px gray;
            min-height: 100vh;
        }
        .contact-card{
            border: 1px dashed black;
            background: none;
            border-spacing: 2px;
            min-height: 500px;
        }
        .contact-card h2{
            top: -4rem;
            background: white;
            padding: 10px;
        }
    </style>
@endpush
@section('content')
    <div id="ourstory" class="about-section" style="background-image: url({{ asset('assets/frontend') }}/img/banners/banner-1.avif); height: 50vh; background-size: cover; background-position: center;">
        <div class="text-white"
             data-appear-animation="fadeInLeftShorterPlus"
             data-appear-animation-delay="300">
            <h1 data-appear-animation="fadeInLeftShorterPlus"
                data-appear-animation-delay="500"
                class="display-3 text-capitalize fw-bold text-white">Our Concern</h1>
        </div>
    </div>

    <div class="container-lg">
        <div class="row">
            <div class="col-md-6">
                <h1 class="fw-normal display-3 mt-5">{{ json_decode(get_setting('concern_message'))?->section_title ?? 'Hm Group Company'}}</h1>
            </div>
            <div class="col-md-6">
                <div class="w-100 h-100 con-image">
                    <img class="w-100 h-100" src="/storage/{{ get_setting('concern_image') }}" alt="">
                </div>
            </div>
        </div>
        <div class="row mt-5 my-5">
            <div class="col-md-9 position-relative main-con-content">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">Overview</h2>
                        <p>
                            {{ json_decode(get_setting('concern_message'))?->section_description }}
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mt-5">
                <div class="card contact-card">
                    <div class="card-body">
                        <h2 class="position-relative">Business Contact</h2>
                        <div class="">
                            <div>
                                <p class="fw-semibold m-0">Office Address</p>
                                <p>{{ get_setting('address') }}</p>
                            </div>
                            <div>
                                <p class="fw-semibold m-0">Phone Number</p>
                                <p class="m-0">{{ get_setting('phone') }}</p>
                                <p>{{ get_setting('phone_second') }}</p>
                            </div>

                            <div>
                                <p class="fw-semibold m-0">Email</p>
                                <p>{{ get_setting('email') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
