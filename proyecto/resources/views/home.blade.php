
@include('header')
<!--Inicio del main-->

   <main class="mainIndex">

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
                <div class="col-lg-3 col-sm-1 col-xs-1 ">
                     <div><img src="./img/alcohol70.jpg" alt="/alcohol70" width="200" height="200"></div>
                     <div>Alcohol Etílico al 70% Desinfectante <br><span>$829</span></div>
                     <div><button type="button" class="btn btn-primary btn-lg">Comprar</button></div>
                </div>
            
                <div class="col-lg-3 col-sm-1 col-xs-1">
                    <div><img src="./img/baldeTrapeadorEscurridor.jpg" alt="baldeTrapeadorEscurridor" width="200" height="200"></div>
                    <div>Mopa Trapeador Centrífugo<br><span>$1659</span></div>  
                    <div><button type="button" class="btn btn-primary btn-lg">Comprar</button></div>
                    
                </div> 

                <div class="col-lg-3 col-sm-1 col-xs-1">
                    <div><img src="./img/comboLimpieza.jpg" alt="comboLimpieza" width="200" height="200"></div>
                    <div>Combo Procenex Lysoform Procenex  <br><span>$680</span></div>     
                    <div><button type="button" class="btn btn-primary btn-lg">Comprar</button></div>
                </div> 

            
            </div>

            <div class="row justify-content-center ">
                <div class="col-lg-3 col-sm-1 col-xs-1">
                     <div><img src="./img/escobaPalaCondor.jpg" alt="escobaPalaCondor" width="200" height="200"></div>
                     <div>Palo y Escoba Condor  <br><span>$1.776</span></div>
                     <div><button type="button" class="btn btn-primary btn-lg">Comprar</button></div>
                </div>
            
                <div class="col-lg-3 col-sm-1 col-xs-1">
                    <div><img src="./img/kitMolaxAuto.jpg" alt="kitMolaxAutol" width="200" height="200"></div>
                    <div>Kit Auto de Molax  <br><span>$9.673</span></div>     
                    <div><button type="button" class="btn btn-primary btn-lg">Comprar</button></div>
                </div> 

                <div class="col-lg-3 col-sm-1 col-xs-1">
                    <div><img src="./img/pañoMontimer.jpg" alt="pañoMontimer" width="200" height="200"></div>
                    <div>Paños Montimer  <br><span>$145</span></div>  
                    <div><button type="button" class="btn btn-primary btn-lg">Comprar</button></div>   
                </div> 

            </div>
        </div>


        </div>

        <div class="prefooter">
            <h3 class="prefooter__h3"> Ofrecemos productos para todas las necesidades</h3>
            <div class="prefooter__icons">
                <div>
                <img src="./img/home.png" alt="home" width="110px" height="110px">
                <p>Residencial</p>
                </div>

                <div>
                <img src="./img/building.png" alt="building" width="110px" height="110px">
                <p>Comercial</p>
                </div>

                <div>
                <img src="./img/factory.png" alt="building" width="110px" height="110px">
                <p>Industrial</p>
                </div>
            </div>
        </div>
       
    </main>
    @include('footer')