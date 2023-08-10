<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MakeupbookController;
use App\Http\Controllers\MBookController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ClaintController;

use App\Models\M_book;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

 
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/category/{category}', [App\Http\Controllers\HomeController::class, 'category'])->name('category');
Route::get('/post/detals/{id}', [App\Http\Controllers\HomeController::class, 'show'])->name('post.detal');
Route::get('/categories/subcategory/{subcategory}', [HomeController::class , 'subcategory'])->name('category.subcategory');


Route::get('/books', [App\Http\Controllers\HomeController::class, 'books'])->name('books');
Route::get('/success', [App\Http\Controllers\HomeController::class, 'success'])->name('success');
Route::get('/book/detals/{id}', [App\Http\Controllers\HomeController::class, 'bookDetals'])->name('book.detal');

Route::get('/claint/{id}/create', [ClaintController::class, 'create'])->name('claint.create');
Route::post('/claint', [ClaintController::class, 'store'])->name('claint.store');

// Auth::routes();

Route::get('login', 'App\Http\Controllers\Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'App\Http\Controllers\Auth\LoginController@login');
Route::post('logout', 'App\Http\Controllers\Auth\LoginController@logout')->name('logout');


Route::middleware(['auth'])->group(function () {
    Route::resource('/post', PostController::class);
    Route::resource('/book', BookController::class);
    Route::get('claint', [ClaintController::class, 'index'])->name('claint.index');
    Route::get('/claint/{claint}', [ClaintController::class, 'show'])->name('claint.show');
    Route::get('/claint/{claint}/edit', [ClaintController::class, 'edit'])->name('claint.edit');
    Route::put('/claint/{claint}', [ClaintController::class, 'update'])->name('claint.update');
    Route::delete('/claint/{claint}', [ClaintController::class, 'destroy'])->name('claint.destroy');
   
});




