@extends('layouts.mainApp')

@section('title', 'Contact Us')

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
                        <h2 class="tp-text-common-white tp-ff-dmserif fs-60 fs-xs-50 ls-m-1 lh-1 fw-400">Contact us</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area-end -->

    <!-- tp-contact-lwr-info-area-start -->
    <div class="tp-contact-lwr-info-area pt-140 pb-115">
        <div class="container container-1230">
            <div class="row gx-24"
                data-anime='{ "el": "childs", "scale": [0, 1], "opacity": [0,1], "duration": 600, "delay": 100, "staggervalue": 100, "easing": "easeOutQuad" }'>
                <div class="col-lg-4 col-md-6">
                    <div class="tp-contact-lwr-item text-center tp-bg-grey-8 tp-round-10 mb-25 tp-transition">
                        <h3 class="tp-ff-dmserif tp-text-theme-2 text-decoration-underline fs-26 fw-400 mb-15"><a
                                class="hover-text-black" href="javascript:void(0)">Office Address</a></h3>
                        <p class="tp-text-grey-7 fs-18">Plot 1018, Cadastral Zone B18, Off Oladipo Diya Road,
                            Gudu, Apo, Abuja, Nigeria</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="tp-contact-lwr-item text-center tp-bg-grey-8 tp-round-10 mb-25 tp-transition">
                        <h3 class="tp-ff-dmserif tp-text-theme-2 text-decoration-underline fs-26 fw-400 mb-15"><a
                                class="hover-text-black" href="javascript:void(0)">Phone Number</a></h3>
                        <p class="tp-text-grey-7 fs-18">+234 803 688 3862</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="tp-contact-lwr-item text-center tp-bg-grey-8 tp-round-10 mb-25 tp-transition">
                        <h3 class="tp-ff-dmserif tp-text-theme-2 text-decoration-underline fs-26 fw-400 mb-15"><a
                                class="hover-text-black" href="mailto:info@aefgroup.org">Email Address</a></h3>
                        <p class="tp-text-grey-7 fs-18">info@aefgroup.org </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- tp-contact-lwr-info-area-end -->


    <!-- tp-contact-lwr-form-area-start -->
    <div class="td-contact-lwr-form-area pb-100">
        <div class="container container-1230">
            <div class="row gx-24">
                <div class="col-lg-6">
                    <div class="tp-service-digi-dt-form tp-contact-lwr-form mb-40"
                        data-anime='{ "el": "childs", "opacity": [0, 1], "translateY": [30, 0], "duration": 600, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <div class="tp-contact-lwr-form-title mb-20">
                            <span class="fw-600 fs-16 tp-text-common-black-2 d-inline-block mb-5">CONTACT WITH US</span>
                            <h3 class="tp-ff-dmserif fw-400 fs-24 ls-m-1 tp-text-theme-2 lh-30">Do you have questions or
                                went<br> more information?</h3>
                        </div>
                        <form class="tp-contact-salon-inner" id="contact-form"
                            action="javascript:void(0)" method="POST">
                            <div class="row gx-14 align-items-center">
                                <div class="col-lg-6 col-md-6">
                                    <input name="name" class="input mb-20" type="text" placeholder="Your name">
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <input name="email" class="input mb-20" type="email" placeholder="Email address">
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <input name="phone" class="input mb-20" type="text" placeholder="Phone number">
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <input name="subject" class="input mb-20" type="text" placeholder="Your subject">
                                </div>
                                <div class="col-12">
                                    <textarea name="message" class="textarea mb-20"
                                        placeholder="Write your message"></textarea>
                                </div>
                                <div class="col-12">
                                    <div class="tp-apoinment-med-btn">
                                        <button type="submit"
                                            class="tp-btn-lwr-lg d-none d-sm-block d-inline-block lh-0 tp-round-6 fs-16 tp-bg-theme-2 ls-0 tp-btn-switch-animation tp-text-common-white hover-text-white fw-500">
                                            <span class="d-flex align-items-center justify-content-center">
                                                <span class="btn-text"> Send Message </span>
                                                <span class="btn-icon"><i
                                                        class="fa-sharp fa-solid fa-angle-right"></i></span>
                                                <span class="btn-icon"><i
                                                        class="fa-sharp fa-solid fa-angle-right"></i></span>
                                            </span>
                                        </button>
                                        <p class="ajax-response mt-20"></p>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="tp-contact-lwr-map ml-80  mb-40">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1510540.0480819119!2d42.0385954955818!3d42.31536428549862!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40440cd7e64f626b%3A0x4f907964122d4ac2!2sGeorgia!5e0!3m2!1sen!2sbd!4v1714619203308!5m2!1sen!2sbd"
                            style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- tp-contact-lwr-form-area-end -->

@endsection