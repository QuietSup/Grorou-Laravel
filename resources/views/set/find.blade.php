@extends('layouts.app')
@section('content')
<div class="content">
<!--CONTENT-->
<div class="container">

  <form action="{{route('sets.find')}}" method="get" class="search-space">
    <div class="input-space">
      <input name="search" class="enter">
      <button class="search-button" type="submit">
        <img class="icon" src="{{asset('img/search.svg')}}">
      </button>
    </div>
  </form>

  <div class="row">

      @foreach($sets as $card)
    <div class="col-lg-4 col-md-6 col-12">
      <div class="card">
        <span>{{$card->name}}</span>

        <div class="terms-author">
          <span>{{ $card->flashcardsNum() }} {{$card->flashcardsNum()===1 ? 'term' : 'terms'}} | {{ $card->user->name }}</span>
          <img src="{{ asset($card->user->getAvatar()) }}" alt="author"/>
        </div>

        <div class="buttons search-card">
          <a href="{{ route('sets.show', $card->id) }}"><button class="button">
                    <span class="text">
                        All terms
                    </span>
          </button></a>
          <button class="button button-svg save-B" style="background: {{ $user->savedSet->firstWhere('set_id', $card->id) ? 'rgb(255, 193, 7)' : 'rgb(120, 211, 178)' }}" value="{{$card->id}}">
            <img src="{{asset('img/bookmark.svg')}}">
          </button>
        </div>
      </div>
    </div>
      @endforeach


  </div>

</div>

</div>
@endsection
