<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\AuthController;
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

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/securityadmin', function () {
    return view('securityadmin');
});
Route::get('/superadmin', function () {
    return view('superadmin');
});

Route::get('/securityadminconfirm', function () {
    return view('securityadminconfirm');
});

Route::get('/securityadminrequest', function () {
    return view('securityadminrequest');
});


Route::prefix('pengguna')->group(function () {
Route::post('/insert', [PenggunaController::class, 'insert']);
Route::post('/update', [PenggunaController::class, 'update']);
Route::post('/delete', [PenggunaController::class, 'delete']);
Route::post('/login', [AuthController::class, 'login']);
});



