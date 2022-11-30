<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
<section class="form my-4 mx-5">
        <div class="container">
            <div class="row g-0">
            <div class="col-lg-5">
                    <img src="{{asset('images/bandeiralgbt.jpg')}}" class="img-fluid" alt="bandeira-lgbt">
                </div> 
                <div class="col-lg-7 px-5 pt-5" > 
                    <a href="/user" style="color: black;"><h1 class="font-weight-bold py-3">Pride job</h1></a>
                    <h4>Logue na sua conta</h4>
                    <form action="/user" method="POST">
                        @csrf
                        <div class="form-row">
                        <div class="form-group col-md-6">
                                <label for="inputNomedaEmpresa">Nome da empresa</label>
                                 <input type="nome" name="nome" class="form-control" id="inputNomedaEmpresa" placeholder="NomedaEmpresa">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputCnpj">CNPJ</label>
                                 <input type="cnpj" name="cnpj" class="form-control" id="inputCnpj" placeholder="Cnpj">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputEmail">Email</label>
                                 <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="Email">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Senha</label>
                                <input type="password" name="password" class="form-control" id="inputPassword4" placeholder="Senha">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputAddress">Endereço</label>
                            <input type="text" name="endereco" class="form-control" id="inputAddress" placeholder="Rua dos Bobos, nº 0">
                        </div>
                        <div class="form-group">
                            <label for="inputAddress2">Endereço 2</label>
                            <input type="text" name="complemento" class="form-control" id="inputAddress2" placeholder="Apartamento, hotel, casa, etc.">
                        </div> <!--não sei se deve colocar-->
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputCity">Cidade</label>
                                <input type="text" name="cidade" class="form-control" id="inputCity" placeholder="Cidade">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputEstado">Estado</label>
                                <select id="inputEstado" class="form-control">
                                <option selected>Escolher...</option>
                                <option>...</option>
                            </select>
                            </div>
                            <div class="form-group col-md-2">
                                <label for="inputCEP">CEP</label>
                                <input type="text" name="cep" class="form-control" id="inputCEP" placeholder="CEP">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Entrar</button>
                    </form>
                    <p class="text.light">Deseja criar uma conta para sua empresa? <a href="#"> Inscreva-se aqui.</a></p>
                </div>
            </div>
        </div>
      </section>
      <script type="module" src="index.js"></script>
      <script src="{{ asset('site/jquery.js') }}"></script>
      <script src="{{ asset('site/bootstrap.js') }}"></script>
</body>
</html>