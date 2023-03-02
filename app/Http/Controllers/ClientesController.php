<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClientesRequest;
use App\Models\Cliente;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClientesController extends Controller
{
    public function RegistrarCliente(ClientesRequest $request)
    {

        // if (!$validated) {
        //     session(['autostartmodal'=>true]);
        // }
        $cliente = new Cliente;

        $cliente->nombre = $request->nombre;
        $cliente->apellidos = $request->apellidos;
        $cliente->direccion = $request->direccion;
        $cliente->telefono = $request->tel;
        $cliente->correo_electronico = $request->correo;
        $cliente->fecha_nacimiento = $request->fecha_nac;
        $cliente->save();
        return redirect()->route('clientes');
    }

    public function DestroyCliente(Request $request)
    {
        $id =  $request->id;
        $cliente = DB::table('clientes')->where('id_cli', $id)->delete();
        // $cliente->delete();
        return redirect()->route('clientes');
    }
}
