<?php

use App\Http\Controllers\MakeupbookController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ClaintController;

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
Route::get('/claint/create', [ClaintController::class, 'create'])->name('claint.create');
Route::post('/claint', [ClaintController::class, 'store'])->name('claint.store');



Route::get('login', 'App\Http\Controllers\Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'App\Http\Controllers\Auth\LoginController@login');
Route::post('logout', 'App\Http\Controllers\Auth\LoginController@logout')->name('logout');


Route::middleware(['auth'])->group(function () {
    Route::resource('/post', PostController::class);
    Route::resource('/book', MakeupbookController::class);
    Route::get('claint', [ClaintController::class, 'index'])->name('claint.index');
    Route::get('/claint/{claint}', [ClaintController::class, 'show'])->name('claint.show');
    Route::get('/claint/{claint}/edit', [ClaintController::class, 'edit'])->name('claint.edit');
    Route::put('/claint/{claint}', [ClaintController::class, 'update'])->name('claint.update');
    Route::delete('/claint/{claint}', [ClaintController::class, 'destroy'])->name('claint.destroy');
   
});




