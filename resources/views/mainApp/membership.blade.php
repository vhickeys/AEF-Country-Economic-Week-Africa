@extends('layouts.mainApp')

@section('title', 'Membership')

@section('content')

    <!-- breadcrumb-area-start -->
    <div class="tp-breadcrumb-area tp-breadcrumb-lwr-spacing fix p-relative z-index-1 bg-position"
        data-background="{{ asset('assets/img/aef-cewa/bradcrumb/bradcrumb-3.jpg') }}">
        <div class="tp-breadcrumb-cpr-overly tp-breadcrumb-lwr-overly"></div>
        <div class="container-1230 container">
            <div class="row">
                <div class="col-12">
                    <div class="text-center"
                        data-anime='{ "el": "childs", "opacity": [0, 1], "rotateY": [90, 0], "rotateZ": [-10, 0], "translateY": [80, 0], "translateZ": [50, 0], "staggervalue": 200, "duration": 600, "delay": 100, "easing": "easeOutCirc" }'>
                        <h2 class="tp-text-common-white tp-ff-dmserif fs-60 fs-xs-50 ls-m-1 lh-1 fw-400">Membership</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area-end -->


    <!-- team-single-area-start -->
    <div class="tp-team-single-area pt-115 pb-90">
        <div class="container-1230 container">
            <div class="row gx-0">
                <div class="col-lg-6">
                    <div class="tp-team-lwr-single text-center tp-whitest-bg-2">
                        <img class="tp-team-lwr-single-thumb" src="{{ asset('assets/img/aef-cewa/about/about.jpg') }}"
                            alt="{{ config('app.name') }} | Membership">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="tp-team-lwr-single-details tp-bg-grey-8 h-100">
                        <div class="tp-team-lwr-single-social mb-45 tp-bg-common-white tp-round-10">
                            <div class="d-flex align-items-start justify-content-between mb-10">
                                <div>
                                    <span class="tp-text-grey-7 d-inline-block mb-5">AEF Membership Packages</span>
                                    <h2 class="tp-ff-dmserif fw-400 fs-40 ls-m-1 tp-text-theme-2 lh-1">Category C – Small
                                        and Medium Enterprises (SMEs)</h2>
                                </div>
                                {{-- <span class="tp-text-theme-2 fw-500 tp-team-lwr-ratings mt-5"> Annual Fee: $150</span> --}}
                            </div>
                            <p class="tp-text-grey-7 lh-26 mb-30"><span>Who it's for:
                                </span> Startups, micro-enterprises, and growing businesses operating primarily at the local
                                or regional level across Africa.
                            </p>
                            <span class="d-block mb-15">
                                <a class="fw-500 tp-text-theme-2" href="javascript:void(0)">
                                    <span class="mr-5">
                                    </span>
                                    ✅ Trial Period: $1 for the first 3 months
                                </a>
                                <br>
                                <a class="fw-500 tp-text-theme-2" href="javascript:void(0)">
                                    <span class="mr-5">
                                    </span>
                                    ✅ Annual Fee: $150
                                </a>
                            </span>

                            <div class="tp-team-lwr-contact">

                                <h4>Key Features</h4>
                                <span class="d-block mb-15">
                                    <a class="fw-500 tp-text-theme-2" href="javascript:void(0)">
                                        <span class="mr-5">
                                        </span>
                                        ✅ Access to quarterly SME-focused networking events and forums</a>
                                    <br>
                                    <a class="fw-500 tp-text-theme-2" href="javascript:void(0)">
                                        <span class="mr-5">
                                        </span>
                                        ✅ Business listing in the AEF CEO Council directory
                                    </a>
                                    <br>
                                    <a class="fw-500 tp-text-theme-2" href="javascript:void(0)">
                                        <span class="mr-5">
                                        </span>
                                        ✅ Participation in training, capacity-building workshops, and webinars
                                    </a>
                                    <br>
                                    <a class="fw-500 tp-text-theme-2" href="javascript:void(0)">
                                        <span class="mr-5">
                                        </span>
                                        ✅ Opportunity to showcase products/services during SME spotlight sessions
                                    </a>
                                </span>
                                <a href="{{ route('membership.reg', ['type' => 'SMEs']) }}"
                                    class="tp-btn-lwr-lg d-inline-block lh-0 tp-round-6 fs-16 tp-bg-theme-2 ls-0 tp-btn-switch-animation tp-text-common-white hover-text-white fw-500">
                                    <span class="d-flex align-items-center justify-content-center">
                                        <span class="btn-text"> Register</span>
                                        <span class="btn-icon"><i class="fa-sharp fa-solid fa-angle-right"></i></span>
                                        <span class="btn-icon"><i class="fa-sharp fa-solid fa-angle-right"></i></span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row gx-0">
                <div class="col-lg-6">
                    <div class="tp-team-lwr-single text-center tp-whitest-bg-2">
                        <img class="tp-team-lwr-single-thumb" src="{{ asset('assets/img/aef-cewa/about/about-2.jpg') }}"
                            alt="{{ config('app.name') }} | Membership">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="tp-team-lwr-single-details tp-bg-grey-8 h-100">
                        <div class="tp-team-lwr-single-social mb-45 tp-bg-common-white tp-round-10">
                            <div class="d-flex align-items-start justify-content-between mb-10">
                                <div>
                                    <span class="tp-text-grey-7 d-inline-block mb-5">AEF Membership Packages</span>
                                    <h2 class="tp-ff-dmserif fw-400 fs-40 ls-m-1 tp-text-theme-2 lh-1">Category B – National
                                        Businesses/Corporations</h2>
                                </div>
                                {{-- <span class="tp-text-theme-2 fw-500 tp-team-lwr-ratings mt-5"> Annual Fee: $500</span> --}}
                            </div>
                            <p class="tp-text-grey-7 lh-26 mb-30"><span>Who it's for:
                                </span> Established companies with significant operations within one or more African
                                countries, contributing to national economic development.
                            </p>
                            <span class="d-block mb-15">
                                <a class="fw-500 tp-text-theme-2" href="javascript:void(0)">
                                    <span class="mr-5">
                                    </span>
                                    ✅ Trial Period: $1 for the first 3 months
                                </a>
                                <br>
                                <a class="fw-500 tp-text-theme-2" href="javascript:void(0)">
                                    <span class="mr-5">
                                    </span>
                                    ✅ Annual Fee: $500
                                </a>
                            </span>

                            <div class="tp-team-lwr-contact">

                                <h4>Key Features: All Category C benefits, plus</h4>
                                <span class="d-block mb-15">
                                    <a class="fw-500 tp-text-theme-2" href="javascript:void(0)">
                                        <span class="mr-5">
                                        </span>
                                        ✅ Featured speaking opportunities at national-level AEF events</a>
                                    <br>
                                    <a class="fw-500 tp-text-theme-2" href="javascript:void(0)">
                                        <span class="mr-5">
                                        </span>
                                        ✅ Access to curated B2B matchmaking sessions
                                    </a>
                                    <br>
                                    <a class="fw-500 tp-text-theme-2" href="javascript:void(0)">
                                        <span class="mr-5">
                                        </span>
                                        ✅ Recognition on AEF platforms as a national business partner
                                    </a>
                                    <br>
                                    <a class="fw-500 tp-text-theme-2" href="javascript:void(0)">
                                        <span class="mr-5">
                                        </span>
                                        ✅ Priority invitations to policy dialogues and roundtables
                                    </a>
                                </span>
                                <a href="{{ route('membership.reg', ['type' => 'National-Businesses']) }}"
                                    class="tp-btn-lwr-lg d-inline-block lh-0 tp-round-6 fs-16 tp-bg-theme-2 ls-0 tp-btn-switch-animation tp-text-common-white hover-text-white fw-500">
                                    <span class="d-flex align-items-center justify-content-center">
                                        <span class="btn-text"> Register</span>
                                        <span class="btn-icon"><i class="fa-sharp fa-solid fa-angle-right"></i></span>
                                        <span class="btn-icon"><i class="fa-sharp fa-solid fa-angle-right"></i></span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row gx-0">
                <div class="col-lg-6">
                    <div class="tp-team-lwr-single text-center tp-whitest-bg-2">
                        <img class="tp-team-lwr-single-thumb" src="{{ asset('assets/img/aef-cewa/about/about-3.jpg') }}"
                            alt="{{ config('app.name') }} | Membership">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="tp-team-lwr-single-details tp-bg-grey-8 h-100">
                        <div class="tp-team-lwr-single-social mb-45 tp-bg-common-white tp-round-10">
                            <div class="d-flex align-items-start justify-content-between mb-10">
                                <div>
                                    <span class="tp-text-grey-7 d-inline-block mb-5">AEF Membership Packages</span>
                                    <h2 class="tp-ff-dmserif fw-400 fs-40 ls-m-1 tp-text-theme-2 lh-1">Category A –
                                        Multinational Businesses/Corporations</h2>
                                </div>
                                {{-- <span class="tp-text-theme-2 fw-500 tp-team-lwr-ratings mt-5"> Annual Fee: $2000</span> --}}
                            </div>
                            <p class="tp-text-grey-7 lh-26 mb-30"><span>Who it's for:
                                </span> Global corporations or pan-African businesses with a footprint across multiple
                                African countries or international markets.
                            </p>
                            <span class="d-block mb-15">
                                <a class="fw-500 tp-text-theme-2" href="javascript:void(0)">
                                    <span class="mr-5">
                                    </span>
                                    ✅ Trial Period: $1 for the first 3 months
                                </a>
                                <br>
                                <a class="fw-500 tp-text-theme-2" href="javascript:void(0)">
                                    <span class="mr-5">
                                    </span>
                                    ✅ Annual Fee: $2000
                                </a>
                            </span>

                            <div class="tp-team-lwr-contact">

                                <h4>Key Features: All Category B benefits, plus</h4>
                                <span class="d-block mb-15">
                                    <a class="fw-500 tp-text-theme-2" href="javascript:void(0)">
                                        <span class="mr-5">
                                        </span>
                                        ✅ Strategic partnership recognition across AEF events and platforms</a>
                                    <br>
                                    <a class="fw-500 tp-text-theme-2" href="javascript:void(0)">
                                        <span class="mr-5">
                                        </span>
                                        ✅ Dedicated account liaison for personalized engagement
                                    </a>
                                    <br>
                                    <a class="fw-500 tp-text-theme-2" href="javascript:void(0)">
                                        <span class="mr-5">
                                        </span>
                                        ✅ VIP access to international economic forums and summits
                                    </a>
                                    <br>
                                    <a class="fw-500 tp-text-theme-2" href="javascript:void(0)">
                                        <span class="mr-5">
                                        </span>
                                        ✅ Involvement in high-level policy-shaping sessions
                                    </a>
                                </span>
                                <a href="{{ route('membership.reg', ['type' => 'Multinational-Businesses']) }}"
                                    class="tp-btn-lwr-lg d-inline-block lh-0 tp-round-6 fs-16 tp-bg-theme-2 ls-0 tp-btn-switch-animation tp-text-common-white hover-text-white fw-500">
                                    <span class="d-flex align-items-center justify-content-center">
                                        <span class="btn-text"> Register</span>
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
    <!-- team-single-area-end -->

@endsection