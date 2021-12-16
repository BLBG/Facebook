@extends('layouts.app')

@section('content')

<!doctype html>
<html lang="en">
  <head>
   


    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>

    body{  
    background-color:#FFFFFF;

    }    
    /* Para un comportamiento responsive */
    .carousel-inner img {
    width: 100%;
  /*   height: 100%; */
   margin: auto;
    }
  </style> 
      
  </head>
  <body>
    
        <div id="carousel1" class="carousel slide " data-ride="carousel">
            <div class="carousel-inner">
            <div class="carousel-item active">
               <img src="img/1.jpg" alt="" width="1000" height="300">
            </div>
            <div class="carousel-item">
               <img src="img/2.png" alt="" width="1000" height="300">
            </div>
            <div class="carousel-item">
               <img src="img/3.jpg" alt="" width="1000" height="300">
                        </div>
            </div>
            
            <!--Controles NEXT y PREV-->
            <a class="carousel-control-prev" href="#carousel1" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel1" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            <!--Controles de indicadores-->
            <ol class="carousel-indicators">
                <li data-target="#carousel1" data-slide-to="0" class="active"></li>
                <li data-target="#carousel1" data-slide-to="1"></li>
                <li data-target="#carousel1" data-slide-to="2"></li>
            </ol>
            
        </div>
      
      
      
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
    <script>
        $('.carousel').carousel();
    </script>  
      
      <div class="container">
        <div class="row">
            <div class="col-md-4 " class="pull-left">
    
                @include('partials.validation-errors')
    
                <div class="card border-0 bg-light px-4 py-2">
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="card-body">
    
                            <div class="form-group">
                                <i class="fas fa-envelope mr-2"></i><label class="font-weight-bold">Correo Electrónico:</label>
                                <input class="form-control border-1" type="email" name="email" placeholder="Tu email..."
                                       value="{{ old('email') }}">
                            </div>
    
                            <div class="form-group">
                                <i class="fas fa-key mr-2"></i><label class="font-weight-bold">Contraseña:</label>
                                <input class="form-control border-1" type="password" name="password" placeholder="Tu contraseña...">
                            </div>
    
                            <button class="btn btn-primary btn-block font-weight-bold btn-success" dusk="login-btn">Iniciar sesión</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection

  
  </body>
</html>

