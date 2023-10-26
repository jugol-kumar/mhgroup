<header id="header" class="{{ isset($trans) && $trans == true ? 'header-transparent' : ''  }} header-transparent-dark-bottom-border header-effect-shrink"
        data-plugin-options="{'stickyEnabled': true,
            'stickyEffect': 'shrink',
            'stickyEnableOnBoxed': true,
             'stickyEnableOnMobile': false,
             'stickyChangeLogo': true,
              'stickyStartAt': 30,
              'stickyHeaderContainerHeight': 90}">
    <div class="header-body border-top-0  {{ isset($trans) && $trans == true ? 'backdrop-filter' : 'bg-white'}} box-shadow-none">
        <div class="header-container container">
            <div class="header-row">
                <div class="header-column">
                    <div class="header-row">
                        <div class="header-logo">
                            <a href="/">
                                <img alt="{{ config("app.name") }}" class="header-main-logo" src="{{ get_setting('header_logo') ? '/storage/'.get_setting('header_logo') : asset('assets/frontend/img/logo.png') }}">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="header-column justify-content-end">
                    <div class="header-row">
                        <div class="header-nav header-nav-links header-nav-dropdowns-dark header-nav-light-text order-2 order-lg-1">
                            <div class="header-nav-main header-nav-main-mobile-dark header-nav-main-square header-nav-main-dropdown-no-borders header-nav-main-effect-2 header-nav-main-sub-effect-1">
                                <nav class="collapse">
                                    <ul class="nav nav-pills {{ isset($trans) && $trans == true ? 'menu-white' : 'menu-black'}}" id="mainNav">
                                        <li>
                                            <a class="nav-link {{ Route::is('home') ? 'active' : '' }}" href="{{ route('home') }}">
                                                Home
                                            </a>
                                        </li>
                                        <li class="dropdown dropdown-primary">
                                            <a class="dropdown-toggle nav-link {{ Route::is('about') ? 'active' : '' }}" href="{{ route('about') }}">
                                                About Us
                                            </a>
                                            <ul class="dropdown-menu {{ isset($trans) && $trans == true ? '' : 'whitemenu'}}">
                                                <li><a class="dropdown-item" href="{{ route('about') }}#ourstory">Our Story</a></li>
                                                <li><a class="dropdown-item" href="{{ route('about') }}#aspiration&vision">Aspiration & Vision </a></li>
                                                <li><a class="dropdown-item" href="{{ route('about') }}#management">Management</a></li>
                                                <li><a class="dropdown-item" href="{{ route('chairmanMessage') }}">Chairman Message</a></li>
                                                <li><a class="dropdown-item" href="{{ route('about') }}#strenth">Strenth</a></li>
                                                <li><a class="dropdown-item" href="{{ route('about') }}#qpolicy">Quality Policy</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a class="dropdown-toggle nav-link {{ Route::is('project') ? 'active' : '' }}" href="{{ route('project') }}" >
                                                Our Projects
                                            </a>
                                        </li>

                                        <li>
                                            <a class="dropdown-toggle nav-link {{ Route::is('gallery') ? 'active' : '' }}" href="{{ route('gallery') }}" >
                                                Media & Publication
                                            </a>
                                        </li>

                                        <li>
                                            <a class="dropdown-toggle nav-link {{ Route::is('newsEvents') ? 'active' : '' }}" href="{{ route('newsEvents') }}" >
                                                News & Events
                                            </a>
                                        </li>
                                        <li class="dropdown dropdown-primary">
                                            <a class="dropdown-toggle nav-link {{ Route::is('ourConcern') ? 'active' : '' }}" href="#">
                                                Our Concerns
                                            </a>
                                            <ul class="dropdown-menu {{ isset($trans) && $trans == true ? '' : 'whitemenu'}}">
                                                @forelse($concerns as $concern)
                                                    <li>
                                                        <a class="dropdown-item" href="{{ route('ourConcern', $concern->slug) }}">{{ $concern->short_name }}</a>
                                                    </li>
                                                @empty
                                                    <p>No have concerns available</p>
                                                @endforelse
                                            </ul>
                                        </li>
                                        <li>
                                            <a class="nav-link {{ Route::is('contact') ? 'active' : '' }}" href="{{ route('contact') }}">
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
