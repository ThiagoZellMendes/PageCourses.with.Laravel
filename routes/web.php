<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;


Route::get('/', 'homeController@home')->name('site.home');

Route::get('/home', 'homeController@home')->name('site.home');

Route::post('/cadastrar', 'cadastroController@cadastrar')->name('site.cadastrar');

Route::get('/login', 'LoginController@login')->name('site.login');

Route::post('/logar', 'LoginController@logar')->name('site.logar');


Route::group(['middleware' => ['Autentic']], function () {
    
    Route::get('/logout', 'loginController@logout')->name('site.logout');

    Route::get('/cursos', 'cursosController@cursos')->name('site.cursos');

}); 