
@include('header')
<!--Inicio del main-->

<main id="local">

        
    @if (session()->has("success"))
    <div class="container">
        <div class="alert alert-success text-center">{{session("success")}}
        </div>
    </div>
@endif

    <div class="main-articulos" >
        <h2 class="barraSeparadora">Productos</h2>
    </div>
    
    <div class="container">
        <div class="row justify-content-center" id="mercaderia">
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