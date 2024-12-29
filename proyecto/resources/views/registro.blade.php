@include('header')
<!--Inicio del main-->

<main id="local">
  @if (session()->has("success"))
  <div class="container">
      <div class="alert alert-success text-center">{{ session("success") }}</div>
  </div>
@endif
    <div class="contactanos">
        <h3 >Registro</h3>
        </div>
        
        <div class="formulario">
        <form action="./register" method="POST" class="row g-3" id="registro">
          @csrf
          
            <div class="col-md-6">
              <label for="username-register" class="text-muted mb-1"><small>Username</small></label>
              <input name="username" id="username-register" class="form-control" type="text" placeholder="Elegir un username" autocomplete="off" />
                @error("username")
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
              </div>


            <div class="col-6">
              <label for="password-register" class="text-muted mb-1"><small>Password</small></label>
              <input name="password" id="password-register" class="form-control" type="password" placeholder="Crear un password" />
              @error("password")
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            
            <div class="col-6">
              <label for="password-register-confirm" class="text-muted mb-1"><small>Confirmar Password</small></label>
              <input name="password_confirmation" id="password-register-confirm" class="form-control" type="password" placeholder="Confirmar password" />
              @error("password")
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="col-6">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                  Deseo recibir información sobre ofertas
                </label>
              </div>
            </div>
            <div class="col-6">
              <button type="submit" class="btn btn-primary enviar">Registrarse</button>
            </div>
        </form>
        </div>  
    </form>   

   
</main>
    @include('footer')