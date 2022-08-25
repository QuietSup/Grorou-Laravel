<div class="container">
    <nav class="navbar">
        <a href="/" class="logo">
            <div class="name">Gorou</div>
        </a>
        <div class="menu">
            <a href="#" class="close"><img class="close" src="{{asset('img/Vector.svg')}}"></a>
            <a href="{{url('/')}}" class="menu_title">My space</a>
            <a href="{{route('sets.find')}}" class="menu_title">Find set</a>
            <a href="{{ route('sets.create') }}" class="menu_title">Create set</a>
            <div class="accounts">
                <a class="account"><span class="menu_title">{{ Auth::user()->name }}</span><img class="avatar" src="{{ asset(Auth::user()->getAvatar()) }}" alt="account"></a>
                <a href="{{ route('users.edit') }}" class="account-link"><span class="menu_title">{{ Auth::user()->name }}</span><img class="avatar" src="{{ asset(Auth::user()->getAvatar()) }}" alt="account"></a>
            </div>
        </div>
    </nav>
</div>
