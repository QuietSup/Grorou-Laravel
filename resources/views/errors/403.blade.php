@extends('layouts.app')

@section('content')

    @auth()
        @include('blocks.navbar')
    @endauth

<div class="error" style="<?= !isset($_SESSION['user']['id']) ? 'height: 80vh' : '' ?>">
    <span class="error-code">403</span>
    <span class="error-message">
        Access denied
    </span>
    <?php if (!isset($_SESSION['user']['id'])): ?>
    <span style="
    font-family: 'Open Sans';
    font-style: normal;
    font-weight: 600;
    font-size: 16px;
    display: flex;
    color: #000000; margin-top: 20px">
        Please,&nbsp;<a href="{{ route('register') }}" style="text-decoration-line: underline;
    color: #78D3B2">sign up</a>&nbsp;
        to continue</span>
    <?php endif; ?>
</div>

@endsection
