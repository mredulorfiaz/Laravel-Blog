<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\NewsController;

// Route::get('/posts', function () {
//     // return view('welcome');
//     return view('posts.index');
// });


Route::get('/',function(){
    return view('home');
}) -> name('home');
Route::get('/dashboard', [DashboardController::class, 'index']) -> name('dashboard');

Route::get('/posts', [PostController::class, 'index']) -> name('posts');
Route::post('/posts', [PostController::class, 'store']);


Route::post('/logout', [LogoutController::class, 'store']) -> name('logout');


Route::get('/register', [RegisterController::class, 'index']) -> name('register');
Route::post('/register' , [RegisterController::class, 'store']);


Route::get('/login', [LoginController::class, 'index']) -> name('login');
Route::post('/login' , [LoginController::class, 'store']);

Route::get(
'/app',
function (){
    return view('layouts.app');
}
);

Route::get('/response', [NewsController::class, 'index']);\
Route::get('/shownews', [NewsController::class, 'showNews'])-> name('showNews');


Route::get('/news', [NewsController::class, 'save']);