<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\EtteremController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Models\User;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//regisztáció
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'registerPost'])->name('register');

//bejelentkezés
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginPost'])->name('login');

//kijelentkezés
Route::get('/logout', [AuthController::class, 'logout']) ->name('logout');

//admin felület
Route::get('/admin', [AdminController::class, 'adminPage']) ->name('admin');
Route::get('/delete/{id}',[AdminController::class, 'deleteUser'])->name('delete');

//felhasználó felület
Route::get('/profile', [UserController::class, 'userPage']) ->name('profile');
Route::post('/update', [UserController::class, 'userUpdate'])-> name('update');
Route::post('/updatePWD',[UserController::class, 'userUpdatePWD'])->name('updatePWD');
Route::post('/updatePic', [UserController::class, 'updatePic'])-> name('updatePic');

Route::get('/ettermek', [EtteremController::class, 'etteremPage'])->name('ettermek');