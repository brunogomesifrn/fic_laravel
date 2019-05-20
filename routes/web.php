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

Route::get('/', function () {
    return view('index');
});


// Rotas de Autenticação

Auth::routes();

Route::get('/autenticacao', function () {
    return view('login');
})->name('autenticacao');

Route::get('/desconectar', function () {
    Auth::logout();
    return view('index');
});


Route::get('/home', 'HomeController@index')->name('home');


// Rotas de Gerais

Route::get('/cadastro', function () {
    return view('cadastro');
});

Route::get('/cursos', function () {
    return view('cursos');
});


// Rotas de Perfil

Route::prefix('perfil')->group(function () {
    Route::get('/', 'PerfilControlador@index')->middleware('auth');
});

Route::get('/perfil_areas', function () {
    return view('perfil_areas');
});

Route::get('/perfil_area_cadastro', function () {
    return view('perfil_area_cadastro');
});

Route::get('/perfil_publicos', function () {
    return view('perfil_publicos');
});

Route::get('/perfil_publico_cadastro', function () {
    return view('perfil_publico_cadastro');
});

Route::get('/perfil_cursos', function () {
    return view('perfil_cursos');
});

Route::get('/perfil_curso_cadastro', function () {
    return view('perfil_curso_cadastro');
});

Route::get('/perfil_dados', function () {
    return view('perfil_dados');
});

Route::get('/perfil_inscricoes', function () {
    return view('perfil_inscricoes');
});