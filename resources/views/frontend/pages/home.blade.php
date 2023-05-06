@extends('frontend.app')

@section('content')
    @include('frontend.components.carosel')
    @include('frontend.components.about_us')
    @include('frontend.components.expertises')
    @include('frontend.components.our_cases')
    @include('frontend.components.testimonials')
    @include('frontend.components.our_team')
    @include('frontend.components.looking_for')
    @include('frontend.components.blogs')
    @include('frontend.partials.main_footer')
@endsection
