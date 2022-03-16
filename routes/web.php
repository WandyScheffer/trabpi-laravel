<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'index']);

Route::get('/list', function () {
    return view('task.list');
});

Route::get('/insert', function () {
    return view('task.add');
});

// Route::post('/insert', function () {
//     return view('');
// });

Route::get('/edit', function () {
    return view('task.update');
});

Route::get('/remove', function () {
    return view('task.remove');
});

Route::get('/login', function () {
    return view('access.login');
});

Route::get('/register', function () {
    return view('access.create');
});


// Route::get('/teste1', function () {
//     // return view('welcome');
//     return "rota de reste inicial";
// });

// Route::get('/teste2', function () {
//     // return view('welcome');
//     return "rota que recebe redirecionamento";
// })->name('recebe');

// Route::get('/teste3', function () {
//     // return view('welcome');
//     return redirect()->route('recebe');
// });

// Route::get('/teste4/{id}', function ($id) {
    // return view('welcome');
    // return "o valor de id é {$id}";
// });


