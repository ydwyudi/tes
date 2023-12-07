<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiController;
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
    return view('Beranda');
});

Route::get('/posts', [PegawaiController::class,'index']);

Route::post('/posts/store', [PegawaiController::class,'store']);

Route::get('/posts/edit/{id}', [PegawaiController::class,'edit']);

Route::put('/posts/edit/{id}', [PegawaiController::class,'update']);

Route::get('/posts/delete/{id}', [PegawaiController::class,'delete']);

Route::get('/tambah', function () {
    return view('posts.tambah');
});

Route::get('/edit', function () {
    return view('posts.edit');
});

