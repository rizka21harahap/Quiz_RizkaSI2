<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

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
    return view('login');
});
Route::get('/dashboard', [AdminController::class, 'index']);
Route::get('/logout', [AdminController::class, 'logout']);
Route::get('/golongan', [AdminController::class, 'golongan']);
Route::get('/user', [AdminController::class, 'user']);
Route::get('/pelanggan', [AdminController::class, 'pelanggan']);
Route::get('/editpel', [AdminController::class, 'editpel']);
Route::get('/editgol', [AdminController::class, 'editgol']);

Route::get('/deletepel', [AdminController::class, 'deletepel']);
Route::get('/deletegol', [AdminController::class, 'deletegol']);


Route::post('/loginpros', [AdminController::class, 'loginpros']);
Route::post('/tambahpelanggan', [AdminController::class, 'tambahpelanggan']);
Route::post('/editpelpros', [AdminController::class, 'editpelpros']);
Route::post('/tambahgol', [AdminController::class, 'tambahgol']);
Route::post('/editgolpros', [AdminController::class, 'editgolpros']);
