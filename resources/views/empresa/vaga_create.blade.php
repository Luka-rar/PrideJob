<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vaga||Form</title>
    <link rel="stylesheet" href="../scss/custom.scss">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/solid.css" integrity="sha384-Tv5i09RULyHKMwX0E8wJUqSOaXlyu3SQxORObAI08iUwIalMmN5L6AvlPX2LMoSE" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/fontawesome.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous"/>
    <link rel="stylesheet" href="{{asset('/site/custom.css')}}" type="text/css">
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
                      @if(Auth::user()->client ==1)
                      <li><a class="dropdown-item" href="#">Meu Currículo</a></li>
                      @endif
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
                        <input type="text" class="form-control mb-3" name="salario"/>
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
    
    













    <script type="module" src="index.js"></script>
    <script src="{{asset ('site/js/script.js')}}"></script>
    <script src="{{asset ('site/jquery.js')}}"></script>
    <script src="{{asset ('site/bootstrap.js') }}"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
<!--Informações do Footer-->
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