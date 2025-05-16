<footer>
    <!-- footer area start -->
    <div class="tp-footer-area tp-bg-theme-2 p-relative pt-90">
        <div class="container container-1230">
            <div class="mb-30">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="tp-footer-cpr-widget mb-40">
                            <a class="mb-30 d-inline-block" href="{{ route('homepage') }}">
                                <img data-width="107" src="../assets/img/aef-cewa/logo/logo.png" alt="">
                            </a>
                            <p class="tp-text-rgba-2 lh-26 mb-25">The AEF Country Economic Week Africa aims to provide in-depth analysis and insights on one African economy at a time, focusing on key economic trends, opportunities, and challenges.</p>
                            <div class="tp-footer-cpr-widget-social-icon lwr-icon d-flex">
                                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                <a href="#">
                                    <svg width="13" height="13" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M9.33161 6.77486L15.1688 0H13.7856L8.71722 5.8826L4.66907 0H0L6.12155 8.89546L0 16H1.38336L6.73581 9.78785L11.0109 16H15.68L9.33148 6.77486H9.33187H9.33161ZM7.43696 8.97374L6.81669 8.088L1.88171 1.03969H4.00634L7.98902 6.72789L8.60929 7.61362L13.7863 15.0074H11.6616L7.43709 8.974V8.97361L7.43696 8.97374Z"
                                            fill="currentColor" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="tp-footer-cpr-widget tp-footer-lwr-widget  ml-50 mb-40">
                            <h3 class="tp-footer-cpr-title mb-30 tp-ff-body fw-600 fs-24 tp-text-common-white ls-m-2">
                                Useful links</h3>
                            <div class="tp-footer-cpr-widget-menu">
                                <ul>
                                    <li><a href="{{ route('homepage') }}">Home</a></li>
                                    <li><a href="{{ route('about') }}">About</a></li>
                                    <li><a href="{{ route('events') }}">Events</a></li>
                                    {{-- <li><a href="{{ route('membership') }}">Membership</li> --}}
                                    <li><a href="{{ route('contact') }}">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="tp-footer-cpr-widget tp-footer-lwr-widget mb-40 ml-20">
                            <h3 class="tp-footer-cpr-title mb-30 tp-ff-body fw-600 fs-24 tp-text-common-white ls-m-2">
                                Contact</h3>
                            <div class="tp-footer-cpr-widget-social">
                                <div class="mb-30">
                                    <span class="fw-500 fs-16 d-block lh-1 mb-5">For Further Enquiries</span>
                                    <a class="fw-600 fs-18 ls-m-2 tp-text-common-white underline-white hover-text-white"
                                        href="tel:+(1)2246767430">+234 803 688 3862 </a>
                                </div>
                                <div class="mb-30">
                                    <span class="fw-500 fs-16 d-block lh-1 mb-5">Need Support?</span>
                                    <a class="fw-600 fs-18 ls-m-2 tp-text-common-white underline-white hover-text-white"
                                        href="mailto:info@aefgroup.org">info@aefgroup.org</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="tp-footer-cpr-widget mb-40">
                            <h3 class="tp-footer-cpr-title mb-30 tp-ff-body fw-600 fs-24 tp-text-common-white ls-m-2">
                                Newsletter</h3>
                            <div class="tp-footer-cpr-form tp-footer-lwr-form">
                                <span class="fw-500 fs-16 d-block lh-1 mb-15">Subscribe our newsletter</span>
                                <form action="#">
                                    <div class="p-relative mb-10">
                                        <input class="input tp-round-10" type="email" placeholder="Your email">
                                        <button type="submit" class="icon text-white">
                                            <i class="fa-sharp fa-solid fa-angle-right"></i>
                                        </button>
                                    </div>
                                    <div class="checkbox d-flex">
                                        <input class="tp-checkbox" type="checkbox" id="checkbox">
                                        <label for="checkbox" class="fw-400 fs-14 ls-m-2">I accept all terms and
                                            conditions</label>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tp-footer-cpr-bottom">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="tp-footer-cpr-bottm-text mb-30">
                            <p class="fw-500 fs-16 tp-text-rgba-2 mb-0">© {{ date('Y') }} Africa CEO Council is
                                Powered by<a href="https://www.victor.jeapscarhire.ng"
                                    class="tp-text-common-white underline-white"> Olvios Tech</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer area end -->
</footer>

<!-- JS here -->
<script src="{{ asset('assets/js/vendor/jquery.js') }}"></script>
<script src="{{ asset('assets/js/vendors.min.js') }}"></script>
<script src="{{ asset('assets/js/slider-init.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
