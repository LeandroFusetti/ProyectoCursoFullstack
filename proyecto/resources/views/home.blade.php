
@include('header')
<!--Inicio del main-->

   <main class="mainIndex">
    @if (session()->has("success"))
    <div class="container">
        <div class="alert alert-success text-center">{{ session("success") }}</div>
    </div>
  @endif

  @if (session()->has("fail"))
    <div class="container">
        <div class="alert alert-danger text-center">{{ session("fail") }}</div>
    </div>
  @endif
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
             
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active" data-bs-interval="4000">
                <img src="./img/carousel/Tibu_desinfectante.png" class="d-block w-100" alt="..." height="450rem">
              </div>
              <div class="carousel-item" data-bs-interval="4000">
                <img src="./img/carousel/Alto_poder_insecticida.png" class="d-block w-100" alt="..." height="450rem">
              </div>
              <div class="carousel-item">
                <img src="./img/carousel/Rollo-de-cocina-pack-ahorro.png" class="d-block w-100" class="d-block w-100" alt="..." height="450rem">
              </div>
             
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div class="destacados">
            <h2>PRODUCTOS DESTACADOS</h2>
        </div>
        <div class="container">
            <div class="row justify-content-center ">
              @foreach($productos as $producto)
              <div class="col-lg-4  col-xs-1" >
                   <div><img src="{{$producto->direccionImagen}}" alt={{$producto->nombre}} width="160px" height="160px"></div>
                  
                   <div>{{$producto->nombre}}<br>
                      <span>${{$producto->precio}}</span><br>
                  </div>
                   <div><button type="button" id="1"  class=" comprar btn btn-primary btn-lg">Comprar</button></div>
              </div>
              @endforeach
            
              </div>
            </div>
       
    </main>
    @include('footer')