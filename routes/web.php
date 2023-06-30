<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;

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

/* CADASTRAR USUARIO */
Route::get('/cadastrar-usuario', "App\http\Controllers\UsuarioController@CadastrarUsuario");
Route::post('/salvar-usuario', "App\http\Controllers\UsuarioController@SalvarUsuario");

/* LOGAR */
Route::get('/form-login', 'App\http\Controllers\Auth\LoginController@showLoginForm')->name('login');
Route::post('/login', 'App\http\Controllers\Auth\LoginController@login');
Route::get('/logout', "App\http\Controllers\Auth\LoginController@logout");

// /* MIDDLEWARE */
// Route::group(['middleware' => ['meuMiddleware']], function () {});
// Route::get('/rota', 'App\http\Middleware\MeuMiddleware@handle')->middleware('meuMiddleware');

Route::middleware(['auth'])->group(function () {
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


});




// return view('');

Route::get('/', function () {
    return view('welcome');
});
