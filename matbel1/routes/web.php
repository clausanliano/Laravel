<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('/home', 'HomeController@index')->name('home');




Route::group(['middleware' => ['auth']], function() {
	
	Route::resource('permission','Permission\PermissionController');

	Route::resource('model_has_roles', 'ModelHasRoles\ModelHasRolesController')->except(['show']);

	Route::resource('roles','RoleController');
	Route::get('role_ajax', 'UserController@ajax')->name('user.ajax');

	Route::resource('users','UserController');
	Route::get('user_ajax', 'RoleController@ajax')->name('role.ajax');

	Route::resource('products','ProductController');
	


	Route::resource('localizacao', 'Localizacao\LocalizacaoController')->except(['show']);

	Route::resource('fabricante', 'Arma\FabricanteController')->except(['show']);

	Route::resource('opm', 'Opm\OpmController')->except(['show']);
	Route::get('opm_ajax', 'Opm\OpmController@ajax')->name('opm.ajax');

	Route::resource('unidade', 'Unidade\UnidadeController')->except(['show']);
	Route::get('unidade_ajax', 'Unidade\UnidadeController@ajax')->name('unidade.ajax');
	Route::get('unidade_nome_ajax', 'Unidade\UnidadeController@ajax')->name('unidade_nome.ajax');


	Route::resource('policial', 'Policial\PolicialController')->except(['show']);
	Route::get('policial_ajax', 'Policial\PolicialController@ajax')->name('policial.ajax');


	//Projeto matbel
	//Armas
	Route::resource('tipo_arma', 'Arma\TipoArmaController')->except(['show']);
	Route::resource('situacao', 'Arma\SituacaoController')->except(['show']);
	Route::resource('calibre', 'Arma\CalibreController')->except(['show']);

	Route::resource('modelo_arma', 'Arma\ModeloArmaController')->except(['show']);
	Route::get('modelo_arma_ajax', 'Arma\ModeloArmaController@ajax')->name('modelo_arma.ajax');
	Route::resource('arma', 'Arma\ArmaController')->except(['show']);
	Route::get('arma_ajax', 'Arma\ArmaController@ajax')->name('arma.ajax');

	//Coletes
	Route::resource('tamanho_colete', 'Colete\TamanhoColeteController')->except(['show']);
	Route::resource('genero_colete', 'Colete\GeneroColeteController')->except(['show']);
	Route::resource('nivel_colete', 'Colete\NivelColeteController')->except(['show']);
	Route::resource('situacao_colete', 'Colete\SituacaoColeteController')->except(['show']);
	Route::resource('colete', 'Colete\ColeteController')->except(['show']);
	Route::get('colete_ajax', 'Colete\ColeteController@ajax')->name('colete.ajax');

	//Disparos
	Route::resource('tipo_disparo', 'Disparo\TipoDisparoController')->except(['show']);
	Route::resource('tipo_municao', 'Disparo\TipoMunicaoController')->except(['show']);
	Route::resource('disparo', 'Disparo\DisparoController')->except(['show']);
	Route::resource('policial_sisautarm', 'Policial\PolicialSisautarmController')->except(['show']);

	//Cautelas
	Route::resource('cautela', 'Cautela\CautelaController')->except(['show']);
	Route::get('cautela_ajax', 'Cautela\CautelaController@ajax')->name('cautela.ajax');

	
});
