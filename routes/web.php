<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GroupController;

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

Route::resource('/index', GroupController::class);

Route::get('/create', function () {
    return view('create');
});

Route::get('/show', function () {
    return view('show');
});


Route::get('/edit', function () {
    return view('edit');
});

