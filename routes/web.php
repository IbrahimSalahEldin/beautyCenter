<?php

use App\Http\Controllers\PostController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/category/{category}', [App\Http\Controllers\HomeController::class, 'category'])->name('category');
Route::get('/post/detals/{id}', [App\Http\Controllers\HomeController::class, 'show'])->name('post.detal');



Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::resource('/post', PostController::class)->middleware('auth');
});




