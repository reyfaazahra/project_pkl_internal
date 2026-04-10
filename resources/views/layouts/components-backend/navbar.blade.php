<header class="topbar" style="z-index: 999;">
    <div class="with-vertical">
        <nav class="navbar navbar-expand-lg p-0">
            <ul class="navbar-nav">
                <li class="nav-item nav-icon-hover-bg rounded-circle ms-n2">
                    <a class="nav-link sidebartoggler" id="headerCollapse" href="javascript:void(0)">
                        <i class="ti ti-menu-2"></i>
                    </a>
                </li>
            </ul>
            <div class="d-block d-lg-none py-4">
                <a href="./main/index.html" class="text-nowrap logo-img">
                    <img src="{{ asset('assets/backend/images/logos/dark-logo.svg') }}" class="dark-logo" />
                    <img src="{{ asset('assets/backend/images/logos/light-logo.svg') }}" class="light-logo" />
                </a>
            </div>
            <a class="navbar-toggler nav-icon-hover-bg rounded-circle p-0 mx-0 border-0" href="javascript:void(0)"
                data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <i class="ti ti-dots fs-7"></i>
            </a>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <div class="d-flex align-items-center justify-content-between">
                    <a href="javascript:void(0)"
                        class="nav-link nav-icon-hover-bg rounded-circle mx-0 ms-n1 d-flex d-lg-none align-items-center justify-content-center"
                        data-bs-toggle="offcanvas" data-bs-target="#mobilenavbar">
                        <i class="ti ti-align-justified fs-7"></i>
                    </a>
                    <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-center">
                        <li class="nav-item dropdown">
                            <a class="nav-link pe-0" href="#" data-bs-toggle="dropdown">
                                <div class="d-flex align-items-center">
                                    <div class="user-profile-img">
                                        <img src="{{ asset('assets/backend/images/profile/user-1.jpg') }}"
                                            class="rounded-circle" width="35" height="35" />
                                    </div>
                                </div>
                            </a>
                            <div class="dropdown-menu content-dd dropdown-menu-end dropdown-menu-animate-up">
                                <div class="profile-dropdown position-relative" data-simplebar>
                                    <div class="py-3 px-7 pb-0">
                                        <h5 class="mb-0 fs-5 fw-semibold">User Profile</h5>
                                    </div>
                                    <div class="d-flex align-items-center py-9 mx-7 border-bottom">
                                        <img src="{{ asset('assets/backend/images/profile/user-1.jpg') }}"
                                            class="rounded-circle" width="80" height="80" />
                                        <div class="ms-3">
                                            <h5 class="mb-1 fs-3">{{ Auth::user()->name }}</h5>
                                            <span class="mb-1 d-block">{{ Auth::user()->isAdmin == 1 ? 'admin' : '' }}</span>
                                            <p class="mb-0 d-flex align-items-center gap-2">
                                                <i class="ti ti-mail fs-4"></i> {{ Auth::user()->email }}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="d-grid py-4 px-7 pt-8">
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit()"
                                            class="btn btn-outline-primary">
                                            Log Out
                                        </a>
                                        @if (session()->has('impersonated_by'))
                                            <a href="{{ route('impersonate.leave') }}" class="btn btn-warning">
                                                Kembali ke Admin
                                            </a>
                                        @endif
                                        <form action="{{ route('logout') }}" method="post" id="logout-form">
                                            @csrf
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="mobilenavbar">
            <nav class="sidebar-nav scroll-sidebar">
                <div class="offcanvas-header justify-content-between">
                    <img src="{{ asset('assets/backend/images/logos/favicon.ico') }}" class="img-fluid" />
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
                </div>
                @if (Auth::user()->isAdmin === 0)
                    <ul class="navbar-nav px-3">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home') }}">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/ranking') }}">Ranking</a>
                        </li>
                    </ul>
                @endif
            </nav>
        </div>
    </div>
</header>
