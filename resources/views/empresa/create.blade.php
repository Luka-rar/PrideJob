@extends('layouts.main')

@section('content')
    <div class="container mt-5 col-md-8 offset-md-3">
        <h1>Cadastre sua empresa</h1>
        <form class="col-md-9" action="/empresas" method="POST">
            @csrf
            <div class="border border-secondary rounded p-3">
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Nome da empresa:</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control mb-3" name="nome_empresa"/>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">CEP:</label>
                    <div class="col-sm-8">
                        <input type="text" id="cep"class="form-control mb-3" name="cep"/>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Cidade:</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control mb-3" name="cidade"/>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Endereço:</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control mb-3" name="endereco"/>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Número:</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control mb-3" name="numero"/>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Contato na empresa:</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control mb-3" name="representante"/>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Cargo do contato:</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control mb-3" name="cargo"/>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">E-mail:</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control mb-3" name="email"/>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label telefone">Telefone:</label>
                    <div class="col-sm-8">
                        <input type="text" id="telefone" class="form-control mb-3" name="telefone"/>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label celular">Celular:</label>
                    <div class="col-sm-8">
                        <input type="text" id="celular" class="form-control mb-3" name="celular"/>
                    </div>
                </div>  
                
                <div class="text-center">
					<input type="submit" value="Save" class="btn btn-primary m-3" /> <input
						type="button" value="Cancel" class="btn btn-secondary"
						id="buttonCancel" />
				</div>
            </div>
        </form>
    </div>
    <script src="{{asset ('site/jquery.js')}}"></script>
<script src="{{asset ('site/js/mask.js')}}"></script>
<script src="{{asset ('site/js/script.js')}}"></script>
    <script type="text/javascript">
		$(document).ready(function($){
            $('#cep').mask('00000-000');
            $('#telefone').mask('(00) 0000-0000');
            $('#celular').mask('(00) 00000-0000');
            $('#data-nascimento').mask('00/00/0000');
            $('#data-rg').mask('00/00/0000');
            $('#rg').mask('00.000.000-0');
            $('#cpf').mask('000.000.000-00');
            console.log('asaasasasasas');
			$("#buttonCancel").on("click", function() {
				window.location = "/";
			});
		});
	</script>
    @endsection('content')