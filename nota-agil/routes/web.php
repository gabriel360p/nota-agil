<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\NotaController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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
    return view('auth.login');
});

Route::controller(AuthController::class)->group(function () {
    Route::get('/login', 'loginPage')->name('login.page');
    Route::get('/register', 'registerPage')->name('register.page');

    Route::post('/login', 'login')->name('login.function');
    Route::post('/register', 'register')->name('register.function');


    Route::get('/logout', 'logout')->name('logout.function');
});



Route::middleware('auth')->group(function () {
    Route::controller(NotaController::class)->group(function () {
        Route::post('/notas', 'store')->name('notas.store');
        Route::get('/notas', 'create')->name('notas.create');
    });

    Route::controller(ProfileController::class)->group(function () {
        Route::get('/profile', 'show')->name('profile');
        Route::post('/profile', 'update')->name('profile.update');
        Route::post('/profile/delete', 'destroy')->name('profile.delete');
    });

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
