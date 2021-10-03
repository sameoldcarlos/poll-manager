@extends('layouts.app')

@section('content')
<div class="content">
    <form class="poll-form" method="POST" action="/poll/save">
        @csrf
        <div class="form-group">
          <label for="inputPollTitle">Título</label>
          <input type="text" class="form-control" id="inputPollTitle" name="title" placeholder="Digite um título para a sua enquete">
        </div>
        <div class="form-group">
          <label for="inputPollQuestion">Pergunta</label>
          <input type="text" class="form-control" id="inputPollQuestion" name="question" placeholder="Pergunte algo">
        </div>
        <div class="options-container">
            <div class="form-group" id="pollOptions">
                <label>Opções</label>
                <input type="text" class="form-control" placeholder="Opção 1" name="option_field[]">
                <input type="text" class="form-control" placeholder="Opção 2" name="option_field[]">
            </div>            
            <button type="button" class="add-option btn btn-outline-primary" id="addOption">Adicionar Opção</button>
            <div class="num-options-wrn alert alert-danger" id="numOptionsWarning" role="alert"></div>
            <hr>
        </div>
        <div class="save-options">
          <button type="submit" class="save-poll btn btn-success">Salvar Enquete</button>
        </div>
      </form>
</div>
@endsection