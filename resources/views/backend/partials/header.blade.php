<nav class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-light navbar-shadow">
    <div class="navbar-container d-flex content">
        <div class="bookmark-wrapper d-flex align-items-center">
            <ul class="nav navbar-nav d-xl-none">
                <li class="nav-item">
                    <a class="nav-link menu-toggle" href="#">
                        <i class="ficon" data-feather="menu"></i>
                    </a>
                </li>
            </ul>

            <a href="/" class="btn btn-primary">
                    <i class="" data-feather="globe"></i>
                    Visit Website
            </a>

        </div>
        <ul class="nav navbar-nav align-items-center ms-auto">

            <li class="nav-item d-none d-lg-block">
                <a class="nav-link nav-link-style">
                    <i class="ficon" data-feather="moon"></i>
                </a>
            </li>
            <li class="nav-item dropdown dropdown-user">
                <a class="nav-link dropdown-toggle dropdown-user-link"
                   id="dropdown-user" href="#" data-bs-toggle="dropdown" a
                   ria-haspopup="true" aria-expanded="false">
                    <div class="user-nav d-sm-flex d-none">
                        <span class="user-name fw-bolder">{{ Auth::user()->name }}</span>
                        <span class="user-status">{{ Auth::user()->email }}</span>
                    </div>
                  {{--  <span class="avatar">
                        <img class="round" src="../../../app-assets/images/portrait/small/avatar-s-11.jpg" alt="avatar" height="40" width="40">
                        <span class="avatar-status-online">

                        </span>
                    </span>--}}
                </a>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-user">
                    <a class="dropdown-item" href="#">
                        <i class="me-50" data-feather="home"></i> Dashboard
                    </a>
{{--                    <a class="dropdown-item" href="#">
                        <i class="me-50" data-feather="help-circle"></i> FAQ</a>--}}

                    <a class="dropdown-item" href="javascript:void(0)" onclick="document.getElementById('logoutAdmin').submit()">
                        <i class="me-50" data-feather="power"></i> Logout
                    </a>

                    <form action="{{ route('logout') }}" method="post" class="d-none" id="logoutAdmin">
                        @csrf
                    </form>
                </div>
            </li>
        </ul>
    </div>
</nav>
