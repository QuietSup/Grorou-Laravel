@extends('layouts.app')
@section('content')

    <script>
        var delSvg = '{{ asset('/img/delete.svg/') }}';
    </script>

<form id="edit" method="post" action="{{ route('sets.update', $set->id) }}" class="content">
    @csrf
    @method('patch')
    <!--CONTENT-->
    <div class="container">
        <div class="create-space">
            <div class="enter-name">
                <label class="title">Flashcards name</label>
                <div class="input-name-space">
                    <input name="name" type="text" class="enter" value="{{ $set->name }}" required>
                </div>
            </div>

            @foreach($set->flashcards as $key => $card)
            <div class="new-term-space">
                <div class="number-delete">
                    <span class="title">{{ $key }}</span>
                    <button type="button" class="delete"><img src="{{asset('img/delete.svg')}}"></button>
                </div>

                <div class="term-definition">
                    <div>
                        <label class="title">Term</label>
                        <div class="input_space">
                            <input name="term-{{ $key }}" type="text" class="enter" value="{{$card->term}}" required>
                        </div>
                    </div>
                    <div>
                        <label class="title">Definition</label>
                        <div class="input_space">
                            <input name="definition-{{ $key }}" type="text" class="enter" value="{{$card->definition}}" required>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

            <div class="add-space">
                <button type="button">
                    <img src="{{asset('img/add.svg')}}">
                    <span>Add flashcard</span>
                </button>
            </div>

        </div>

        <div style="display: flex; align-content: center; justify-content: center">
        <button id="submit-edit" type="submit" class="confirm">
              <span class="button_text">
                  Save
              </span>
        </button>
        </div>

    </div>

</form>
@endsection
