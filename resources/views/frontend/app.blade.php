@include('frontend.partials.head')
<div class="body">
    <div id="preeloader" class="d-flex align-items-center justify-content-center">
        <img alt="{{ config("app.name") }}" width="82" height="80" src="{{ asset('assets/frontend') }}/img/logo.png">
    </div>
  @include('frontend.partials.header')
    <div role="main" class="main min-vh-100">
        @yield('content')
    </div>
    @include('frontend.partials.copyright')
</div>
@include('frontend.partials.foot')
