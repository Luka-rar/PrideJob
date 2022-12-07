  @extends('layouts.main')

  @section('content')
      
<!--Cards-->
    <div class="container">
      <div class="row">
        <div class="col-sm mt-5">
          <div class="card rellax" data-rellax-speed="4">
            <img src="{{asset('images/bandeiralgbt.jpg')}}" class="card-img-top" alt="bandeiralgbt">
            <div class="card-body p-4 rounded-bottom">
              <h5 class="card-title" >Conteúdo do site</h5>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
          </div>
        </div>
        <div class="col-sm mt-5">
          <div class="card">
            <img src="{{asset('images/bandeiralgbt.jpg')}}" class="card-img-top" alt="bandeiralgbt">
            <div class="card-body p-4 rounded-bottom">
              <h5 class="card-title" >Conteúdo do site</h5>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
          </div>
        </div>
        <div class="col-sm mt-5 mb-5">
          <div class="card">
            <img src="{{asset('images/bandeiralgbt.jpg')}}" class="card-img-top" alt="bandeiralgbt">
            <div class="card-body p-4 rounded-bottom">
              <h5 class="card-title" >Conteúdo do site</h5>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
          </div>
        </div>
        </div>
      </div>
    </div>
  @endsection('content')