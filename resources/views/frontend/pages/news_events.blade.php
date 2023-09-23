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
                @forelse($posts as $post)
                    @if($loop->index % 2 == 0)
                        <div class="row match-height">
                            <div class="col-md-7">
                                <div class="card">
                                    <div class="card-body">
                                        <h2 class="card-title fw-bold">{{ $post?->title }}</h2>
                                        <div class="d-flex gap-2 align-items-baseline">
                                            <i class="fa fa-clock"></i>
                                            <p>{{ $post->created_at->diffForHumans() }}</p>
                                        </div>
                                        <div>
                                            {!! Str::limit($post?->details, 500) !!}
                                        </div>
                                        <a href="{{ route('showEvent', ['slug' => $post->title, 'id' => $post->id]) }}" class="btn readMore btn-danger">Read More...</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="card">
                                    <div class="card-body">
                                        <img class="w-100 h-100" src="{{ Storage::url($post?->image) }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="row match-height">
                    <div class="col-md-5">
                        <div class="card">
                            <div class="card-body">
                                <img class="w-100 h-100" src="{{ Storage::url($post?->image) }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="card">
                            <div class="card-body">
                                <h2 class="card-title fw-bold">{{ $post?->title }}</h2>
                                <div class="d-flex gap-2 align-items-baseline">
                                    <i class="fa fa-clock"></i>
                                    <p>{{ $post->created_at->diffForHumans() }}</p>
                                </div>
                                <div>
                                    {!! Str::limit($post?->details, 500) !!}
                                </div>
                                <a href="{{ route('showEvent', ['slug' => $post->title, 'id' => $post->id]) }}" class="btn readMore btn-danger">Read More...</a>
                            </div>
                        </div>
                    </div>
                </div>
                    @endif
                @empty
                    <h2>No Post Found</h2>
                @endforelse
                {!! $posts->links() !!}
            </div>
        </div>
    </section>

@endsection
