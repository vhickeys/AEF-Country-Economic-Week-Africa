@extends('layouts.mainApp')

@section('title', 'About Us')

@section('content')

    <!-- breadcrumb-area-start -->
    <div class="tp-breadcrumb-area tp-breadcrumb-lwr-spacing fix p-relative z-index-1 bg-position"
        data-background="{{ asset('assets/img/aef-cewa/bradcrumb/bradcrumb.jpg') }}">
        <div class="tp-breadcrumb-cpr-overly tp-breadcrumb-lwr-overly"></div>
        <div class="container-1230 container">
            <div class="row">
                <div class="col-12">
                    <div class="text-center"
                        data-anime='{ "el": "childs", "opacity": [0, 1], "rotateY": [90, 0], "rotateZ": [-10, 0], "translateY": [80, 0], "translateZ": [50, 0], "staggervalue": 200, "duration": 600, "delay": 100, "easing": "easeOutCirc" }'>
                        <h2 class="tp-text-common-white tp-ff-dmserif fs-60 fs-xs-50 ls-m-1 lh-1 fw-400">About Us
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area-end -->

    <!-- tp-counter-area-start -->
    {{-- <div class="tp-counter-area pt-130 tp-bg-grey-8 pb-85">
        <div class="container container-1230">
            <div class="row gx-24">
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-5 col-md-5 col-sm-6">
                            <div class="tp-counter-lwr-item counter-style-01 mb-60">
                                <div class="d-inline-block lh-0">
                                    <span
                                        class="vertical-counter d-inline-flex lh-1 mb-5 fs-60 fw-400 text-uppercase tp-text-common-black-2 tp-ff-dmserif"
                                        data-text="+" data-to="80"></span>
                                </div>
                                <span class="fs-18 ls-m-2 tp-text-theme-2 d-block">Research Fellows</span>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-6">
                            <div class="tp-counter-lwr-item counter-style-01 mb-60 ml-20">
                                <div class="d-inline-block lh-0">
                                    <span
                                        class="vertical-counter d-inline-flex lh-1 mb-5 fs-60 fw-400 text-uppercase tp-text-common-black-2 tp-ff-dmserif"
                                        data-to="350"></span>
                                </div>
                                <span class="fs-18 ls-m-2 tp-text-theme-2 d-block">Projects</span>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-5 col-sm-6">
                            <div class="tp-counter-lwr-item counter-style-01 mb-60">
                                <div class="d-inline-block lh-0">
                                    <span
                                        class="vertical-counter d-inline-flex lh-1 mb-5 fs-60 fw-400 text-uppercase tp-text-common-black-2 tp-ff-dmserif"
                                        data-text="+" data-to="360"></span>
                                </div>
                                <span class="fs-18 ls-m-2 tp-text-theme-2 d-block">Partners</span>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-6">
                            <div class="tp-counter-lwr-item counter-style-01 mb-60 ml-20">
                                <div class="d-inline-block lh-0">
                                    <span
                                        class="vertical-counter d-inline-flex lh-1 mb-5 fs-60 fw-400 text-uppercase tp-text-common-black-2 tp-ff-dmserif"
                                        data-text="%" data-to="80"></span>
                                </div>
                                <span class="fs-18 ls-m-2 tp-text-theme-2 d-block">Annual Growth Rate</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="tp-counter-lwr-content mb-30"
                        data-anime='{ "el": "childs", "opacity": [0, 1], "rotateY": [90, 0], "rotateZ": [-10, 0], "translateY": [80, 0], "translateZ": [50, 0], "staggervalue": 200, "duration": 600, "delay": 100, "easing": "easeOutCirc" }'>
                        <p class="tp-ff-dmserif fs-24 fs-lg-32 ls-m-1 tp-text-theme-2 lh-117-per mb-40">The Centre for the
                            Study of Foreign Direct Investments in Africa plays a crucial role in promoting research and
                            dialogue on FDI in Africa. <br><br> Through its research, networking, and advocacy activities,
                            the center seeks to enhance the understanding of the opportunities and challenges associated
                            with FDI in the continent and to contribute to the development of effective policies and
                            strategies to maximize the benefits of foreign investments.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- tp-counter-area-end -->

    <!-- tp-about-area-start -->
    <div class="tp-about-area pb-100 pt-140">
        <div class="container container-1230">
            <div class="row gx-24">
                <div class="col-lg-6">
                    <div class="tp-about-lwr-left mr-80 p-relative z-index-1 mb-30">
                        <div class="row">
                            <div class="col-lg-9 col-md-8 col-sm-9">
                                <div class="tp-about-lwr-2-thumb p-relative">
                                    <span
                                        class="tp-about-lwr-2-shape p-absolute rounded-circle tp-bg-common-black-2 d-inline-block text-center"
                                        data-parallax='{"y": -50, "smoothness": 30}'>
                                        <svg width="36" height="36" viewBox="0 0 36 36" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M36.0001 34.5001C36.0001 34.8979 35.8421 35.2794 35.5608 35.5607C35.2795 35.842 34.898 36 34.5002 36H1.50232C1.10452 36 0.723016 35.842 0.441729 35.5607C0.160442 35.2794 0.00241715 34.8979 0.00241715 34.5001C0.00241715 34.1023 0.160442 33.7208 0.441729 33.4395C0.723016 33.1582 1.10452 33.0002 1.50232 33.0002H34.5002C34.898 33.0002 35.2795 33.1582 35.5608 33.4395C35.8421 33.7208 36.0001 34.1023 36.0001 34.5001ZM0.43889 12.8295C0.115693 12.23 -0.0340386 11.5523 0.00649754 10.8725C0.0470336 10.1926 0.276234 9.53753 0.668375 8.98071C1.30922 8.04045 2.16745 7.26866 3.17022 6.73085L14.421 0.875225C15.5268 0.300208 16.7549 0 18.0013 0C19.2477 0 20.4757 0.300208 21.5816 0.875225L32.8308 6.73535C33.8336 7.27316 34.6918 8.04495 35.3327 8.98521C35.7248 9.54203 35.954 10.1971 35.9946 10.877C36.0351 11.5568 35.8854 12.2345 35.5622 12.834C35.2142 13.4922 34.6923 14.0423 34.0534 14.4244C33.4144 14.8066 32.6829 15.0061 31.9384 15.0013H31.5004V27.0006H33.0003C33.3981 27.0006 33.7796 27.1586 34.0609 27.4399C34.3422 27.7212 34.5002 28.1027 34.5002 28.5005C34.5002 28.8983 34.3422 29.2798 34.0609 29.5611C33.7796 29.8424 33.3981 30.0004 33.0003 30.0004H3.00223C2.60443 30.0004 2.22292 29.8424 1.94163 29.5611C1.66035 29.2798 1.50232 28.8983 1.50232 28.5005C1.50232 28.1027 1.66035 27.7212 1.94163 27.4399C2.22292 27.1586 2.60443 27.0006 3.00223 27.0006H4.50213V15.0013H4.06416C3.31895 15.006 2.58676 14.8059 1.94748 14.4229C1.30819 14.0399 0.786356 13.4887 0.43889 12.8295ZM7.50194 27.0006H12.0017V15.0013H7.50194V27.0006ZM15.0015 15.0013V27.0006H21.0011V15.0013H15.0015ZM28.5006 15.0013H24.0009V27.0006H28.5006V15.0013ZM3.09672 11.4391C3.19083 11.6126 3.33088 11.7568 3.50152 11.856C3.67216 11.9552 3.86682 12.0056 4.06416 12.0015H31.9384C32.1357 12.0056 32.3304 11.9552 32.501 11.856C32.6717 11.7568 32.8117 11.6126 32.9058 11.4391C32.9744 11.3244 33.0075 11.1921 33.0011 11.0586C32.9947 10.9252 32.9491 10.7967 32.8698 10.6891C32.5064 10.149 32.0182 9.70448 31.4464 9.39319L20.1971 3.53306C19.5192 3.18121 18.7666 2.99755 18.0028 2.99755C17.239 2.99755 16.4864 3.18121 15.8084 3.53306L4.55913 9.39319C3.98764 9.70548 3.49949 10.1504 3.13572 10.6906C3.05636 10.7977 3.01033 10.9258 3.00339 11.059C2.99646 11.1921 3.02892 11.3243 3.09672 11.4391Z"
                                                fill="white" />
                                        </svg>
                                    </span>
                                    <img class="w-100 tp-round-10"
                                        src="{{ asset('assets/img/aef-cewa/about/details/about.jpg') }}"
                                        alt="{{ config('app.name') }}">
                                    <div class="tp-about-lwr-2-thumb-1 float-end">
                                        <img class="w-100 tp-round-10" data-parallax='{"y": -50, "smoothness": 30}'
                                            src="{{ asset('assets/img/aef-cewa/about/details/about-2.jpg') }}"
                                            alt="{{ config('app.name') }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="tp-about-lwr-content mt-40 mb-20">
                        <div
                            data-anime='{ "el": "childs", "translateX": [30, 0], "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 100, "staggervalue": 300, "easing": "easeOutQuad" }'>
                            <span class="fw-600 tp-text-common-black-2 d-inline-block mb-15 lh-1">About
                                {{ config('app.name') }}</span>
                            <h2 class="tp-ff-dmserif tp-text-theme-2 fs-50 fs-xs-40 lh-1 fw-400 ls-m-1 mb-25">Exchange
                                Ideas, Share Best Practices, and Foster Business Partnerships</h2>
                        </div>
                        <div class="tp-about-lwr-2-list"
                            data-anime='{ "el": "childs", "translateX": [30, 0], "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 100, "staggervalue": 300, "easing": "easeOutQuad" }'>
                            <p class="tp-text-grey-7 ls-0 mb-30">The AEF Country Economic Week Africa is a prestigious event
                                that brings together top government officials, policy makers, and the organized private
                                sector to review the current perspectives and emerging opportunities for key economies
                                across Africa. This annual event serves as a platform for dialogue, collaboration, and
                                networking, with the goal of driving economic growth and development across the continent.
                                <br><br>
                                The AEF Country Economic Week Africa is a vital opportunity for stakeholders to exchange
                                ideas, share best practices, and foster business partnerships that can drive sustainable
                                economic development. By bringing together key decision-makers from government and industry,
                                the event aims to promote policy coherence, strengthen regulatory frameworks, and catalyze
                                investments that can drive inclusive growth and poverty reduction.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- tp-about-area-end -->

    <!-- tp-about-mission/vision-start -->
    <div class="tp-about-area pb-100 pt-140">
        <div class="container container-1230">
            <div class="row gx-24">
                <div class="col-lg-6">
                    <div class="tp-about-lwr-content mt-40 mb-20">
                        <div
                            data-anime='{ "el": "childs", "translateX": [30, 0], "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 100, "staggervalue": 300, "easing": "easeOutQuad" }'>
                            <span class="fw-600 tp-text-common-black-2 d-inline-block mb-15 lh-1">About
                                {{ config('app.name') }}</span>
                            <h2 class="tp-ff-dmserif tp-text-theme-2 fs-50 fs-xs-40 lh-1 fw-400 ls-m-1 mb-25">Our Mission</h2>
                        </div>
                        <div class="tp-about-lwr-2-list"
                            data-anime='{ "el": "childs", "translateX": [30, 0], "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 100, "staggervalue": 300, "easing": "easeOutQuad" }'>
                            <p class="tp-text-grey-7 ls-0 mb-30">The AEF Country Economic Week Africa aims to provide in-depth analysis and insights on one African economy at a time, focusing on key economic trends, opportunities, and challenges. Through engagement with experts, policymakers, and industry leaders, the event seeks to foster a better understanding of the economic landscape in Africa and promote sustainable development strategies.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="tp-about-lwr-content mt-40 mb-20">
                        <div
                            data-anime='{ "el": "childs", "translateX": [30, 0], "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 100, "staggervalue": 300, "easing": "easeOutQuad" }'>
                            <span class="fw-600 tp-text-common-black-2 d-inline-block mb-15 lh-1">Get to Know More About Us</span>
                            <h2 class="tp-ff-dmserif tp-text-theme-2 fs-50 fs-xs-40 lh-1 fw-400 ls-m-1 mb-25">Values</h2>
                        </div>
                        <div class="tp-about-lwr-2-list"
                            data-anime='{ "el": "childs", "translateX": [30, 0], "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 100, "staggervalue": 300, "easing": "easeOutQuad" }'>
                            <p class="tp-text-grey-7 ls-0 mb-30">
                                <ol>
                                    <li><strong>Integrity:</strong> We are committed to providing accurate and unbiased information on African economies.</li>
                                    <li><strong>Collaboration:</strong> We believe in the power of partnerships and collective action to drive economic growth in Africa.</li>
                                    <li><strong>Innovation:</strong> We strive to bring fresh perspectives and creative solutions to complex economic challenges.</li>
                                    <li><strong>Inclusivity:</strong> We value diversity and inclusion in our discussions and engagements with stakeholders from all backgrounds.</li>
                                    <li><strong>Impact:</strong> We are dedicated to making a positive difference in African economies through our work and events.</li>
                                </ol>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- tp-about-mission/vision-end -->

    <!-- tp-service-area-start -->
    <div class="tp-service-area pb-135">
        <div class="container container-1230">
            <div class="row gx-24">
                <div class="col-12">
                    <div class="tp-service-lwr-content text-center mb-55"
                        data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 100, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <span class="fw-600 tp-text-common-black-2 d-inline-block mb-15 lh-1">Governance</span>
                        <h2 class="tp-ff-dmserif tp-text-theme-2 fs-50 fs-xs-40 lh-1 fw-400 ls-m-1 mb-25">Our Key
                            Objectives</h2>
                    </div>
                </div>
            </div>
            <div class="row"
                data-anime='{ "el": "childs", "perspective": [900, 1200], "scaleY": [1.1, 1], "rotateY": [-30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <div class="col-lg-6 col-md-6">
                    <div class="tp-service-lwr-item tp-round-10 mb-30">
                        <span class="d-inline-block mb-30">
                            <svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M42.3917 1.59912C41.8184 1.02716 41.1253 0.589505 40.3625 0.317676C39.5996 0.0458458 38.786 -0.0533858 37.9802 0.027131C32.857 0.522389 15.6276 2.65567 8.9728 9.30313C5.79172 12.4929 3.90539 16.7482 3.67808 21.2473C3.45077 25.7464 4.89861 30.1702 7.74199 33.6643L0.514906 40.8914C0.180776 41.2374 -0.00410993 41.7007 6.93408e-05 42.1816C0.00424861 42.6626 0.197159 43.1227 0.53725 43.4627C0.877342 43.8028 1.3374 43.9958 1.81835 43.9999C2.29929 44.0041 2.76264 43.8192 3.10859 43.4851L10.3357 36.258C13.8291 39.1052 18.254 40.556 22.7551 40.3301C27.2561 40.1041 31.5135 38.2173 34.7042 35.0345C41.447 28.2898 43.5087 11.1136 43.9838 6.01058C44.0615 5.20326 43.959 4.38876 43.6836 3.62588C43.4083 2.863 42.967 2.17075 42.3917 1.59912ZM32.1197 32.4335C29.6186 34.9254 26.2962 36.4219 22.7727 36.6436C19.2491 36.8654 15.7653 35.7973 12.9715 33.6386L30.6394 15.9708C30.9735 15.6248 31.1584 15.1615 31.1542 14.6805C31.15 14.1996 30.9571 13.7395 30.617 13.3994C30.277 13.0593 29.8169 12.8664 29.3359 12.8622C28.855 12.8581 28.3917 13.043 28.0457 13.3771L10.3687 31.0449C8.20969 28.2514 7.14132 24.7675 7.36309 21.2438C7.58486 17.7201 9.0816 14.3977 11.5738 11.8968C16.176 7.29642 28.8656 4.58534 38.3342 3.67737C38.6024 3.65127 38.873 3.68457 39.1269 3.77491C39.3807 3.86525 39.6115 4.0104 39.8029 4.20005C39.9943 4.38969 40.1416 4.61917 40.2343 4.87218C40.3269 5.12518 40.3627 5.3955 40.3391 5.6639C39.422 15.5452 36.7787 27.7652 32.1105 32.4335H32.1197Z"
                                    fill="#B17856" />
                            </svg>
                        </span>
                        <h4 class="tp-ff-dmserif fw-400 fs-26 tp-text-theme-2 mb-10"><a class="underline-lwr"
                                href="javascript:void(0)">1. Reviewing current economic perspectives</a></h4>
                        <p class="tp-text-grey-7 mb-0">The event provides a comprehensive overview of the economic landscape in key African economies, including trends, challenges, and opportunities. Participants have the opportunity to hear from leading experts and gain insights into emerging trends that may impact their business operations.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="tp-service-lwr-item tp-round-10 mb-30">
                        <span class="d-inline-block mb-30">
                            <svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_842_216)">
                                    <path
                                        d="M22 22C24.1756 22 26.3023 21.3549 28.1113 20.1462C29.9202 18.9375 31.3301 17.2195 32.1627 15.2095C32.9952 13.1995 33.2131 10.9878 32.7886 8.85401C32.3642 6.72022 31.3166 4.76021 29.7782 3.22183C28.2398 1.68345 26.2798 0.635804 24.146 0.211367C22.0122 -0.213071 19.8005 0.00476615 17.7905 0.83733C15.7805 1.66989 14.0625 3.07979 12.8538 4.88873C11.6451 6.69767 11 8.82441 11 11C11.0029 13.9165 12.1628 16.7127 14.225 18.775C16.2873 20.8372 19.0835 21.9971 22 22ZM22 3.66667C23.4504 3.66667 24.8682 4.09676 26.0742 4.90256C27.2801 5.70836 28.2201 6.85367 28.7751 8.19366C29.3302 9.53365 29.4754 11.0081 29.1924 12.4307C28.9095 13.8532 28.211 15.1599 27.1855 16.1855C26.1599 17.211 24.8532 17.9095 23.4307 18.1924C22.0081 18.4754 20.5336 18.3302 19.1937 17.7751C17.8537 17.2201 16.7084 16.2801 15.9026 15.0742C15.0968 13.8682 14.6667 12.4504 14.6667 11C14.6667 9.05508 15.4393 7.18982 16.8146 5.81456C18.1898 4.43929 20.0551 3.66667 22 3.66667Z"
                                        fill="#B17856" />
                                    <path
                                        d="M22 25.6677C17.6254 25.6726 13.4314 27.4125 10.3381 30.5058C7.2448 33.5991 5.50485 37.7931 5.5 42.1677C5.5 42.654 5.69315 43.1203 6.03697 43.4641C6.38079 43.8079 6.8471 44.0011 7.33333 44.0011C7.81956 44.0011 8.28588 43.8079 8.6297 43.4641C8.97351 43.1203 9.16667 42.654 9.16667 42.1677C9.16667 38.7641 10.5187 35.4999 12.9255 33.0932C15.3322 30.6865 18.5964 29.3344 22 29.3344C25.4036 29.3344 28.6678 30.6865 31.0745 33.0932C33.4813 35.4999 34.8333 38.7641 34.8333 42.1677C34.8333 42.654 35.0265 43.1203 35.3703 43.4641C35.7141 43.8079 36.1804 44.0011 36.6667 44.0011C37.1529 44.0011 37.6192 43.8079 37.963 43.4641C38.3068 43.1203 38.5 42.654 38.5 42.1677C38.4951 37.7931 36.7552 33.5991 33.6619 30.5058C30.5686 27.4125 26.3746 25.6726 22 25.6677Z"
                                        fill="#B17856" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_842_216">
                                        <rect width="44" height="44" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </span>
                        <h4 class="tp-ff-dmserif fw-400 fs-26 tp-text-theme-2 mb-10"><a class="underline-lwr"
                                href="javascript:void(0)">2. Exploring emerging opportunities</a></h4>
                        <p class="tp-text-grey-7 mb-0">The event serves as a platform for stakeholders to explore new investment opportunities and innovative business models that can drive economic growth and create jobs. Through panel discussions, workshops, and networking sessions, participants can exchange ideas and explore potential partnership opportunities.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="tp-service-lwr-item tp-round-10 mb-30">
                        <span class="d-inline-block mb-30">
                            <svg width="46" height="44" viewBox="0 0 46 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M45.129 16.296C44.7415 15.0628 43.9675 13.987 42.9214 13.2277C41.8753 12.4685 40.6126 12.066 39.3201 12.0799H31.0452L28.5319 4.24636C28.1367 3.01329 27.36 1.93761 26.314 1.17442C25.2679 0.411242 24.0065 0 22.7116 0C21.4168 0 20.1554 0.411242 19.1093 1.17442C18.0633 1.93761 17.2866 3.01329 16.8914 4.24636L14.3781 12.0799H6.10321C4.81481 12.0818 3.55994 12.4907 2.51784 13.2483C1.47575 14.006 0.699726 15.0735 0.300625 16.2986C-0.0984765 17.5236 -0.100243 18.8434 0.295578 20.0695C0.691398 21.2956 1.46456 22.3653 2.50462 23.1257L9.23967 28.0501L6.67899 35.9802C6.26517 37.2102 6.25993 38.5409 6.66404 39.7741C7.06816 41.0072 7.85998 42.0768 8.92148 42.8232C9.96479 43.5937 11.2291 44.0064 12.526 43.9999C13.823 43.9934 15.0831 43.5681 16.1187 42.7873L22.7116 37.9348L29.3065 42.7816C30.348 43.5476 31.6055 43.9637 32.8983 43.97C34.191 43.9763 35.4525 43.5725 36.5014 42.8166C37.5502 42.0608 38.3324 40.9918 38.7354 39.7634C39.1384 38.5351 39.1415 37.2105 38.7443 35.9802L36.1836 28.0501L42.9263 23.1257C43.9782 22.3748 44.7604 21.3052 45.1572 20.0751C45.5539 18.8451 45.544 17.52 45.129 16.296ZM40.6913 20.0669L32.8426 25.8038C32.5202 26.039 32.2804 26.37 32.1573 26.7495C32.0341 27.1291 32.034 27.5379 32.157 27.9175L35.14 37.1413C35.291 37.6091 35.2897 38.1127 35.1364 38.5798C34.983 39.0468 34.6855 39.4532 34.2867 39.7405C33.8878 40.0278 33.4081 40.1813 32.9165 40.1788C32.4249 40.1763 31.9468 40.0179 31.5509 39.7266L23.8329 34.0446C23.5078 33.8058 23.115 33.677 22.7116 33.677C22.3083 33.677 21.9155 33.8058 21.5904 34.0446L13.8724 39.7266C13.4767 40.0219 12.9972 40.1835 12.5035 40.1879C12.0098 40.1924 11.5275 40.0395 11.1265 39.7515C10.7255 39.4634 10.4267 39.0551 10.2734 38.5858C10.1201 38.1165 10.1202 37.6105 10.2738 37.1413L13.2663 27.9175C13.3893 27.5379 13.3892 27.1291 13.266 26.7495C13.1429 26.37 12.9031 26.039 12.5807 25.8038L4.73196 20.0669C4.33669 19.7775 4.04299 19.3706 3.89281 18.9043C3.74263 18.4379 3.74365 17.9361 3.89573 17.4704C4.04781 17.0047 4.34317 16.599 4.73962 16.3112C5.13606 16.0234 5.61332 15.8683 6.10321 15.8679H15.7626C16.1636 15.8679 16.5542 15.7406 16.8782 15.5044C17.2023 15.2682 17.443 14.9352 17.5657 14.5535L20.5014 5.40359C20.6521 4.93537 20.9474 4.52703 21.3449 4.23736C21.7425 3.94769 22.2217 3.79162 22.7135 3.79162C23.2054 3.79162 23.6846 3.94769 24.0821 4.23736C24.4797 4.52703 24.775 4.93537 24.9257 5.40359L27.8614 14.5535C27.9841 14.9352 28.2248 15.2682 28.5488 15.5044C28.8729 15.7406 29.2635 15.8679 29.6645 15.8679H39.3239C39.8138 15.8683 40.291 16.0234 40.6875 16.3112C41.0839 16.599 41.3793 17.0047 41.5314 17.4704C41.6834 17.9361 41.6845 18.4379 41.5343 18.9043C41.3841 19.3706 41.0904 19.7775 40.6951 20.0669H40.6913Z"
                                    fill="#B17856" />
                            </svg>
                        </span>
                        <h4 class="tp-ff-dmserif fw-400 fs-26 tp-text-theme-2 mb-10"><a class="underline-lwr"
                                href="javascript:void(0)">3. Strengthening public-private partnerships</a></h4>
                        <p class="tp-text-grey-7 mb-0">The AEF Country Economic Week Africa promotes dialogue and collaboration between government officials and the private sector, with the aim of fostering mutual understanding and cooperation. By working together, stakeholders can address key economic challenges, maximize opportunities, and drive sustainable development.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="tp-service-lwr-item tp-round-10 mb-30">
                        <span class="d-inline-block mb-30">
                            <svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M42.3917 1.59912C41.8184 1.02716 41.1253 0.589505 40.3625 0.317676C39.5996 0.0458458 38.786 -0.0533858 37.9802 0.027131C32.857 0.522389 15.6276 2.65567 8.9728 9.30313C5.79172 12.4929 3.90539 16.7482 3.67808 21.2473C3.45077 25.7464 4.89861 30.1702 7.74199 33.6643L0.514906 40.8914C0.180776 41.2374 -0.00410993 41.7007 6.93408e-05 42.1816C0.00424861 42.6626 0.197159 43.1227 0.53725 43.4627C0.877342 43.8028 1.3374 43.9958 1.81835 43.9999C2.29929 44.0041 2.76264 43.8192 3.10859 43.4851L10.3357 36.258C13.8291 39.1052 18.254 40.556 22.7551 40.3301C27.2561 40.1041 31.5135 38.2173 34.7042 35.0345C41.447 28.2898 43.5087 11.1136 43.9838 6.01058C44.0615 5.20326 43.959 4.38876 43.6836 3.62588C43.4083 2.863 42.967 2.17075 42.3917 1.59912ZM32.1197 32.4335C29.6186 34.9254 26.2962 36.4219 22.7727 36.6436C19.2491 36.8654 15.7653 35.7973 12.9715 33.6386L30.6394 15.9708C30.9735 15.6248 31.1584 15.1615 31.1542 14.6805C31.15 14.1996 30.9571 13.7395 30.617 13.3994C30.277 13.0593 29.8169 12.8664 29.3359 12.8622C28.855 12.8581 28.3917 13.043 28.0457 13.3771L10.3687 31.0449C8.20969 28.2514 7.14132 24.7675 7.36309 21.2438C7.58486 17.7201 9.0816 14.3977 11.5738 11.8968C16.176 7.29642 28.8656 4.58534 38.3342 3.67737C38.6024 3.65127 38.873 3.68457 39.1269 3.77491C39.3807 3.86525 39.6115 4.0104 39.8029 4.20005C39.9943 4.38969 40.1416 4.61917 40.2343 4.87218C40.3269 5.12518 40.3627 5.3955 40.3391 5.6639C39.422 15.5452 36.7787 27.7652 32.1105 32.4335H32.1197Z"
                                    fill="#B17856" />
                            </svg>
                        </span>
                        <h4 class="tp-ff-dmserif fw-400 fs-26 tp-text-theme-2 mb-10"><a class="underline-lwr"
                                href="javascript:void(0)">4. Promoting policy coherence</a></h4>
                        <p class="tp-text-grey-7 mb-0">The event provides a forum for stakeholders to discuss policy issues, regulatory challenges, and governance issues that may impact economic growth. By fostering dialogue and collaboration, participants can work together to develop policy solutions that can drive inclusive and sustainable development.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- tp-service-area-end -->

@endsection