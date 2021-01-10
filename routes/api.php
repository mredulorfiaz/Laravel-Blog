<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Country;

use App\Http\Controllers\CountryController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/create-user', function(){
    User::create([
        'username' => 'testUser',
        'name' => 'Mredul',
        'email' => 'mredul@m.com',
        'password' => Hash::make('abc@123')
    ]);
});


Route::post('/login', function(){
    $credentials = request()->only(['email', 'password']); 
    $token = auth()->attempt($credentials);
    if(!$token){
        return "Check Your Credentials";
    }
    return $token;

});


Route::middleware('auth:api')->get('/me', function() {
    return auth()->user();
});


Route::middleware('auth:api')->post('addCountry', function(Request $request){
    Country::create([
        "countryName" => $request->countryName,
        "population" => $request->population
    ]);

    return "Data Added Successfully";
});