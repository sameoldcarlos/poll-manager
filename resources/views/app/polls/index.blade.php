@extends('layouts.app')

@section('content')

<h1 class="title text-center">Aqui estão suas enquetes, {{ Auth::user()->name }}!</h1>

<a href="/poll/new" type="button" class="new-poll-button btn btn-primary">Nova Enquete</a>

<table class="polls-table table table-striped">
    <thead class="table-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Autor</th>
        <th scope="col">Título</th>
        <th scope="col">Pergunta</th>
        <th scope="col">Número de votos</th>
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
            <td>{{ $poll->total_votes }}</td>
            <td>
              <button id="button{{ $poll->id }}" class="delete-poll btn btn-link" title="Deletar Enquete" style="color:rgb(180, 10, 10);" data-toggle="modal" data-target="#modalExemplo"><i class="bi-trash-fill"></i></button>
              <a href="/public/show-results/{{ $poll->id }}" class="see-results btn btn-link" title="Ver Resultados" style="color:rgb(49, 49, 49);"><i class="bi-eye-fill"></i></a>
            </td>

          </tr>
        @endforeach
      </tbody>
    </table>

        <form method="POST" class="delete-form">
          @method('DELETE')
          @csrf
          <div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Confirmar exclusão</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  Esta enquete está prestes a ser excluída e a ação não poderá ser desfeita. Você tem certeza que quer continuar?
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Não</button>
                  <button tyoe="submit" class="confirm-deletion btn btn-danger">Sim, apagar enquete</button>
                </div>
              </div>
            </div>
          </div>
      </form>
  

  @endsection