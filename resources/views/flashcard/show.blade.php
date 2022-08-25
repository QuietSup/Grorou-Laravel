@extends('layouts.app')
@section('content')

<script>
    var flashcards = {!! $set->flashcards->toJson() !!};
    var i = "0"
    console.log(1);
    console.log(flashcards);
</script>


<div class="content">
<!--CONTENT-->
<div class="container">

    <div class="flashcard-content">
        <div class="tip-flashcard-all">
            <div class="tip"><span>Click card to see term 👇</span></div>
            <div class="flashcard">
                <span class="definition"></span>
                <span class="term"></span>
            </div>
            <div class="all-buttons">
                <button class="previous">
                    <img src="{{asset('img/prev-next.svg')}}">
                </button>
                <a href="{{ route('sets.show', $set->id) }}"><button class="button">
                    <span class="text">
                        All terms
                    </span>
                    <img src="{{asset('img/all.svg')}}">
                </button></a>
                <button class="next">
                    <img src="{{asset('img/prev-next.svg')}}">
                </button>
            </div>
        </div>

            <div class="info">
                <div class="cards-title">
                    <img src="{{asset('img/flashcards.svg')}}">
                    <span>{{ $set->name }}</span>
                </div>

                <div class="progress">
                    <span class="pr">3/14</span>
                    <div class="bar">
<!--                        <hr class="bottom">-->
                        <span class="top"></span>
                    </div>
                </div>

                <div class="author">
                    <div class="text">
                        <span>made by</span>
                        <h1>{{ $set->user->name }}</h1>
                    </div>
                    <img src="{{ asset($set->user->getAvatar()) }}">
                </div>

        </div>
    </div>
</div>


</div>
@endsection
