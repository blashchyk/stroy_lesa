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
Route::group(['middleware' =>'web'], function() {
    Route::match(['get', 'post'], '/',['uses'=>'IndexController@execute', 'as'=>'home']);
    Route::match(['get','post'], '/news',['uses'=>'NewsController@execute', 'as'=>'news']);
    Route::match(['get','post'], '/lesa', ['uses'=>'LesaController@execute', 'as'=>'lesa']);
    Route::match(['get', 'post'], '/tower',['uses'=>'TowerController@execute', 'as'=>'tower']);
    Route::group(['middleware'=>'auth'], function() {
    Route::match(['get', 'post'], '/admin',['uses'=>'AdminController@execute', 'as'=>'admin']);
});
});
Auth::routes();


// Route::get('/home', 'HomeController@index')->name('home');
