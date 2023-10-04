@extends('frontend.app')

@push('css')
    <link rel='stylesheet' href='https://unpkg.com/swiper@6.0.2/swiper-bundle.min.css'>
    <link rel='stylesheet' href="{{ asset('assets/frontend') }}/css/swipper.css"></link>
    <style>
        html, body {
            scroll-behavior: smooth !important;
        }
        .slider-top{
            padding-top:10rem;
        }
        .mySwiper .swiper-slide img{
            max-height:35rem;
            object-fit: cover;
        }
        .slider-bottom-section{
            border-top: 1px solid #3e3d3d;
            border-bottom: 1px solid #3e3d3d;
        }
        .project-header-details{
        }
        .swiper-slide__content {
            height: 300px;
        }
        .bbg{
            background: #595959;
        }
        .wbg{
            background: #b7b7b7;
        }

        .single-feture-box a{
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            text-decoration: none !important;
            text-transform: uppercase;
            font-weight: bold;
            font-size:18px;
            gap:1rem;

            transition: 0.3s all ease-in-out;
        }
        .single-feture-box a svg{
            height: 80px !important;
        }
        .single-feture-box a p{
            color:white !important;
        }
        .single-feture-box a:hover{
            background: gray;
            text-decoration: none !important;
        }
        .thumb-image .main-image{
            border:1px solid whitesmoke;
            padding:5px
        }
        .table .text-right{
            text-align: right;
        }
        .details-table tr td{
            padding:15px;
        }
        .details-table tr td i{
            font-size: 1.5rem;
            width: 26px;
        }
        .details-table tr td:first-child{
            display: flex;
            align-items: center;
            gap:1rem;
        }

        .details-table tr td:first-child span{
            font-weight: 400;
        }
        .image-gallery{
            background: #fff;
            padding-top: 3rem;
            padding-bottom: 7rem;
        }
        .floor-plan img{
            filter: grayscale(10);
            transition: 0.3s all ease;
            cursor: zoom-in;
            object-fit: contain;
        }
        .floor-plan img:hover{
            filter: none;
            transform: scale(1.5);
        }
        .map-location iframe{
            min-height:550px;
        }
        .swipper-carousel .swiper-slide{
            min-height:350px;
            background:pink;
        }
        .similer-projects-bg{
            background:#e8e8e8;
        }
    </style>
