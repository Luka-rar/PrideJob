@extends('layouts.main')

@section('content')

<div class="container mb-5">
    <h4>Processo - #ID: {{$vaga->id}} -
      @if($vaga->quantidade == 0)
        <small class="text-danger"> Vagas esgotadas!</small>
      @else
        <small class="text-warning">Em andamento</small>
      @endif
    </h4>
@if($inscritos->count() == 0)
<h5 class="mb-5 mt-5 text-muted">Não há inscritos para esse processo no momento!<h5>
@else
<table class="table table-borderless caption-top table-striped table-hover">
<caption>Lista de candidatos inscritos</caption>
  <thead class="table-light">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">Email</th>
      <th scope="col">Telefone</th>
      <th scope="col">Celular</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($inscritos as $inscrito)
    <tr>
      <td>{{$inscrito->id}}</td>
      <td>{{$inscrito->nome_completo}}</td>
      <td>{{$inscrito->email}}</td>
      <td>{{$inscrito->telefone}}</td>
      <td>{{$inscrito->celular}}</td>
      <td>
        <a href="/vagas/candidato/{{ $inscrito->id }}/{{ $vaga->id }}" class="btn btn-warning mb-2 p-3" title="ver"><i class="fa fa-lg fa-fw fa-eye"></i></a><br>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endif
</div>

@endsection('content') 