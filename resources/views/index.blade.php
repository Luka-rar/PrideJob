<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pride Job</title>
    <link rel="stylesheet" href="../scss/custom.scss">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('site/custom.css')}}">

    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        body{
            background: rgb(219, 226, 226);
        }
        .row{
            background: white;
            border-radius: 30px;
            box-shadow: 12px 12px 22px grey;
        }
        img{
            border-top-left-radius: 30px;
            border-bottom-left-radius: 30px;
        }
        .btn1{
            border: none;
            outline: none;
            height: 50px;
            width: 100%;
            background-color: black;
            color: white;
            border-radius: 4px;
            font-weight: bold; 
        }
        .btn1:hover{
            background-color: white;
            border: 1px solid;
            color: black;
        }
    </style>
</head>
<body>
      <section class="form my-4 mx-5">
        <div class="container">
            <div class="row g-0">
                <div class="col-lg-5">
                    <img src="../assets/lgbt.jpg" class="img-fluid" alt="bandeira-lgbt">
                </div>
                <div class="col-lg-7 px-5 pt-5" >
                    <a href="homepage.html" style="color: black;"><h1 class="font-weight-bold py-3">Pride job</h1></a>
                    <h4>Logue na sua conta</h4>
                    <form>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="email" placeholder="Digite seu email" class="form-control my-3 p-3">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="password" placeholder="Digite sua senha" class="form-control my-3 p-3">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <button type="button" class="btn1 mt-3 mb-5">Entrar</button>
                            </div>
                        </div>
                        <a href="#">Esqueceu a senha?</a>
                        <p class="text-dark">Não tem uma conta? <a href="/user/create"> Inscreva-se aqui.</a></p>
                    </form>
                </div>
            </div>
        </div>
      </section>
      <script type="module" src="index.js"></script>
      <script src="{{asset ('site/jquery.js') }}"></script>
    <script src="{{asset ('site/bootstrap.js') }}"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </body>
</html>