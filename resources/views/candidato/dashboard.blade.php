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
               <a class="btn btn-primary link2" vaga="{{$vaga->id}}"
                >Cancelar Inscrição</a>
        </div>
        <div class="card-footer text-muted">
           2 days ago
       </div>               
    </div>
    @endforeach

  
    <div class="modal fade text-center" id="exemplo2">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title" id="modalTitle2">Você tem certeza?</h4>
						<button type="button" class="close" data-bs-dismiss="modal">&times;</button>
					</div>
					<div class="modal-body">
            <div class="card text-center">
                  <div class="card-header">
                    Atenção
                  </div>
                  <div class="card-body">
                    Se você clicar em aceitar não poderá permanecer nesse processo seletivo, deseja finalizar?
                    <a type="button" class="btn btn-secondary mt-3 cancelar" id="cancelar">
                    Eu entendo e desejo sair do processo seletivo
                    </a>
                  </div>
            </div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-danger"
							data-bs-dismiss="modal">Fechar</button>
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
  <div class="container text-center mt-3 mb-5">
      <h2 class="text-center fw-semibold mb-3">Seu Currículo</h2>
          <div class="input-group">
            <input type="file" class="form-control dark-bg mb-3" id="inputGroupFile" aria-describedby="inputGroupFileAddon" aria-label="Upload"></br>
          </div>
          <a tipe="button" class="btn btn-secondary" href="/images/curriculos/{{Auth::user()->candidato()->first()->curriculo}}" download>Download</a>
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

  <script type="text/javascript">
    $(document).ready(function(){
      

      $(".link2").on("click", function(e){
        e.preventDefault();
		    link2 = $(this);
        vaga = link2.attr("vaga");
        $("#exemplo2").modal('show');
      });

      $(".cancelar").on("click", function(e){
          $('#cancelar').attr('href', '/vagas/pivo/' + vaga);
      });
    });
  </script>
@endsection('content')