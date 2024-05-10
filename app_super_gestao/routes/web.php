<?php

use App\Http\Controllers\CadastroController;
use App\Http\Controllers\LoginController;
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

Route::get('/', 'PrincipalController@principal')->name('site.index');

Route::get('/sobre-nos', 'SobreNosController@sobreNos')->name('site.sobrenos');

Route::get('/contato', 'ContatoController@contato')->name('site.contato');

Route::post('/contato','ContatoController@contato')->name('site.contato');

Route::get('/login', [LoginController::class, 'loginPage'])->name('site.login');

Route::post('/login', [LoginController::class, 'login'])->name('site.login');

Route::get('/cadastro', [CadastroController::class, 'cadastroPage'])->name('site.cadastro');

Route::post('/cadastro', [CadastroController::class, 'cadastro'])->name('site.cadastro');


Route::prefix('/app')->group(function(){
    Route::get('/clientes', 'ClientesController@index')->name('app.clientes');
    Route::get('/fornecedores', 'FornecedorController@index')->name('app.fornecedores');
    Route::get('/produtos', 'ProdutosController@index')->name('app.produtos');
});

//Route::get('/teste/{p1}/{p2}', 'TesteController@teste')->name('site.teste');

Route::fallback(function() {
    echo 'A rota acessada não existe. <a href="'.route('site.index').'">clique aqui</a> para ir para página inicial';
});
