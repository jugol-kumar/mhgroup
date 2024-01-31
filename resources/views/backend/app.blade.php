<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->
    @include('backend.partials.head')
    @stack('css')
<!-- END: Head-->

<!-- BEGIN: Body-->
<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static" data-open="click" data-menu="vertical-menu-modern" data-col="">

@include('backend.partials.header')
@include('backend.partials.sidenav')


<!-- BEGIN: Content-->
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        @yield('content')
    </div>
</div>
<!-- END: Content-->

<div class="sidenav-overlay"></div>
<div class="drag-target"></div>


@include('backend.partials.footer')

@include('sweetalert::alert')


<script src="{{ asset('assets/backend') }}/app-assets/vendors/js/vendors.min.js"></script>
<script src="{{ asset('assets/backend') }}/app-assets/js/core/app-menu.js"></script>
<script src="{{ asset('assets/backend') }}/app-assets/js/core/app.js"></script>


{{--<script src="{{ asset('assets/backend') }}/app-assets/vendors/js/editors/quill/katex.min.js"></script>--}}
{{--<script src="{{ asset('assets/backend') }}/app-assets/vendors/js/editors/quill/highlight.min.js"></script>--}}
{{--<script src="{{ asset('assets/backend') }}/app-assets/vendors/js/editors/quill/quill.min.js"></script>--}}
{{--<script src="{{ asset('assets/backend') }}/app-assets/js/scripts/forms/form-quill-editor.js"></script>--}}

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="{{ asset('assets/backend') }}/app-assets/js/script.js"></script>
<script>
    $(window).on('load', function() {
        if (feather) {
            feather.replace({
                width: 14,
                height: 14
            });
        }
    })


    // var editorConfig =  {
    //     formula: true,
    //     syntax: true,
    //     toolbar: [
    //         [
    //             {
    //                 font: []
    //             },
    //             {
    //                 size: []
    //             }
    //         ],
    //         ['bold', 'italic', 'underline', 'strike'],
    //         [
    //             {
    //                 color: []
    //             },
    //             {
    //                 background: []
    //             }
    //         ],
    //         [
    //             {
    //                 script: 'super'
    //             },
    //             {
    //                 script: 'sub'
    //             }
    //         ],
    //         [
    //             {
    //                 header: '1'
    //             },
    //             {
    //                 header: '2'
    //             },
    //             'blockquote',
    //             'code-block'
    //         ],
    //         [
    //             {
    //                 list: 'ordered'
    //             },
    //             {
    //                 list: 'bullet'
    //             },
    //             {
    //                 indent: '-1'
    //             },
    //             {
    //                 indent: '+1'
    //             }
    //         ],
    //         [
    //             'direction',
    //             {
    //                 align: []
    //             }
    //         ],
    //         ['link', 'image', 'video', 'formula'],
    //         ['clean']
    //     ]
    // };

    // var fullEditor = setupQuill('#full-container .editor');
    // if(fullEditor){
    //     fullEditor?.on('text-change', function(delta, oldDelta, source) {
    //         $('#post_details').val(fullEditor.container.firstChild.innerHTML);
    //     });
    // }
    //
    // function setupQuill(mainiD){
    //     return new Quill(mainiD, {
    //         bounds:  mainiD,
    //         modules: {
    //             formula: true,
    //             syntax: true,
    //             toolbar: [
    //                 [
    //                     {
    //                         font: []
    //                     },
    //                     {
    //                         size: []
    //                     }
    //                 ],
    //                 ['bold', 'italic', 'underline', 'strike'],
    //                 [
    //                     {
    //                         color: []
    //                     },
    //                     {
    //                         background: []
    //                     }
    //                 ],
    //                 [
    //                     {
    //                         script: 'super'
    //                     },
    //                     {
    //                         script: 'sub'
    //                     }
    //                 ],
    //                 [
    //                     {
    //                         header: '1'
    //                     },
    //                     {
    //                         header: '2'
    //                     },
    //                     'blockquote',
    //                     'code-block'
    //                 ],
    //                 [
    //                     {
    //                         list: 'ordered'
    //                     },
    //                     {
    //                         list: 'bullet'
    //                     },
    //                     {
    //                         indent: '-1'
    //                     },
    //                     {
    //                         indent: '+1'
    //                     }
    //                 ],
    //                 [
    //                     'direction',
    //                     {
    //                         align: []
    //                     }
    //                 ],
    //                 ['link', 'image', 'video', 'formula'],
    //                 ['clean']
    //             ]
    //         },
    //         theme: 'snow'
    //     })
    // }
    //
    //
    //
    //
    // var about1 = setupQuill('#full-about .about1');
    // about1.on('text-change', function(delta, oldDelta, source) {
    //     $('#about1').val(about1.container.firstChild.innerHTML);
    // });



</script>

{{--<link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">--}}
{{--<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>--}}
{{--<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>--}}

{{--<!-- include summernote css/js -->--}}
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

<script>



$(document).ready(function() {
    $('.summernote').summernote({
        toolbar: [
            ['style', ['bold', 'italic', 'underline']],
            ['insert', ['link', 'picture', 'video']],
            ['para', ['ul', 'ol']],
        ],
        popover: {
            image: [
                ['image', ['resizeFull', 'resizeHalf', 'resizeQuarter', 'resizeNone']],
                ['float', ['floatLeft', 'floatRight', 'floatNone']],
                ['remove', ['removeMedia']]
            ],
        }
    });

    $(".note-image-input").addClass("form-control")

});

</script>

@stack('js')
</body>
<!-- END: Body-->

</html>