@endpush
@section('content')

    <div class="w-100 bg-black py-5">
        <div class="container">
            <div class="slider-top overflow-hidden">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img class="w-100 h-100" src="https://images.pexels.com/photos/3663038/pexels-photo-3663038.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="" />
                        </div>
                  {{--      <div class="swiper-slide">
                            <img class="w-100 h-100" src="https://images.pexels.com/photos/3663038/pexels-photo-3663038.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="" />
                        </div>
                        <div class="swiper-slide">
                            <img class="w-100 h-100" src="https://images.pexels.com/photos/3663038/pexels-photo-3663038.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="" />
                        </div>--}}
                    </div>
                </div>
                <div class="mt-3">
                    <h2 class="font-weight-normal text-white text-uppercase">Megha house building</h2>
                </div>
            </div>
            <div class="slider-bottom-section mt-3">
                <div class="project-header-details d-flex align-items-center justify-content-around">
                    @for($i=0; $i< 4; $i++)
                    <div class="p-5 d-flex align-items-center justify-content-center text-center flex-column">
                        <p class="mb-1 fs-6 font-weight-normal text-gray">Location</p>
                        <p class="m-0 p-0 fs-5 text-white">Dhaka</p>
                    </div>
                    @endfor
                </div>
            </div>
        </div>
    </div>
    <div class="bg-white">
        <div class="container">
            <div class="d-flex align-items-center gap-5 py-5">
                <div>
                    <img src="https://btibd.com/wp-content/uploads/2019/04/three-897702-150x150.png.webp" alt="">
                </div>
                <div>
                    <p>Smart living features highlight the lake-facing, palatial 7000+sft units, in Gulshan 2. Stunning amenities paired with top-notch health and wellness facilities enable a high-powered and luxurious lifestyle for its residents. Be a part of the niche and exclusive high-end address with only 14 stylish units. Ask us about adding a ‘fresh air ventilation system’ to your super fancy home!</p>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-black">
        <div class="py-5 container">
            <div class="d-flex gap-1">
                <div class="single-feture-box bbg w-100 d-flex align-items-center justify-content-center" style="height:15rem">
                    <a class="w-100 h-100" href="#atAGlance">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 48 48">
                            <g id="ai-edit-spark--change-edit-modify-pencil-write-writing-artificial-intelligence-ai">
                                <path id="Subtract" fill="#ffffff" fill-rule="evenodd" d="M6.586 6.586C8.146 5.026 9 3.254 9 2h4c0 1.254 0.854 3.024 2.414 4.586C16.974 8.146 18.746 9 20 9v4c-1.254 0 -3.024 0.854 -4.586 2.414C13.854 16.974 13 18.746 13 20h-4c0 -1.254 -0.854 -3.024 -2.414 -4.586C5.026 13.854 3.254 13 2 13v-4c1.254 0 3.024 -0.854 4.586 -2.414ZM17.8 46.006h0.62l0.44 -0.44 18.84 -18.84 -10.92 -10.92 -18.84 18.84 -0.44 0.44v0.62l0 8.8 0 1.5h1.5l8.8 0Zm11.1 -32.32 10.92 10.92 5.24 -5.24 1.06 -1.06 -1.06 -1.06 -8.8 -8.8 -1.06 -1.06 -1.06 1.06 -5.24 5.24Z" clip-rule="evenodd" stroke-width="2"></path>
                            </g>
                        </svg>
                        <p>art a glance</p>
                    </a>
                </div>
                <div class="single-feture-box wbg w-100 d-flex align-items-center justify-content-center" style="height:15rem">
                    <a class="w-100 h-100" href="#fetures">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 48 48" height="48" width="48">
                            <g id="feather-pen--change-edit-feather-modify-quill-write-writing">
                                <path id="Union" fill="#000000" fill-rule="evenodd" d="M11 34.88V22l15.172 -15.832a11.076 11.076 0 1 1 15.66 15.66l-0.7 0.672h-9.26l7.44 -7.44 -2.122 -2.12 -9.56 9.56h-0.008l-3 3h0.006l-11.5 11.5h-0.006l-8.06 8.06 -2.122 -2.12 8.06 -8.06Zm6.372 2.12 11.5 -11.5H38l-12 11.5H17.372Z" clip-rule="evenodd" stroke-width="2"></path>
                            </g>
                        </svg>

                        <p>features</p>
                    </a>
                </div>
                <div class="single-feture-box bbg w-100 d-flex align-items-center justify-content-center" style="height:15rem">
                    <a class="w-100 h-100" href="#exprience">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 48 48" height="48" width="48">
                            <g id="binder-clip--binder-clip-clipper-company-office-supplies-work">
                                <path id="Subtract" fill="#ffffff" fill-rule="evenodd" d="M13 8.5C13 7.12 14.12 6 15.5 6h17a2.5 2.5 0 1 1 0 5H29v7.5h-10V11H15.5c-1.38 0 -2.5 -1.12 -2.5 -2.5ZM15 16v-1.02A6.5 6.5 0 0 1 15.5 2h17a6.5 6.5 0 0 1 0.5 12.98V30H36V18.5h9.77l-4.5 27H6.73l-4.5 -27H12V30h3V16Z" clip-rule="evenodd" stroke-width="2"></path>
                            </g>
                        </svg>
                        <p>experience</p>
                    </a>
                </div>
                <div class="single-feture-box wbg w-100 d-flex align-items-center justify-content-center" style="height:15rem">
                    <a class="w-100 h-100" href="javascript:void(0)">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 48 48" height="48" width="48">
                            <g id="building--real-home-tower-building-house-estate">
                                <path id="Union" fill="#000000" fill-rule="evenodd" d="m16 1.172 14 14V42h3V21h14V46H20v-8H12v8H2V15.172l14 -14ZM10 26v4h12v-4H10Zm0 -4V18h12v4H10Z" clip-rule="evenodd" stroke-width="2"></path>
                            </g>
                        </svg>
                        <p>brochure</p>
                    </a>
                </div>
            </div>

            <div class="d-flex gap-1 mt-1">
                <div class="single-feture-box wbg w-100 d-flex align-items-center justify-content-center" style="height:15rem">
                    <a class="w-100 h-100" href="javascript:void(0)">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 48 48" height="48" width="48">
                            <g id="workflow--workflow-arrow-nodes-circle-diamond-direction-plan">
                                <path id="Union" fill="#000000" fill-rule="evenodd" d="m11 1.88 1.06 1.06 7 7 1.06 1.06 -1.06 1.06L13 18.12v4.122h4.096v2.44L11.08 30.694h7.2v1.292l0 4.108h4.694V32h2.44l6.094 6.096 -6.096 6.096h-2.438v-4.096H18.28l0 3.866v1.292H3.72l0 -1.292 0 -11.974 0 -1.292h7.2L4.904 24.68l0 -2.438H9l0 -4.12 -6.06 -6.06 -1.06 -1.06 1.06 -1.062 7 -7 1.06 -1.06Zm17.66 11.12h3.376a7.288 7.288 0 0 0 14.294 -2 7.286 7.286 0 0 0 -14.294 -2H28.66V4.904l-2.44 0L20.126 11l6.096 6.096h2.438V13ZM31.756 38a7.286 7.286 0 1 1 14.572 0 7.286 7.286 0 0 1 -14.572 0Z" clip-rule="evenodd" stroke-width="2"></path>
                            </g>
                        </svg>
                        <p>floor plan</p>
                    </a>
                </div>
                <div class="single-feture-box bbg w-100 d-flex align-items-center justify-content-center" style="height:15rem">
                    <a class="w-100 h-100" href="javascript:void(0)">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 48 48" height="48" width="48">
                            <g id="one-finger-hold">
                                <path id="Subtract" fill="#ffffff" fill-rule="evenodd" d="M6 16a10 10 0 0 1 15 -8.664l2 -3.46A14 14 0 0 0 2 16h4Zm22 -5a9 9 0 1 1 18 0 9 9 0 0 1 -18 0ZM12 10h2a6 6 0 0 1 6 6v7.692l16 7V46H9.95l-6.494 -10.284L12 27.172V10Zm26.5 -0.5V6.624h-3V12.5h5.876v-3H38.5Z" clip-rule="evenodd" stroke-width="2"></path>
                            </g>
                        </svg>
                        <p>docuemnt view</p>
                    </a>
                </div>
                <div class="single-feture-box wbg w-100 d-flex align-items-center justify-content-center" style="height:15rem">
                    <a class="w-100 h-100" href="javascript:void(0)">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 48 48" height="48" width="48">
                            <g id="dial-pad-finger-2--hand-lock-login-padlock-password-textbox-touch-type">
                                <path id="Union" fill="#000000" fill-rule="evenodd" d="M22 4H2v12h20V4Zm0 16H2v12h20v-12Zm23 11V46H26l-6 -7 6 -6v-18h3a4 4 0 0 1 4 4V28l12 3ZM26 4h20v12h-10.674A7 7 0 0 0 29 12H26V4Z" clip-rule="evenodd" stroke-width="2"></path>
                            </g>
                        </svg>
                        <p>map</p>
                    </a>
                </div>
                <div class="single-feture-box bbg w-100 d-flex align-items-center justify-content-center" style="height:15rem">
                    <a class="w-100 h-100" href="javascript:void(0)">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 48 48" height="48" width="48">
                            <g id="map-location--map-location-pin-navigation-gps-travel">
                                <path id="Subtract" fill="#ffffff" fill-rule="evenodd" d="M30.428 40.872a32.86 32.86 0 0 0 2.882 2.85c0.72 0.63 1.474 1.206 2.24 1.778 0.762 -0.572 1.518 -1.148 2.236 -1.778 0.784 -0.684 1.832 -1.666 2.884 -2.85 2.034 -2.29 4.38 -5.654 4.38 -9.246a9.5 9.5 0 1 0 -19 0c0 3.592 2.344 6.956 4.378 9.246Zm3.12 -11.246v4h4v-4h-4Z" clip-rule="evenodd" stroke-width="2"></path>
                                <path id="Subtract_2" fill="#ffffff" fill-rule="evenodd" d="M30 20.42a12.448 12.448 0 0 1 5.548 -1.296c1.568 0 3.07 0.29 4.452 0.816V2.034L30 4.4v16.02Zm-4 3.138V4.504L16 2.14v33.4l8.526 2.016c-0.866 -1.776 -1.478 -3.786 -1.478 -5.93 0 -3.076 1.11 -5.89 2.952 -8.068ZM12 2.08 1.656 4.53v33.4L12 35.48V2.08Z" clip-rule="evenodd" stroke-width="2"></path>
                            </g>
                        </svg>
                        <p>more choices</p>
                    </a>
                </div>
            </div>
        </div>
    </div>


    <div class="bg-white py-5" id="atAGlance">
        <div class="container-lg">
            <div class="row match-height">
                <div class="col-md-5 thumb-image">
                    <div class="main-image">
                        <img class="w-100 h-auto object-fit-contain" src="/storage/{{ $project->image }}" alt="">
                    </div>
{{--                    <h2 class="text-uppercase font-weight-medium mt-4">At a glance</h2>--}}
                </div>
                <div class="col-md-7">
                    <div class="border-bottom border-2 border-black">
                        <h2 class="text-uppercase font-weight-medium">At a glance</h2>
                    </div>
                    <table class="details-table mt-4 table w-100 h-auto table-bordered table-striped">
                        <tbody>
                            <tr>
                                <td>
                                    <i class="fas fa-map-marker-alt"></i>
                                    <span>Address</span>
                                </td>
                                <td class="text-right">
                                    <span class="text-capitalize">
                                        Plot-05, Road-03, Mirpur-10, Dhaka
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <i class="fas fa-pencil-ruler"></i>
                                    <span>Land Area</span>
                                </td>
                                <td class="text-right">
                                    <span class="text-capitalize">
                                        Plot-05, Road-03, Mirpur-10, Dhaka
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <i class="fas fa-building"></i>
                                    <span> No. of Floors	</span>
                                </td>
                                <td class="text-right">
                                    <span class="text-capitalize">
                                        Plot-05, Road-03, Mirpur-10, Dhaka
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <i class="fas fa-vihara"></i>
                                    <span>Apartment/Floor</span>
                                </td>
                                <td class="text-right">
                                    <span class="text-capitalize">
                                        Plot-05, Road-03, Mirpur-10, Dhaka
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <i class="fas fa-swatchbook"></i>
                                    <span>Apartment Size</span>
                                </td>
                                <td class="text-right">
                                    <span class="text-capitalize">
                                        Plot-05, Road-03, Mirpur-10, Dhaka
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <i class="fas fa-procedures"></i>
                                    <span>Bedroom</span>
                                </td>
                                <td class="text-right">
                                    <span class="text-capitalize">
                                        Plot-05, Road-03, Mirpur-10, Dhaka
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <i class="fas fa-bath"></i>
                                    <span>Bathroom</span>
                                </td>
                                <td class="text-right">
                                    <span class="text-capitalize">
                                        Plot-05, Road-03, Mirpur-10, Dhaka
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <i class="far fa-calendar-check"></i>
                                    <span>Launch Date</span>
                                </td>
                                <td class="text-right">
                                    <span class="text-capitalize">
                                        Plot-05, Road-03, Mirpur-10, Dhaka
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <i class="fas fa-code-branch"></i>
                                    <span>Collection</span>
                                </td>
                                <td class="text-right">
                                    <span class="text-capitalize">
                                        Plot-05, Road-03, Mirpur-10, Dhaka
                                    </span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <button class="btn bg-black text-white py-2 fs-6">Construction Status</button>
                </div>
            </div>
        </div>
    </div>

    <div class="gallery-wrapper" id="fetures">
        <div class="content">
            <div class="container py-5">
                <div>
                    <h2 class="text-uppercase text-white">FEATURES</h2>
                </div>
            </div>
            <div class="gallery full">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="image">
                                <img src="https://images.pexels.com/photos/3663038/pexels-photo-3663038.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="" />
                            </div>
                            <div class="overlay">
                                <div class="text-wrap">
                                    <div class="caption">
                                        <p>
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto quasi aliquam eius, blanditiis quae, explicabo praesentium corporis tempora quam et rem nulla repellendus placeat, nisi omnis earum sunt suscipit aspernatur!
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="image">
                                <img src="https://images.pexels.com/photos/3551207/pexels-photo-3551207.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="" />
                            </div>

                            <div class="overlay">
                                <div class="text-wrap">
                                    <div class="caption">
                                        <p>
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto quasi aliquam eius, blanditiis quae, explicabo praesentium corporis tempora quam et rem nulla repellendus placeat, nisi omnis earum sunt suscipit aspernatur!
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="image">
                                <img src="https://images.pexels.com/photos/3375493/pexels-photo-3375493.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="" />
                            </div>
                            <div class="overlay">
                                <div class="text-wrap">
                                    <div class="caption">
                                        <p>
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto quasi aliquam eius, blanditiis quae, explicabo praesentium corporis tempora quam et rem nulla repellendus placeat, nisi omnis earum sunt suscipit aspernatur!
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-next-button">
                    <i class="fab fa-chevron-left"></i>
                </div>
                <div class="swiper-prev-button">
                    <i class="fab fa-chevron-right"></i>
                </div>
            </div>
            <div class="gallery thumb">
                <div class="swiper-container">
                    <div class="swiper-wrapper justify-content-center">
                        <div class="swiper-slide">
                            <div class="image">
                                <img src="https://images.pexels.com/photos/3663038/pexels-photo-3663038.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="" />
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="image">
                                <img src="https://images.pexels.com/photos/3551207/pexels-photo-3551207.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="" />
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="image">
                                <img src="https://images.pexels.com/photos/3375493/pexels-photo-3375493.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="" />
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-next-button">
                    <i class="fab fa-arrow-left"></i>
                </div>
                <div class="swiper-prev-button">
                    <i class="fab fa-arrow-right"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="image-gallery" id="exprience">
        <div class="container pb-5">
            <div>
                <h2 class="text-uppercase">Life and Events</h2>
            </div>
        </div>
        <div class="swiper-container gallery-swipper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                    <img class="w-100 h-100" src="https://images.pexels.com/photos/3663038/pexels-photo-3663038.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="" />
                </div>
                <div class="swiper-slide">
                    <img class="w-100 h-100" src="https://images.pexels.com/photos/3663038/pexels-photo-3663038.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="" />
                </div>
                <div class="swiper-slide">
                    <img class="w-100 h-100" src="https://images.pexels.com/photos/3663038/pexels-photo-3663038.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="" />
                </div>
            </div>
            <!-- If we need navigation buttons -->
            <button class="swiper-next-button gallery-swiper-prev btn btn-danger">Next</button>
            <button class="swiper-next-button gallery-swiper-next btn btn-danger">Prev</button>
        </div>
    </div>
    <div class="bg-black">
        <div class="container py-5">
            <div class="mb-5">
                <h2 class="text-uppercase text-white">FLOOR PLANS</h2>
                <div class="row floor-plan">
                    @for($i=0; $i < 8; $i++)
                        <div class="col-md-2 mb-3 overflow-hidden">
                            <img class="w-100 h-100" src="https://images.pexels.com/photos/3663038/pexels-photo-3663038.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="" />
                        </div>
                    @endfor
                </div>
            </div>
            <div class="mt-5 map-location">
                <h2 class="text-uppercase text-white">Map Location</h2>
                <iframe class="w-100 h-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14604.944003271834!2d90.42194549999999!3d23.774608999999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c7a1f33e7d81%3A0xa7d45a97b942ae04!2z4KaV4Ka-4Kao4Ka-4Kah4Ka_4Kef4Ka-4KaoIOCmh-CmieCmqOCmv-CmreCmvuCmsOCnjeCmuOCmv-Cmn-CmvyDgpoXgpqsg4Kas4Ka-4KaC4Kay4Ka-4Kam4KeH4Ka2!5e0!3m2!1sbn!2sbd!4v1696336895756!5m2!1sbn!2sbd" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
    <div class="similer-projects-bg py-5">
        <div class="container overflow-hidden">
            <h2 class="text-uppercase">Also Your Like</h2>
            <div class="swiper swipper-carousel">
                <div class="swiper-wrapper">
                    @foreach($projects as $project)
                        <div class="swiper-slide bg-black border-1 border-primary">
                            @include('frontend.components.single_project_card')
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    @include('frontend.partials.main_footer')
@endsection

@push('js')
    <script src="{{ asset('assets/frontend') }}/js/swiper-bundle.min.js"></script>
    <script src="{{ asset('assets/frontend') }}/js/swipper.js"></script>

    <script>

        window.scrollTo({ top: 3900, behavior: 'smooth' });


        var mySwiper = new Swiper(".gallery-swipper", {
            spaceBetween: 1,
            slidesPerView: 4,
            centeredSlides: true,
            roundLengths: true,
            autoplay:true,
            loop: true,
            loopAdditionalSlides: 30,
            navigation: {
                nextEl: ".gallery-swiper-prev",
                prevEl: ".gallery-swiper-next"
            }
        });
        new Swiper(".mySwiper",{loop:true});

        var swiper = new Swiper('.swipper-carousel', {
            slidesPerView: 3,
            spaceBetween: 15,
            loop:true,
            autoplay:true,
            pagination:true,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    </script>
@endpush