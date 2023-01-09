<div class="d-flex flex-column flex-root" id="facturis_app_root">
    <!--facturisStart::Authentication - Sign-in -->
    <div class="d-flex flex-column flex-lg-row flex-column-fluid">
        <!--facturisStart::Body-->
        <div class="d-flex flex-column flex-lg-row-fluid w-lg-50 p-10 order-2 order-lg-1">
            <!--facturisStart::Form-->
            <div class="d-flex flex-center flex-column flex-lg-row-fluid">
                <!--facturisStart::Wrapper-->
                <div class="w-lg-500px p-10">
                    <!--facturisStart::Form-->
                    <form class="form w-100" novalidate="novalidate" id="facturis_id_sign_in_form"
                        data-facturis-redirect-url="{{ route('facturis:home') }}" action="#">
                        <!--facturisStart::Heading-->
                        <div class="text-center mb-11">
                            <!--facturisStart::Title-->
                            <h1 class="text-dark fw-bolder mb-3">Sign In</h1>
                            <!--facturisEnd::Title-->
                            <!--facturisStart::Subtitle-->
                            <div class="text-gray-500 fw-semibold fs-6">Your Social Campaigns</div>
                            <!--facturisEnd::Subtitle=-->
                        </div>
                        <!--facturisStart::Heading-->
                        <!--facturisStart::Login options-->
                        <div class="row g-3 mb-9">
                            <!--facturisStart::Col-->
                            <div class="col-md-6">
                                <!--facturisStart::Google link=-->
                                <a href="#"
                                    class="btn btn-flex btn-outline btn-text-gray-700 btn-active-color-primary bg-state-light flex-center text-nowrap w-100">
                                    <img alt="Logo"
                                        src="{{ asset('assets/media/svg/brand-logos/google-icon.svg') }}"
                                        class="h-15px me-3" />Sign in with Google</a>
                                <!--facturisEnd::Google link=-->
                            </div>
                            <!--facturisEnd::Col-->
                            <!--facturisStart::Col-->
                            <div class="col-md-6">
                                <!--facturisStart::Google link=-->
                                <a href="#"
                                    class="btn btn-flex btn-outline btn-text-gray-700 btn-active-color-primary bg-state-light flex-center text-nowrap w-100">
                                    <img alt="Logo"
                                        src="{{ asset('assets/media/svg/brand-logos/apple-black.svg') }}"
                                        class="theme-light-show h-15px me-3" />
                                    <img alt="Logo"
                                        src="{{ asset('assets/media/svg/brand-logos/apple-black-dark.svg') }}"
                                        class="theme-dark-show h-15px me-3" />Sign in with Apple</a>
                                <!--facturisEnd::Google link=-->
                            </div>
                            <!--facturisEnd::Col-->
                        </div>
                        <!--facturisEnd::Login options-->
                        <!--facturisStart::Separator-->
                        <div class="separator separator-content my-14">
                            <span class="w-125px text-gray-500 fw-semibold fs-7">Or with email</span>
                        </div>
                        <!--facturisEnd::Separator-->
                        <!--facturisStart::Input group=-->
                        <div class="fv-row mb-8">
                            <!--facturisStart::Email-->
                            <input type="text" placeholder="Email" name="email" autocomplete="off"
                                class="form-control bg-transparent" />
                            <!--facturisEnd::Email-->
                        </div>
                        <!--facturisEnd::Input group=-->
                        <div class="fv-row mb-3">
                            <!--facturisStart::Password-->
                            <input type="password" placeholder="Password" name="password" autocomplete="off"
                                class="form-control bg-transparent" />
                            <!--facturisEnd::Password-->
                        </div>
                        <!--facturisEnd::Input group=-->
                        <!--facturisStart::Wrapper-->
                        <div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-8">
                            <div></div>
                            <!--facturisStart::Link-->
                            <a href="#" class="link-primary">Forgot Password ?</a>
                            <!--facturisEnd::Link-->
                        </div>
                        <!--facturisEnd::Wrapper-->
                        <!--facturisStart::Submit button-->
                        <div class="d-grid mb-10">
                            <button type="submit" id="facturis_id_sign_in_submit" class="btn btn-primary">
                                <!--facturisStart::Indicator label-->
                                <span class="indicator-label">Sign In</span>
                                <!--facturisEnd::Indicator label-->
                                <!--facturisStart::Indicator progress-->
                                <span class="indicator-progress">Please wait...
                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                <!--facturisEnd::Indicator progress-->
                            </button>
                        </div>
                        <!--facturisEnd::Submit button-->
                        <!--facturisStart::Sign up-->
                        <div class="text-gray-500 text-center fw-semibold fs-6">Not a Member yet?
                            <a href="#" class="link-primary">Sign up</a>
                        </div>
                        <!--facturisEnd::Sign up-->
                    </form>
                    <!--facturisEnd::Form-->
                </div>
                <!--facturisEnd::Wrapper-->
            </div>
            <!--facturisEnd::Form-->
            <!--facturisStart::Footer-->
            <div class="d-flex flex-center flex-wrap px-5">
                <!--facturisStart::Links-->
                <div class="d-flex fw-semibold text-primary fs-base">
                    <a href="" class="px-5" target="_blank">Terms</a>
                    <a href="" class="px-5" target="_blank">Plans</a>
                    <a href="" class="px-5" target="_blank">Contact Us</a>
                </div>
                <!--facturisEnd::Links-->
            </div>
            <!--facturisEnd::Footer-->
        </div>
        <!--facturisEnd::Body-->
        <!--facturisStart::Aside-->
        <div class="d-flex flex-lg-row-fluid w-lg-50 bgi-size-cover bgi-position-center order-1 order-lg-2"
            style="background-image: url({{ asset('assets/media/misc/auth-bg.png') }})">
            <!--facturisStart::Content-->
            <div class="d-flex flex-column flex-center py-7 py-lg-15 px-5 px-md-15 w-100">
                <!--facturisStart::Logo-->
                <a href="../../demo1/dist/index.html" class="mb-0 mb-lg-12">
                    <img alt="Logo" src="{{ asset('assets/media/logos/custom-1.png') }}" class="h-60px h-lg-75px" />
                </a>
                <!--facturisEnd::Logo-->
                <!--facturisStart::Image-->
                <img class="d-none d-lg-block mx-auto w-275px w-md-50 w-xl-500px mb-10 mb-lg-20"
                    src="{{ asset('assets/media/misc/auth-screens.png') }}" alt="" />
                <!--facturisEnd::Image-->
                <!--facturisStart::Title-->
                <h1 class="d-none d-lg-block text-white fs-2qx fw-bolder text-center mb-7">Fast, Efficient and
                    Productive</h1>
                <!--facturisEnd::Title-->
                <!--facturisStart::Text-->
                <div class="d-none d-lg-block text-white fs-base text-center">In this kind of post,
                    <a href="#" class="opacity-75-hover text-warning fw-bold me-1">the blogger</a>introduces a
                    person they’ve interviewed
                    <br />and provides some background information about
                    <a href="#" class="opacity-75-hover text-warning fw-bold me-1">the interviewee</a>and their
                    <br />work following this is a transcript of the interview.
                </div>
                <!--facturisEnd::Text-->
            </div>
            <!--facturisEnd::Content-->
        </div>
        <!--facturisEnd::Aside-->
    </div>
    <!--facturisEnd::Authentication - Sign-in-->
</div>
