<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TaskController;

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

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/list', [TaskController::class, 'listTasks'])->name('list');

Route::get('/insert', function () {
    return view('task.addOrUpdate');
})->middleware('auth');

Route::post('/insert', [TaskController::class, 'insert'])->name('insert')->middleware('auth');

Route::get('/edit/{id}', [TaskController::class, 'showEdit'])->name('edit')->middleware('auth');;

Route::put('/update/{id}', [TaskController::class, 'update'])->name('update')->middleware('auth');;

Route::delete('/remove/{id}', [TaskController::class, 'destroy'])->name('remove')->middleware('auth');;