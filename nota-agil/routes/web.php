<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\NotaController;
use App\Http\Controllers\ProdutoController;
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
        Route::get('/notas/create', 'create')->name('notas.create');
        Route::get('/notas', 'index')->name('notas.index');

        Route::get('/notas/show/{nota}', 'show')->name('notas.show');

        Route::get('/notas/download/{nota}', 'download')->name('notas.download');
        
        Route::get('/notas/delete/{nota}', 'destroy')->name('notas.delete');
    });

    Route::controller(ProfileController::class)->group(function () {
        Route::get('/profile', 'show')->name('profile');
        Route::post('/profile', 'update')->name('profile.update');
        Route::post('/profile/delete', 'destroy')->name('profile.delete');
    });


    Route::controller(ProdutoController::class)->group(function () {
        Route::get('/produtos', 'index')->name('produtos.index');

        Route::get('/produtos/create', 'create')->name('produtos.create');
        Route::post('/produtos', 'store')->name('produtos.store');

        Route::get('/produtos/edit/{produto}', 'edit')->name('produtos.edit');
        Route::post('/produtos/update/{produto}', 'update')->name('produtos.update');

        Route::get('/produtos/delete/{produto}', 'destroy')->name('produtos.delete');
    });


    Route::controller(CategoriaController::class)->group(function () {
        Route::get('/categorias', 'index')->name('categorias.index');

        Route::get('/categorias/create', 'create')->name('categorias.create');
        Route::post('/categorias', 'store')->name('categorias.store');

        Route::get('/categorias/edit/{categoria}', 'edit')->name('categorias.edit');
        Route::post('/categorias/update/{categoria}', 'update')->name('categorias.update');

        Route::get('/categorias/delete/{categoria}', 'destroy')->name('categorias.delete');
    });

    Route::get('/dashboard', function () {
        return view('dashboard',['notas'=>\App\Models\Nota::latest()->cursorPaginate(8)]);
    })->name('dashboard');
});
