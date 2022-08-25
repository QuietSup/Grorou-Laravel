@extends('layouts.app')
@section('content')

    @if ($errors->any())
    <div class="alert alert-danger">
    </div>

    <div class="container">
        <div class='alert alert__error spacer' role='alert'>
            <i class="fas fa-minus-circle alert__icon">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-face-id-error" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M4 8v-2a2 2 0 0 1 2 -2h2"></path>
                    <path d="M4 16v2a2 2 0 0 0 2 2h2"></path>
                    <path d="M16 4h2a2 2 0 0 1 2 2v2"></path>
                    <path d="M16 20h2a2 2 0 0 0 2 -2v-2"></path>
                    <path d="M9 10h.01"></path>
                    <path d="M15 10h.01"></path>
                    <path d="M9.5 15.05a3.5 3.5 0 0 1 5 0"></path>
                </svg>
            </i>
            <ul>
            @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
            @endforeach
            </ul>


            <button type="button" class="alert__close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="fas fa-times-circle alert__close"></i></span>
            </button>
        </div>
    </div>
    @endif

<div class="content">


<!--CONTENT-->
    <form method="post" action="{{ route('users.update') }}" class="container" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="show_acc">
            <div class="main">
                <input accept="image/*" name="avatar" type="file" id="imgupload" style="display:none"/>
                <img class="avatar" src="{{ asset($user->getAvatar()) }}" alt="avatar">
                <div class="nick_space">
                    <label class="title">Nickname
                    </label>
                        <div class="input_space">
                        <input name="name" type="text" class="enter" value="{{ $user->name }}">
                        </div>

                </div>
            </div>

                <div class="details">
                    <span>📚 Sets created: {{ $created }}</span>
                    <span>🎓 Sets studying: {{ $studying }}</span>
                    <button formmethod="post" formaction="{{ route('logout') }}">@method('PATCH') @csrf<span class="log-out">Log out</span></button>
                </div>
        </div>
        <div class="edit_data">
                <img src="{{asset('img/Frame.png')}}" alt="">
            <div class="email_pass">
                <div class="input">
                    <label class="title">Email</label>
                    <div class="input_space">
                        <input name="email" type="text" class="enter" value="{{ $user->email }}">
                    </div>
                </div>
                <div class="input">
                    <label class="title">Password</label>
                    <div class="input_space">
                        <div class="enter"  style="padding: 0">
                        <input name="password" id="change-password" type="password" class="enter" placeholder="new password">
                        <button type="button" id="password-switch">
                            <img class="icon"  style="margin: 0" src="{{asset('img/eye.svg')}}">
                        </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="center-button">
        <a><button class="confirm">
            <span class="button_text">
                Save
            </span>
        </button></a>
        </div>
    </form>


</div>
@endsection
