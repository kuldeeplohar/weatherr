<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserLoginController;
use App\Http\Controllers\ReportController;
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
Route::get('/register', function () {
    return view('register');
});
Route::get('/dash', function () {
    return view('alrt');
});

Route::get('/index', [UserLoginController::class, 'index']);
Route::get('/create', [UserLoginController::class, 'index']);
Route::post('/store', [UserLoginController::class, 'store'])->name('register.store');
Route::post('/login', [UserLoginController::class, 'login'])->name('login.store');
Route::get('/logout', [UserLoginController::class, 'logOut']);

Route::get('/api', [ReportController::class, 'getData'])->name('cityy')->middleware('auth');


