<?php

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BookController;

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

Route::middleware('auth')->group(function(){
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});

Route::middleware('isAdmin')->group(function(){
    Route::get('admin/home', [HomeController::class, 'adminIndex'])->name('admin.home')->middleware('isAdmin');
    Route::get('admin/books', [BookController::class, 'adminBookIndex'])->name('admin.books.index')->middleware('isAdmin');
    Route::get('admin/books/create', [BookController::class, 'adminBookCreate'])->name('admin.books.create')->middleware('isAdmin');
    Route::post('admin/books', [BookController::class, 'adminBookStore'])->name('admin.books.store')->middleware('isAdmin');
    Route::get('admin/{book:isbn}/edit', [BookController::class, 'adminBookEdit'])->name('admin.books.edit')->middleware('isAdmin');
    Route::put('admin/{book:isbn}', [BookController::class, 'adminBookUpdate'])->name('admin.books.update')->middleware('isAdmin');
});

