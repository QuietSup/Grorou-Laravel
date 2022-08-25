@extends('layouts.app')
@section('content')


<div class="content">
<!--CONTENT-->
<div class="container">

  <span class="title">Flashcards</span>

  <div class="row">
<!--    Card 1 -->
      @foreach($saved as $card)
    <div class="col-lg-4 col-md-6 col-12">
<!--      <a href="flashcards.html">-->
      <div class="card">
        <span>{{ $card->set->name }}</span>

        <div class="terms-author">
          <span>{{ $card->set->flashcardsNum() }} {{$card->set->flashcardsNum()===1 ? 'term' : 'terms'}} | {{ $card->set->user->name }}</span>
          <img src="{{ asset($card->set->user->getAvatar()) }}" alt="author"/>
        </div>

        <div class="buttons">
          <button class="icon-link delete-mine" type="button" value="{{ $card->set->id }}">
            <img src="{{asset('img/delete.svg')}}" alt="delete">
          </button>
        </div>
      </div>
<!--      </a>-->
    </div>
      @endforeach





  </div>


  <span id="flashcard-section" class="title">My cards</span>

  <div class="row">

<!--    Card 1-->
      @foreach($created as $card)
    <div class="col-lg-4 col-md-6 col-12">
      <div class="card">
        <span>{{ $card->name }}</span>

        <div class="terms-author">
          <span>{{ $card->flashcardsNum() }} {{$card->flashcardsNum()===1 ? 'term' : 'terms'}} | {{ $card->user->name }}</span>
          <img src="{{ asset($card->user->getAvatar()) }}" alt="author"/>
        </div>

        <div class="buttons">
          <a class="icon-link" href="{{ route('sets.edit', $card->id) }}">
            <img src="{{asset('img/edit.svg')}}" alt="edit">
          </a>
          <button class="icon-link remove" value="{{ $card->id }}">
            <img src="{{asset('img/delete.svg')}}" alt="delete">
          </button>
        </div>
      </div>
    </div>
      @endforeach


  </div>

</div>

</div>

@endsection

