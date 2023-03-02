@extends('index')
@section('content')
    <div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="modalNuevoCliente" tabindex="-1"
        aria-labelledby="modalNuevoCliente" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <form action="{{ route('registrar-cliente') }}" method="POST">
                    @csrf
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="modalNuevoCliente">Nuevo cliente</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="col-12 text-start fw-bold">
                            Datos personales
                        </div>
                        <br>

                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="">Nombre</label>
                                    <input type="text" name="nombre" id="" class="form-control" placeholder=""
                                        aria-describedby="helpId">
                                </div>
                                @error('nombre')
                                    <h6 class="alert alert-danger">{{ $message }}</h6>
                                @enderror
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="">Apellidos</label>
                                    <input type="text" name="apellidos" id="" class="form-control"
                                        placeholder="" aria-describedby="helpId">
                                </div>
                                @error('apellidos')
                                    <h6 class="alert alert-danger">{{ $message }}</h6>
                                @enderror
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="">Dirección</label>
                                    <input type="text" name="direccion" id="" class="form-control"
                                        placeholder="" aria-describedby="helpId">
                                </div>
                                @error('direccion')
                                    <h6 class="alert alert-danger">{{ $message }}</h6>
                                @enderror
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="">Teléfono</label>
                                    <input type="text" name="tel" id="" class="form-control" placeholder=""
                                        aria-describedby="helpId">
                                </div>
                                @error('tel')
                                    <h6 class="alert alert-danger">{{ $message }}</h6>
                                @enderror
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-8">
                                <div class="form-group">
                                    <label for="">Correo</label>
                                    <input type="text" name="correo" id="" class="form-control" placeholder=""
                                        aria-describedby="helpId">
                                </div>
                                @error('correo')
                                    <h6 class="alert alert-danger">{{ $message }}</h6>
                                @enderror
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-8">
                                <div class="form-group">
                                    <label for="">Fecha de nacimiento</label>
                                    <input type="date" name="fecha_nac" id="" class="form-control"
                                        placeholder="" aria-describedby="helpId">
                                </div>
                                @error('fecha_nac')
                                    <h6 class="alert alert-danger">{{ $message }}</h6>
                                @enderror
                            </div>
                        </div>
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
        <h1 class="gy-4 titulo text-dark">Clientes</h1>
        <br>
    </div>
    <p class="text-light texto"></p>
    <br><br>
    <div class="col-12 text-end">
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalNuevoCliente">Registrar cliente<i
                class="bi bi-person"></i></button>
    </div>
    <br>
    <table class="table table-hover table-bordered" style="margin-bottom: 25%">
        <thead class="table-light">
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Direccion</th>
                <th scope="col">Teléfono</th>
                <th scope="col">Correo</th>
                <th scope="col">Fecha de nacimiento</th>
                <th scope="col">Eliminar</th>
            </tr>
        </thead>

        <tbody>

            @foreach ($clientes as $cliente)
                <tr>
                    <td>{{$cliente->nombre}} {{$cliente->apellidos}}</td>
                    <td>{{$cliente->direccion}}</td>
                    <td>{{$cliente->telefono}}</td>
                    <td>{{$cliente->correo_electronico}}</td>
                    <td>{{$cliente->fecha_nacimiento}}</td>
                    <td>
                        <a href="{{ route('destroy-cliente', ['id'=>$cliente->id_cli]) }}">
                            <i class="bi bi-trash-fill text-danger h4"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>

        @if (sizeof($clientes) == 0)
            <caption>No hay clientes registrados</caption>
        @endif

    </table>
@endsection
