@extends('layouts.main')

@section('content')     
<!--Card de Vagas concorridas-->
<div class="container mt-5 mb-5 ">
   <h2 class="text-center fw-semibold mb-3">Vagas Concorridas</h2>
    @foreach($vagas as $vaga)
    <div class="card text-center mb-3">
        <div class="card-body">
           <h5 class="card-title">Processo #{{$vaga->id}} de : {{$vaga->nome_empresa}}</h5>
            @if($vaga->pivot->status == 2)
           <p class="card-text text-warning">Em andamento</p>
           <p class="card-text">Acompanhe por aqui o satus de sua inscrição</p>
           @elseif($vaga->pivot->status == 0)
           <p class="card-text text-info">Encerrado!</p>
           <p class="card-text">Vaga encerrada, agradecemos a participação!✌</p>
           @elseif($vaga->pivot->status == 1)
           <p class="card-text text-success">Efetuada!</p>
           <p class="card-text">Parábens, você foi selecionado para realizar uma entrevista com {{$vaga->nome_empresa}},<br> verifique seu email para mais informações!✌</p>
           @endif
           <a class="btn btn-primary link"
           vaga_id="{{$vaga->id}}"
                nome_empresa="{{$vaga->nome_empresa}}"
                tipo_vaga="{{$vaga->tipo_vaga}}"
                beneficio="{{$vaga -> beneficio}}"
                salario="{{$vaga->salario}}"
                requisitos="{{$vaga->requisitos}}"
                local="{{$vaga->local}}"
                horario="{{$vaga->horario}}" 
                cidade="{{$vaga->cidade}}" 
                estado="{{$vaga->estado}}">Visualizar vaga (?)</a>
           <!-- Button trigger modal -->
               <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
               Cancelar Candidatura
               </button> -->
               <a type="button" class="btn btn-primary" href="/vagas/pivo/{{$vaga->id}}">
               Cancelar Candidatura
              </a>
        </div>
        <div class="card-footer text-muted">
           2 days ago
       </div>               
    </div>
    @endforeach
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
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Não, eu ainda quero me aplicar!!</button>
                        <button type="submit" class="btn btn-secondary">Eu entendo e desejo sair do processo seletivo</button> 
                   </div>
                   </div>
               </div>
            </div>

            <div class="modal fade text-center" id="exemplo">
			<div class="modal-dialog modal-dialog-scrollable">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title" id="modalTitle"></h4>
						<button type="button" class="close" data-bs-dismiss="modal">&times;</button>
					</div>
					<div class="modal-body">
          <div class="card text-center">
                  <div class="card-header">
                    Descrição
                  </div>
                  <div class="card-body">
                    <h5 class="card-title" id="tipo_vaga"></h5>
                    <h5 class="card-title">Benefícios</h5>
                    <p class="card-text" id="beneficio"></p>
                    <h5 class="card-title">Salário:</h5>
                    <p class="card-text" id="salario"></p>
                    <h5 class="card-title">Requisitos (cursos exigidos):</h5>
                    <p class="card-text" id="requisitos"></p>
                    <h5 class="card-title">Local:</h5>
                    <p class="card-text" id="local"></p>
                    <h5 class="card-title">Hoário:</h5>
                    <p class="card-text" id="horario"></p>
                    <h5 class="card-title">Cidade:</h5>
                    <p class="card-text" id="cidade"></p>
                    <h5 class="card-title">Estado:</h5>
                    <p class="card-text" id="estado"></p>
                  </div>
                </div>
                  <div class="card-footer text-muted">
                    2 days ago
                  </div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-danger"
							data-bs-dismiss="modal">Fechar</button>
					</div>
				</div>
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


<script src="{{asset ('site/jquery.js')}}"></script>
    <script type="text/javascript">
		$(document).ready(function(){
		$(".link").on("click", function(e){
		e.preventDefault();
		link = $(this);
		//alert($(this).attr("href"));
		item = link.attr("item");
        vaga_id= link.attr("vaga_id");
        nome_empresa= link.attr("nome_empresa");
        tipo_vaga= link.attr("tipo_vaga");
        beneficio= link.attr("beneficio");
        salario= link.attr("salario");
        requisitos= link.attr("requisitos");
        local = link.attr("local");
        horario = link.attr("horario"); 
        cidade = link.attr("cidade"); 
        estado = link.attr("estado");

		$("#modalTitle").text("Vaga de " + nome_empresa + " #" + vaga_id);
        $("#tipo_vaga").text(tipo_vaga);
        $("#beneficio").text(beneficio);
        $("#salario").text(salario);
        $("#requisitos").text(requisitos);
        $("#local").text(local);
        $("#horario").text(horario);
        $("#cidade").text(cidade);
        $("#estado").text(estado);

				$("#exemplo").modal('show');

        $(".join2").on("click", function(e){
          $('#join').attr('action', '/vagas/join/' + vaga_id);
          $('#join2').attr('href', '/vagas/join/' + vaga_id);
        });

			});
		});
	</script>
@endsection('content')