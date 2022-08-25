@extends('layouts.app')

@section('content')

@auth()
    @include('blocks.navbar')
@endauth

<div class="error">
    <span class="error-code">404</span>
    <span class="error-message">
        Looks like nothing was found
    </span>
</div>

@endsection

