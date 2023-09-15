<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Aqui é onde você pode registrar rotas da web para sua aplicação.
| Essas rotas são carregadas pelo RouteServiceProvider e todas elas serão
| atribuídas ao grupo de middleware "web". Faça algo incrível!
|
*/

// Página inicial
Route::get('/', function () {
    return view('welcome');
});

// Rota para registrar um novo usuário (página de registro)
Route::get('/register', 'Auth\CustomRegisterController@showRegistrationForm')->name('register');
Route::post('/register', 'Auth\CustomRegisterController@register');


// Rota para fazer login (página de login)
Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/login', 'Auth\LoginController@login');

// Rota para fazer logout
Route::post('/logout', 'Auth\LoginController@logout')->name('logout');

// Rota para visualizar o perfil do usuário
Route::get('/perfil/{id}', 'UserController@show')->name('perfil.show');

// Rota para editar o perfil do usuário (página de edição de perfil)
Route::get('/perfil/{id}/editar', 'UserController@edit')->name('perfil.edit');
Route::put('/perfil/{id}', 'UserController@update')->name('perfil.update');

// Outras rotas para correspondência, mensagens, etc.
