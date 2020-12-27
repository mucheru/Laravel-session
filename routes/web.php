<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserRegistration;
//namespace App\Http\Controllers;


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
Route::view('createuser','createUser');

Route::view('login','login');
Route::post('/login', [LoginController::class, 'index']);
Route::post('/profile', [LoginController::class, 'index']);
Route::post('register', [UserRegistration::class, 'index']);

Route::get('profile', function () {
   
});

Route::get('logout', [LoginController::class, 'logout']);
Route::view('profile','profile');


/*Route::group(['middleware'=>['CustomAuth']], function(){
    Route::view('profile','profile');



});*/







