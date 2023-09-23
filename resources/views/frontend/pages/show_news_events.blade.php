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
    <section style=" min-height: inherit;">
        <div class="container py-5">
            <div class="border-bottom">
                <h1 class="card-title fw-bold">{{ $post?->title }}</h1>

                <div class="d-flex gap-2 align-items-baseline">
                    <i class="fa fa-clock"></i>
                    <p>{{ $post->created_at->diffForHumans() }}</p>
                </div>
            </div>

            <div class="mt-5">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <img class="w-100" src="{{ Storage::url($post->image) }}" alt="">
                        <div class="mt-3">
                            {!! $post->details !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
