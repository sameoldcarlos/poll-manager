@extends('layouts.app')

@section('content')
<h1 class="title text-center">Manage Your Polls</h1>
<table class="table table-striped">
    <thead class="table-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Autor</th>
        <th scope="col">Título</th>
        <th scope="col">Pergunta</th>
        <th scope="col">Ações</th>

      </tr>
    </thead>
    <tbody>
        @foreach ($polls as $poll)
          <tr id="{{ $poll->id }}">
            <th scope="row">{{ $poll->id }}</th>
            <td>{{ (App\User::findOrFail($poll->user_id))->name }}</td>
            <td>{{ $poll->title }}</td>
            <td>{{ $poll->question }}</td>
            <td><button id="button{{ $poll->id }}" class="btn btn-link" title="Deletar Enquete" style="color:rgb(180, 10, 10);" data-toggle="modal" data-target="#modalExemplo"><i class="bi-trash-fill"></i></button></td>

          </tr>
        @endforeach
        <div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Título do modal</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                ...
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                <button type="button" class="btn btn-primary">Salvar mudanças</button>
              </div>
            </div>
          </div>
        </div>
    </tbody>
  </table>

  @endsection