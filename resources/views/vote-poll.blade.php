@extends('layouts.app')

@section('content')
    <div class="maincontainer">
        <form method="post" action="/public/vote/{{ $poll->id }}/confirm" class="poll-form">
            @method('PUT')
            @csrf

            <h2>{{ $poll->title }}</h2>
            <h3>{{ $poll->question }}</h3>

            @foreach($poll->options as $option)
              <div class="radio-toolbar">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="poll_option" value="{{ $option->id }}" id="option{{ $option->id }}">
                  <label class="form-check-label" for="option{{ $option->id }}">
                    {{ $option->answer }}
                  </label>
                </div>
              </div>
            @endforeach

            <div class="vote-buttons">
              <a href="/" class="btn btn-outline-danger">Cancelar</a>
              <button type="submit" class="btn btn-success">Confirmar Voto</button>
            </div>
        </form>
    </div>
@endsection