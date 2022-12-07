@extends('layouts.main')

@section('content')

<!--Card de Vagas concorridas-->
<div class="container mt-5 mb-5 ">
  <div class="card text-center m-3 column-md-3" style="max-width: 300px;">
        <div class="card-body">
          <h5 class="card-title">Adicionar vaga</h5>
            <a href="/vagas/create" class="btn btn-primary m-3">Nova vaga</a>
        </div>
        <div class="card-footer text-muted">
          2 days ago
        </div>
    </div>
  <h2 class="text-center fw-semibold mb-4">Vagas Cadastradas</h2>
  <div class="row">
    
  @foreach($vagas as $vaga)
    <div class="card text-center m-3 column-md-3" style="max-width: 300px;">
      <div class="card-body">
        <h5 class="card-title">Vaga: #{{$vaga->id}}</h5>
          <p class="card-text">Categoria:<small class="text-muted"> {{$vaga->categoria}}</small></p>
          <a href="/vagas/edit/{{ $vaga->id }}" class="btn btn-primary mb-2">Detalhes</a><br>
          <form action="/vagas/{{ $vaga->id }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-xs btn-default text-danger mx-1 shadow" title="Deletar">
                <i class="fa fa-lg fa-fw fa-trash"></i>
            </button>
          </form>
      </div>
      <div class="card-footer text-muted">
        2 days ago
      </div>
    </div>
  @endforeach
  </div>
</div>
@endsection('content')