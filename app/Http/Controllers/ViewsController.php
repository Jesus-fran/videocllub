<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Empleado;
use App\Models\Pelicula;
use App\Models\Proveedor;
use Illuminate\Http\Request;

class ViewsController extends Controller
{
    public function ViewClientes()
    {
        $clientes = Cliente::all();
        return view('clientes', ['clientes'=>$clientes]);
    }

    public function ViewLogin()
    {
        return view('login');
    }

    public function ViewEmpleados()
    {
        $empleados = Empleado::all();
        return view('empleados', ['empleados'=>$empleados]);
    }

    public function ViewPeliculas()
    {
        $peliculas = Pelicula::all();
        return view('peliculas', ['peliculas'=>$peliculas]);
    }

    public function ViewProveedores()
    {
        $proveedores = Proveedor::all();
        return view('proveedores', ['proveedores'=>$proveedores]);
    }
}
