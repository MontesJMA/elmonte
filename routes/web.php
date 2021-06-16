<?php

use App\Http\Controllers\ProbarRoleController;
use App\Http\Controllers\JsonController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ActividadController;
use App\Http\Controllers\PaymentController;
use App\Http\Middleware\FisicoMiddleware;

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



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth','verified'])->name('dashboard');

Route::get('/contacto', function () {
    return view('contacto');
});



Route::get('/clases', function () {
    return view('clases');
});

//Route::get('/json',[JsonController::class,'index']);

//Route::get("json","JsonController@index");

Route::get('json', 'App\Http\Controllers\JsonController@index');

require __DIR__.'/auth.php';

Route::resource('actividad',\App\Http\Controllers\ActividadController::class)->middleware(['auth','FisicoMiddleware','verified']);

Route::resource('user',\App\Http\Controllers\UserController::class)->middleware(['auth','verified']);

Route::resource('fisico',\App\Http\Controllers\FisicoController::class)->middleware(['auth','verified']);

Route::resource('evento',\App\Http\Controllers\EventoController::class)->middleware(['auth','verified','check-subscription']);


Route::get('payment', 'App\Http\Controllers\PaymentController@payment');
Route::post('subscribe', 'App\Http\Controllers\PaymentController@subscribe');