@extends('layouts.main')

@section('content')
<!--Cards-->
    <div class="container">
    <h1 class="mt-4 text-center" id="painel_text">Painel de vagas</h1>
      <div class="row mt-5 text-center">
        @foreach($vagas as $vaga)
        <div class="card m-2 mb-5" style="max-width: 500px;">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="{{asset('images/bandeiralgbt.jpg')}}" style="max-width: 400px;" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">Empresa: {{$vaga->nome_empresa}}</h5>
                <p class="card-text">Id: {{$vaga->id}}</p>
                <p class="card-text">Categoria: <small class="text-muted">{{$vaga->categoria}}</small></p>
                <p class="card-text">Quantidade: <small class="text-muted">{{$vaga->quantidade}}</small></p>
                <p class="card-text">R$:{{$vaga->salario}}</p>
                <a href="#" class="btn btn-primary">Tenho interesse</a>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
@endsection('content')
