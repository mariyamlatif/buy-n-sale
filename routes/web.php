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
Route::get('/product', 'ProductController@create');
Route::post('/showproduct', 'SellController@show');

Route::resource('product','ProductController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/buy', 'BuyController@index');
Route::get('/sell', 'SellController@index');
Route::get('/user', 'UserController@index');
Route::get('/item', 'ItemController@index');

Route::get('/loginfailed', function () {
    return view('auth.login');
});
Route::post('/login/custom',[
  'uses'=> 'LoginController@login',
  'as'=> 'login.custom',

]);
Route::get('/home',[
  'uses'=> 'LoginController@home',
  'as'=> 'home',

]);
Route::get('/dashboard',[
  'uses'=> 'LoginController@dashboard',
  'as'=> 'dashboard',

]);