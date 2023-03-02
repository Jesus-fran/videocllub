@extends('index')
@section('content')
    <div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="modalNuevoEmpleado" tabindex="-1"
        aria-labelledby="modalNuevoEmpleado" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <form action="{{ route('registrar-empleado') }}" method="POST">
                    @csrf
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="modalNuevoEmpleado">Nuevo empleado</h1>
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
                                    <label for="">Sueldo</label>
                                    <input type="number" name="sueldo" id="" class="form-control" placeholder=""
                                        aria-describedby="helpId">
                                </div>
                                @error('sueldo')
                                    <h6 class="alert alert-danger">{{ $message }}</h6>
                                @enderror
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-8">
                                <div class="form-group">
                                    <label for="">Puesto</label>
                                    <input type="text" name="puesto" id="" class="form-control" placeholder=""
                                        aria-describedby="helpId">
                                </div>
                                @error('puesto')
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
        <h1 class="gy-4 titulo text-dark">Empleados</h1>
        <br>
    </div>
    <p class="text-light texto"></p>
    <br><br>
    <div class="col-12 text-end">
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalNuevoEmpleado">Registrar empleados<i
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
                <th scope="col">sueldo</th>
                <th scope="col">puesto</th>
                <th scope="col">Eliminar</th>
            </tr>
        </thead>

        <tbody>

            @foreach ($empleados as $empleado)
                <tr>
                    <td>{{ $empleado->nombre }} {{ $empleado->apellidos }}</td>
                    <td>{{ $empleado->direccion }}</td>
                    <td>{{ $empleado->telefono }}</td>
                    <td>{{ $empleado->correo_electronico }}</td>
                    <td>{{ $empleado->sueldo }}</td>
                    <td>{{ $empleado->puesto }}</td>
                    <td>
                        <a href="{{ route('destroy-empleado', ['id' => $empleado->id_emp]) }}">
                            <i class="bi bi-trash-fill text-danger h4"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>

        @if (sizeof($empleados) == 0)
            <caption>No hay empleados registrados</caption>
        @endif

    </table>
@endsection
