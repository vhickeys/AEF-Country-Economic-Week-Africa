@extends('layouts.mainApp')

@section('title', 'Membership Registration')

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
                        <h2 class="tp-text-common-white tp-ff-dmserif fs-60 fs-xs-50 ls-m-1 lh-1 fw-400">Membership
                            Registration</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area-end -->

    @if (request()->query('type') == '')
        <script>window.history.back();</script>
    @else

        <!-- tp-contact-lwr-form-area-start -->
        <div class="td-contact-lwr-form-area mt-100 pb-100">
            <div class="container container-1230">
                <div class="row gx-24">
                    <div class="col-lg-6">
                        <div class="tp-service-digi-dt-form tp-contact-lwr-form mb-40"
                            data-anime='{ "el": "childs", "opacity": [0, 1], "translateY": [30, 0], "duration": 600, "staggervalue": 300, "easing": "easeOutQuad" }'>
                            <div class="tp-contact-lwr-form-title mb-20">
                                <span class="fw-600 fs-16 tp-text-common-black-2 d-inline-block mb-5">Become a Member</span>
                                <h3 class="tp-ff-dmserif fw-400 fs-24 ls-m-1 tp-text-theme-2 lh-30">Please Fill in the Form
                                    Fields
                                    Below to Become
                                    {{ request()->query('type') == 'associate' ? 'An Associate Member' : 'a Member' }}
                                </h3>
                            </div>
                            @if ($errors->any())
                                <div class="alert alert-danger mb-20">
                                    <ul class="mb-0 ps-3">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <form class="tp-contact-salon-inner" method="POST" action="{{ route('payment.initiate') }}">
                                @csrf
                                <div class="row gx-14 align-items-center">
                                    <div class="col-lg-6 col-md-6 mb-20">
                                        <input name="name" class="input" type="text" placeholder="Your name"
                                            value="{{ old('name') }}">
                                        @error('name') <span class="text-danger small">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="col-lg-6 col-md-6 mb-20">
                                        <input name="email" class="input" type="email" placeholder="Email address"
                                            value="{{ old('email') }}">
                                        @error('email') <span class="text-danger small">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="col-lg-6 col-md-6 mb-20">
                                        <input name="phone" class="input" type="text" placeholder="Phone number"
                                            value="{{ old('phone') }}">
                                        @error('phone') <span class="text-danger small">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="col-lg-6 col-md-6 mb-20">
                                        <input name="city" class="input" type="text" placeholder="City/Region"
                                            value="{{ old('city') }}">
                                    </div>
                                    <div class="col-lg-6 col-md-6 mb-20">
                                        <input name="country" class="input" type="text" placeholder="Your Country"
                                            value="{{ old('country') }}">
                                    </div>
                                    <div class="col-lg-6 col-md-6 mb-20">
                                        <input name="job_title" class="input" type="text"
                                            placeholder="Job Title / Role (if applicable)" value="{{ old('job_title') }}">
                                    </div>
                                    <div class="form-group col-12">
                                        <select name="amount" id="package_id" class="form-select nice-select">
                                            <option value="" disabled {{ old('package_id') ? '' : 'selected' }}>Select
                                                Membership Package</option>
                                            <option value="1" {{ old('amount') == 1 ? 'selected' : '' }}>Membership Trial
                                            </option>
                                            <option value="10" {{ old('amount') == 10 ? 'selected' : '' }}>Associate Member –
                                                $10/month</option>
                                            <option value="25" {{ old('amount') == 25 ? 'selected' : '' }}>Professional Member
                                                – $25/month</option>
                                            <option value="75" {{ old('amount') == 75 ? 'selected' : '' }}>Institutional
                                                Member – $75/month</option>
                                            <option value="150" {{ old('amount') == 150 ? 'selected' : '' }}>Corporate Partner
                                                – $150/month</option>
                                        </select>
                                        @error('amount') <span class="text-danger small">{{ $message }}</span> @enderror
                                    </div>

                                    <div class="my-3"></div>

                                    <div class="col-12">
                                        <div class="tp-apoinment-med-btn">
                                            <button type="submit"
                                                class="tp-btn-lwr-lg d-none d-sm-block d-inline-block lh-0 tp-round-6 fs-16 tp-bg-theme-2 ls-0 tp-btn-switch-animation tp-text-common-white hover-text-white fw-500">
                                                <span class="d-flex align-items-center justify-content-center">
                                                    <span class="btn-text">Make Payment</span>
                                                    <span class="btn-icon"><i
                                                            class="fa-sharp fa-solid fa-angle-right"></i></span>
                                                    <span class="btn-icon"><i
                                                            class="fa-sharp fa-solid fa-angle-right"></i></span>
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="img-fluid text-end">
                            <img src="{{ asset('assets/img/aef-cewa/about/about.jpg') }}"
                                alt="AEF CEO Council | Membership Registration">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- tp-contact-lwr-form-area-end -->

    @endif

@endsection