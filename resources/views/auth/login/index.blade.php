@extends('layouts.app')

@section('content')
    <div class="bg-image" style="background-image: url('{{ asset('assets/media/photos/photo22@2x.jpg') }}');">
        <div class="row g-0 bg-primary-op">

            <div class="hero-static col-md-6 d-flex align-items-center bg-body-extra-light">
                <div class="p-3 w-100">

                    <div class="mb-3 text-center">
                        <a class="fw-bold fs-1" href="https://facturis.ma" target="_blank">
                            <span class="text-dark">FACTURIS</span><span class="text-primary">app</span>
                        </a>
                        <p class="text-uppercase fw-bold fs-sm text-muted">Se connecter</p>
                    </div>


                    <div class="row g-0 justify-content-center">
                        <div class="col-sm-8 col-xl-6">
                            <form action="{{ route('admin:auth:loginPost') }}" method="post">
                                @csrf
                                @honeypot
                                <div class="py-3">
                                    <div class="mb-4">
                                        <input type="email"
                                            class="form-control form-control-lg form-control-alt @error('email') is-invalid @enderror"
                                            id="email" name="email" placeholder="E-mail">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mb-4">
                                        <input type="password"
                                            class="form-control form-control-lg form-control-alt @error('password') is-invalid @enderror"
                                            id="password" name="password" placeholder="Mot de pass">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mb-4">
                                        <input class="form-check-input form-control-alt" type="checkbox" name="remember"
                                            id="remember-check" {{ old('remember') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="remember-check">
                                            Se souvenir de moi
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <button type="submit" class="btn w-100 btn-lg btn-hero btn-primary">
                                        <i class="fa fa-fw fa-sign-in-alt opacity-50 me-1"></i> Sign In
                                    </button>
                                    <p class="mt-3 mb-0 d-lg-flex justify-content-lg-between">
                                        @if (Route::has('admin:auth:forgotpassword'))
                                            <a class="btn btn-sm btn-alt-secondary d-block d-lg-inline-block mb-1"
                                                href="{{ route('admin:auth:forgotpassword') }}">
                                                <i class="fa fa-exclamation-triangle opacity-50 me-1"></i> Mot de passe
                                                oublié ?
                                            </a>
                                        @endif
                                        <a class="btn btn-sm btn-alt-secondary d-block d-lg-inline-block mb-1"
                                            href="#">
                                            <i class="fa fa-plus opacity-50 me-1"></i> New Account
                                        </a>
                                    </p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div
                class="hero-static col-md-6 d-none d-md-flex align-items-md-center justify-content-md-center text-md-center">
                <div class="p-3">
                    <p class="display-4 fw-bold text-white mb-3">
                        Welcome to FACTURIS
                    </p>
                    <p class="fs-lg fw-semibold text-white-75 mb-0">
                        Copyright &copy; <span data-toggle="year-copy"></span>
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
