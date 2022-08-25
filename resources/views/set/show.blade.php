@extends('layouts.app')
@section('content')

<div class="content">
<!--CONTENT-->
<div class="container">
  <div class="flashcards-name-button">
    <div class="name-space">
      <span>{{ $set->name }}</span>
    </div>
    <a href="{{ route('flashcards.show', $set->id) }}"><button class="button">
        <span class="common">Study</span>
      <img src="{{asset('img/study.svg')}}">
    </button></a>
  </div>

  <div class="all-terms">
    @foreach($set->flashcards as $card)
    <div>
      <div class="term">
        {{ $card->term }}
      </div>
      <div class="definition">
          {{ $card->definition }}
      </div>
    </div>
      @endforeach


  </div>

</div>

</div>

@endsection
