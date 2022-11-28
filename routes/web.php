<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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
Route::get('/', [\App\Http\Controllers\HomeController::class, 'index']);

Route::get('/portfolio', function () {
    return view('portfolio-details');
});

Route::get(  '/post', function () {
    return view('post');
});

Route::get(  '/post/{id}', [\App\Http\Controllers\PostController::class, 'show'])->name('post.show');

Route::get('/edit/{id}', [\App\Http\Controllers\AdminController::class, 'edit']);

Route::patch('/dashboard/{id}', [\App\Http\Controllers\AdminController::class, 'update']);

Route::get('/posts', [\App\Http\Controllers\PostController::class, 'index']);

Route::get('/news', function () {
    return view('news-details');
});




Route::get('/link', function () {
    Artisan::call('storage:link');
});

Route::resource('/dashboard', \App\Http\Controllers\AdminController::class );

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
