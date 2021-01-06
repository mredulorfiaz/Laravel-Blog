<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;

Route::get('/posts', function () {
    // return view('welcome');
    return view('posts.index');
});

Route::get('/register', [RegisterController::class, 'index']) -> name('register');
Route::post('/register' , [RegisterController::class, 'store']);

Route::get(
'/app',
function (){
    return view('layouts.app');
}
);
