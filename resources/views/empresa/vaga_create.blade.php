@extends('layouts.main')

@section('content')    
    <div class="container mt-5 col-md-8 offset-md-3">
        <h1>Cadastre a vaga</h1>
        <form class="col-md-9" action="/vagas" method="POST">
            @csrf
            <div class="border border-secondary rounded p-3">
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Quantidade:</label>
                    <div class="col-sm-8">
                        <input type="number" class="form-control mb-3" name="quantidade"/>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Categoria:</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control mb-3" name="categoria"/>
                    </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-15">
                    <select class="form-select mb-3" aria-label="Default select example" name="tipo_vaga">
                      <option selected> Tipo de Vaga:</option>
                      <option value="Vaga de Estágio">Estágio</option>
                      <option value="Vaga de Aprendiz">Aprendiz</option>
                      <option value="Vaga CLT">CLT</option>
                    </select>
                  </div>
                            
                </div>
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Salário:</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control mb-3" id="salario" name="salario"/>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Benefícios:</label>
                    <div class="col-sm-8">
                        <textarea class="form-control mb-3" id="exampleFormControlTextarea1" name="beneficio" rows="3"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Requisitos:</label>
                    <div class="col-sm-8">
                        <textarea class="form-control mb-3" id="exampleFormControlTextarea1" name="requisitos" rows="3"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Local:</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control mb-3" name="local"/>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Horário:</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control mb-3" name="horario"/>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Cidade:</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control mb-3" name="cidade"/>
                    </div>
                </div>
                <div class="form-group row">
                <div class="col-sm-15">
                  <select class="form-select mb-3" id="ur-rg" name="estado">
                    <option selected>Estado da vaga:</option>
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
<script src="{{asset ('site/js/mask.js')}}"></script>
<script src="{{asset ('site/js/maskMoney.js')}}"></script>
<script src="{{asset ('site/js/script.js')}}"></script>
    <script type="text/javascript">
		$(document).ready(function($){
            $('#salario').maskMoney({
              prefix:'R$ ',
              allowNegative: true,
              thousands:'.', decimal:',',
              affixesStay: true});
			$("#buttonCancel").on("click", function() {
				window.location = "/";
			});
		});
	</script>
    @endsection('content')   