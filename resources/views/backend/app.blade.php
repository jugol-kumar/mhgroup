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


<script src="{{ asset('assets/backend') }}/app-assets/vendors/js/editors/quill/katex.min.js"></script>
<script src="{{ asset('assets/backend') }}/app-assets/vendors/js/editors/quill/highlight.min.js"></script>
<script src="{{ asset('assets/backend') }}/app-assets/vendors/js/editors/quill/quill.min.js"></script>
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


    var editorConfig =  {
        formula: true,
        syntax: true,
        toolbar: [
            [
                {
                    font: []
                },
                {
                    size: []
                }
            ],
            ['bold', 'italic', 'underline', 'strike'],
            [
                {
                    color: []
                },
                {
                    background: []
                }
            ],
            [
                {
                    script: 'super'
                },
                {
                    script: 'sub'
                }
            ],
            [
                {
                    header: '1'
                },
                {
                    header: '2'
                },
                'blockquote',
                'code-block'
            ],
            [
                {
                    list: 'ordered'
                },
                {
                    list: 'bullet'
                },
                {
                    indent: '-1'
                },
                {
                    indent: '+1'
                }
            ],
            [
                'direction',
                {
                    align: []
                }
            ],
            ['link', 'image', 'video', 'formula'],
            ['clean']
        ]
    };

    var fullEditor = setupQuill('#full-container .editor');
    fullEditor.on('text-change', function(delta, oldDelta, source) {
        $('#post_details').val(fullEditor.container.firstChild.innerHTML);
    });
    function setupQuill(mainiD){
        return new Quill(mainiD, {
            bounds:  mainiD,
            modules: {
                formula: true,
                syntax: true,
                toolbar: [
                    [
                        {
                            font: []
                        },
                        {
                            size: []
                        }
                    ],
                    ['bold', 'italic', 'underline', 'strike'],
                    [
                        {
                            color: []
                        },
                        {
                            background: []
                        }
                    ],
                    [
                        {
                            script: 'super'
                        },
                        {
                            script: 'sub'
                        }
                    ],
                    [
                        {
                            header: '1'
                        },
                        {
                            header: '2'
                        },
                        'blockquote',
                        'code-block'
                    ],
                    [
                        {
                            list: 'ordered'
                        },
                        {
                            list: 'bullet'
                        },
                        {
                            indent: '-1'
                        },
                        {
                            indent: '+1'
                        }
                    ],
                    [
                        'direction',
                        {
                            align: []
                        }
                    ],
                    ['link', 'image', 'video', 'formula'],
                    ['clean']
                ]
            },
            theme: 'snow'
        })
    }

</script>

@stack('js')
</body>
<!-- END: Body-->

</html>