<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
    return view('landing');
})->name('landing');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/education', function () {
    return view('education');
})->name('education');


Route::get('/modul', function () {
    return view('module.modul');
})->name('modul');



Route::group(['prefix' => 'user'], function() {

    Route::get('login', [AuthController::class, 'formLogin'])->name('user.login');
    Route::post('login', [AuthController::class, 'login'])->name('user.login.submit');
    Route::get('logout', [AuthController::class, 'logout'])->name('user.logout');

    Route::group(['middleware' => 'auth'], function() {
            Route::get('/', function () {
                return view('user.dashboard');
            })->name('user.dashboard');
            Route::get('/module', function () {
                return view('module.modul');
            })->name('user.module');
        
     
    });
    

});