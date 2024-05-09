<?php

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

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/securityadmin', function () {
    return view('securityadmin');
});

Route::get('/securityadminconfirm', function () {
    return view('securityadminconfirm');
});

Route::get('/securityadminrequest', function () {
    return view('securityadminrequest');
});
