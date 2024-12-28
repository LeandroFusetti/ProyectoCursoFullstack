@include('header')
<!--Inicio del main-->

<main id="local">
   
    <form action="productos" method="post">
        @csrf
        <label>Nombre:</label>
        <input value="{{old('nombre',$producto->nombre_producto)}}" type="text" id="nombre" name="nombre" >
        <br>
        @error('nombre')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>
        <label>Precio</label>
        <input value="{{old('precio')}}" type="text" id="precio" name="precio" ><br>
        @error('precio')
            
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <label>Direccion Imagen</label>
        <input value="{{old('precio')}}" type="text" id="direccionImagen" name="direccionImagen" ><br>
        <br>
        <button>Agregar</button>
    </form>   

   
</main>
    @include('footer')