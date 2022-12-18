<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/', [AuthController::class, 'index'])->name('home');
Route::group(
    ['middleware' => 'prevent-back-history'],
    function () {
        Route::get('/', function () {
            return view('index');
        })->name('home');
        Route::post('login', [AuthController::class, 'login'])->name('auth.login');
        Route::get('logout', [AuthController::class, 'logout'])->name('auth.logout');
        Route::get('dashboard', [AuthController::class, 'dashboard']);
        Route::resource('user', RegistrationController::class);
    }
);
