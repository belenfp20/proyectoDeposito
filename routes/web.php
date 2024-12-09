<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\paginacontroller;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    return view('inicio');
});

route::get('bebidas',[paginacontroller::class,'bebidas'])->name('bebidas');
route::get('cervezas',[paginacontroller::class,'cervezas'])->name('cervezas');
route::get('refrescos',[paginacontroller::class,'refrescos'])->name('refrescos');
route::get('contacto',[paginacontroller::class,'contacto'])->name('contacto');
route::get('inicio',[paginacontroller::class,'inicio'])->name('inicio');

route::get('compra',[paginacontroller::class,'compra'])->name('compra');
Route::post('procesar', [CompraController::class, 'procesar'])->name('procesar');



