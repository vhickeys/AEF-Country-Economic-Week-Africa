@extends('layouts.mainApp')

@section('title', 'Blog Posts')

@section('content')

    <!-- breadcrumb-area-start -->
    <div class="tp-breadcrumb-area tp-breadcrumb-lwr-spacing fix p-relative z-index-1 bg-position"
        data-background="{{ asset('assets/img/aef-cewa/bradcrumb/bradcrumb-8.jpg') }}">
        <div class="tp-breadcrumb-cpr-overly tp-breadcrumb-lwr-overly"></div>
        <div class="container-1230 container">
            <div class="row">
                <div class="col-12">
                    <div class="text-center"
                        data-anime='{ "el": "childs", "opacity": [0, 1], "rotateY": [90, 0], "rotateZ": [-10, 0], "translateY": [80, 0], "translateZ": [50, 0], "staggervalue": 200, "duration": 600, "delay": 100, "easing": "easeOutCirc" }'>
                        <h2 class="tp-text-common-white tp-ff-dmserif fs-60 fs-xs-50 ls-m-1 lh-1 fw-400"> Our Blog
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area-end -->

    <!-- tp-blog-area-start -->
    <div class="tp-blog-area pt-140 pb-140">
        <div class="container container-1230">
            <div class="row gx-24">
                <div class="col-lg-4 col-md-6 mb-30"
                    data-anime='{ "translateX": [0, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                    <div class="tp-blog-lwr-thumb tp-round-10 p-relative tp-img-hover fix h-100">
                        <img class="w-100 tp-round-10 h-100 tp-img-hover-inner"
                            src="{{ asset('assets/img/aef-cewa/blog/blog.jpg') }}" alt="thumb">
                        <div class="tp-blog-lwr-thumb-content p-absolute">
                            <h4 class="tp-ff-body fw-600 fs-600 ls-m-2 tp-text-common-white lh-28 mb-20"><a
                                    class="underline-white" href="javascript:void(0)">The Role of CEOs in Driving Africa’s Economic Growth </a></h4>
                            <a href="javascript:void(0)"
                                class="tp-btn-lwr-lg d-inline-block lh-0 tp-round-6 fs-16 tp-text-theme-2 ls-0 tp-btn-switch-animation tp-bg-common-white hover-text-black fw-500">
                                <span class="d-flex align-items-center justify-content-center">
                                    <span class="btn-text"> Read </span>
                                    <span class="btn-icon"><i class="fa-sharp fa-solid fa-angle-right"></i></span>
                                    <span class="btn-icon"><i class="fa-sharp fa-solid fa-angle-right"></i></span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 mb-30"
                    data-anime='{ "translateX": [0, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                    <div class="tp-blog-lwr-thumb tp-round-10 p-relative tp-img-hover fix h-100">
                        <img class="w-100 tp-round-10 h-100 tp-img-hover-inner"
                            src="{{ asset('assets/img/aef-cewa/blog/blog.jpg') }}" alt="thumb">
                        <div class="tp-blog-lwr-thumb-content p-absolute">
                            <h4 class="tp-ff-body fw-600 fs-600 ls-m-2 tp-text-common-white lh-28 mb-20"><a
                                    class="underline-white" href="javascript:void(0)">Private Sector Development & Entrepreneurship: The Key to Africa’s 
                                    Economic Growth </a></h4>
                            <a href="javascript:void(0)"
                                class="tp-btn-lwr-lg d-inline-block lh-0 tp-round-6 fs-16 tp-text-theme-2 ls-0 tp-btn-switch-animation tp-bg-common-white hover-text-black fw-500">
                                <span class="d-flex align-items-center justify-content-center">
                                    <span class="btn-text"> Read </span>
                                    <span class="btn-icon"><i class="fa-sharp fa-solid fa-angle-right"></i></span>
                                    <span class="btn-icon"><i class="fa-sharp fa-solid fa-angle-right"></i></span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-30"
                    data-anime='{ "translateX": [0, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                    <div class="tp-blog-lwr-thumb tp-round-10 p-relative tp-img-hover fix h-100">
                        <img class="w-100 tp-round-10 h-100 tp-img-hover-inner"
                            src="{{ asset('assets/img/aef-cewa/blog/blog.jpg') }}" alt="thumb">
                        <div class="tp-blog-lwr-thumb-content p-absolute">
                            <h4 class="tp-ff-body fw-600 fs-600 ls-m-2 tp-text-common-white lh-28 mb-20"><a
                                    class="underline-white" href="javascript:void(0)">Unlocking Africa’s Entrepreneurial Potential: Challenges and Opportunities</a></h4>
                            <a href="javascript:void(0)"
                                class="tp-btn-lwr-lg d-inline-block lh-0 tp-round-6 fs-16 tp-text-theme-2 ls-0 tp-btn-switch-animation tp-bg-common-white hover-text-black fw-500">
                                <span class="d-flex align-items-center justify-content-center">
                                    <span class="btn-text"> Read </span>
                                    <span class="btn-icon"><i class="fa-sharp fa-solid fa-angle-right"></i></span>
                                    <span class="btn-icon"><i class="fa-sharp fa-solid fa-angle-right"></i></span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="tp-pagenation tp-pagenation-lwr text-center mt-35">
                        <nav>
                            <ul>
                                <li><a href="javascript:void(0)">1</a></li>
                                <li><a href="javascript:void(0)">2</a></li>
                                <li><a href="javascript:void(0)">3</a></li>
                                <li class="next">
                                    <a href="javascript:void(0)">
                                        Next
                                        <i class="fa-sharp fa-solid fa-arrow-right-long"></i>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- tp-blog-area-end -->

@endsection