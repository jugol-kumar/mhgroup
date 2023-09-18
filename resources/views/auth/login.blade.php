<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

@include('backend.partials.head')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/backend') }}/app-assets/css/pages/authentication.css">

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern blank-page navbar-floating footer-static">
<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <div class="auth-wrapper auth-basic px-2">
                <div class="auth-inner my-2">
                    <!-- Login basic -->
                    <div class="card mb-0">
                        <div class="card-body">
                            <a href="/" class="brand-logo align-items-center flex-column ">
                                <img class="card-img-top" src="{{ '/storage/'.get_setting('header_logo')  }}" style="object-fit: cover; width: 100px;" alt="Card image cap">

                                <h2 class="brand-text text-primary ms-1">{{ get_setting('app_name') }}</h2>
                            </a>

                            @if($errors->any())
                                @foreach ($errors->all() as $error)
                                    <div class="text-danger">{{ $error }}</div>
                                @endforeach
                            @endif

                            <form class="auth-login-form mt-2" action="{{ route('admin.login') }}" method="POST">
                                @csrf
                                <div class="mb-1">
                                    <label for="login-email" class="form-label">Email</label>
                                    <input type="text" class="form-control" id="login-email"
                                           name="email" placeholder="john@example.com" aria-describedby="login-email" tabindex="1" autofocus />

                                </div>

                                <div class="mb-1">
                                    <div class="d-flex justify-content-between">
                                        <label class="form-label" for="login-password">Password</label>
                                    </div>
                                    <div class="input-group input-group-merge form-password-toggle">
                                        <input type="password" class="form-control form-control-merge" id="login-password" name="password" tabindex="2" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="login-password" />
                                        <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
                                    </div>
                                </div>
                                <div class="mb-1">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="remember" tabindex="3" />
                                        <label class="form-check-label" for="remember-me"> Remember Me </label>
                                    </div>
                                </div>
                                <button class="btn btn-primary w-100" tabindex="4">Sign in</button>
                            </form>
                        </div>
                    </div>
                    <!-- /Login basic -->
                </div>
            </div>

        </div>
    </div>
</div>
<body/>

@include('backend.partials.footer')