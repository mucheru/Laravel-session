<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
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

Route::view('login','login');
Route::post('/login', [LoginController::class, 'index']);
Route::post('/profile', [LoginController::class, 'index']);
Route::view('profile','profile');

Route::get('profile', function () {
    if(!session()->has('data'))
    {
       return redirect('login'); 
    }
    return view('profile');
});

Route::get('logout', [LoginController::class, 'logout']);







