
@include('header')
<!--Inicio del main-->

<main id="local">

        
       

    <div class="main-articulos" >
        <h2 class="barraSeparadora">Articulos</h2>
    </div>
    
    <div class="container">
        <div class="row justify-content-center" id="mercaderia">
            @foreach($productos as $producto)
            <div class="col-lg-4  col-xs-1" >
                 <div><img src="{{$producto->direccionImagen}}" alt={{$producto->nombre}} width="160px" height="160px"></div>
                
                     
                    
               
                 <div>{{$producto->nombre}}<br><span>${{$producto->precio}}</span></div>
                 <div><button type="button" id="1"  class=" comprar btn btn-primary btn-lg">Comprar</button></div>
            </div>
            @endforeach
           

        </div>
        
       

    </div>
    

   
</main>
    @include('footer')