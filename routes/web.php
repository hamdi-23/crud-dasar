<?php

use App\Http\Controllers\PegawaiController;
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
    return view('welcome');
});

Route::get('/data', ([PegawaiController::class, 'index']));
Route::get('/create', ([PegawaiController::class, 'create']));
Route::post('/data/store', ([PegawaiController::class, 'store']));
Route::get('/data/{id}/edit', ([PegawaiController::class, 'edit']));
Route::put('/data/{id}', ([PegawaiController::class, 'update']));
Route::delete('/data/{id}', ([PegawaiController::class, 'destroy']));
