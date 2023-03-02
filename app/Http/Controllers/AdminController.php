<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminRequest;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function DestroySesion()
    {
        session()->flush();
        return view('login');
    }

    public function IniciarSesion(AdminRequest $request)
    {
        $correo = $request->correo;
        $password = $request->password;

        $admin = Admin::all();
        $correoBd = "";
        $passwordBd = "";
        $nameAdminBd = "";

        foreach ($admin as $data) {
            $correoBd = $data->correo;
            $passwordBd = $data->password;    
            $nameAdminBd = $data->nombre;    
        }
        
        if ($correo == $correoBd && $password == $passwordBd) {
            session(['login'=>true, 'nombre'=>$nameAdminBd]);
            return view('index');
        }else{
            return view('login', ['error' => 'Password o correo invalido']);
        }
    }
}
