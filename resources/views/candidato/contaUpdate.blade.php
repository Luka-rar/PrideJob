@extends('layouts.main')

@section('content')
<!--Iniciando o cadastro-->

        <div class="container justify-content-md-center col-md-8">       
                <div class="text-center">
                    <h2 class="fw-bold">Informações de Login</h2>
                    @if(Auth::user()->candidato()->first() == [])
                    <a class="btn btn-secondary mt-3 mb-3" href="/candidatos/create">Cadastro</a>
                    @else
                    <a class="btn btn-secondary mt-3 mb-3" href="/candidatos/edit">Cadastro</a>
                    @endif
                    <a class="btn btn-primary mt-3 mb-3" href="">Dados Login</a>
                </div>
             <form action="/candidato/account/details/{{$user->id}}" method="POST" enctype="multipart/form-data">
              @csrf
              @method('PUT')
              <div class="border border-secondary rounded p-3">
                    <div class="pessoais-content ">

                        <div class="mb-3">
                            <label class="user_picture" id="user_picture" for="picture__input" tabIndex="0">
                                <!-- <img class="picture__img" src="/images/profile_photo/{{ $user->photo }}"> -->
                                @if($user->photo != null)
                                <img class="picture__img" id="image" src="/images/profile_photo/{{ $user->photo }}">
                                @endif
                                <input type="file" accept="image" class="picture__input" user_url="{{$user->photo}}" id="picture__input" name="photo"/>
                                <span class="picture__image">
                                    
                                </span>
                            </label>
                        </div>
                        
                        <div class="mb-3">
                            <label for="nomecompleto" class="form-label fw-semibold">Nome:</label>
                            <input type="text" class="form-control" name="name" id="nomecompleto" placeholder="Digite seu Nome Completo" value="{{$user->name}}">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label fw-semibold">E-mail:</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Digite seu E-mail" value="{{$user->email}}">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label fw-semibold">Senha:</label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="Digite sua senha">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label fw-semibold">Confirmar Senha:</label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="Digite sua senha">
                        </div>
                        <div class="text-center">
                            <input type="submit" value="Save" class="btn btn-primary m-3" />
                            <input type="button" value="Cancel" class="btn btn-secondary" id="buttonCancel" />
                        </div>
                        
                <div>
                    <label for="cidade" class="fw-semibold"></label>
                </div>
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
			$("#buttonCancel").on("click", function() {
				window.location = "/";
			});
		});
        
	</script>
@endsection('content')