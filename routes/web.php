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
Route::get('createuser',[UserRegistration::class, 'getdepartments']);

Route::view('login','login');
Route::post('/login', [LoginController::class, 'index']);
Route::post('/profile', [LoginController::class, 'index']);
Route::post('register', [UserRegistration::class, 'index']);
//Route::get('departmentdetails', [UserRegistration::class, 'getdepartments']);
Route::get('logout', [LoginController::class, 'logout']);
/*Commented because Steve could not understand why profile route should be sucessful without login*/
//Route::view('profile','profile');
Route::view('createDepartment','createDepartment');
Route::post('department', [UserRegistration::class, 'department']);
Route::get('/users', [UserRegistration::class, 'getuser']);
Route::get('/export', [UserRegistration::class, 'exportdata']);
Route::get('/viewdepartment', [UserRegistration::class, 'displayDepartment']);
Route::get('/pdf', [UserRegistration::class, 'gen']);





Route::group(['middleware'=>['CustomAuth']], function(){
    //Route::view('profile','profile');
    Route::post('/profile', [LoginController::class, 'index']);


});







