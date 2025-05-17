<header class="tp-header-height">
    <!-- header-area-start -->
    <div id="tp-header-sticky" class="tp-header-area lwr-sticky-bg">
        <div class="container container-1670">
            <div class="tp-header-lwr-wrapper tp-header-md-space-2 tp-round-100 p-relative">
                <div class="row align-items-center">
                    <div class="col-xl-9 col-md-4 col-5">
                        <div class="tp-header-digi-menu-wrap tp-header-lwr-menu-wrap d-flex align-items-center">
                            <div class="tp-header-logo lh-1 d-flex align-content-center">
                                <a href="{{ route('homepage') }}"><img data-width="100"
                                        src="{{ asset('assets/img/aef-cewa/logo/logo.png') }}" alt="logo"></a>
                            </div>
                            <div class="tp-main-menu tp-main-menu-lwr ml-85 d-none d-xl-block">
                                <nav class="tp-mobile-menu-active">
                                    <ul>
                                        <li class="{{ request()->routeIs('homepage') ? 'active' : '' }}"><a
                                                href="{{ route('homepage') }}">Home</a></li>
                                        <li class="{{ request()->routeIs('about') ? 'active' : '' }}"><a
                                                href="{{ route('about') }}">About</a></li>

                                        {{-- <li class="{{ request()->routeIs('research.fellows') ? 'active' : '' }}"><a
                                                href="{{ route('research.fellows') }}">Research Fellows</a></li> --}}

                                        {{-- <li class="{{ request()->routeIs('projects') ? 'active' : '' }}"><a
                                                href="{{ route('projects') }}">Projects</a></li> --}}

                                        <li class="{{ request()->routeIs('events') ? 'active' : '' }}"><a
                                                href="{{ route('events') }}">Events</a></li>

                                        <li class="{{ request()->routeIs('blog') ? 'active' : '' }}"><a
                                                href="{{ route('blog') }}">Blog</a></li>

                                        {{-- <li class="{{ request()->routeIs('membership') ? 'active' : '' }}"><a
                                                href="{{ route('membership') }}">Membership</a></li> --}}

                                        <li class="{{ request()->routeIs('contact') ? 'active' : '' }}"><a
                                                href="{{ route('contact') }}">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-8 col-7">
                        <div class="tp-header-lwr-btn d-flex align-items-center justify-content-end">
                            {{-- <a href="{{ route('membership') }}" --}} <a href="javascript:void(0)"
                                class="tp-btn-lwr-lg ml-30 d-none d-sm-block d-inline-block lh-0 tp-round-6 fs-16 tp-bg-theme-2 ls-0 tp-btn-switch-animation tp-text-common-white hover-text-white fw-500">
                                <span class="d-flex align-items-center justify-content-center">
                                    <span class="btn-text"> Membership </span>
                                    <span class="btn-icon"><i class="fa-sharp fa-solid fa-angle-right"></i></span>
                                    <span class="btn-icon"><i class="fa-sharp fa-solid fa-angle-right"></i></span>
                                </span>
                            </a>
                            <button class="tp-header-bar tp-offcanvas-open-btn d-xl-none ml-10">
                                <span>
                                    <svg width="25" height="25" viewBox="0 0 25 25" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M21.8808 10.2976H3.8808" stroke="currentcolor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M21.8808 6.29756H3.8808" stroke="currentcolor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M21.8808 14.2976H3.8808" stroke="currentcolor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M21.8808 18.2976H3.8808" stroke="currentcolor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header-area-end -->
</header>