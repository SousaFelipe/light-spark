<?php


use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Super\AuthController;
use App\Http\Controllers\Super\AdminController;
use App\Http\Controllers\Super\ProvedoresController;
use App\Http\Controllers\Super\TokensController;



Route::get('/', [Controller::class, 'wellcome'])->name('wellcome');



Route::prefix('/super')->name('super.')->group(function () {


    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/enter', [AuthController::class, 'enter'])->name('enter');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


    Route::prefix('/admin')->name('admin.')->middleware('auth')->group(function () {
        Route::get('/', [AdminController::class, 'admin'])->name('admin');


        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');


        Route::prefix('/provedores')->name('provedores.')->group(function () {
            Route::get('/', [AdminController::class, 'provedores'])->name('index');
            Route::get('/detalhes/{id}', [ProvedoresController::class, 'detalhes'])->name('detalhes');

            Route::get('/listar', [ProvedoresController::class, 'listar']);
            Route::get('/buscar/{id}', [ProvedoresController::class, 'buscar']);
        });


        Route::prefix('/tokens')->name('tokens.')->group(function () {
            Route::get('/listar/{provedor}', [TokensController::class, 'listar']);

        });

        Route::get('/produtos', [AdminController::class, 'produtos'])->name('produtos');

    });
});
