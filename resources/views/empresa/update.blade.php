@extends('layouts.main')

@section('content')
    <div class="container mt-5 col-md-8 offset-md-3">
        <h1>Atualize ses dados</h1>
        <form class="col-md-9" action="/empresas/update/{{ Auth::user()->empresa()->first()->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class="border border-secondary rounded p-3">
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Nome da empresa:</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control mb-3" name="nome_empresa" value="{{Auth::user()->empresa()->first()->nome_empresa}}"/>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">CEP:</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control mb-3" name="cep" value="{{Auth::user()->empresa()->first()->cep}}"/>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Cidade:</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control mb-3" name="cidade" value="{{Auth::user()->empresa()->first()->cidade}}"/>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Endereço:</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control mb-3" name="endereco" value="{{Auth::user()->empresa()->first()->endereco}}"/>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Número:</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control mb-3" name="numero" value="{{Auth::user()->empresa()->first()->numero}}"/>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Contato na empresa:</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control mb-3" name="representante" value="{{Auth::user()->empresa()->first()->representante}}"/>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Cargo:</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control mb-3" name="cargo" value="{{Auth::user()->empresa()->first()->cargo}}"/>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">E-mail:</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control mb-3" name="email" value="{{Auth::user()->email}}"/>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Telefone:</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control mb-3" name="telefone" value="{{Auth::user()->empresa()->first()->telefone}}"/>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Celular:</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control mb-3" name="celular" value="{{Auth::user()->empresa()->first()->celular}}"/>
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
