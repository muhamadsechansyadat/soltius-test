<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mst\MerkController;
use App\Http\Controllers\mst\TipeController;
use App\Http\Controllers\trn\STNKController;
use App\Http\Controllers\trn\STNKBiayaController;

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

Route::group(['prefix' => 'mst'], function () {
    Route::group(['prefix' => 'merk'], function () {
        Route::get('/', [MerkController::class, 'index'])->name('merk.index');
        Route::get('/create', [MerkController::class, 'create'])->name('merk.create');
        Route::post('/store', [MerkController::class, 'store'])->name('merk.store');
        Route::get('/edit/{id}', [MerkController::class, 'edit'])->name('merk.edit');
        Route::patch('/update/{id}', [MerkController::class, 'update'])->name('merk.update');
        Route::get('/delete/{id}', [MerkController::class, 'delete'])->name('merk.delete');
    });

    Route::group(['prefix' => 'tipe'], function () {
        Route::get('/', [TipeController::class, 'index'])->name('tipe.index');
        Route::get('/create', [TipeController::class, 'create'])->name('tipe.create');
        Route::post('/store', [TipeController::class, 'store'])->name('tipe.store');
        Route::get('/edit/{id}', [TipeController::class, 'edit'])->name('tipe.edit');
        Route::patch('/update/{id}', [TipeController::class, 'update'])->name('tipe.update');
        Route::get('/delete/{id}', [TipeController::class, 'delete'])->name('tipe.delete');
    });
});

Route::group(['prefix' => 'trn'], function () {
    Route::group(['prefix' => 'stnk'], function () {
        Route::get('/', [STNKController::class, 'index'])->name('stnk.index');
        Route::get('/create', [STNKController::class, 'create'])->name('stnk.create');
        Route::post('/store', [STNKController::class, 'store'])->name('stnk.store');
        Route::get('/edit/{id}', [STNKController::class, 'edit'])->name('stnk.edit');
        Route::patch('/update/{id}', [STNKController::class, 'update'])->name('stnk.update');
        Route::get('/delete/{id}', [STNKController::class, 'delete'])->name('stnk.delete');
    });

    Route::group(['prefix' => 'stnk-biaya'], function () {
        Route::get('/{id}', [STNKBiayaController::class, 'index'])->name('stnk-biaya.index');
        Route::get('/create/{id}', [STNKBiayaController::class, 'create'])->name('stnk-biaya.create');
        Route::post('/store/{id}', [STNKBiayaController::class, 'store'])->name('stnk-biaya.store');
        Route::get('/edit/{id}/{newid}', [STNKBiayaController::class, 'edit'])->name('stnk-biaya.edit');
        Route::patch('/update/{id}/{newid}', [STNKBiayaController::class, 'update'])->name('stnk-biaya.update');
        Route::get('/delete/{id}/{newid}', [STNKBiayaController::class, 'delete'])->name('stnk-biaya.delete');
    });
});
