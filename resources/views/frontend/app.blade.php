@include('frontend.partials.head')
<div class="body">
    <div id="preeloader" class="d-flex align-items-center justify-content-center">
        <div class="position-relative">
            <img alt="{{ config("app.name") }}" src="{{ asset('assets/frontend') }}/images/ringLoader.svg">
            <img alt="{{ config("app.name") }}"
                 class="loader-logo" src="{{ get_setting('header_logo') ? '/storage/'.get_setting('header_logo') : asset('assets/frontend/img/logo.png') }}">
        </div>
    </div>

  @include('frontend.partials.header', ['trans' => false])
{{--    @include('frontend.partials.bootstrap_nav')--}}
    <div role="main" class="main min-vh-100">
        @yield('content')
    </div>
    @include('frontend.partials.copyright')


{{--

{{--<!-- Button trigger modal -->--}}
{{--    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">--}}
{{--        Launch demo modal--}}
{{--    </button>--}}


    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="text-danger">Welcome To MH-Group</h2>
                    <button type="button" class="btn-close float-end" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <input type="text" class="form-control rounded-0 my-2" placeholder="e.g john doh">
{{--                            <input type="text" class="form-control rounded-0 my-2" placeholder="e.g example@email.com">--}}
                            <input type="text" class="form-control rounded-0 my-2" placeholder="+88 01* *** ******">
                            <button class="btn btn-secondary">Submit</button>
                        </div>
                    </div>
                    <button type="button" class="btn float-end" data-bs-dismiss="modal">Skip</button>
                </div>
            </div>
        </div>
    </div>
</div>


@include('frontend.partials.foot')

<script>
    Fancybox.bind('[data-fancybox]', {
        // Custom options
    });
</script>
@include('sweetalert::alert')
