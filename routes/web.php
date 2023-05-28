<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BahanController;
use App\Http\Controllers\HargaController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// bahan
Route::get('/', 'BahanController@index');
// Route::get('/bahan/create', 'BahanController@create');
// Route::post('/bahan', 'BahanController@store');
// Route::get('/bahan/edit', 'BahanController@edit');
// Route::patch('/bahan/{$data}/edit', 'BahanController@update');
// Route::delete('/bahan/{$data}', 'BahanController@destroy');

Route::resource('bahan', 'BahanController');


Route::resource('harga', 'HargaController');


// Route::resource('biaya', 'BiayaController');

Route::get('/biaya', 'BiayaController@show');
Route::post('/jumlah', 'BiayaController@index');


// Route::get('/', 'HargaController@index');
// Route::post('/harga', 'KemasanController@store');
