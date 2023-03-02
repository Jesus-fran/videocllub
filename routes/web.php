<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\EmpledosController;
use App\Http\Controllers\PeliculasController;
use App\Http\Controllers\ProveedoresController;
use App\Http\Controllers\ViewsController;
use App\Http\Middleware\AdminMiddleware;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
})->middleware(AdminMiddleware::class);

// Route::get('/clientes', ViewsController::class, 'ViewsController@ViewClientes')->name('clientes');
Route::get('login', [ViewsController::class, 'ViewLogin'])->name('login');
Route::post('iniciar-sesion', [AdminController::class, 'IniciarSesion'])->name('iniciar-sesion');
Route::get('logout', [AdminController::class, 'DestroySesion'])->name('logout');
Route::get('clientes', [ViewsController::class, 'ViewClientes'])->name('clientes')->middleware(AdminMiddleware::class);
Route::get('empleados', [ViewsController::class, 'ViewEmpleados'])->name('empleados')->middleware(AdminMiddleware::class);
Route::get('peliculas', [ViewsController::class, 'ViewPeliculas'])->name('peliculas')->middleware(AdminMiddleware::class);
Route::get('proveedores', [ViewsController::class, 'ViewProveedores'])->name('proveedores')->middleware(AdminMiddleware::class);
Route::post('registrar-cliente', [ClientesController::class, 'RegistrarCliente'])->name('registrar-cliente')->middleware(AdminMiddleware::class);
Route::post('registrar-empleado', [EmpledosController::class, 'RegistrarEmpleado'])->name('registrar-empleado')->middleware(AdminMiddleware::class);
Route::post('registrar-pelicula', [PeliculasController::class, 'Registrarpelicula'])->name('registrar-pelicula')->middleware(AdminMiddleware::class);
Route::post('registrar-proveedor', [ProveedoresController::class, 'Registrarproveedor'])->name('registrar-proveedor')->middleware(AdminMiddleware::class);
Route::get('destroy-cliente', [ClientesController::class, 'DestroyCliente'])->name('destroy-cliente')->middleware(AdminMiddleware::class);
Route::get('destroy-empleado', [EmpledosController::class, 'DestroyEmpleado'])->name('destroy-empleado')->middleware(AdminMiddleware::class);
Route::get('destroy-pelicula', [PeliculasController::class, 'DestroyPelicula'])->name('destroy-pelicula')->middleware(AdminMiddleware::class);
Route::get('destroy-proveedor', [ProveedoresController::class, 'DestroyProveedor'])->name('destroy-proveedor')->middleware(AdminMiddleware::class);
