<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Elegi nuestros articulos.">
    <meta name="keywords"  content="articulos de limpieza, limpio, alcohol, lavandina, compra por mayor, limpiapisos, servicios">
    <title> Articulos -Mr Limpia-</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300&display=swap" rel="stylesheet">
    
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <script
  src="https://code.jquery.com/jquery-3.7.1.min.js"
  integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
  crossorigin="anonymous"></script>
</head>
<body>
<!--Inicio de Header-->
    <header class="header">
         
      <div class="header__div">
          <!--logo -->
            <div class="header___div__logos">
                <img src="{{ asset('./img/logo/mr-limpia-2.png') }}" alt="mr-limpia-2" width="100px" height="100px" >
                <img src="{{ asset('./img/logo/Mr Limpia.png') }}" alt="" width="220px"  height="70px">
            </div>
            
            @auth
            <div class="flex-row my-3 my-md-0">
                
                <a href="#" class="mr-2"><img title="My Profile" data-toggle="tooltip" data-placement="bottom" style="width: 32px; height: 32px; border-radius: 16px" src="{{ asset('./img/logo/loggin2.png') }}" /></a>
                <form action="./logout" method="POST" class="d-inline">
                    @csrf
                    <button class="btn btn-primary btn-sm">Salir</button>
                </form>
            </div>
        @else
            <form action="./login" method="POST" class="mb-0 pt-2 pt-md-0">
                @csrf
                <div class="row align-items-center">
                    <div class="col-md mr-0 pr-md-0 mb-3 mb-md-0">
                    <input name="loginusername" class="form-control form-control-sm input-dark" type="text" placeholder="Username" autocomplete="off" />
                    </div>
                    <div class="col-md mr-0 pr-md-0 mb-3 mb-md-0">
                    <input name="loginpassword" class="form-control form-control-sm input-dark" type="password" placeholder="Password" />
                    </div>
                    <div class="col-md-auto">
                    <button class="btn btn-primary btn-sm">Ingresar</button>
                    </div>
                </div>
            </form>
        @endauth 
        </div>
        
        <nav class="nav">
            <ul class="nav__list"> 
                <li class="nav__list__link"><a href="./home">Inicio</a></li>
                <li class="nav__list__link"><a href="./productos">Productos</a></li>    
                <li class="nav__list__link"><a href="./servicios">Servicios</a></li>
                <li class="nav__list__link"><a href="./nosotros">Nosotros</a></li>
                <li class="nav__list__link"><a href="./register">Registro</a></li>  
            </ul>
        </nav>
        
        
    </header>
