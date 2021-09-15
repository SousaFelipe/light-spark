<?php


use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Super\AuthController;
use App\Http\Controllers\Super\AdminController;
use App\Http\Controllers\Super\ProvedoresController;



Route::get('/', [Controller::class, 'wellcome'])->name('wellcome');



Route::prefix('/super')->name('super.')->group(function () {


    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/enter', [AuthController::class, 'enter'])->name('enter');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


    Route::prefix('/admin')->name('admin.')->middleware('auth')->group(function () {
        Route::get('/', [AdminController::class, 'admin'])->name('admin');


        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');


        Route::prefix('/provedores')->name('provedores.')->group(function () {
            Route::get('/', [AdminController::class, 'provedores']);

            Route::get('/listar', [ProvedoresController::class, 'listar']);
            Route::get('/buscar/{id}', [ProvedoresController::class, 'buscar']);
        });


        Route::get('/tokens', [AdminController::class, 'tokens'])->name('tokens');
        Route::get('/produtos', [AdminController::class, 'produtos'])->name('produtos');

    });
});
