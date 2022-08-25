@extends('layouts.app')

@section('content')

<div class="content-center">
    <div class="container">

        <form method="POST" action="{{ route('register') }}" class="register-space">
            @csrf
            <div class="register-form">
                <div class="photo-nick">
{{--                    <button>--}}
{{--                        <img src="{{asset('img/add_photo.svg')}}">--}}
                        <div style="
    font-family: 'Comfortaa';
    font-style: normal;
    font-weight: 700;
    font-size: 40px;
    display: flex;
    align-items: center;
    color: #006D77;">Gorou</div>
{{--                    </button>--}}
                    <div class="input-register">
                        <label class="title">Nickname</label>
                        <div class="input_space">
                            <input name="name" type="text" class="enter @error('name') is-invalid @enderror" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        </div>
                    </div>

                    @error('name')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>

                <div class="email-password">
                    <div class="input-register">
                        <label class="title">Email</label>
                        <div class="input_space">
                            <input type="text" class="enter @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                        </div>
                    </div>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <div class="input-register">
                        <label class="title">Password</label>
                        <div class="input_space">
                            <input class="enter @error('password') is-invalid @enderror" type="password" name="password" autocomplete="new-password" id="new-password" required>
                        </div>
                    </div>

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror


                    <div class="input-register">
                        <label class="title">{{ __('Confirm Password') }}</label>
                        <div class="input_space">
                            <input class="enter" type="password" name="password_confirmation" required autocomplete="new-password">
                        </div>
                    </div>
                </div>
            </div>
            <div class="image-button">
                <img src="{{asset('img/register.png')}}">
                <div class="center-button">
                    <div class="register-or-login">
                        <a href="#">
                            <!--        <a href="../find.php">-->
                            <button type="submit" class="confirm">
              <span class="button_text">
                  Sign up
              </span>
                            </button>
                        </a>
                        <span>or&nbsp;<a href="{{ route('login') }}">Log in</a>&nbsp;if you have account</span>
                    </div>
                </div>
            </div>
        </form>

    </div>

</div>





@endsection
