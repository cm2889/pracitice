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
Route::view('about', 'about')->name('about');
Route::view('contact', 'contact')->name('contact');
Route::get('contact','ContactFromController@create');

Route::post('contact','ContactFromController@store');






/*Route::get('customer','CustomersController@index');
Route::get('customer/create','CustomersController@create');
Route::post('customer','CustomersController@store');
Route::get('customer/{customer}','CustomersController@show');
Route::get('customer/{customer}/edit','CustomersController@edit');
Route::patch('customer/{customer}','CustomersController@update');
Route::delete('customer/{customer}','CustomersController@destroy');*/


Route::resource('customer','CustomersController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
