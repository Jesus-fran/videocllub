@extends('index')
@section('content')
    <div class="row" style="margin-bottom: 30%">
        <h1 class="gy-4 titulo text-dark">Nosotros</h1>
        <br>
        <div class="col-4 gy-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title text-center">Objetivos</h4>
                    <br>
                    <p class="card-text" style="text-align: justify">
                        En la actualidad, las empresas buscan constantemente herramientas tecnológicas para facilitar sus
                        operaciones diarias y mejorar la eficiencia de sus procesos. En este caso, el proyecto de la
                        aplicación web permitiría al Videoclub mantener actualizada la información de sus clientes,
                        proveedores, películas y empleados en un solo lugar, facilitando la gestión y el acceso a dicha
                        información.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-4 gy-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title text-center">Objetivo general</h4>
                    <br>
                    <p class="card-text" style="text-align: justify">
                        Desarrollar e implementar una aplicación web usando el framework Laravel mediante una red local con
                        base de datos para el Videoclub “Hollywood”, que ayude a controlar el inventario de productos, las
                        ventas realizadas, las tarjetas de descuentos y controlar las ventas que se realicen dentro de la
                        empresa utilizando un lenguaje orientado a objetos y que sea útil en plataformas de escritorio y
                        móviles.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-4 gy-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Objetivos especificos</h4>
                    <br>
                    <p class="card-text">
                    <ul style="text-align: justify">
                        <li>
                            Diseñar y desarrollar una base de datos que permita almacenar la información de clientes,
                            proveedores, productos e inventario.
                        </li>
                        <li>
                            Crear una interfaz de usuario amigable y fácil de usar para que los empleados del Videoclub
                            Hollywood puedan agregar y actualizar la información en la base de datos.
                        </li>
                        <li>
                            Implementar un sistema de control de inventario que permita llevar un registro de los productos
                            disponibles en el Videoclub, así como de los productos que han sido vendidos y los que están en
                            tránsito.
                        </li>
                        <li>
                            Desarrollar la aplicación web utilizando el framework Laravel y un lenguaje orientado a objetos
                            para garantizar la escalabilidad y mantenibilidad del sistema.
                        </li>
                        <li>
                            Garantizar la compatibilidad de la aplicación web con plataformas de escritorio y móviles, para
                            que pueda ser utilizada desde cualquier dispositivo con acceso a la red local.
                        </li>
                    </ul>
                    </p>
                </div>
            </div>
        </div>

        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title text-center">Diagrama de la base de datos</h4>
                    <br>
                   <img src="{{ asset('img/bd.png') }}" class="img-fluid" alt="" srcset="">
                </div>
            </div>
        </div>

    </div>
    <p class="text-light texto"></p>
    <br><br>
    <br>
@endsection
