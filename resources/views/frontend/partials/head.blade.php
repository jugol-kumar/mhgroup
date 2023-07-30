<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Basic -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home- | {{ config("app.name") }} - Mh Group Website</title>

    <meta name="keywords" content="Mh Group Website, Mh Group, Group, Mh" />
    <meta name="description" content="{{ config("app.name") }} - Group of companies">
    <meta name="author" content="creativetechpark">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{get_setting('header_logo') ? '/storage/'.get_setting('header_logo') : asset('assets/frontend/img/logo.png') }}" type="image/x-icon" />
    <link rel="apple-touch-icon" href="{{get_setting('header_logo') ? '/storage/'.get_setting('header_logo') : asset('assets/frontend/img/logo.png')  }}">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

    <!-- Web Fonts  -->
{{--    <link id="googleFonts" href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700%7CSintony:400,700&amp;display=swap" rel="stylesheet" type="text/css">--}}
{{--    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">--}}



    <link rel="stylesheet" href="{{ asset('assets/frontend') }}/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('assets/frontend') }}/vendor/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('assets/frontend') }}/vendor/animate/animate.compat.css">
    <link rel="stylesheet" href="{{ asset('assets/frontend') }}/vendor/simple-line-icons/css/simple-line-icons.min.css">
    <link rel="stylesheet" href="{{ asset('assets/frontend') }}/vendor/owl.carousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('assets/frontend') }}/vendor/owl.carousel/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{ asset('assets/frontend') }}/vendor/magnific-popup/magnific-popup.min.css">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('assets/frontend') }}/css/theme.css">
    <link rel="stylesheet" href="{{ asset('assets/frontend') }}/css/theme-elements.css">
    <link rel="stylesheet" href="{{ asset('assets/frontend') }}/css/theme-blog.css">
    <link rel="stylesheet" href="{{ asset('assets/frontend') }}/css/theme-shop.css">

    <link rel="stylesheet" href="{{ asset('assets/frontend') }}/css/frencybox.css">
    <link rel="stylesheet" href="{{ asset('assets/frontend') }}/css/fontawesome.css">
    <!-- Demo CSS -->
    <link rel="stylesheet" href="{{ asset('assets/frontend') }}/css/demos/demo-business-consulting.css">

    <!-- Skin CSS -->
    <link id="skinCSS" rel="stylesheet" href="{{ asset('assets/frontend') }}/css/skins/skin-business-consulting.css">

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/frontend') }}/css/custom.css">

    <style>
        #preeloader {
            backdrop-filter: blur(10px);
            width: 100%;
            height: 100vh;
            position: fixed;
            z-index: 10000;
            background: #000000;
        }
        .map_col iframe{
            width: 100% !important;
        }
    </style>
    @stack('css')

<!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-E017TKC09N"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-E017TKC09N');
    </script>

</head>
<body style="scroll-behavior: smooth">
