<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\escuela;

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
    return view('welcome');
});

Route::get('/editar', function () {
    return view('editar');
});

Route::get('/lista_alumnos', function () {
    return view('lista_alumnos');
});

Route::name('lista')->get('/',[escuela::class, 'lista']);
Route::name('lista')->get('/registrar',[escuela::class, 'lista']);
Route::name('detalle')->get('detalle/{id}',[escuela::class, 'detalle']);


Route::name('editar')->get('editar/{id}',[escuela::class, 'editar']);
Route::name('salvar')->put('salvar/{id}',[escuela::class, 'salvar']);


Route::name('borar')->delete('borrar/{id}',[escuela::class, 'borrar']);


Route::post('registrar','App\Http\Controllers\escuela@insert')->name('registrar');

Route::get('/ejemplo', function () {
    return view('ejemplo');
});