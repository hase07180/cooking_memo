<?php

use GuzzleHttp\Middleware;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('menu', 'MenuController');
Route::group(['prefix' => 'menu', 'middleware' => 'auth'], function(){
    Route::get('/', 'MenuController@index')->name('menu.index');
    Route::get('create', 'MenuController@create')->name('menu.create');
    Route::post('store', 'MenuController@store')->name('menu.store');
    Route::get('show/{id}', 'MenuController@show')->name('menu.show');
});