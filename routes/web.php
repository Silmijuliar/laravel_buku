<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BooksController;

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

Route::get('/',[BooksController::class,'index']);
Route::resource('index',BooksController::class);

Route::get('back', [BooksController::class, 'back']);
Route::resource('back', BooksController::class);

Route::get('create', [BooksController::class, 'create']);

Route::post('insert', [BooksController::class, 'insert']);

Route::get('delete/{kode_buku}', [BooksController::class, 'delete']);

Route::get('edit/{kode_buku}', [BooksController::class, 'edit']);
// Route::resource('edit', [BooksController::class, 'edit'z]);

Route::post('update/{kode_buku}', [BooksController::class, 'update']);

Route::get('read/{kode_buku}', [BooksController::class, 'read']);

