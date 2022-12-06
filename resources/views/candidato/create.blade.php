<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro || Pride Job</title>
    <link rel="stylesheet" href="{{ asset('site/custom.css')}}" text="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/solid.css" integrity="sha384-Tv5i09RULyHKMwX0E8wJUqSOaXlyu3SQxORObAI08iUwIalMmN5L6AvlPX2LMoSE" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/fontawesome.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous"/>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
</head>
<body>
       <!--NavBar--> 
       <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark mt-5"> 
            <div class="container-fluid">
              <a class="navbar-brand fw-bold text-primary" href="#">Pride Job</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Conheça o Pride Job</a>
                  </li>
                 
                 @auth
                 @if(Auth::user()->empresa ==1)
                  <li class="nav-item">
                    <a class="nav-link" href="#">Adicionar vaga</a>
                  </li>
                  @endif
                 @endauth
                 
                  @auth
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    {{ Auth::user()->name }}
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Meu Currículo</a></li>
                      <li><form action="/logout" method="POST">
                        @csrf
                        <a href="/logout" class="dropdown-item" onclick="event.preventDefault();
                        this.closest('form').submit();">Sair</a>
                      </form></li>
                    </ul>
                  </li>
                  @endauth

                  @guest
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Login/Cadastro
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="/cliente/login">Login</a></li>
                      <li><a class="dropdown-item" href="/register">Inscreva-se</a></li>
                    </ul>
                  </li>
                  @endguest
                  @auth
                  @if(Auth::user()->empresa ==1)
                  <li class="nav-item">
                    <p class="nav-link">Perfil: <span class="text-danger">empresarial</span></p>
                  </li>
                  @endif
                  @if(Auth::user()->client ==1)
                  <li class="nav-item">
                    <p class="nav-link">Perfil: <span class="text-danger">candidato</span></p>
                  </li>
                  @endif
                  @endauth
              </div>
            </div>
          </nav>
    </div>
    <div class="container-fluid custombg mt-5 mb-5">
        <div class="container pt-5 pb-5">
          <h1 class="fw-bold text-dark">Faça parte da comunidade PrideJob</h1>
          <p class="text-dark subhead fs-4 mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

        </div>
    </div>
<!--Iniciando o cadastro-->

