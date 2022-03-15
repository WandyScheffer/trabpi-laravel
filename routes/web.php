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

Route::get('/teste1', function () {
    // return view('welcome');
    return "rota de reste inicial";
});

Route::get('/teste2', function () {
    // return view('welcome');
    return "rota que recebe redirecionamento";
})->name('recebe');

Route::get('/teste3', function () {
    // return view('welcome');
    return redirect()->route('recebe');
});

Route::get('/teste4/{id}', function ($id) {
    // return view('welcome');
    return "o valor de id é {$id}";
});

Route::get('/teste5', function () {
    // return view('welcome');
    return "teste de query: " . $algo;
});
