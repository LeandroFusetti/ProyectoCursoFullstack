@include('header')
<!--Inicio del main-->

<main id="local">
   
    <form action="../productos" method="post">
        @csrf
        <label>Nombre:</label>
        <input value="{{old('nombre')}}" type="text" id="nombre" name="nombre" >
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
        <input value="{{old('direccionImagen')}}" type="text" id="direccionImagen" name="direccionImagen" ><br>
        <br>

        
        <label for="categoria">Categoría:</label>
<select id="categoria" name="categoria_id">
    <option value="" selected disabled>Seleccione una categoría</option>
    @foreach ($categorias as $categoria)
        <option value="{{ $categoria->id_categoria }}">{{ $categoria->nombre_categoria }}</option>
    @endforeach
</select>

@error('categoria_id')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror

        
        <button>Agregar</button>
    </form>   

   
</main>
    @include('footer')