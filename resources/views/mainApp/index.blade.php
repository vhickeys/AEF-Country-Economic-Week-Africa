@extends('layouts.mainApp')

@section('title', 'Homepage')

@section('content')

    <!-- tp-hero-area-start -->
    <div class="tp-hero-area fix p-relative z-index-1 bg-position"
        data-background="{{ asset('assets/img/aef-cewa/hero/hero.jpg') }}">
        <div class="container container-1230">
            <div class="row gx-24 align-items-end">
                <div class="col-xxl-6 col-xl-6 col-lg-8">
                    <div class="tp-hero-lwr-content tp-hero-lwr-spacing">
                        <div class="tp-hero-lwr-title-wrap"
                            data-anime='{ "el": "childs", "opacity": [0, 1], "rotateY": [90, 0], "rotateZ": [-10, 0], "translateY": [80, 0], "translateZ": [50, 0], "staggervalue": 200, "duration": 600, "delay": 100, "easing": "easeOutCirc" }'>
                            <span
                                class="tp-hero-lwr-subtitle fw-600 text-uppercase tp-text-grey-5 mb-15 d-inline-block">Welcome
                                to</span>
                            <h2 class="tp-text-common-white mb-50 tp-ff-dmserif fs-80 fs-xl-70 fs-xs-50 lh-1 fw-400 ls-m-1">
                                {{ config('app.name') }}
                            </h2>
                            <div class="tp-hero-lwr-btn">
                                <a href="{{ route('about') }}"
                                    class="tp-btn-lwr-xl d-inline-block lh-0 tp-round-6 fs-16 tp-bg-common-white ls-0 tp-btn-switch-animation tp-text-common-black hover-text-black fw-500">
                                    <span class="d-flex align-items-center justify-content-center">
                                        <span class="btn-text"> Learn More </span>
                                        <span class="btn-icon"><i class="fa-sharp fa-solid fa-angle-right"></i></span>
                                        <span class="btn-icon"><i class="fa-sharp fa-solid fa-angle-right"></i></span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- tp-hero-area-end -->


    <!-- tp-about-area-start -->
    <div class="tp-about-area pb-110 pt-110">
        <div class="container container-1230">
            <div class="row gx-24">
                <div class="col-xl-7 col-lg-6">
                    <div class="tp-about-lwr-left mr-80 p-relative z-index-1 mb-30">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="tp-about-lwr-thumb mr-30">
                                    <img class="w-100 tp-round-10" data-parallax='{"y": -50, "smoothness": 20}'
                                        src="{{ asset('assets/img/aef-cewa/about/about-3.jpg') }}"
                                        alt="{{ config('app.name') }}">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="tp-about-lwr-thumb ml-25 mt-30">
                                    <img class="w-100 tp-round-10" data-parallax='{"y": -50, "smoothness": 20}'
                                        src="{{ asset('assets/img/aef-cewa/about/about-2.jpg') }}"
                                        alt="{{ config('app.name') }}">
                                </div>
                            </div>
                        </div>
                        <div class="tp-about-lwr-thumb-3 ml-125 mr-175">
                            <img class="w-100 tp-round-10" data-parallax='{"y": 50, "smoothness": 20}'
                                src="{{ asset('assets/img/aef-cewa/about/about.jpg') }}" alt="about">
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6">
                    <div class="tp-about-lwr-content mt-20 mb-20"
                        data-anime='{ "el": "childs", "translateX": [30, 0], "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 100, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <span class="fw-600 tp-text-common-black-2 mb-20 lh-1">About the {{ config('app.name') }}</span>
                        <h2 class="tp-ff-dmserif tp-text-theme-2 fs-50 fw-400 ls-m-1 mb-20">(AEF-CEWA)</h2>
                        <p class="tp-text-grey-7 ls-0 mb-30">AEF Country Economic Week Africa (AEF-CEWA) is a flagship
                            initiative of the Africa Economic Forum that convenes top-tier government officials,
                            policymakers, development partners, and business leaders to examine economic outlooks and
                            catalyze sustainable growth in Africa’s key economies. <br><br> Held annually, this premier
                            event provides a strategic platform for deep engagement, forward-looking dialogue, and impactful
                            collaboration.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- tp-about-area-end -->

    <!-- tp-work-area-start -->
    <div class="tp-work-area tp-bg-grey-8 pt-135 pb-115">
        <div class="container container-1230">
            <div class="row gx-24">
                <div class="col-12">
                    <div class="tp-work-lwr-title-wrap text-center mb-60"
                        data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                        <h2 class="tp-ff-dmserif tp-text-theme-2 fs-50 fw-400 ls-m-1 mb-20">Governance</h2>
                    </div>
                </div>
            </div>
            <div class="row gx-0 tp-work-lwr-border"
                data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <div class="col-lg-4 col-md-6">
                    <div class="tp-work-lwr-item tp-img-hover mb-30">
                        <div class="fix tp-round-6 mb-25">
                            <img class="w-100 tp-round-6 tp-img-hover-inner-up"
                                src="{{ asset('assets/img/aef-cewa/work/work.jpg') }}" alt="work">
                        </div>
                        <div class="tp-work-lwr-conent">
                            <h4 class="tp-ff-dmserif fw-400 fs-26 tp-text-theme-2"><a class="underline-lwr"
                                    href="{{ route('governance') }}">To provide timely and expert perspectives on the economic
                                    outlook of major African countries.</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="tp-work-lwr-item tp-img-hover mb-30">
                        <div class="fix tp-round-6 mb-25">
                            <img class="w-100 tp-round-6 tp-img-hover-inner-up"
                                src="{{ asset('assets/img/aef-cewa/work/work-2.jpg') }}" alt="work">
                        </div>
                        <div class="tp-work-lwr-conent">
                            <h4 class="tp-ff-dmserif fw-400 fs-26 tp-text-theme-2"><a class="underline-lwr"
                                    href="{{ route('governance') }}">To identify emerging opportunities that drive inclusive
                                    growth and sustainable development.</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="tp-work-lwr-item tp-img-hover mb-30">
                        <div class="fix tp-round-6 mb-25">
                            <img class="w-100 tp-round-6 tp-img-hover-inner-up"
                                src="{{ asset('assets/img/aef-cewa/work/work-3.jpg') }}" alt="work">
                        </div>
                        <div class="tp-work-lwr-conent">
                            <h4 class="tp-ff-dmserif fw-400 fs-26 tp-text-theme-2"><a class="underline-lwr"
                                    href="{{ route('governance') }}">To promote collaborative dialogue between public and private
                                    sector stakeholders</a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- tp-work-area-end -->

    <!-- tp-expert-area-start -->
    <div class="tp-expert-area pt-135 pb-125">
        <div class="container container-1230">
            <div class="row gx-24 mb-70">
                <div class="col-xxl-5 col-xl-6 col-lg-6">
                    <div class="tp-expert-lwr-content mb-20">
                        <span class="fw-600 tp-text-common-black-2 mb-20 lh-1">Key Objectives</span>
                        <h2 class="tp-ff-dmserif tp-text-theme-2 fs-50 fs-lg-45 fw-400 ls-m-1 mb-20">In-depth Analysis and
                            Insights on One African economy</h2>
                        <p class="tp-text-grey-7 ls-0 mb-40">The AEF Country Economic Week Africa aims to provide in-depth
                            analysis and insights on one African economy at a time, focusing on key economic trends,
                            opportunities, and challenges. Through engagement with experts, policymakers, and industry
                            leaders, the event seeks to foster a better understanding of the economic landscape in Africa
                            and promote sustainable development strategies.
                        </p>
                        <div class="tp-hero-lwr-btn">
                            <a href="{{ route('about') }}"
                                class="tp-btn-lwr-xl mr-25 mb-10 d-inline-block lh-0 tp-round-6 fs-16 tp-bg-theme-2 ls-0 tp-btn-switch-animation tp-text-common-white hover-text-white fw-500">
                                <span class="d-flex align-items-center justify-content-center">
                                    <span class="btn-text"> Learn More</span>
                                    <span class="btn-icon"><i class="fa-sharp fa-solid fa-angle-right"></i></span>
                                    <span class="btn-icon"><i class="fa-sharp fa-solid fa-angle-right"></i></span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-7 col-xl-6 col-lg-6">
                    <div class="tp-expert-video-thumb tp-round-10 p-relative ml-200 mb-30">
                        <img class="w-100 tp-round-10" src="{{ asset('assets/img/aef-cewa/expert/expert-thumb.jpg') }}"
                            alt="{{ config('app.name') }}">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- tp-expert-area-end -->

    <!-- tp-testimonial-area-start -->
    <div class="tp-testimonial-lwr-spacing tp-bg-grey-8"></div>
    <div class="tp-testimonial-area pt-100">
        <div class="container container-1230">
            <div class="row gx-24">
                <div class="col-lg-12">
                    <div class="tp-testimonial-lwr-wrap tp-bg-common-white p-relative z-index-1 tp-round-17">
                        <span class="tp-testimonial-lwr-comment p-absolute">
                            <svg width="310" height="280" viewBox="0 0 310 280" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M252.049 196.448L257.899 243.847C259.399 256.297 246.049 264.997 235.399 258.547L172.55 221.197C165.65 221.197 158.9 220.748 152.3 219.848C163.4 206.798 170 190.297 170 172.448C170 129.848 133.1 95.3492 87.5005 95.3492C70.1007 95.3492 54.0509 100.299 40.7011 108.999C40.2511 105.249 40.101 101.499 40.101 97.5986C40.101 29.3493 99.3504 -26 172.55 -26C245.749 -26 304.998 29.3493 304.998 97.5986C304.998 138.098 284.149 173.948 252.049 196.448Z"
                                    stroke="#F8F8F8" stroke-width="10" stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M169.998 172.439C169.998 190.289 163.398 206.789 152.299 219.839C137.449 237.839 113.899 249.388 87.4992 249.388L48.3495 272.638C41.7496 276.688 33.3497 271.138 34.2497 263.488L37.9996 233.939C17.8998 219.989 5 197.639 5 172.439C5 146.039 19.0999 122.79 40.6997 108.99C54.0496 100.29 70.0993 95.3403 87.4992 95.3403C133.099 95.3403 169.998 129.839 169.998 172.439Z"
                                    stroke="#F8F8F8" stroke-width="10" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </span>
                        <div class="swiper-container tp-testimonial-lwr-slide">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="p-relative z-index-1">
                                        <div class="tp-testimonial-lwr-content mb-30 pb-40">
                                            <h3 class="tp-ff-dmserif fw-400 fs-50 ls-m-1 lh-1 tp-text-common-black-2 mb-50">Integrity</h3>
                                            <p class="fs-26 fs-sm-18 fw-500 ls-m-2 tp-text-theme-2 lh-36">We are committed to providing accurate and unbiased information on African economies.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="p-relative z-index-1">
                                        <div class="tp-testimonial-lwr-content mb-30 pb-40">
                                            <h3 class="tp-ff-dmserif fw-400 fs-50 ls-m-1 lh-1 tp-text-common-black-2 mb-50">Collaboration</h3>
                                            <p class="fs-26 fs-sm-18 fw-500 ls-m-2 tp-text-theme-2 lh-36">We believe in the power of partnerships and collective action to drive economic growth in Africa.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tp-testimonial-lwr-navigation">
                            <span class="tp-testimonial-lwr-prev mr-5">
                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13 7H1" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M7 1L1 7L7 13" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </span>
                            <span class="tp-testimonial-lwr-next">
                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 7H13" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M7 1L13 7L7 13" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- tp-testimonial-area-end -->

    <!-- tp-blog-area-start -->
    {{-- <div class="tp-blog-area pt-135 pb-120">
        <div class="container container-1230">
            <div class="row gx-24">
                <div class="col-lg-12">
                    <div class="tp-blog-lwr-title-wrap text-center mb-50"
                        data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 100, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <span class="fw-600 tp-text-common-black-2 mb-10 d-inline-block lh-1">OUR BLOG POST</span>
                        <h2 class="tp-ff-dmserif tp-text-theme-2 fs-50 fw-400 lh-1 ls-m-1 mb-25">Latest news and
                            updates</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-30"
                    data-anime='{ "translateX": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                    <div class="tp-blog-lwr-wrap tp-round-10 h-100">
                        <div class="d-flex align-items-center mb-20">
                            <span class="mr-5">
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M15.5625 9.9375C15.5625 13.56 12.6225 16.5 9 16.5C5.3775 16.5 2.4375 13.56 2.4375 9.9375C2.4375 6.315 5.3775 3.375 9 3.375C12.6225 3.375 15.5625 6.315 15.5625 9.9375Z"
                                        stroke="#898D95" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M9 6V9.75" stroke="#898D95" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M6.75 1.5H11.25" stroke="#898D95" stroke-width="1.5" stroke-miterlimit="10"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </span>
                            <span class="tp-text-grey-7">September, 2024 </span>
                        </div>
                        <h3 class="tp-ff-body fw-600 fs-24 ls-m-2 tp-text-theme-2 mb-15"><a class="underline-lwr"
                                href="blog-details.html">A guide to practising law in multiple states</a></h3>
                        <p class="tp-text-grey-7 lh-26 mb-30">The good lawyer is not the man who has
                            an eye to every side and angle contain
                            agency, and qualifies all</p>
                        <a href="blog-details.html"
                            class="tp-btn-switch-animation ml-5 d-inline-block fw-500 tp-text-theme-2">
                            <span class="d-flex align-items-center justify-content-center">
                                <span class="btn-text"> Read More</span>
                                <span class="btn-icon"><i class="fa-sharp fa-solid fa-angle-right"></i></span>
                                <span class="btn-icon"><i class="fa-sharp fa-solid fa-angle-right"></i></span>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-30"
                    data-anime='{ "translateX": [0, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                    <div class="tp-blog-lwr-thumb tp-round-10 p-relative tp-img-hover fix h-100">
                        <img class="w-100 tp-round-10 h-100 tp-img-hover-inner"
                            src="{{ asset('assets/img/aef-cewa/blog/thumb.jpg') }}" alt="{{ config('app.name') }}">
                        <div class="tp-blog-lwr-thumb-content p-absolute">
                            <h4 class="tp-ff-body fw-600 fs-600 ls-m-2 tp-text-common-white lh-28 mb-20"><a
                                    class="underline-white" href="blog-details.html">The evolution of enterprise
                                    legal management</a></h4>
                            <a href="blog-details.html"
                                class="tp-btn-lwr-lg d-inline-block lh-0 tp-round-6 fs-16 tp-text-theme-2 ls-0 tp-btn-switch-animation tp-bg-common-white hover-text-black fw-500">
                                <span class="d-flex align-items-center justify-content-center">
                                    <span class="btn-text"> Read More</span>
                                    <span class="btn-icon"><i class="fa-sharp fa-solid fa-angle-right"></i></span>
                                    <span class="btn-icon"><i class="fa-sharp fa-solid fa-angle-right"></i></span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-30"
                    data-anime='{ "translateX": [-50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                    <div class="tp-blog-lwr-wrap tp-round-10 h-100">
                        <div class="d-flex align-items-center mb-20">
                            <span class="mr-5">
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M15.5625 9.9375C15.5625 13.56 12.6225 16.5 9 16.5C5.3775 16.5 2.4375 13.56 2.4375 9.9375C2.4375 6.315 5.3775 3.375 9 3.375C12.6225 3.375 15.5625 6.315 15.5625 9.9375Z"
                                        stroke="#898D95" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M9 6V9.75" stroke="#898D95" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M6.75 1.5H11.25" stroke="#898D95" stroke-width="1.5" stroke-miterlimit="10"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </span>
                            <span class="tp-text-grey-7">September, 2024 </span>
                        </div>
                        <h3 class="tp-ff-body fw-600 fs-24 ls-m-2 tp-text-theme-2 mb-15"><a class="underline-lwr"
                                href="blog-details.html">A guide to practising law in multiple states</a></h3>
                        <p class="tp-text-grey-7 lh-26 mb-30">The good lawyer is not the man who has
                            an eye to every side and angle contain
                            agency, and qualifies all</p>
                        <a href="blog-details.html"
                            class="tp-btn-switch-animation ml-5 d-inline-block fw-500 tp-text-theme-2">
                            <span class="d-flex align-items-center justify-content-center">
                                <span class="btn-text"> Read More</span>
                                <span class="btn-icon"><i class="fa-sharp fa-solid fa-angle-right"></i></span>
                                <span class="btn-icon"><i class="fa-sharp fa-solid fa-angle-right"></i></span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- tp-blog-area-end -->

    <!-- tp-cta-bg-area-start -->
    {{-- <div class="tp-cta-area tp-cta-lwr-spacing mb-5"
        data-anime='{ "el": "childs", "translateY": [0, 0], "perspective": [1200,1200], "scale": [1.05, 1], "rotateX": [30, 0], "opacity": [0,1], "duration": 800, "delay": 500, "staggervalue": 500, "easing": "easeOutQuad" }'>
        <div class="container container-1230">
            <div class="row gx-24">
                <div class="col-12">
                    <div class="tp-gradient-bg-3 tp-round-10 p-relative z-index-1">
                        <span class="tp-cta-lwr-shape p-absolute d-none d-md-block">
                            <svg width="304" height="290" viewBox="0 0 304 290" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M57.6008 -42C-20.5374 7.56269 -147.595 106.688 -30.7212 106.688C115.371 106.688 228.135 6.26814 260.908 59.5295C287.127 102.139 60.3783 228.93 -56.2736 287"
                                    stroke="white" stroke-opacity="0.06" stroke-width="80" />
                            </svg>
                        </span>
                        <h3
                            class="tp-cta-lwr-title tp-ff-dmserif fw-400 fs-50 fs-md-45 fs-sm-40 ls-m-1 tp-text-common-white mb-0">
                            Become a Member Today! <br> You can <a class="underline-white d-inline-block" href=""> click to
                                join us</a></h3>
                        <img class="tp-cta-lwr-thumb p-absolute d-none d-lg-block"
                            src="{{ asset('assets/img/aef-cewa/cta/cta-thumb.png') }}" alt="cta">
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- tp-cta-bg-area-end -->

    <!-- map area start  -->
    {{-- <div class="tp-map-area fix">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-xl-12">
                    <div class="tp-map-box tp-map-lwr-box">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1510540.0480819119!2d42.0385954955818!3d42.31536428549862!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40440cd7e64f626b%3A0x4f907964122d4ac2!2sGeorgia!5e0!3m2!1sen!2sbd!4v1714619203308!5m2!1sen!2sbd"
                            style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- map area end  -->

@endsection