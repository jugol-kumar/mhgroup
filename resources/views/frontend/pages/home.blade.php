@extends('frontend.app')

@section('content')
{{--    @include('frontend.components.carosel',['sliders' => $sliders])--}}
    @include('frontend.components.bootstrap_carosel', ['sliders' => $sliders])
    @include('frontend.components.home_content')
    @include('frontend.components.home_video')
    @include('frontend.components.bg_video')
    @include('frontend.components.expertises')
    @include('frontend.components.map')
{{--    youtube videows --}}
{{--    @include('frontend.components.about_us')
    @include('frontend.components.our_cases')
    @include('frontend.components.testimonials')
    @include('frontend.components.our_team')
    @include('frontend.components.looking_for')
    @include('frontend.components.blogs')--}}
    @include('frontend.partials.main_footer')
@endsection
