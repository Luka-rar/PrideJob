@extends('layouts.home')
    

<!--Cards-->
    <div class="container">
      <div class="row">
        <div class="col-sm mt-5">
          <div class="card rellax" data-rellax-speed="4">
          <div class="card-icon"><i class="bi bi-person"></i></div>
            <div class="card-body p-4 rounded-bottom">
              <h5 class="card-title" >Conteúdo do site</h5>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
          </div>
        </div>
        <div class="col-sm mt-5">
          <div class="card">
          <div class="card-icon"><i class="bi bi-pen"></i></div>
            <div class="card-body p-4 rounded-bottom">
              <h5 class="card-title" >Conteúdo do site</h5>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
          </div>
        </div>
        <div class="col-sm mt-5 mb-5">
          <div class="card">
            <div class="card-icon"><i class="bi bi-emoji-heart-eyes"></i></div>
            <div class="card-body p-4 rounded-bottom">
              <h5 class="card-title" >Conteúdo do site</h5>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
          </div>
        </div>
        </div>
      </div>
    </div>

    <!--Sobre Nós-->
    <div id="about-area">
        <div class="container">
          <div class="row">
            <div class="col-12">
                <h2 class="text-center fw-semibold mt-3 mt-3">Sobre a Pride Job</h2>
            </div>
            <div class="col-md-6 mt-3 mb-5">
                <img class="img-fluid" src="{{asset('images/inclusão.jpg')}}" alt="Pride Job">
            </div>
            <div class="col-md-6 mt-3">
              <h3>A sua chance de adentrar no mercado de trabalho</h3>   <!--pode mudar essa frase aq-->
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed vero unde ab mollitia laudantium fugit sequi doloremque deleniti harum provident illo voluptates, 
                officia repellat dolores iure incidunt nesciunt, sint libero.</p>
              <ul id="about-list">
                <li><i class="fa-solid fa-check"></i>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                <li><i class="fas fa-check"></i>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                <li><i class="fas fa-check"></i>Lorem ipsum dolor sit amet consectetur adipisicing elit. </li>
                <li><i class="fas fa-check"></i>Lorem ipsum dolor sit amet consectetur adipisicing elit. </li>
                <li><i class="fas fa-check"></i>Lorem ipsum dolor sit amet consectetur adipisicing elit. </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
  @endsection('content')
