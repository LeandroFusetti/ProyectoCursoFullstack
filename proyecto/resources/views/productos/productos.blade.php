
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
                 <div><img src="./img/productos/{{$producto->direccionImagen}}" alt={{$producto->nombre}} width="160px" height="160px"></div>
                
                 <div>{{$producto->nombre}}<br>
                    <span>${{$producto->precio}}</span><br>
                </div>
                 <div><button type="button" id="1" data-id="{{ $producto->id }}" 
                    data-nombre="{{ $producto->nombre }}" 
                    data-precio="{{ $producto->precio }}" class="btn-agregar comprar btn btn-primary btn-lg">Comprar</button></div>
            </div>
            @endforeach
           

        </div>
    </div>
    

    <div class="main-articulos" >
        <h2 class="barraSeparadora">Carrito</h2>
    </div>

<div style="max-width: 800px; margin: 0 auto; padding: 20px; background-color: #f8f9fa; 
            border-radius: 10px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
    <table class="table" id="carrito" 
           style="width: 100%; border-collapse: collapse; text-align: center; background-color: white;">
        <thead style="background-color: #2038B9; color: white;">
            <tr>
                <th style="padding: 15px; font-weight: bold;">Producto</th>
                <th style="padding: 15px; font-weight: bold;">Precio</th>
                <th style="padding: 15px; font-weight: bold;">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <!-- Los productos del carrito se generarán dinámicamente aquí -->
        </tbody>
        <tfoot>
            <tr style="border-top: 2px solid #ddd;">
                <td colspan="2" style="text-align: right; padding: 15px; font-size: 1.1rem;">
                    <strong>Total:</strong>
                </td>
                <td id="total" style="padding: 15px; font-size: 1.1rem; color: #28a745; font-weight: bold;">
                    $0
                </td>
            </tr>
        </tfoot>
    </table>
</div>

</div>
</main>
    @include('footer')