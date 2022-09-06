<?php

use App\Http\Controllers\BairroController;
use App\Http\Controllers\CidadeController;
use App\Http\Controllers\ImovelController;
use App\Http\Controllers\UfController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('uf', UfController::class);
Route::get('ajax/uf', [ UfController::class , 'ajax'])->name('uf.ajax');


Route::resource('cidade', CidadeController::class);
Route::resource('bairro', BairroController::class);
Route::resource('imovel', ImovelController::class);
