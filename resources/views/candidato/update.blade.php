@extends('layouts.main')

@section('content')
<!--Iniciando o cadastro-->
        <div class="container justify-content-md-center col-md-8">
            <div class="text-center">
                    <h2 class="fw-bold">Informações cadastrais</h2>
                    <a class="btn btn-primary mt-3 mb-3">Cadastro</a>
                    <a class="btn btn-secondary mt-3 mb-3" href="/candidato/account/details">Dados Login</a>
            </div>
             <form action="/candidatos/update/{{ Auth::user()->candidato()->first()->id }}" method="POST">
              @csrf
              @method('PUT')
              <div class="border border-secondary rounded p-3">
                    <div class="mb-3">
                        <label for="bairro" class="form-label fw-semibold">Seu currículo:</label>
                        <input type="file" class="form-control dark" name="curriculo" id="inputGroupFile" >
                    </div>
                    <div class="pessoais-content ">               
                        <h3 class="Display-6">Pessoais</h3>
                        <div class="mb-3">
                            <label for="nomecompleto" class="form-label fw-semibold">Nome Completo:</label>
                            <input type="text" class="form-control" name="nome_completo" id="nomecompleto" placeholder="Digite seu Nome Completo" value="{{Auth::user()->candidato()->first()->nome_completo}}">
                        </div>
                        <div class="mb-3">
                            <label for="cpf" class="form-label fw-semibold">CPF:</label>
                            <input type="text" class="form-control" name="cpf" id="cpf" placeholder="Digite seu CPF" value="{{Auth::user()->candidato()->first()->cpf}}">
                        </div>
                        <div class="mb-3">
                            <label for="rg" class="form-label fw-semibold">RG:</label>
                            <input type="text" class="form-control" name="rg" id="rg" placeholder="Digite seu RG" value="{{Auth::user()->candidato()->first()->rg}}">
                        </div>
                        <div class="mb-3" >
                            <label for="uf-rg" class="fw-semibold">UF-RG</label>
                            <select class="form-select" id="ur-rg" name="uf_rg">
                                <option selected>{{Auth::user()->candidato()->first()->uf_rg}}</option>
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
                        <div class="mb-3">
                            <label for="oe-rg" class="form-label fw-semibold">Órgão Emissor - RG :</label>
                            <input type="text" class="form-control" name="orgao_emissor" id="oe-rg" placeholder="Órgão Emissor do seu RG" value="{{Auth::user()->candidato()->first()->orgao_emissor}}">
                        </div>
                        <div class="mb-3">
                            <label for="data-rg" class="form-label fw-semibold">Data de Emissão - RG:</label>
                            <input type="text" class="form-control" name="data_emissao" id="data-rg" placeholder="DD/MM/AAAA" value="{{Auth::user()->candidato()->first()->data_emissao}}">
                        </div>
                        <div class="mb-3">
                        <label for="genre" class="fw-semibold">Gênero:</label>   
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="genero" value="masculino" id="masculino">
                                    <label class="form-check-label" for="masculino">
                                        Masculino
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="genero" value="feminino" id="feminino" checked>
                                    <label class="form-check-label" for="feminino">
                                        Feminino
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="genero" value="nao informado" id="prefironaoinformar" checked>
                                    <label class="form-check-label" for="prefironaoinformar">
                                        Prefiro não informar
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="genero" value="outro" id="outros" checked>
                                    <label class="form-check-label" for="outros">
                                        Outros
                                    </label>
                                </div> <!---pretendo add um pseudo elemento, pra a pessoa escrever seu gênero-->
                        </div>
                        <div class="mb-3">
                            <label for="uf-rg" class="fw-semibold">Etnia:</label>
                            <select class="form-select" aria-label="Default select example" name="etnia">
                                <option selected>{{Auth::user()->candidato()->first()->etnia}}</option>
                                <option value="Preta">Preta</option>
                                <option value="Indígena">Indígena</option>
                                <option value="Branca">Branca</option>
                                <option value="Amarela">Amarela</option>
                                <option value="Parda">Parda</option>
                                <option value="Não informado">Não desejo informar</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="data-nascimento" class="form-label fw-semibold">Data de Nascimento:</label>
                            <input type="text" class="form-control" id="data-nascimento" name="data_nascimento" placeholder="DD/MM/AAAA" value="{{Auth::user()->candidato()->first()->data_nascimento}}">
                        </div>
                        <div class="mb-3" >
                            <label for="uf-rg" class="fw-semibold">UF - Nascimento</label>
                            <select class="form-select" id="ur-rg" name="uf_nascimento">
                                <option selected>{{Auth::user()->candidato()->first()->uf_nascimento}}</option>
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
                        </div> <!---voltar pra add js de cidade onde nasceu-->
                        <div class="mb-3">
                        <label for="genre" class="fw-semibold">Estado Civil:</label>   
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="estado_civil" id="solteiro">
                                    <label class="form-check-label" for="solteiro">
                                        Solteiro(a)
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="estado_civil" id="casado" checked>
                                    <label class="form-check-label" for="casado">
                                        Casado(a)
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="estado_civil" id="divorciado" checked>
                                    <label class="form-check-label" for="divorciado">
                                        Divorciado(a)
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="estado_civil" id="viuvo" checked>
                                    <label class="form-check-label" for="viuvo">
                                        Viúvo(a)
                                    </label>
                                </div> 
                        </div>
                        <div class="mb-3">
                            <label for="nomecompleto" class="form-label fw-semibold">Nome da Mãe:</label>
                            <input type="text" class="form-control" name="nome_mae" id="nomemãe" placeholder="Digite o nome completo da sua mãe" value="{{Auth::user()->candidato()->first()->nome_mae}}">
                        </div>
                        <div class="mb-5">
                            <label for="nomecompleto" class="form-label fw-semibold">Nome do Pai:</label>
                            <input type="text" class="form-control" name="nome_pai" id="nomepai" placeholder="Digite o nome completo do seu pai" value="{{Auth::user()->candidato()->first()->nome_pai}}">
                        </div>
                    </div>      
                <h3 class="Display-6">Contato</h3>    
                <h4>Telefone</h4>
                        <div class="mb-3">
                                    <label for="celular" class="form-label fw-semibold">Celular:</label>
                                    <input type="text" class="form-control" name="celular" id="celular" placeholder="() 00000-0000" value="{{Auth::user()->candidato()->first()->celular}}">
                        </div>
                        <div class="mb-3">
                                    <label for="telefone" class="form-label fw-semibold">Telefone:</label>
                                    <input type="text" class="form-control" name="telefone" id="telefone" placeholder="() 00000-0000" value="{{Auth::user()->candidato()->first()->telefone}}">
                        </div>
                <h4>Email</h4>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label fw-semibold">Email:</label>
                    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Insira seu email" value="{{Auth::user()->email}}">
                </div>
                <h4>Endereço</h4>
                <div class="mb-3">
                    <label for="cep" class="form-label fw-semibold">CEP:</label>
                    <input type="text" class="form-control" name="cep" id="cep" placeholder="00000-000" value="{{Auth::user()->candidato()->first()->cep}}">
                </div>
                <div class="mb-3">
                    <label for="logradouro" class="form-label fw-semibold">Logradouro:</label>
                    <input type="text" class="form-control" name="logradouro" id="logradouro" placeholder="Digite sua rua/avenida" value="{{Auth::user()->candidato()->first()->logradouro}}">
                </div>
                <div class="mb-3">
                    <label for="numero" class="form-label fw-semibold">Número:</label>
                    <input type="text" class="form-control" name="numero" id="numero" value="{{Auth::user()->candidato()->first()->logradouro}}">
                </div>
                <div class="mb-3">
                    <label for="complemento" class="form-label fw-semibold">Complemento:</label>
                    <input type="text" class="form-control" name="complemento" id="complemento" placeholder="Digite seu complemento" value="{{Auth::user()->candidato()->first()->complemento}}">
                    <span class="complementoHelpBlock, form-text">Opcional</span>
                </div>
                <div class="mb-3">
                    <label for="bairro" class="form-label fw-semibold">Bairro:</label>
                    <input type="text" class="form-control" name="bairro" id="bairro" placeholder="Digite seu bairro" value="{{Auth::user()->candidato()->first()->bairro}}">
                </div>
                <div class="mb-3" >
                            <label for="estado" class="fw-semibold">Estado:</label>
                            <select class="form-select" name="estado" id="estado">
                                <option selected>{{Auth::user()->candidato()->first()->estado}}</option>
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
                    <input type="submit" value="Save" class="btn btn-primary m-3" /> <input
                    type="button" value="Cancel" class="btn btn-secondary"
                    id="buttonCancel" />
                <div>
                    <label for="cidade" class="fw-semibold"></label>
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