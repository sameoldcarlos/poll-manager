@extends('layouts.app')

@section('content')
<div class="bg-secondary text-light">
    <h1 class="text-center">Enquetes Recentes</h1>
    <div class="row d-flex justify-content-center">
        <div class="col-sm-6">
            @foreach ($polls as $poll)
            <poll-card
                :author_name="'{{ (App\User::findOrFail($poll->user_id))->name }}'"
                :title="'{{ ($poll->title) }}'"
                :question="'{{ ($poll->question) }}'"
                :id="'{{ $poll->id }}'"
                ></poll-card>

            @endforeach
            {{ $polls->links() }}
        </div>
    </div>

</div>
@endsection