@extends('index')
@section('content')
    <div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="modalNuevoPeli" tabindex="-1"
        aria-labelledby="modalNuevoPeli" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <form action="{{ route('registrar-pelicula') }}" method="POST">
                    @csrf
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="modalNuevoPeli">Nueva Pelicula</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="col-12 text-start fw-bold">
                            Datos
                        </div>
                        <br>

                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="">Titulo</label>
                                    <input type="text" name="titulo" id="" class="form-control" placeholder=""
                                        aria-describedby="helpId">
                                </div>
                                @error('titulo')
                                    <h6 class="alert alert-danger">{{ $message }}</h6>
                                @enderror
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="">Director</label>
                                    <input type="text" name="director" id="" class="form-control"
                                        placeholder="" aria-describedby="helpId">
                                </div>
                                @error('director')
                                    <h6 class="alert alert-danger">{{ $message }}</h6>
                                @enderror
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="">Fecha de publicacion</label>
                                    <input type="date" name="fecha_pub" id="" class="form-control"
                                        placeholder="" aria-describedby="helpId">
                                </div>
                                @error('fecha_pub')
                                    <h6 class="alert alert-danger">{{ $message }}</h6>
                                @enderror
                            </div>
                        </div>
                        <br>
                    </div>
                    <br>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-success">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="row">
        <h1 class="gy-4 titulo text-dark">Peliculas</h1>
        <br>
    </div>
    <p class="text-light texto"></p>
    <br><br>
    <div class="col-12 text-end">
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalNuevoPeli">Registrar peliculas<i
                class="bi bi-person"></i></button>
    </div>
    <br>
    <table class="table table-hover table-bordered" style="margin-bottom: 25%">
        <thead class="table-light">
            <tr>
                <th scope="col">Titulo</th>
                <th scope="col">Director</th>
                <th scope="col">Fecha de publicación</th>
                <th scope="col">Eliminar</th>
            </tr>
        </thead>

        <tbody>

            @foreach ($peliculas as $pelicula)
                <tr>
                    <td>{{$pelicula->titulo}}</td>
                    <td>{{$pelicula->director}}</td>
                    <td>{{$pelicula->fecha_publicacion}}</td>
                    <td>
                        <a href="{{ route('destroy-pelicula', ['id' => $pelicula->id_pelicula]) }}">
                            <i class="bi bi-trash-fill text-danger h4"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>

        @if (sizeof($peliculas) == 0)
            <caption>No hay peliculas registradas</caption>
        @endif

    </table>
@endsection
