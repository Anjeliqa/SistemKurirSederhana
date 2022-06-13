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
    return view('login');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/transaksi', function () { 
	return view('transaksi'); 
});

Route::get('/customer', function () { 
	return view('customer'); 
});

Route::get('/datapengiriman', function () { 
	return view('datapengiriman'); 
});

Route::get('/kurir', function () { 
	return view('kurir'); 
});

Route::get('/pegawai', function () { 
	return view('pegawai'); 
});

Route::get('/pengiriman', function () { 
	return view('pengiriman'); 
});


Route::get('/customer', '\App\Http\Controllers\customercontroller@index');
Route::get('/datapengiriman', '\App\Http\Controllers\datapengirimancontoller@index');
Route::get('/kurir', '\App\Http\Controllers\kurircontroller@index');
Route::get('/pegawai', '\App\Http\Controllers\pegawaicontroller@index');
Route::get('/pengiriman', '\App\Http\Controllers\pengirimancontroller@index');