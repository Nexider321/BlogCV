<?php

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

Route::get(  '/post/{slug}', [\App\Http\Controllers\PostController::class, 'show'])->name('post.show');



Route::get('/news', function () {
    return view('news-details');
});


Route::get('/test', function () {
    return view('test', ['name' => 'samantha']);
});


