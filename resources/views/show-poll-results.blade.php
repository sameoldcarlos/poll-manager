@extends('layouts.app')

@section('content')
    <div class="maincontainer">
        <div class="poll-form">
            @if($poll->total_votes>0)
                <h2 class='text-center'>{{ $poll->title }}</h2>
                <h3>{{ $poll->question }}</h3>
                @foreach($poll->options as $option)
                <div class="option-data">
                    <div class="option-info">
                        {{ $option->answer }} - {{ $option->num_votes }} votos
                        <span class="votes-pct">{{ round((100*$option->num_votes)/$poll->total_votes, 2)}}%</span>
                    </div>
                    <div class="progress-bar" style="width: {{ (100*$option->num_votes)/$poll->total_votes }}%;"></div>
                </div>
                @endforeach

            @else
                <span class="alert alert-danger" role="alert">Esta enquete ainda não possui votos</span>
            @endif
            <hr>

            <div class="poll-actions">
                <a href="/public/vote/{{ $poll->id }}" class="btn btn-primary">Votar nesta enquete</a>
            </div>
        </div>
    </div>
@endsection