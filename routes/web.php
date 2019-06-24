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
//Route::get('/', function () {
//    return view('welcome');
//});
Auth::routes();
Route::redirect('/', 'first/');
Route::get('first/', 'FirstController@index');
Route::get('main/', 'FirstController@categories');
//Route::get('login/', 'FirstController@loginIn');
Route::get('product/', 'CategoryController@index');
Route::get('product/delete/{id}','ProductController@destroy');
Route::get('product/new/', 'ProductController@new');
Route::get('product/insert/{id}/{name}/{price}/{code}/', 'ProductController@store');

Route::get('product/edit/{id}', 'ProductController@edit');
Route::get('product/edit/{productID}/{categoryID}/{name}/{price}/{code}', 'ProductController@update');

Route::get('/home', 'HomeController@index')->name('home');
