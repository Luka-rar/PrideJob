@extends('layouts.main')

@section('content')
<!--Cards-->
    <div class="container">
    <h1 class="mt-4 text-center mb-3" id="painel_text">Painel de vagas</h1>
    <form action="/vagas/painel" method="GET" class="container input-group mb-3 text-center" style="max-width: 430px;">
      <input type="text" class="form-control" name="search" placeholder="Busque por uma empresa..." aria-label="Recipient's username" aria-describedby="button-addon2">
      <button class="btn btn-outline-secondary" type="submit" id="button-addon2"><i class="fa-solid fa-magnifying-glass"></i></button>
    </form>
      
      <div class="row mt-5 text-center justify-content-md-center">
      @if($search)
        <h5>Busca por: {{$search}}</h5>
      @endif
        @foreach($vagas as $vaga)
        <div class="card m-2 mb-5" style="max-width: 430px;">
          <div class="row">
            <div class="col-md-4">
              <img src="{{asset('images/bandeiralgbt.jpg')}}" style="max-width: 400px;" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">Empresa: {{$vaga->nome_empresa}}</h5>
                <p class="card-text">Id: {{$vaga->id}}</p>
                <p class="card-text">Categoria: <small class="text-muted">{{$vaga->categoria}}</small></p>
                <p class="card-text">Quantidade: <small class="text-muted">{{$vaga->quantidade}}</small></p>
                <p class="card-text">{{$vaga->salario}}</p>
                <a type="button" class="btn btn-primary link" 
                vaga_id="{{$vaga->id}}"
                nome_empresa="{{$vaga->nome_empresa}}"
                tipo_vaga="{{$vaga->tipo_vaga}}"
                beneficio="{{$vaga -> beneficio}}"
                salario="{{$vaga->salario}}"
                requisitos="{{$vaga->requisitos}}"
                local="{{$vaga->local}}"
                horario="{{$vaga->horario}}" 
                cidade="{{$vaga->cidade}}" 
                estado="{{$vaga->estado}}"   
                >Detalhes</a>
              </div>
            </div>
          </div>
        </div>
        @endforeach
        @if(count($vagas) == 0 && $search)
          <p class="mb-5">Não foi possível encontrar nenhum evento com {{ $search }}! <a href="/vagas/painel">Painel de vagas</p>
        @elseif(count($vagas) == 0)
          <p>Não há vagas disponíveis ainda.</p>
        @endif
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
                    <form id="join" action="#" method="POST">
                      @csrf
                      <button id="join2" 
                      class="btn btn-primary join2" type="submit"> 
                      Tenho interesse</button>
                    </form>
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
