<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <div class="auth-wrapper auth-cover">
                <div class="auth-inner row m-0">
                    <!-- Brand logo-->
                    <a class="brand-logo" href="#">
                        <x-facturis.logo.logo />

                        <h2 class="brand-text text-primary ms-1">FACTURIS</h2>
                    </a>
                    <!-- /Brand logo-->
                    <!-- Left Text-->
                    <div class="d-none d-lg-flex col-lg-8 align-items-center p-5">
                        <div class="w-100 d-lg-flex align-items-center justify-content-center px-5"><img class="img-fluid" src="{{asset('facturis/screen.png')}}" alt="Register V2" /></div>
                    </div>
                    <!-- /Left Text-->
                    <!-- Register-->
                    <div class="d-flex col-lg-4 align-items-center auth-bg px-2 p-lg-5">
                        <div class="col-12 col-sm-8 col-md-6 col-lg-12 px-xl-2 mx-auto">
                            <h2 class="card-title fw-bold mb-1">Créez votre compte</h2>
                            
                            <form class="auth-register-form mt-2" action="{{route('register')}}" method="POST">
                                 @csrf
                                 <x-honeypot />
                                <div class="mb-1">
                                    <label class="form-label" for="register-email">
                                        Votre adresse email
                                    </label>
                                    <input class="form-control @error('email') is-invalid @enderror " id="register-email" type="text" name="email" value="{{old('email')}}" placeholder="Quel sera votre identifiant pour vous connecter à Facturis" aria-describedby="register-email" tabindex="2" />
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-1">
                                    <label class="form-label" for="register-password">
                                        Définissez un mot de passe
                                    </label>
                                    <div class="input-group input-group-merge form-password-toggle">
                                        <input class="form-control form-control-merge @error('password') is-invalid @enderror" id="register-password" type="password" name="password" placeholder="Pour sécuriser l'accès à votre compte" aria-describedby="register-password" tabindex="3" /><span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-1">
                                    <label class="form-label" for="register-password_confirm">
                                        Confirmer votre mot de passe
                                    </label>
                                    <div class="input-group input-group-merge form-password-toggle">
                                        <input class="form-control form-control-merge @error('password_confirmation') is-invalid @enderror" id="register-password_confirm" type="password" name="password_confirmation" placeholder="" aria-describedby="register-password" tabindex="3" /><span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
                                        @error('password_confirmation')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-1">
                                    <div class="form-check">
                                        <input class="form-check-input" id="register-privacy-policy" type="checkbox" tabindex="4" />
                                        <label class="form-check-label" for="register-privacy-policy">
                                            En cochant cette case, vous déclarez avoir lu et accepté nos 
                                            <a href="#">&nbsp; Conditions Générales d'Utilisation </a>
                                        </label>
                                    </div>
                                </div>
                                <button class="btn btn-primary w-100" tabindex="5">
                                    Créer mon compte et continuer
                                </button>
                            </form>
                            <p class="text-center mt-2"><span>Already have an account?</span><a href="{{route('login')}}"><span>&nbsp;Sign in instead</span></a></p>
                            <div class="divider my-2">
                                <div class="divider-text">or</div>
                            </div>
                            <div class="auth-footer-btn d-flex justify-content-center"><a class="btn btn-facebook" href="#"><i data-feather="facebook"></i></a><a class="btn btn-twitter white" href="#"><i data-feather="twitter"></i></a><a class="btn btn-google" href="#"><i data-feather="mail"></i></a><a class="btn btn-github" href="#"><i data-feather="github"></i></a></div>
                        </div>
                    </div>
                    <!-- /Register-->
                </div>
            </div>
        </div>
    </div>
</div>