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
        return view('clientes', ['clientes' => $clientes]);
    }

    public function ViewLogin()
    {
        return view('login');
    }

    public function ViewEmpleados()
    {
        $empleados = Empleado::all();
        return view('empleados', ['empleados' => $empleados]);
    }

    public function ViewPeliculas()
    {
        $peliculas = Pelicula::all();
        return view('peliculas', ['peliculas' => $peliculas]);
    }

    public function ViewProveedores()
    {
        $proveedores = Proveedor::all();
        return view('proveedores', ['proveedores' => $proveedores]);
    }

    public function ViewNosotros()
    {
        return view('nosotros');
    }

    public function ViewIndex()
    {
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => "https://imdb-top-100-movies.p.rapidapi.com/",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => [
                "X-RapidAPI-Host: imdb-top-100-movies.p.rapidapi.com",
                // "X-RapidAPI-Key: a8f328fe37msh87443bf47cb29dfp1d3c08jsn08669a02c213"
                "X-RapidAPI-Key: 22c6ffb9f7msh896c554133c3ae3p126471jsnf27ef680a236"
            ],
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            return view("index", ['peliculas' => json_decode($response, true)]);
        }
    }

    public function searchPelicula(Request $request)
    {

        $titleMovie = $request->keyword;


        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => "https://moviesdatabase.p.rapidapi.com/titles/search/title/".$titleMovie.
            "?exact=true&titleType=movie",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => [
                "X-RapidAPI-Host: moviesdatabase.p.rapidapi.com",
                "X-RapidAPI-Key: a8f328fe37msh87443bf47cb29dfp1d3c08jsn08669a02c213"
            ],
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            return view("index", ['searchedpeliculas' => json_decode($response, true)]);
        }
    }

    public function showCines(){
        return view('cines');
    }
}

