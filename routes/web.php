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

Route::get('/login', function(){return 'login';})->name('site.login');

Route::prefix('/app')->group(function(){
    Route::get('/login', function(){return 'Login interno';})->name('app.login');
    Route::get('/clientes', function(){return 'clientes';})->name('app.clientes');
    Route::get('/fornecedores', function(){return 'fornecedores';})->name('app.fornecedores');
    Route::get('/produtos', function(){return 'produtos';})->name('app.produtos');
});

Route::get('/logout', function(){
    
    return redirect()->route('site.volte');
    //Route::redirect('logout', 'voltesempre');

})->name('site.logout');

Route::get('/voltesempre', function(){return 'Volte sempre!';})->name('site.volte');
