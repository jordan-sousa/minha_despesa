<?php

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
/* CATEGORIA */
Route::get('/cadastrar-categorias', "App\http\Controllers\CategoriaController@CadastrarCategoria");
Route::post('/save-categoria', "App\Http\Controllers\CategoriaController@SaveCategoria");
Route::get('/listar-categoria', "App\Http\Controllers\CategoriaController@ListarCategoria");
Route::get('/delete-categoria/{id}', "App\Http\Controllers\CategoriaController@DeleteCategoria");

/* DESPESAS */
Route::get('/cadastrar-despesa', "App\http\Controllers\DespesasController@CadastrarDespesa");
Route::post('/save-despesa', "App\http\Controllers\DespesasController@SalvarDespesa");
Route::get('/listar-despesa', "App\http\Controllers\DespesasController@ListarDespesa");
Route::get('/delete-despesa/{id}', "App\http\Controllers\DespesasController@DeleteDespesa");
Route::get('/atualizar-despesa/{id}', "App\http\Controllers\DespesasController@AtualizarDespesa");
Route::post('/editar-despesa/{id}', "App\http\Controllers\DespesasController@EditarDespesa");







// Route::get('/buscar-tarefas', "App\Http\Controllers\TarefaController@listarTarefas");
// return view('');

Route::get('/', function () {
    return view('welcome');
});
