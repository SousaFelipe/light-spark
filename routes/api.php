<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\API\V1\AuthController;
use App\Http\Controllers\API\V1\ProvedoresController;



Route::prefix('/v1')->group(function () {


    Route::prefix('/auth')->name('auth.')->group(function () {
        Route::get('/csrf', [AuthController::class, 'csrf'])->name('csrf');
        Route::get('/user', [AuthController::class, 'user'])->name('user');
    });

    Route::get('/provedores/read', [ProvedoresController::class, 'read']);
    Route::get('/provedores/ativos', [ProvedoresController::class, 'ativos'])->name('provedores.ativos');
    Route::get('/provedores/tokens', [ProvedoresController::class, 'tokens'])->name('provedores.tokens');


});
