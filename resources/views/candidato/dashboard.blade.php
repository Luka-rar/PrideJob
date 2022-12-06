@extends('layouts.main')

@section('content')     
<!--Card de Vagas concorridas-->
<div class="container mt-5 mb-5 ">
   <h2 class="text-center fw-semibold mb-3">Vagas Concorridas</h2>
        <div class="card text-center">
        <div class="card-body">
           <h5 class="card-title">Titulo da vaga</h5>
           <p class="card-text">Informações da vaga, Lorem ipsum dolor sit, amet consectetur adipisicing elit. </p>
           <a href="#" class="btn btn-primary">Visualizar vaga (?)</a>
           <!-- Button trigger modal -->
               <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
               Cancelar Candidatura
               </button>

               <!-- Modal -->
               <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
               <div class="modal-dialog">
                   <div class="modal-content bg-dark">
                   <div class="modal-header">
                       <h1 class="modal-title fs-5" id="staticBackdropLabel">Você tem certeza?</h1>
                       <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                   </div>
                   <div class="modal-body">
                       Se você clicar em aceitar não poderá permanecer nesse processo seletivo, deseja finalizar?.
                   </div>
                   <div class="modal-footer">
                       <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Não, eu ainda quero me aplicar!!</button>
                       <button type="button" class="btn btn-primary">Eu entendo e desejo sair do processo seletivo</button>
                   </div>
                   </div>
               </div>
               </div>
        </div>
        <div class="card-footer text-muted">
           2 days ago
       </div>
</div>
</div>

<!--Upload de Currículo-->

<div class="container mt-3 mb-5">
    <h2 class="text-center fw-semibold mb-3">Seu Currículo</h2>
        <div class="input-group">
        <input type="file" class="form-control dark-bg" id="inputGroupFile" aria-describedby="inputGroupFileAddon" aria-label="Upload">
        <button class="btn btn-outline-secondary" type="button" id="inputGroupFileAddon04">Enviar</button>
        </div>
</div>    
@endsection('content')