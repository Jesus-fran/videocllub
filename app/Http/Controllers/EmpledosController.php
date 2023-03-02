<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmpleadosRequest;
use App\Models\Empleado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmpledosController extends Controller
{
    public function RegistrarEmpleado(EmpleadosRequest $request)
    {
       
        // if (!$validated) {
        //     session(['autostartmodal'=>true]);
        // }
        $cliente = new Empleado();

        $cliente->nombre = $request->nombre;
        $cliente->apellidos = $request->apellidos;
        $cliente->direccion = $request->direccion;
        $cliente->telefono = $request->tel;
        $cliente->correo_electronico = $request->correo;
        $cliente->sueldo = $request->sueldo;
        $cliente->puesto = $request->puesto;
        $cliente->save();
        return redirect()->route('empleados');
    }

    public function DestroyEmpleado(Request $request)
    {
        $id =  $request->id;
        $cliente = DB::table('empleados')->where('id_emp', $id)->delete();
        return redirect()->route('empleados');
    }

}
