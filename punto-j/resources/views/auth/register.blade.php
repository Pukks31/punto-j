<!DOCTYPE html>
<html lang="en">

<head>
  <title>Regístrate</title>
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
  </div>

  <div class="d-flex flex-column min-vh-100">
    <form action="{{route('register')}}" method="post" style="width: 23rem;" class="mx-auto mt-5">
      @csrf
      <h3 class="fw-normal mb-3" style="letter-spacing: 1px;">Regístrate</h3>
      <div class="form-outline mb-4">
        <label class="form-label" for="name">Nombre</label>
        <input type="text" name="name" id="name" class="form-control form-control-lg" value="{{ old('name') }}" />
      </div>

      <div class="form-outline mb-4">
        <label class="form-label" for="email">Correo</label>
        <input type="email" name="email" id="email" class="form-control form-control-lg" value="{{ old('email') }}" />
      </div>

      <div class="form-outline mb-4">
        <label class="form-label" for="password">Contraseña</label>
        <input type="password" name="password" id="password" class="form-control form-control-lg"
          value="{{ old('password') }}" />
      </div>

      <div class="form-outline mb-4">
        <label class="form-label" for="password_confirmation">Confirmar contraseña</label>
        <input type="password" name="password_confirmation" id="password_confirmation"
          class="form-control form-control-lg" value="{{ old('password_confirmation') }}" />
      </div>

      <div class="pt-1 mb-4">
        <button class="btn btn-info btn-lg btn-block" type="submit">Registrarse</button>
      </div>

      <p class="small mb-5 pb-lg-2"><a class="text-muted" href="{{route('login')}}"></p>
      <p>Iniciar Sesión</a></p>
    </form>
  </div>

  <img src="{{asset('assets/img-unab.jpg')}}" alt="Login image" class="w-100" style="object-fit: cover; object-position: left;">
</body>

</html>
