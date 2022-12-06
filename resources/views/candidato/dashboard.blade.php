<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha Área || Pride Job</title>
    <link rel="stylesheet" href="{{ asset('site/custom.css')}}">
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

<!--Card de Vagas concorridas-->
<div class="container mt-5 mb-5 ">
                <h2 class="text-center fw-semibold mb-3">Vagas Concorridas</h2>
                     <div class="card text-center">
                     <div class="card-body">
                        <h5 class="card-title">Titulo da vaga</h5>
                        <p class="card-text">Informações da vaga, Lorem ipsum dolor sit, amet consectetur adipisicing elit. </p>
                        <a href="#" class="btn btn-primary">Visualizar vaga (?)</a>
                        <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                            Cancelar Candidatura
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content bg-dark">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Você tem certeza?</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Se você clicar em aceitar não poderá permanecer nesse processo seletivo, deseja finalizar?.
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Não, eu ainda quero me aplicar!!</button>
                                    <button type="button" class="btn btn-primary">Eu entendo e desejo sair do processo seletivo</button>
                                </div>
                                </div>
                            </div>
                            </div>
                     </div>
                     <div class="card-footer text-muted">
                        2 days ago
                    </div>
</div>
</div>

<!--Upload de Currículo-->

<div class="container mt-3 mt-5">
    <h2 class="text-center fw-semibold mb-3">Seu Currículo</h2>
        <div class="input-group">
        <input type="file" class="form-control dark-bg" id="inputGroupFile" aria-describedby="inputGroupFileAddon" aria-label="Upload">
        <button class="btn btn-outline-secondary" type="button" id="inputGroupFileAddon04">Enviar</button>
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
</html>