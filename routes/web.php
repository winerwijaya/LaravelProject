<?php

use App\Http\Controllers\googleController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\userController;
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

Route::get('/', [homeController::class, 'index'])->middleware('guest');

Route::get('/register',  [registerController::class, 'index'])->middleware('guest');
Route::post('/register/regis',  [registerController::class, 'regis'])->middleware('guest');

Route::get('/login',  [loginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login/login',  [loginController::class, 'login']);
Route::get('/logout',  [loginController::class, 'logout'])->middleware('auth');

Route::get('/user', [userController::class, 'index'])->middleware('auth');
Route::get('/cariJodoh/{gender}', [userController::class, 'cariJodoh'])->middleware('auth');
Route::get('/editProfile', [userController::class, 'edit'])->middleware('auth');
Route::put('/update', [userController::class, 'update'])->middleware('auth');

Route::get('/manageUser', [userController::class, 'manageUser'])->middleware('admin');
Route::get('/deleteUser/{id}', [userController::class, 'deleteUser'])->middleware('admin');
