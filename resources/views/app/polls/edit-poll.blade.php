@extends('layouts.app')

@section('content')
<div class="content">
    <form class="poll-form" method="POST" action="/save-poll">
        @csrf
        <div class="form-group">
          <label for="inputPollTitle">Título</label>
          <input type="text" class="form-control" id="inputPollTitle" name="title" placeholder="Digite um título para a sua enquete" value={{ $poll->title }}>
        </div>
        <div class="form-group">
          <label for="inputPollQuestion">Pergunta</label>
          <input type="text" class="form-control" id="inputPollQuestion" name="question" placeholder="Pergunte algo" value={{ $poll->question }}>
        </div>
        <div class="options-container">
            <div class="form-group" id="pollOptions">
                <label>Opções</label>
                @foreach($options as $option)
                    <input type="text" class="form-control" placeholder="Opção 1" name="option_field[]" value={{ $option->answer }}>
                @endforeach
            </div>
            <button type="button" class="add-option btn btn-primary" id="addOption">Adicionar Opção</button>
        </div>
        
        <div class="form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>
@endsection