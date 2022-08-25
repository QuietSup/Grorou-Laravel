@extends('layouts.app')

@section('content')

{{--    AAAAAAAAAAAAAAAAAAAAAAAAAAA--}}


<div class="content-center">
    <!--CONTENT-->
    <div class="container">



        <form method="POST" action="{{ route('login') }}" class="login-space">
            @csrf

            <div class="logo">Gorou</div>
            <div class="email-password">
                <div class="input-register">
                    <label class="title">Email:</label>
                    <div class="input_space">
                        <input name="email" type="text" class="enter @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    </div>
                </div>

                @error('email')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror

                <div class="input-register">
                    <label class="title">Password:</label>
                    <div class="input_space">
                        <input name="password" class="enter @error('password') is-invalid @enderror" required autocomplete="current-password" type="password" id="current-password">
                    </div>
                </div>

                @error('password')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror



                <div class="row mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                </div>

            </div>

            <div class="register-or-login">
                <!--        <a href="#">-->
                <button type="submit" class="confirm">
              <span class="button_text">
                  Log in
              </span>
                </button>
                <!--        </a>-->
                <span>or&nbsp;<a href="{{ route('register') }}">Sign up</a>&nbsp;if you don't have account</span>
            </div>

            @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
            @endif

        </form>


    </div>
</div>

@endsection
