@extends('layouts.main')

@section('content')    
    <div class="container mt-5 col-md-8 offset-md-3">
        <h1>Atualização de vaga</h1>
        <form class="col-md-9" action="/vagas/update/{{ $vaga->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class="border border-secondary rounded p-3">
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Quantidade:</label>
                    <div class="col-sm-8">
                        <input type="number" class="form-control mb-3" name="quantidade" value="{{$vaga->quantidade}}"/>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Categoria:</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control mb-3" name="categoria" value="{{$vaga->categoria}}"/>
                    </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-15">
                    <select class="form-select mb-3" aria-label="Default select example" name="tipo_vaga">
                      <option selected value="{{$vaga->tipo_vaga}}">{{$vaga->tipo_vaga}}</option>
                      <option value="Vaga de Estágio">Estágio</option>
                      <option value="Vaga de Aprendiz">Aprendiz</option>
                      <option value="Vaga CLT">CLT</option>
                    </select>
                  </div>
                            
                </div>
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Salário:</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control mb-3" name="salario" value="{{$vaga->salario}}"/>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Benefícios:</label>
                    <div class="col-sm-8">
                        <textarea class="form-control mb-3" id="exampleFormControlTextarea1" name="beneficio" rows="3">{{$vaga->beneficio}}</textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Requisitos:</label>
                    <div class="col-sm-8">
                        <textarea class="form-control mb-3" id="exampleFormControlTextarea1" name="requisitos" rows="3">{{$vaga->requisitos}}</textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Local:</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control mb-3" name="local" value="{{$vaga->local}}"/>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Horário:</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control mb-3" name="horario" value="{{$vaga->horario}}"/>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Cidade:</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control mb-3" name="cidade" value="{{$vaga->cidade}}"/>
                    </div>
                </div>
                <div class="form-group row">
                <div class="col-sm-15">
                  <select class="form-select mb-3" id="ur-rg" name="estado">
                    <option selected value="{{$vaga->estado}}">{{$vaga->estado}}</option>
                    <option value="AC">AC</option>
                    <option value="AL">AL</option>
                    <option value="AM">AM</option>
                    <option value="AP">AP</option>
                    <option value="BA">BA</option>
                    <option value="CE">CE</option>
                    <option value="DF">DF</option>
                    <option value="ES">ES</option>
                    <option value="GO">GO</option>
                    <option value="MA">MA</option>
                    <option value="MG">MG</option>
                    <option value="MS">MS</option>
                    <option value="MT">MT</option>
                    <option value="PA">PA</option>
                    <option value="PB">PB</option>
                    <option value="PE">PE</option>
                    <option value="PI">PI</option>
                    <option value="PR">PR</option>
                    <option value="RJ">RJ</option>
                    <option value="RN">RN</option>
                    <option value="RO">RO</option>
                    <option value="RR">RR</option>
                    <option value="RS">RS</option>
                    <option value="SC">SC</option>
                    <option value="SE">SE</option>
                    <option value="SP">SP</option>
                    <option value="TO">TO</option>
                  </select>
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
    <script type="text/javascript">
		$(document).ready(function(){
			$("#buttonCancel").on("click", function() {
				window.location = "/empresas/dashboard";
			});
		});
	</script>
    @endsection('content')
       