<div id="about-area mt-5 mb-5">
        <div class="container">
                <h2 class="main-title fw-semibold ">Continue o cadastro...</h2>
             <form action="/candidatos" method="POST">
              @csrf
                    <div class="pessoais-content ">               
                        <h3 class="Display-6">Pessoais</h3>
                        <div class="mb-3">
                            <label for="nomecompleto" class="form-label fw-semibold">Nome Completo:</label>
                            <input type="text" class="form-control" name="nome_completo" id="nomecompleto" placeholder="Digite seu Nome Completo">
                        </div>
                        <div class="mb-3">
                            <label for="cpf" class="form-label fw-semibold">CPF:</label>
                            <input type="text" class="form-control" name="cpf" id="cpf" placeholder="Digite seu CPF">
                        </div>
                        <div class="mb-3">
                            <label for="rg" class="form-label fw-semibold">RG:</label>
                            <input type="text" class="form-control" name="rg" id="rg" placeholder="Digite seu RG">
                        </div>
                        <div class="mb-3" >
                            <label for="uf-rg" class="fw-semibold">UF-RG</label>
                            <select class="form-select" id="ur-rg" name="uf_rg">
                                <option selected>Estado que emitiu o RG</option>
                                <option value="1">AC</option>
                                <option value="2">AL</option>
                                <option value="3">AM</option>
                                <option value="4">AP</option>
                                <option value="5">BA</option>
                                <option value="6">CE</option>
                                <option value="7">DF</option>
                                <option value="8">ES</option>
                                <option value="9">GO</option>
                                <option value="10">MA</option>
                                <option value="11">MG</option>
                                <option value="12">MS</option>
                                <option value="13">MT</option>
                                <option value="14">PA</option>
                                <option value="15">PB</option>
                                <option value="16">PE</option>
                                <option value="17">PI</option>
                                <option value="18">PR</option>
                                <option value="19">RJ</option>
                                <option value="20">RN</option>
                                <option value="21">RO</option>
                                <option value="22">RR</option>
                                <option value="23">RS</option>
                                <option value="24">SC</option>
                                <option value="25">SE</option>
                                <option value="26">SP</option>
                                <option value="27">TO</option>
                            </select>
                        </div>    
                        <div class="mb-3">
                            <label for="oe-rg" class="form-label fw-semibold">Órgão Emissor - RG :</label>
                            <input type="text" class="form-control" name="orgao_emissor" id="oe-rg" placeholder="Órgão Emissor do seu RG">
                        </div>
                        <div class="mb-3">
                            <label for="data-rg" class="form-label fw-semibold">Data de Emissão - RG:</label>
                            <input type="text" class="form-control" name="data_emissao" id="data-rg" placeholder="DD/MM/AAAA">
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
                                <option selected>Selecione Sua Etnia:</option>
                                <option value="1">Preta</option>
                                <option value="2">Indígena</option>
                                <option value="3">Branca</option>
                                <option value="4">Amarela</option>
                                <option value="5">Parda</option>
                                <option value="6">Não desejo informar</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="data-nascimento" class="form-label fw-semibold">Data de Nascimento:</label>
                            <input type="text" class="form-control" id="data-nascimento" name="data_nascimento" placeholder="DD/MM/AAAA">
                        </div>
                        <div class="mb-3" >
                            <label for="uf-rg" class="fw-semibold">UF - Nascimento</label>
                            <select class="form-select" id="ur-rg" name="uf_nascimento">
                                <option selected>Estado em que nasceu</option>
                                <option value="1">AC</option>
                                <option value="2">AL</option>
                                <option value="3">AM</option>
                                <option value="4">AP</option>
                                <option value="5">BA</option>
                                <option value="6">CE</option>
                                <option value="7">DF</option>
                                <option value="8">ES</option>
                                <option value="9">GO</option>
                                <option value="10">MA</option>
                                <option value="11">MG</option>
                                <option value="12">MS</option>
                                <option value="13">MT</option>
                                <option value="14">PA</option>
                                <option value="15">PB</option>
                                <option value="16">PE</option>
                                <option value="17">PI</option>
                                <option value="18">PR</option>
                                <option value="19">RJ</option>
                                <option value="20">RN</option>
                                <option value="21">RO</option>
                                <option value="22">RR</option>
                                <option value="23">RS</option>
                                <option value="24">SC</option>
                                <option value="25">SE</option>
                                <option value="26">SP</option>
                                <option value="27">TO</option>
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
                            <input type="text" class="form-control" name="nome_mae" id="nomemãe" placeholder="Digite o nome completo da sua mãe">
                        </div>
                        <div class="mb-5">
                            <label for="nomecompleto" class="form-label fw-semibold">Nome do Pai:</label>
                            <input type="text" class="form-control" name="nome_pai" id="nomepai" placeholder="Digite o nome completo do seu pai">
                        </div>
                    </div>      
                <h3 class="Display-6">Contato</h3>    
                <h4>Telefone</h4>
                        <div class="mb-3">
                                    <label for="celular" class="form-label fw-semibold">Celular:</label>
                                    <input type="text" class="form-control" name="celular" id="celular" placeholder="() 00000-0000">
                        </div>
                        <div class="mb-3">
                                    <label for="telefone" class="form-label fw-semibold">Telefone:</label>
                                    <input type="text" class="form-control" name="telefone" id="telefone" placeholder="() 00000-0000">
                        </div>
                <h4>Email</h4>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label fw-semibold">Email:</label>
                    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Insira seu email">
                </div>
                <h4>Endereço</h4>
                <div class="mb-3">
                    <label for="cep" class="form-label fw-semibold">CEP:</label>
                    <input type="text" class="form-control" name="cep" id="cep" placeholder="00000-000">
                </div>
                <div class="mb-3">
                    <label for="logradouro" class="form-label fw-semibold">Logradouro:</label>
                    <input type="text" class="form-control" name="logradouro" id="logradouro" placeholder="Digite sua rua/avenida">
                </div>
                <div class="mb-3">
                    <label for="numero" class="form-label fw-semibold">Número:</label>
                    <input type="text" class="form-control" name="numero" id="numero" placeholder="Digite o número do seu endereço">
                </div>
                <div class="mb-3">
                    <label for="complemento" class="form-label fw-semibold">Complemento:</label>
                    <input type="text" class="form-control" name="complemento" id="complemento" placeholder="Digite seu complemento">
                    <span class="complementoHelpBlock, form-text">Opcional</span>
                </div>
                <div class="mb-3">
                    <label for="bairro" class="form-label fw-semibold">Bairro:</label>
                    <input type="text" class="form-control" name="bairro" id="bairro" placeholder="Digite seu bairro">
                </div>
                <div class="mb-3" >
                            <label for="estado" class="fw-semibold">Estado:</label>
                            <select class="form-select" name="estado" id="estado">
                                <option selected>Estado em que nasceu</option>
                                <option value="1">AC</option>
                                <option value="2">AL</option>
                                <option value="3">AM</option>
                                <option value="4">AP</option>
                                <option value="5">BA</option>
                                <option value="6">CE</option>
                                <option value="7">DF</option>
                                <option value="8">ES</option>
                                <option value="9">GO</option>
                                <option value="10">MA</option>
                                <option value="11">MG</option>
                                <option value="12">MS</option>
                                <option value="13">MT</option>
                                <option value="14">PA</option>
                                <option value="15">PB</option>
                                <option value="16">PE</option>
                                <option value="17">PI</option>
                                <option value="18">PR</option>
                                <option value="19">RJ</option>
                                <option value="20">RN</option>
                                <option value="21">RO</option>
                                <option value="22">RR</option>
                                <option value="23">RS</option>
                                <option value="24">SC</option>
                                <option value="25">SE</option>
                                <option value="26">SP</option>
                                <option value="27">TO</option>
                            </select>
                </div>
                    <button type="submit" class="btn btn-outline-primary mt-3">Salvar</button>     
                <div>
                    <label for="cidade" class="fw-semibold"></label>
                </div>
            </div>    
      </form>
  </div>  
