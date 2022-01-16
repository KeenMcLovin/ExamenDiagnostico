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

Route::name('lista')->get('/',[escuela::class, 'lista']);
Route::name('lista')->get('/registrar',[escuela::class, 'lista']);

Route::post('registrar','App\Http\Controllers\escuela@insert')->name('registrar');