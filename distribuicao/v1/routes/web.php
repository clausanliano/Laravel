<?php

use App\Http\Controllers\OpmController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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


/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', [App\Http\Controllers\EfetivoGeralController::class, 'index'])->name('selecao_geral.listar');

Route::get('/home', [App\Http\Controllers\EfetivoGeralController::class, 'index'])->name('nome');

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resource('opms', OpmController::class);

Route::get('/selecao_por_sexo', [App\Http\Controllers\EfetivoPorSexoController::class, 'index'])->name('selecao_por_sexo.listar');
Route::get('/selecao_por_sexo/acrescentar/{opm_id}/{policial_id}', [App\Http\Controllers\EfetivoPorSexoController::class, 'acrescentar'])->name('selecao_por_sexo.acrescentar');
Route::put('/selecao_por_sexo/confirmar/{opm_id}/{policial_id}', [App\Http\Controllers\EfetivoPorSexoController::class, 'confirmar'])->name('selecao_por_sexo.confirmar');




Route::get('/selecao_geral', [App\Http\Controllers\EfetivoGeralController::class, 'index'])->name('selecao_geral.listar');
Route::get('/selecao_geral/acrescentar/{opm_id}/{policial_id}', [App\Http\Controllers\EfetivoGeralController::class, 'acrescentar'])->name('selecao_geral.acrescentar');
Route::put('/selecao_geral/confirmar/{opm_id}/{policial_id}', [App\Http\Controllers\EfetivoGeralController::class, 'confirmar'])->name('selecao_geral.confirmar');


