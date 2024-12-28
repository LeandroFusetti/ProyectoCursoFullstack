@include('header')
<!--Inicio del main-->

<main id="local">
   
    <div class="contactanos">
        <h3 >Registro</h3>
        </div>
        
        <div class="formulario">
        <form class="row g-3" id="formularios">
            
            <div class="col-md-6">
                <label for="inputCity" class="form-label">Usuario</label>
                <input type="text" class="form-control" id="username">
              </div>


            <div class="col-6">
              <label for="inputAddress" class="form-label">Nombre</label>
              <input type="text" class="form-control" id="inputName" placeholder="">
            </div>
            <div class="col-6">
              <label for="inputAddress2" class="form-label">Apellido</label>
              <input type="text" class="form-control" id="inputlastName" placeholder="">
            </div>
            <div class="col-md-6">
              <label for="inputEmail4" class="form-label">Email</label>
              <input type="email" class="form-control" id="inputEmail4">
            </div>
            
            <div class="col-6">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                  Deseo recibir información sobre ofertas
                </label>
              </div>
            </div>
            <div class="col-12 pb-2">
              <button type="submit" class="btn btn-primary enviar">Enviar</button>
            </div>
        </form>
        </div>  
    </form>   

   
</main>
    @include('footer')