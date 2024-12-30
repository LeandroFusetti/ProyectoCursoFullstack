@include('header')
<!--Inicio del main-->

<main id="local">
    
    

    <div style="max-width: 500px; margin: 0 auto; padding: 20px; background-color: #f8f9fa; 
            border-radius: 10px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
    <form action="../../productos/{{$producto->id}}" method="POST">
        @csrf
        @method('PUT')

        <div style="margin-bottom: 15px;">
            <label for="nombre" style="display: block; font-weight: bold; margin-bottom: 5px;">Nombre:</label>
            <input value="{{old('nombre', $producto->nombre)}}" type="text" id="nombre" name="nombre" 
                   style="width: 100%; padding: 10px; border: 1px solid #ced4da; border-radius: 5px;">
            @error('nombre')
                <div class="alert alert-danger" style="color: red; font-size: 0.875rem; margin-top: 5px;">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div style="margin-bottom: 15px;">
            <label for="precio" style="display: block; font-weight: bold; margin-bottom: 5px;">Precio:</label>
            <input value="{{old('precio', $producto->precio)}}" type="text" id="precio" name="precio" 
                   style="width: 100%; padding: 10px; border: 1px solid #ced4da; border-radius: 5px;">
            @error('precio')
                <div class="alert alert-danger" style="color: red; font-size: 0.875rem; margin-top: 5px;">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div style="margin-bottom: 15px;">
            <label for="direccionImagen" style="display: block; font-weight: bold; margin-bottom: 5px;">
                Dirección Imagen:
            </label>
            <input value="{{old('direccionImagen', $producto->direccionImagen)}}" type="text" id="direccionImagen" name="direccionImagen" 
                   style="width: 100%; padding: 10px; border: 1px solid #ced4da; border-radius: 5px;">
            @error('direccionImagen')
                <div class="alert alert-danger" style="color: red; font-size: 0.875rem; margin-top: 5px;">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div style="margin-bottom: 15px;">
            <label for="categoria" style="display: block; font-weight: bold; margin-bottom: 5px;">Categoría:</label>
            <select id="categoria" name="categoria_id" 
                    style="width: 100%; padding: 10px; border: 1px solid #ced4da; border-radius: 5px;">
                <option value="" selected disabled>Seleccione una categoría</option>
                @foreach ($categorias as $categoria)
                    <option value="{{ $categoria->id_categoria }}" 
                        {{ $categoria->id_categoria == $producto->categoria_id ? 'selected' : '' }}>
                        {{ $categoria->nombre_categoria }}
                    </option>
                @endforeach
            </select>
            @error('categoria_id')
                <div class="alert alert-danger" style="color: red; font-size: 0.875rem; margin-top: 5px;">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div>
            <button type="submit" 
                    style="width: 100%; padding: 10px; background-color: #007bff; color: white; 
                           border: none; border-radius: 5px; font-weight: bold; cursor: pointer;">
                Actualizar
            </button>
        </div>
    </form>
</div>


   
</main>
    @include('footer')