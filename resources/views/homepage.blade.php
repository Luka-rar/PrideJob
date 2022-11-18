<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pride Job</title>
    <link rel="stylesheet" href="../scss/custom.scss">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('site/custom.css')}}">
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
                  <li class="nav-item">
                    <a class="nav-link" href="index.php">Inscreva-se</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Adicionar vaga</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Candidato
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Meu Currículo</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                    @foreach($users as $user)
                       <p>{{ $user->nome }}</p>
                     @endforeach
                  </li>
                </ul>
                <form class="d-flex" role="search">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success-primary" type="submit">Pesquisa</button>
                </form>
              </div>
            </div>
          </nav>
    </div>
    <div class="container-fluid custombg mt-5">
        <div class="container pt-5 pb-5">
          <h1 class="fw-bold text-dark">Faça parte da comunidade PrideJob</h1>
          <p class="text-dark subhead fs-4 mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

        </div>
    </div>
    

<!--Cards-->
    <div class="container">
      <div class="row">
        <div class="col-sm mt-5">
          <div class="card rellax" data-rellax-speed="4">
            <img src="../assets/pexels-alexander-grey-1317534.jpg" class="card-img-top" alt="bandeiralgbt">
            <div class="card-body p-4 rounded-bottom">
              <h5 class="card-title" >Conteúdo do site</h5>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
          </div>
        </div>
        <div class="col-sm mt-5">
          <div class="card">
            <img src="../assets/pexels-alexander-grey-1191710.jpg" class="card-img-top" alt="bandeiralgbt">
            <div class="card-body p-4 rounded-bottom">
              <h5 class="card-title" >Conteúdo do site</h5>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
          </div>
        </div>
        <div class="col-sm mt-5 mb-5">
          <div class="card">
            <img src="../assets/pexels-alexander-grey-1317534.jpg" class="card-img-top" alt="bandeiralgbt">
            <div class="card-body p-4 rounded-bottom">
              <h5 class="card-title" >Conteúdo do site</h5>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
          </div>
        </div>
        </div>
      </div>
    </div>
    <script type="module" src="index.js"></script>
    <script src="{{asset ('site/jquery.js') }}"></script>
    <script src="{{asset ('site/bootstrap.js') }}"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<!--Sobre Nós-->
      <h2 class="text-center">Conheça a pride job</h2>
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
</html>/