<?php

namespace App\Http\Controllers;

use App\Http\Requests\PeliculaRequest;
use App\Models\Pelicula;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PeliculasController extends Controller
{
    public function RegistrarPelicula(PeliculaRequest $request)
    {
       
        // if (!$validated) {
        //     session(['autostartmodal'=>true]);
        // }
        $cliente = new Pelicula();

        $cliente->titulo = $request->titulo;
        $cliente->director = $request->director;
        $cliente->fecha_publicacion = $request->fecha_pub;
        $cliente->save();
        return redirect()->route('peliculas');
    }

    public function DestroyPelicula(Request $request)
    {
        $id =  $request->id;
        $pelicula = DB::table('peliculas')->where('id_pelicula', $id)->delete();
        return redirect()->route('peliculas');
    }
}
