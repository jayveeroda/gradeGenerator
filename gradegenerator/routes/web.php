<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegistrationController;

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

Route::group(
    ['middleware' => 'prevent-back-history'],
    function () {
        Route::get('/', [AuthController::class, 'index'])->name('home');
        Route::post('login', [AuthController::class, 'login'])->name('auth.login');
        Route::get('logout', [AuthController::class, 'logout'])->name('auth.logout');
        Route::resource('user', RegistrationController::class);
    }
);
