<div class="d-flex flex-column flex-root" id="facturis_app_root">

    <div class="d-flex flex-column flex-lg-row flex-column-fluid">

        <div class="d-flex flex-column flex-lg-row-fluid w-lg-50 p-10 order-2 order-lg-1">

            <div class="d-flex flex-center flex-column flex-lg-row-fluid">

                <div class="w-lg-500px p-10">


                    @include('layouts.parts.messages.messages')

                    <form class="form w-100" novalidate="novalidate" id="facturis_id_sign_in_form"
                        data-facturis-redirect-url="{{ route('facturis:home') }}"
                        action="{{ route('facturis:auth:loginPost') }}" method="post">
                        @csrf
                        @honeypot
                        <div class="text-center mb-11">

                            <h1 class="text-dark fw-bolder mb-3">Sign In</h1>

                            <div class="text-gray-500 fw-semibold fs-6">Your Social Campaigns</div>

                        </div>

                        <div class="row g-3 mb-9">

                            <div class="col-md-6">

                                <a href="#"
                                    class="btn btn-flex btn-outline btn-text-gray-700 btn-active-color-primary bg-state-light flex-center text-nowrap w-100">
                                    <img alt="Logo"
                                        src="{{ asset('assets/media/svg/brand-logos/google-icon.svg') }}"
                                        class="h-15px me-3" />Sign in with Google</a>

                            </div>

                            <div class="col-md-6">

                                <a href="#"
                                    class="btn btn-flex btn-outline btn-text-gray-700 btn-active-color-primary bg-state-light flex-center text-nowrap w-100">
                                    <img alt="Logo"
                                        src="{{ asset('assets/media/svg/brand-logos/apple-black.svg') }}"
                                        class="theme-light-show h-15px me-3" />
                                    <img alt="Logo"
                                        src="{{ asset('assets/media/svg/brand-logos/apple-black-dark.svg') }}"
                                        class="theme-dark-show h-15px me-3" />Sign in with Apple</a>

                            </div>

                        </div>


                        <div class="separator separator-content my-14">
                            <span class="w-125px text-gray-500 fw-semibold fs-7">Or with email</span>
                        </div>

                        <div class="fv-row mb-8">

                            <input type="text" placeholder="Email" value="abdelgha4or@gmail.com" name="email" autocomplete="off"
                                value="{{ old('email') }}"
                                class="form-control bg-transparent @error('email') is-invalid @enderror" />
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="fv-row mb-3">

                            <input type="password" placeholder="Password" name="password" autocomplete="off"
                                class="form-control bg-transparent @error('password') is-invalid @enderror" />
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-8">
                            <div></div>

                            <a href="#" class="link-primary">Forgot Password ?</a>

                        </div>

                        <div class="d-grid mb-10">
                            <button type="submit" id="facturis_id_sign_in_submit" class="btn btn-primary">

                                <span class="indicator-label">Sign In</span>

                                <span class="indicator-progress">Please wait...
                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>

                            </button>
                        </div>

                        <div class="text-gray-500 text-center fw-semibold fs-6">Not a Member yet?
                            <a href="#" class="link-primary">Sign up</a>
                        </div>

                    </form>
                </div>

            </div>

            <div class="d-flex flex-center flex-wrap px-5">
                <div class="d-flex fw-semibold text-primary fs-base">
                    <a href="" class="px-5" target="_blank">Terms</a>
                    <a href="" class="px-5" target="_blank">Plans</a>
                    <a href="" class="px-5" target="_blank">Contact Us</a>
                </div>
            </div>

        </div>

        <div class="d-flex flex-lg-row-fluid w-lg-50 bgi-size-cover bgi-position-center order-1 order-lg-2"
            style="background-image: url({{ asset('assets/media/misc/auth-bg.png') }})">
            <div class="d-flex flex-column flex-center py-7 py-lg-15 px-5 px-md-15 w-100">
                <a href="" class="mb-0 mb-lg-12">
                    <img alt="Logo" src="{{ asset('assets/media/logos/custom-1.png') }}" class="h-60px h-lg-75px" />
                </a>

                <img class="d-none d-lg-block mx-auto w-275px w-md-50 w-xl-500px mb-10 mb-lg-20"
                    src="{{ asset('assets/media/misc/auth-screens.png') }}" alt="" />

                <h1 class="d-none d-lg-block text-white fs-2qx fw-bolder text-center mb-7">Fast, Efficient and
                    Productive</h1>

                <div class="d-none d-lg-block text-white fs-base text-center">In this kind of post,
                    <a href="#" class="opacity-75-hover text-warning fw-bold me-1">the blogger</a>introduces a
                    person they’ve interviewed
                    <br />and provides some background information about
                    <a href="#" class="opacity-75-hover text-warning fw-bold me-1">the interviewee</a>and their
                    <br />work following this is a transcript of the interview.
                </div>

            </div>

        </div>

    </div>
</div>
