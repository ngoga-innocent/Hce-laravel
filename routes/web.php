<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AddUserController;
use App\Http\controllers\usercontroller;
use App\Http\Controllers\HomeController;
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
Route::get('/form', function () {
    return view('form');
});

Auth::routes();

Route::resource('/home', usercontroller::class);

Route::Post('/addUser',[AddUserController::class, 'addUser'])->name('adduser');
Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
Route::get('/home', [AddUserController::class, 'searchUser'])->name('search');

// Route::get('autocomplete', [AddUserController::class, 'autocomplete'])->name('autocomplete');
