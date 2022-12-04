<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\MenuPrincipalController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\VentaController;
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

Route::get('/',[LoginController::class,'index'] )->name("login.index");
Route::post('/',[LoginController::class,'store'] )->name("login.store");
Route::get('/register',[RegisterController::class,'index'] )->name("register.index");
Route::post('/register',[RegisterController::class,'store'] )->name("register.store");
Route::get('/menu-principal',MenuPrincipalController::class)->middleware('autenticar')->name('menu-principal');

Route::middleware('autenticar')->group(function(){
    Route::post('logout',LogoutController::class)->name('logout');

    //Categorias router
    Route::get('/categorias',[CategoriaController::class,'index'])->name('categorias.index');
    
    //Productos router
    Route::get('/productos',[ProductoController::class,'index'])->name('productos.index');
    
    
    //Ventas router
    Route::get('/ventas',[VentaController::class,'index'])->name('ventas.index');
    
    
    //Usuarios router
    Route::get('/usuarios',[UsuarioController::class,'index'])->name('usuarios.index');
});

