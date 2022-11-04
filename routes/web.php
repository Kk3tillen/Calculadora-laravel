<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\OperationController;

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

Route::get('/soma/{n1}/{n2}', [OperationController::class, 'sum']);
Route::get('/dividir/{n1}/{n2}', [OperationController::class, 'div']);
Route::get('/multiplicar/{n1}/{n2}', [OperationController::class, 'mult']);
Route::get('/subtair/{n1}/{n2}', [OperationController::class, 'sub']);