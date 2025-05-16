@extends('layouts.mainApp')

@section('title', 'Research Fellows')

@section('content')

    <!-- breadcrumb-area-start -->
    <div class="tp-breadcrumb-area tp-breadcrumb-lwr-spacing fix p-relative z-index-1 bg-position"
        data-background="{{ asset('assets/img/aef-cewa/bradcrumb/bradcrumb-5.jpg') }}">
        <div class="tp-breadcrumb-cpr-overly tp-breadcrumb-lwr-overly"></div>
        <div class="container-1230 container">
            <div class="row">
                <div class="col-12">
                    <div class="text-center">
                        <h2 class="tp-text-common-white tp-ff-dmserif fs-60 fs-xs-50 ls-m-1 lh-1 fw-400">Research Fellows
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area-end -->

    <!-- tp-service-details-start -->
    <div class="tp-service-cpr-details-area pt-160 pb-130">
        <div class="container container-1230">
            <div class="row">
                <div class="col-lg-4">
                    <div class="tp-service-cpr-details-sidebar tp-blog-lwr-details-sidebar top-sticky mr-35 mb-30">
                        <div class="tp-service-digi-category-list tp-service-cpr-category-list tp-round-10 mb-40">
                            <ul>
                                <li>
                                    <a href="{{ route('events') }}">
                                        <span class="ls-m-2 fs-18">Events</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('projects') }}">
                                        <span class="ls-m-2 fs-18">Projects</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('homepage') }}">
                                        <span class="ls-m-2 fs-18">Why Join Us</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="tp-service-cpr-details-content">
                        <img class="tp-round-10 mb-30" src="{{ asset('assets/img/aef-cewa/blog/sidebar/blog-sidebar.jpg') }}"
                            alt="{{ config('app.name') }}">
                        <div class="tp-team-lwr-item mb-35">
                            <h2 class="tp-ff-dmserif fw-400 fs-34 ls-m-1 tp-text-theme-2 lh-1 mb-20">Research Fellows</h2>
                            <p class="tp-ff-dmserif fs-18 ls-m-1 lh-1 mb-20">CS-FDIA’s Research Fellows are drawn from
                                leading institutions and bring extensive expertise in:</p>
                            <div class="tp-about-lwr-list tp-team-lwr-list">
                                <ul class="">
                                    <li>
                                        <i class="fa-sharp fa-solid fa-angle-right"></i> Investment Policy and Regulation
                                    <li>
                                        <i class="fa-sharp fa-solid fa-angle-right"></i> Trade and Industrial Development
                                    </li>
                                    <li>
                                        <i class="fa-sharp fa-solid fa-angle-right"></i> Infrastructure Financing
                                    </li>
                                    <li>
                                        <i class="fa-sharp fa-solid fa-angle-right"></i> Technology Transfer and Innovation
                                    </li>
                                    <li>
                                        <i class="fa-sharp fa-solid fa-angle-right"></i> Sustainable Development and ESG
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- tp-service-details-end -->

@endsection