</div>



   
    <script src="{{asset ('site/js/script.js')}}"></script>
    <script src="{{asset ('site/jquery.js')}}"></script>
    <script src="{{asset ('site/bootstrap.js') }}"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </body>



<!--Footer-->
    <footer>
    <div class="container" id="footer1">
      <div class="sec quickLinks">
        <h2 class="text-title fw-bold">Quick Links</h2>
        <ul>
          <li><a href="#">About</a></li>
          <li><a href="#">Faq</a></li>
          <li><a href="#">Privacy Policy</a></li>
          <li><a href="#">Help</a></li>
          <li><a href="#">Terms & Consitions</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
      </div>
      <div class= "sec contact">
        <h2 class="text-title fw-bold" >Contato</h2>
        <ul class="info">
          <li>
            <span><i><img  src="../assets/geo-alt-fill.svg" width="30px"></i></span><br>
            <span>Av. unheca, 2461 -<br> Cidade Blablabla <br>, São Paulo - SP, 06969-420</span>
          </li>
          <li>
            <span><i><img  src="../assets/telephone.svg" width="30px"></i></span>
            <p><a href="#">(11) 4206969</a><br></p>
          </li>
          <li>
            <span><i><img  src="../assets/envelope-open-fill.svg" width="30px"></i></span>
            <p><a href="#">pridejob@pride.job</a></p>
          </li>
        </ul>
      </div>
    </div>
  </footer>
  <div class="copyrightText">
    <p>Copyright © 2022 Pride Job. All Rights Reserved.</p>
  </div>    
</html>