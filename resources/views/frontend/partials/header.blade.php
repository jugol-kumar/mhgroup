<header id="header" class="header-transparent header-transparent-dark-bottom-border header-effect-shrink"
        data-plugin-options="{'stickyEnabled': true,
            'stickyEffect': 'shrink',
            'stickyEnableOnBoxed': true,
             'stickyEnableOnMobile': false,
             'stickyChangeLogo': true,
              'stickyStartAt': 30,
              'stickyHeaderContainerHeight': 90}">
    <div class="header-body border-top-0 bg-dark box-shadow-none">
        <div class="header-container container">
            <div class="header-row">
                <div class="header-column">
                    <div class="header-row">
                        <div class="header-logo">
                            <a href="demo-business-consulting.html">
                                <img alt="{{ config("app.name") }}" width="82" height="80" src="{{ asset('assets/frontend') }}/img/logo.png">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="header-column justify-content-end">
                    <div class="header-row">
                        <div class="header-nav header-nav-links header-nav-dropdowns-dark header-nav-light-text order-2 order-lg-1">
                            <div class="header-nav-main header-nav-main-mobile-dark header-nav-main-square header-nav-main-dropdown-no-borders header-nav-main-effect-2 header-nav-main-sub-effect-1">
                                <nav class="collapse">
                                    <ul class="nav nav-pills" id="mainNav">
                                        <li>
                                            <a class="nav-link {{ Route::is('home') ? 'active' : '' }}" href="{{ route('home') }}">
                                                Home
                                            </a>
                                        </li>
                                        <li class="dropdown dropdown-primary">
                                            <a class="dropdown-toggle nav-link {{ Route::is('about') ? 'active' : '' }}" href="{{ route('about') }}">
                                                About Us
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="{{ route('about') }}#ourstory">Our Story</a></li>
                                                <li><a class="dropdown-item" href="{{ route('about') }}#aspiration&vision">Aspiration & Vision </a></li>
                                                <li><a class="dropdown-item" href="{{ route('about') }}#management">Management</a></li>
                                                <li><a class="dropdown-item" href="{{ route('about') }}#strenth">Strenth</a></li>
                                                <li><a class="dropdown-item" href="{{ route('about') }}#qpolicy">Quality Policy</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="demo-business-consulting-about-us.html">
                                                Our Projects
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="demo-business-consulting-contact-us.html">
                                                Contact Us
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <button class="btn header-btn-collapse-nav" data-bs-toggle="collapse" data-bs-target=".header-nav-main nav">
                                <i class="fas fa-bars"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
