<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', 'homeController@home')->name('site.home');

Route::post('/cadastrar', 'cadastroController@cadastrar');

Route::get('/login', 'LoginController@login')->name('site.login');

Route::post('/logar', 'LoginController@logar')->name('site.logar');


Route::group(['middleware' => ['Autentic']], function () {
    
    Route::get('/logout', 'loginController@logout')->name('site.logout');

    Route::get('/cursos', 'cursosController@cursos')->name('site.cursos');

}); 