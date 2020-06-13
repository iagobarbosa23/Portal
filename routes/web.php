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

/*Route::get('/', function () {
    return view('welcome');
});*/

//Login

use Illuminate\Support\Facades\Route;

Route::get('/', ['as' => 'login', 'uses' => 'Controller\LoginController@index']);
Route::get('info', ['as' => 'info', 'uses' => 'Controller\LoginController@info']);
Route::get('inactive', ['as' => 'inactive', 'uses' => 'Controller\LoginController@inactive']);
Route::get('verifica/dados', ['as' => 'verifica.dados', 'uses' => 'Controller\UserController@verificaDadosAjax']);
//Route::post('/login/entrar', ['as' => 'login.entrar', 'uses' => 'Controller\LoginController@entrar']);

##################################### SISTEMA - CARTA DE SERVIÇO #####################################
$this->group(['namespace' => 'Controller', 'middleware' => 'auth'], function () {
    
    //Home
    Route::get('home', ['as' => 'home.index', 'uses' => 'HomeController@index']);
   
    //Route::get('home/dados/servico', ['as' => 'home.dados.servico', 'uses' => 'HomeController@dadosServico']);

   

    //Perfil de Acesso
    Route::get('perfil_acesso', ['as' => 'perfil_acesso.index', 'uses' => 'PerfilAcessoController@index']);
    Route::get('perfil_acesso/tabela', ['as' => 'perfil_acesso.tabela', 'uses' => 'PerfilAcessoController@tabelaAjax']);
    Route::post('perfil_acesso/insert', ['as' => 'perfil_acesso.insert', 'uses' => 'PerfilAcessoController@insert']);
    Route::put('perfil_acesso/update/{id}', ['as' => 'perfil_acesso.update', 'uses' => 'PerfilAcessoController@update']);
    Route::post('perfil_acesso/delete/{id}', ['as' => 'perfil_acesso.delete', 'uses' => 'PerfilAcessoController@delete']);
    
    //Perfil Permissão
    Route::get('perfil_permissao/{id}', ['as' => 'perfil_permissao.index', 'uses' => 'PerfilPermissaoController@index']);
    Route::post('perfil_permissao/insert', ['as' => 'perfil_permissao.insert', 'uses' => 'PerfilPermissaoController@insertPermissao']);
    Route::post('perfil_permissao/delete/{id}', ['as' => 'perfil_permissao.delete', 'uses' => 'PerfilPermissaoController@delete']);
    

    //Perfil de acesso para usuário
    Route::post('servico/insert/perfiluser', ['as' => 'user.insert.perfil', 'uses' => 'PerfilUserController@insertPerfilUser']);
    Route::post('servico/delete/perfiluser/{id}', ['as' => 'user.delete.perfil', 'uses' => 'PerfilUserController@deletePerfilUser']);
    Route::get('servico/dados/perfilacesso', ['as' => 'user.dados.perfilacesso', 'uses' => 'PerfilUserController@dadosPerfilAcessoAjax']);
    
    //Cadastro de Funções
    Route::get('funcao', ['as' => 'funcao.index', 'uses' => 'FuncaoController@index']);
    Route::get('funcao/tabela', ['as' => 'funcao.tabela', 'uses' => 'FuncaoController@tabelaAjax']);
    Route::post('funcao/insert', ['as' => 'funcao.insert', 'uses' => 'FuncaoController@insert']);
    Route::put('funcao/update/{id}', ['as' => 'funcao.update', 'uses' => 'FuncaoController@update']);
    Route::post('funcao/delete/{id}', ['as' => 'funcao.delete', 'uses' => 'FuncaoController@delete']);

   //MEU PERFIL
   Route::get('perfil', ['as' => 'meu.perfil', 'uses' => 'MeuPerfilController@index']);
   Route::get('verifica/alterar/senha', ['as' => 'verifica.alterar.senha', 'uses' => 'MeuPerfilController@verificaSenhaAtual']);
   Route::post('alterar/senha', ['as' => 'alterar.senha', 'uses' => 'MeuPerfilController@alterarSenha']); 
   Route::post('recadast_suprev/comprovante/view', ['as' => 'recad_suprev.comprovante.see', 'uses' => 'ServidorController@showComprovante']); 
   

 //Rota alterar senha de usuário
 Route::post('alterar/senha_usuario', ['as' => 'alterar.senha.usuario', 'uses' => 'MeuPerfilController@alterarSenhaUsuario']); 
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
