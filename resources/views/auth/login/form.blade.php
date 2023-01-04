<div class="account-pages my-5 pt-sm-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-5">
                <div class="card overflow-hidden">
                    <div class="bg-primary bg-soft">
                        <div class="row">
                            <div class="col-7">
                                <div class="text-primary p-4">
                                    <h5 class="text-primary">Se connecter</h5>

                                </div>
                            </div>
                            <div class="col-5 align-self-end">
                                <img src="{{ Vite::asset('resources/images/profile-img.png') }}" alt=""
                                    class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <div class="auth-logo">
                            <a href="{{ route('facturis:home') }}" class="auth-logo-light">
                                <div class="avatar-md profile-user-wid mb-4">
                                    <span class="avatar-title rounded-circle bg-light">
                                        <img src="{{ Vite::asset('resources/images/logo-light.svg') }}" alt="FACTURIS"
                                            class="rounded-circle" height="34">
                                    </span>
                                </div>
                            </a>

                            <a href="{{ route('facturis:home') }}" class="auth-logo-dark">
                                <div class="avatar-md profile-user-wid mb-4">
                                    <span class="avatar-title rounded-circle bg-light">
                                        <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt=""
                                            class="rounded-circle" height="34">
                                    </span>
                                </div>
                            </a>
                        </div>
                        <div class="p-2">
                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif
                            @if ($errors->any())
                                @foreach ($errors->all() as $error)
                                    <div class="alert alert-danger">{{ $error }}</div>
                                @endforeach
                            @endif
                            <form class="form-horizontal" action="{{ route('facturis:auth:login') }}" method="post">
                                @csrf
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" name="email"
                                        class="form-control  @error('email') is-invalid @enderror" id="email"
                                        placeholder="Enter email" value="{{ old('email') }}">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Mot de password</label>
                                    <div class="input-group auth-pass-inputgroup">
                                        <input type="password" name="password"
                                            class="form-control @error('password') is-invalid @enderror"
                                            placeholder="Enter password" value="" aria-label="Password"
                                            aria-describedby="password-addon">
                                        <button class="btn btn-light " type="button" id="password-addon"><i
                                                class="mdi mdi-eye-outline"></i></button>
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                    </div>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember-check"
                                        {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="remember-check">
                                        Se souvenir de moi
                                    </label>
                                </div>

                                <div class="mt-3 d-grid">
                                    <button class="btn btn-primary waves-effect waves-light" type="submit">Se connecter
                                    </button>
                                </div>

                                @if (Route::has('forgotpassword'))
                                    <div class="mt-4 text-center">
                                        <a href="{{ route('forgotpassword') }}" class="text-muted">
                                            <i class="mdi mdi-lock me-1"></i>
                                            Mot de passe oublié ?
                                        </a>
                                    </div>
                                @endif
                            </form>
                        </div>

                    </div>
                </div>
                <div class="mt-5 text-center">

                    <div>

                        <script>
                            document.write(new Date().getFullYear())
                        </script>
                        FACTURIS <i class="mdi mdi-heart text-danger"></i> by WEDOAPP

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
