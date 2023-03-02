<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProveedorRequest;
use App\Models\Proveedor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProveedoresController extends Controller
{
    public function RegistrarProveedor(ProveedorRequest $request)
    {

        // if (!$validated) {
        //     session(['autostartmodal'=>true]);
        // }
        $proveedor = new Proveedor();

        $proveedor->nombre = $request->nombre;
        $proveedor->apellidos = $request->apellidos;
        $proveedor->direccion = $request->direccion;
        $proveedor->telefono = $request->tel;
        $proveedor->correo_electronico = $request->correo;
        $proveedor->fecha_nacimiento = $request->fecha_nac;
        $proveedor->save();
        return redirect()->route('proveedores');
    }


    public function DestroyProveedor(Request $request)
    {
        $id =  $request->id;
        $proveedor = DB::table('proveedores')->where('id_prov', $id)->delete();
        return redirect()->route('proveedores');
    }
}
