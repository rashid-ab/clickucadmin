@extends('layouts.app')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}

<section class="site-main-wrapper">
    <div class="row m-0 pl-md-5 px-3 pr-md-0">
        <div class="col-md-6 col-lg-4 pl-md-0">
            <div class="logo">
                <img src="public/images/logo.png">
            </div>
            <div class="form-login mt-custom_up">
                <div class="login-header mb-5">
                    <h5>Login</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
                <form method="POST" class=".login_form_fields"  action="{{ route('login') }}">
                    @csrf
                    <input id="email" type="email" class="form-control w-100 mt-3 fields_login @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" style="height:50px;border-radius:6px;border:1px solid #e1e1e1;padding:0px 20px;outline:none !important;color:#b2b1c4;" autofocus>
                    @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    <input id="password" type="password" class="form-control w-100 mt-3 fields_login @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" style="height:50px;border-radius:6px;border:1px solid #e1e1e1;padding:0px 20px;outline:none !important;color:#b2b1c4;">
                    @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                    @enderror
                    <button type="submit" class="text-uppercase mt-4 w-100 border-0" style="outline:none !important;background-color: #f9a654;height:50px;border-radius:6px;color:#fff;font-weight:600;">Continue</button>
                    <label class="w-100 mt-3 d-flex flex-wrap align-items-center"><input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> Remember Login Info</label>
                    <div class="reset-pass">
                        <a href="#" class="mt-4 d-block text-site-o">Reset Password?</a>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-6 col-lg-8 pr-md-0 d-md-block d-none">
            <img src="public/images/yoga.jpg" class="w-100 min-h-100  object-cover">
        </div>
    </div>
</section>
@endsection
