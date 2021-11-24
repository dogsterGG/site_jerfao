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

Route::get('/', 'MainController@principal')->name('site.index');

Route::get('/sobre-nos', 'AboutController@sobrenos')->name('site.sobrenos');

Route::get('/contato', 'ContactController@contato')->name('site.contato');

Route::get('/login', function(){echo 'Logado não está:';})->name('site.login');


Route::get('/teste','MainController@teste')->name('site.teste');



Route::prefix('/app')->group(function(){
    Route::get('/login', function(){
        return view('site.autenticacao');
    })->name('app.login');
    Route::get('/login/{usermail?}/{userpass?}','AuthController@login')->name('app.auth');
    Route::get('/clientes', function(){return 'clientes';})->name('app.clientes');
    Route::get('/fornecedores', function(){return 'fornecedores';})->name('app.fornecedores');
    Route::get('/produtos', function(){return 'produtos';})->name('app.produtos');
});
Route::fallback(function(){
    echo 'A página acessada não existe. Clique <a href="'.route('site.index').'">aqui</a> para ir para retornar à página principal.';
});