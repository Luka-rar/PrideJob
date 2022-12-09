@extends('layouts.main')

@section('content')
<div class="container mt-5 justify-content-md-center col-md-8">
<div class="card mb-5">
  <div class="card-header text-center">
    Inscrição a vaga #00{{$vaga->id}}
  </div>
  <div class="card-body">
  <form>
    <fieldset disabled>
              <div class="container mt-5 col-md-8 justify-content-md-center">
                    <div class="pessoais-content ">               
                        <h3 class="Display-6">Pessoais</h3>
                        <div class="mb-3">
                            <label for="nomecompleto" class="form-label fw-semibold">Nome Completo:</label>
                            <input type="text" class="form-control" name="nome_completo" id="nomecompleto" value="{{$candidato->nome_completo}}">
                        </div>
                        <div class="mb-3">
                            <label for="cpf" class="form-label fw-semibold">CPF:</label>
                            <input type="text" class="form-control" name="cpf" id="cpf" value="{{$candidato->cpf}}">
                        </div>
                        <div class="mb-3">
                            <label for="rg" class="form-label fw-semibold">RG:</label>
                            <input type="text" class="form-control" name="rg" id="rg" value="{{$candidato->rg}}">
                        </div>
                        <div class="mb-3">
                            <label for="rg" class="form-label fw-semibold">UF-RG:</label>
                            <input type="text" class="form-control" id="uf_rg" value="{{$candidato->uf_rg}}">
                        </div>  
                        <div class="mb-3">
                            <label for="oe-rg" class="form-label fw-semibold">Órgão Emissor - RG :</label>
                            <input type="text" class="form-control" name="orgao_emissor" id="oe-rg" value="{{$candidato->orgao_emissor}}">
                        </div>
                        <div class="mb-3">
                            <label for="data-rg" class="form-label fw-semibold">Data de Emissão - RG:</label>
                            <input type="text" class="form-control" name="data_emissao" id="data-rg" value="{{$candidato->data_emissao}}">
                        </div>
                        <div class="mb-3">
                            <label for="data-rg" class="form-label fw-semibold">Gênero:</label>
                            <input type="text" class="form-control" id="genero" value="{{$candidato->genero}}">
                        </div>
                        <div class="mb-3">
                            <label for="data-rg" class="form-label fw-semibold">Etnia:</label>
                            <input type="text" class="form-control" id="etnoa" value="{{$candidato->etnia}}">
                        </div>
                        <div class="mb-3">
                            <label for="data-nascimento" class="form-label fw-semibold">Data de Nascimento:</label>
                            <input type="text" class="form-control" id="data-nascimento" name="data_nascimento" value="{{$candidato->data_nascimento}}">
                        </div>
                        <div class="mb-3">
                            <label for="data-rg" class="form-label fw-semibold">UF - Nascimento:</label>
                            <input type="text" class="form-control" id="uf_nascimento" value="{{$candidato->uf_nascimento}}">
                        </div>
                        <div class="mb-3">
                            <label for="data-rg" class="form-label fw-semibold">Estado Civil:</label>
                            <input type="text" class="form-control" id="estado-civil" value="{{$candidato->estado_civil}}">
                        </div>
                        <div class="mb-3">
                            <label for="nomecompleto" class="form-label fw-semibold">Nome da Mãe:</label>
                            <input type="text" class="form-control" name="nome_mae" id="nomemãe" value="{{$candidato->nome_mae}}">
                        </div>
                        <div class="mb-5">
                            <label for="nomecompleto" class="form-label fw-semibold">Nome do Pai:</label>
                            <input type="text" class="form-control" name="nome_pai" id="nomepai" value="{{$candidato->nome_mae}}">
                        </div>
                    </div>      
                <h3 class="Display-6">Contato</h3>    
                <h4>Telefone</h4>
                        <div class="mb-3">
                                    <label for="celular" class="form-label fw-semibold">Celular:</label>
                                    <input type="text" class="form-control" name="celular" id="celular" value="{{$candidato->celular}}">
                        </div>
                        <div class="mb-3">
                                    <label for="telefone" class="form-label fw-semibold">Telefone:</label>
                                    <input type="text" class="form-control" name="telefone" id="telefone" value="{{$candidato->telefone}}">
                        </div>
                <h4>Email</h4>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label fw-semibold">Email:</label>
                    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$candidato->email}}">
                </div>
                <h4>Endereço</h4>
                <div class="mb-3">
                    <label for="cep" class="form-label fw-semibold">CEP:</label>
                    <input type="text" class="form-control" name="cep" id="cep" value="{{$candidato->cep}}">
                </div>
                <div class="mb-3">
                    <label for="logradouro" class="form-label fw-semibold">Logradouro:</label>
                    <input type="text" class="form-control" name="logradouro" id="logradouro" value="{{$candidato->logradouro}}">
                </div>
                <div class="mb-3">
                    <label for="numero" class="form-label fw-semibold">Número:</label>
                    <input type="text" class="form-control" name="numero" id="numero" value="{{$candidato->numero}}">
                </div>
                <div class="mb-3">
                    <label for="complemento" class="form-label fw-semibold">Complemento:</label>
                    <input type="text" class="form-control" name="complemento" id="complemento" value="{{$candidato->complemento}}">
                    <span class="complementoHelpBlock, form-text">Opcional</span>
                </div>
                <div class="mb-3">
                    <label for="bairro" class="form-label fw-semibold">Bairro:</label>
                    <input type="text" class="form-control" name="bairro" id="bairro" value="{{$candidato->bairro}}">
                </div>
                <div class="mb-3">
                    <label for="bairro" class="form-label fw-semibold">Estado:</label>
                    <input type="text" class="form-control"  id="estado" value="{{$candidato->estado}}">
                </div>
    </div>
</fieldset>
</form>
<div class="container text-center">
    <button class="btn btn-danger">Ok</button>
    <button class="btn btn-danger">Ok</button>
    <button class="btn btn-danger">Ok</button>
</div>
  </div>
  <div class="card-footer text-muted">
    2 days ago
  </div>
</div>
</div>



@endsection('content') 