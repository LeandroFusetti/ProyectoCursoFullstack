@include('header')
<!--Inicio del main-->

<main id="local">
    @if (session()->has("success"))
        <div class="container">
            <div class="alert alert-success text-center">{{ session("success") }}</div>
        </div>
    @endif

    <div class="row align-items-center">
        <div class="container my-5">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <table class="table table-bordered table-hover text-center">
                        <thead class="table-dark">
                            <tr>
                                <th>Nombre</th>
                                <th>Precio</th>
                                <th>Categoría</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($productos as $producto)
                                <tr>
                                    <td>{{ $producto->nombre }}</td>
                                    <td>${{ $producto->precio }}</td>
                                    <td>{{ $producto->categoria->nombre_categoria }}</td>
                                    <td>
                                        <div style="display: flex; align-items: center; gap: 10px;">
                                            <!-- Icono Editar -->
                                            <a href="./productos/{{ $producto->id }}/edit" 
                                               title="Editar Producto" 
                                               style="color: #007bff; text-decoration: none;">
                                                <i class="fa fa-edit"></i>
                                            </a>

                                            <!-- Icono Eliminar -->
                                            <form action="./productos/{{ $producto->id}}" 
                                                  method="post" 
                                                  style="display: flex; flex-direction: column; border: none; margin: 0px; padding: 0px;">
                                                @csrf
                                                @method("DELETE")
                                                <button type="submit" 
                                                        style="border: none; background: none; color: red; cursor: pointer;" 
                                                        title="Eliminar Producto">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <form action="./productos" id="formAgregarProducto" method="post" 
            style="max-width: 400px; margin: 0 auto; padding: 20px; background-color: #f8f9fa; 
                   border-radius: 10px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
          @csrf
          <div style="margin-bottom: 15px;">
              <label for="nombre" style="display: block; font-weight: bold; margin-bottom: 5px;">Nombre:</label>
              <input value="{{ old('nombre') }}" type="text" id="nombre" name="nombre" 
                     style="width: 100%; padding: 10px; border: 1px solid #ced4da; border-radius: 5px;">
              @error('nombre')
                  <div class="alert alert-danger" style="color: red; font-size: 0.875rem; margin-top: 5px;">
                      {{ $message }}
                  </div>
              @enderror
          </div>
      
          <div style="margin-bottom: 15px;">
              <label for="precio" style="display: block; font-weight: bold; margin-bottom: 5px;">Precio:</label>
              <input value="{{ old('precio') }}" type="text" id="precio" name="precio" 
                     style="width: 100%; padding: 10px; border: 1px solid #ced4da; border-radius: 5px;">
              @error('precio')
                  <div class="alert alert-danger" style="color: red; font-size: 0.875rem; margin-top: 5px;">
                      {{ $message }}
                  </div>
              @enderror
          </div>
      
          <div style="margin-bottom: 15px;">
              <label for="direccionImagen" style="display: block; font-weight: bold; margin-bottom: 5px;">Dirección Imagen:</label>
              <input value="{{ old('direccionImagen') }}" type="file" id="direccionImagen" name="direccionImagen" 
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
                      <option value="{{ $categoria->id_categoria }}">{{ $categoria->nombre_categoria }}</option>
                  @endforeach
              </select>
              @error('categoria_id')
                  <div class="alert alert-danger" style="color: red; font-size: 0.875rem; margin-top: 5px;">
                      {{ $message }}
                  </div>
              @enderror
          </div>
      
          <button type="submit" 
                  style="width: 100%; padding: 10px; background-color: #007bff; color: white; 
                         border: none; border-radius: 5px; font-weight: bold; cursor: pointer;">
              Agregar
          </button>
      </form>
      
</main>

@include('footer')
