<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video Club|login</title>
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
        <div class="row justify-content-center">
            <div class="col-4 mt-5 shadow-lg">

                <form method="post" action="{{ route('iniciar-sesion') }}" class="container">

                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />

                    <div class="col-12 text-center">
                        <img class="img-fluid mt-4" src="{{ asset('img/tocar.png') }}" alt="" width="72"
                            height="57">
                        <h1 class="h3 mb-3 fw-normal mt-5">Iniciar sesión</h1>
                        <h6 class=" mb-3 fw-normal mt-5">Video club Hollywood</h6>
                    </div>
                    <div class="col-12 text-center">
                        @if (isset($error))
                            <span class="text-danger text-left">{{ $error }}</span>
                        @endif
                    </div>
                    <div class="row">
                        <div class="form-group form-floating mb-3 mt-4">
                            <input type="text" class="form-control" name="correo" value="{{ old('username') }}"
                                placeholder="Username" required="required" autofocus>
                            <label for="floatingName">Correo de usuario</label>
                            @error('correo')
                                <h6 class="alert alert-danger">{{ $message }}</h6>
                            @enderror
                        </div>

                        <div class="form-group form-floating mb-3">
                            <input type="password" class="form-control" name="password" value="{{ old('password') }}"
                                placeholder="Password" required="required">
                            <label for="floatingPassword">Contraseña</label>
                            @error('password')
                                <h6 class="alert alert-danger">{{ $message }}</h6>
                            @enderror
                        </div>

                        <div class="col-12 text-center">
                            <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
                        </div>
                    </div>
                    <br>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
