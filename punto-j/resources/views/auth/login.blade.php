<!DOCTYPE html>
<html lang="en">

<head>
  <title>Iniciar Sesion</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

  <link rel="stylesheet" href="{{asset('assets/estilos.css')}}">
  
</head>

<body class="bg-image-vertical">
    <div class="container">
      <div class="logo">
        <i class="fas fa-crow fa-2x me-3 pt-5 mt-xl-4" style="color: #709085;"></i>
        <img src="{{asset('assets/unab.png')}}" alt="logo">
      </div>
      <div class="logout">
        <!-- Contenido de cierre de sesión u otras opciones -->
      </div>
    </div>

    <div class="d-flex flex-column min-vh-100">
      <form action="{{route('login')}}" method="post" style="width: 23rem;" class="mx-auto mt-5">
        @csrf
        <h3 class="fw-normal mb-3" style="letter-spacing: 1px;">Iniciar Sesion</h3>
        <div class="form-outline mb-4">
          <label class="form-label" for="form2Example18">Correo</label>
          <input type="email" name="email" id="form2Example18" class="form-control form-control-lg" />                    
        </div>
        <div class="form-outline mb-4">
          <label class="form-label" for="form2Example28">Contraseña</label>
          <input type="password" name="password" id="form2Example28" class="form-control form-control-lg" />
        </div>
        <div class="pt-1 mb-4">
          <button class="btn btn-info btn-lg btn-block" type="submit">Ingresar</button>
        </div>
        <p class="small mb-5 pb-lg-2"><a class="text-muted" href="{{route('register')}}"></p>
        <p>¿No estás registrado? <a href="{{route('register')}}" class="link-info">Regístrate aquí</a></p>
      </form>
    </div>
    
    <img src="{{asset('assets/img-unab.jpg')}}"
      alt="Login image" class="w-100" style="object-fit: cover; object-position: left;">
    
  </body>
</html>
