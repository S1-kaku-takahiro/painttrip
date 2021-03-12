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
    return view('welcome');
});

Route::group(['prefix' => 'contrib', 'middleware' => 'auth'], function() {
    Route::get('article/create', 'Contrib\ArticleController@add');
    Route::post('article/create', 'Contrib\ArticleController@create');
    Route::get('article/show', 'Contrib\ArticleController@show');
    
    Route::get('profile/create', 'Contrib\ProfileController@add');
    Route::post('profile/create', 'Contrib\ProfileController@create');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
