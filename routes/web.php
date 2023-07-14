<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ApiController;
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

// Route::get('/', [ViewsController::class, 'ViewIndex'])->middleware(AdminMiddleware::class);
Route::get('/', [ViewsController::class, 'ViewIndex']);

// Route::get('/clientes', ViewsController::class, 'ViewsController@ViewClientes')->name('clientes');
Route::get('login', [ViewsController::class, 'ViewLogin'])->name('login');
Route::post('iniciar-sesion', [AdminController::class, 'IniciarSesion'])->name('iniciar-sesion');
Route::get('logout', [AdminController::class, 'DestroySesion'])->name('logout');
Route::get('nosotros', [ViewsController::class, 'ViewNosotros'])->name('nosotros');
Route::get('clientes', [ViewsController::class, 'ViewClientes'])->name('clientes');
Route::get('empleados', [ViewsController::class, 'ViewEmpleados'])->name('empleados');
Route::get('peliculas', [ViewsController::class, 'ViewPeliculas'])->name('peliculas');
Route::get('proveedores', [ViewsController::class, 'ViewProveedores'])->name('proveedores');
Route::post('registrar-cliente', [ClientesController::class, 'RegistrarCliente'])->name('registrar-cliente');
Route::post('registrar-empleado', [EmpledosController::class, 'RegistrarEmpleado'])->name('registrar-empleado');
Route::post('registrar-pelicula', [PeliculasController::class, 'Registrarpelicula'])->name('registrar-pelicula');
Route::post('registrar-proveedor', [ProveedoresController::class, 'Registrarproveedor'])->name('registrar-proveedor');
Route::get('destroy-cliente', [ClientesController::class, 'DestroyCliente'])->name('destroy-cliente');
Route::get('destroy-empleado', [EmpledosController::class, 'DestroyEmpleado'])->name('destroy-empleado');
Route::get('destroy-pelicula', [PeliculasController::class, 'DestroyPelicula'])->name('destroy-pelicula');
Route::get('destroy-proveedor', [ProveedoresController::class, 'DestroyProveedor'])->name('destroy-proveedor');
Route::get('api-pelis', [ApiController::class, 'getData'])->name('api-pelis');
Route::post('search-peli', [ViewsController::class, 'searchPelicula'])->name('search-peli');
Route::get('cines', [ViewsController::class, 'showCines'])->name('cines');
