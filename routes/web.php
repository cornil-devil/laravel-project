<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\OrderController;
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

Auth::routes();
Route::get('/cart', [OrderController::class, 'index'])->name('cart');
Route::get('/order/{order}', [OrderController::class, 'store'])->name('order');
Route::post('/updateBook/{book}', [BookController::class, 'update'])->name('updateBook');
Route::post('/addBook', [BookController::class, 'store'])->name('addBook');
Route::get('/show/{book}', [BookController::class, 'edit'])->name('show');
Route::get('/home/book', [BookController::class, 'index'])->name('index');
Route::get('/home', [BookController::class, 'index'])->name('home');
