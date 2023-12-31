<!DOCTYPE html>
<html>


<head>
    <title>GAME SPACE | Descarga juegos para PC</title>
    
    <link rel="icon" type="" href="assets/iconos/palanca-de-mando.png" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="{{ asset('styles.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    <!--Iconos-->
    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>

    <!-- Aquí puedes incluir enlaces a tus hojas de estilo CSS, scripts JS, etc. -->
</head>
<body style="background-image: url('assets/fondoGame.png');">
    <header>
        <!-- Aquí puedes colocar la barra de navegación u otros elementos de cabecera -->
        <nav class="navbar navbar-expand-lg bg-body-tertiary" id="mainNav">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars ms-1"></i>
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <a class="navbar-brand" href="{{ route('home')}}">
            <img src="assets/logo game space/2.png" alt="Logo" width="50" height="50" class="...">
            GAME SPACE</a>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('home')}}">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#juegosNS">Juegos Switch</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('games.index') }}">Listado Juegos</a>
          </li>
        </ul>
        <form action="{{ route('search.search') }}" class="d-flex" role="search" method="GET">
          <input class="form-control me-2" type="search" placeholder="Buscar juego" aria-label="search">
          <button class="btn btn-outline-primary" type="submit">Buscar</button>
        </form>
        <button class="btn btn-outline-primary" id="botonIniciarS"><a href="{{ route('login')}}">Iniciar Sesion</a></button>
        <button class="btn btn-outline-primary" id="botonCrearC"><a href="{{ route('register')}}">Crear cuenta</a></button>
      </div>
    </div>
  </nav>
    </header>

    <div class="container">
        @yield('content')
       
    </div>

  
</body>
</html>
