<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video Club|Hollywood</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon-videoclub.ico') }}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">


    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/css.css') }}">
</head>

<body>

    <div class="container-fluid">
        <div class="row">

            <!-- Menú principal -->
            <div class="col-12 col-md-2 col-xl-2 col-xxl-2 p-0 position-fixed">
                <nav class="navbar navbar-expand-lg p-0">

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="nav flex-column w-100 gap-1 ulnav">
                            <li class="nav-item logo align-items-center">
                                <a class="nav-link active" aria-current="page" href="{{ asset('/') }}">
                                    <div class="col text-center">
                                        <br>
                                        <img src="{{ asset('img/tocar.png') }}" class="img-fluid" width="20px"
                                            alt="" srcset="">
                                        Hollywood <br>
                                        <p class="fst-italic word-small-logo">Video club</p>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item text-center">
                                <i class="bi bi-person"></i>
                                {{ session('nombre') }}
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{ asset('/') }}">
                                    <i class="bi bi-house"></i>
                                    <span data-feather="home" class="align-text-bottom"></span>
                                    Home
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{ asset('nosotros') }}">
                                    <i class="bi bi-building"></i>
                                    <span data-feather="nosotros" class="align-text-bottom"></span>
                                    Nosotros
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ asset('clientes') }}">
                                    <i class="bi bi-people-fill"></i>
                                    <span data-feather="file" class="align-text-bottom"></span>
                                    Clientes
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ asset('empleados') }}">
                                    <i class="bi bi-people-fill"></i>
                                    <span data-feather="users" class="align-text-bottom"></span>
                                    Empleados
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('peliculas') }}">
                                    <i class="bi bi-film"></i>
                                    <span data-feather="bar-chart-2" class="align-text-bottom"></span>
                                    Peliculas
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('proveedores') }}">
                                    <i class="bi bi-archive-fill"></i>
                                    <span data-feather="layers" class="align-text-bottom"></span>
                                    Proveedores
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('logout') }}">
                                    <i class="bi bi-arrow-bar-left"></i>
                                    <span data-feather="layers" class="align-text-bottom"></span>
                                    Cerrar sesión
                                </a>
                            </li>
                        </ul>
                    </div>

                </nav>
            </div>


            <div class="col-12 col-md-10 offset-2 contenido">
                <div class="row navbar-top p-0">
                    <div class="col-12 text-center p-0 ">
                        <h1 class="titulo text-light">Hollywood</h1>
                    </div>
                </div>
                @section('content')
                    <div class="row class-head-title">
                        <h1 class="gy-4 titulo text-light">Peliculas</h1>
                        <br>
                        <p class="text-light texto">Disfruta de películas, series y documentales nunca antes vistos. Solo en
                            video club Hollywood.</p>
                    </div>
                    <div class="row list-peliculas">
                        
                        <div class="col-12 col-md-3">
                            <div class="card">
                                <img class="card-img-top" src="{{ asset('img/1img.jpg') }}" alt="Card image cap">
                                <div class="card-body">
                                    <h6 class="card-title">Luca (2021)</h6>
                                    {{-- <p class="card-text">Text</p> --}}
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-3">
                            <div class="card">
                                <img class="card-img-top" src="{{ asset('img/2img.jpg') }}" alt="Card image cap">
                                <div class="card-body">
                                    <h6 class="card-title">Cruella (2021)</h6>
                                    {{-- <p class="card-text">Text</p> --}}
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-3">
                            <div class="card">
                                <img class="card-img-top" src="{{ asset('img/3img.jpg') }}" alt="Card image cap">
                                <div class="card-body">
                                    <h6 class="card-title">Batman - The Long Halloween Parte Uno (2021)</h6>
                                    {{-- <p class="card-text">Text</p> --}}
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-3">
                            <div class="card">
                                <img class="card-img-top" src="{{ asset('img/4img.jpg') }}" alt="Card image cap">
                                <div class="card-body">
                                    <h6 class="card-title">Caos - El Inicio (2021)</h6>
                                    {{-- <p class="card-text">Text</p> --}}
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-3">
                            <div class="card">
                                <img class="card-img-top" src="{{ asset('img/5img.jpg') }}" alt="Card image cap">
                                <div class="card-body">
                                    <h6 class="card-title">Godzilla vs Kong (2021)</h6>
                                    {{-- <p class="card-text">Text</p> --}}
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-3">
                            <div class="card">
                                <img class="card-img-top" src="{{ asset('img/6img.jpg') }}" alt="Card image cap">
                                <div class="card-body">
                                    <h6 class="card-title">Army of the Dead (2021)</h6>
                                    {{-- <p class="card-text">Text</p> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                @show

            </div>
            <div class="col-12 col-md-10 offset-2">
                <div class="row">
                    <div class="container-fluid navbar-top contenedor_foot">
                        <footer class="footer">
                            <div class="container">
                                <div class="row">
                                    <div class="col">

                                        <ul>
                                            <ul>
                                                <li><a href="https://instagram.com" class="link-light">Instagram
                                                        <i class="bi bi-instagram"></i></a></li>
                                                <li><a class="link-light" href="https://youtube.com">Youtube <i
                                                            class="bi bi-youtube" aria-hidden="true"></i></a></li>
                                                <li><a class="link-light" href="#">Aviso legal</a></li>
                                            </ul>

                                        </ul>
                                    </div>
                                    <div class="col">
                                        <ul>
                                            <li><a class="link-light" href="https://facebook.com">Facebook <i
                                                        class="bi bi-facebook"></i></a></li>
                                            <li><a class="link-light" href="#">Política de privacidad</a></li>
                                            <li><a class="link-light" href="#">Términos y condiciones</a></li>
                                        </ul>
                                    </div>
                                    <div class="col">
                                        <ul><br>
                                            <li>
                                                <h6 class="link-light font-mono">Gracias por su visita.</h6>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </footer>
                    </div>

                </div>
            </div>
        </div>

    </div>
</body>

@if (session('autostartmodal') == true)
    {{ session(['autostartmodal' => false]) }}
    <script>
        $(function() {
            $('#modalNuevoCliente').modal('show');
            getProfesores();
        })
    </script>;
@endif


</html>
