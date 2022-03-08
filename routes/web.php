<?php

use Illuminate\Support\Facades\Auth;
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
    return view('auth.login');
});
Auth::routes();

Route::group(['prefix' => 'admin', 'middleware' => 'admin', 'namespace' => 'Admin'], function (){
    Route::get('/index', 'AdminController@index')->name('index');
    Route::get('/create-cbms', 'CreateController@index')->name('index');
    Route::get('/list-cbms', 'ListController@index')->name('index');
});

Route::group(['prefix' => 'manager', 'middleware' => 'manager', 'namespace' => 'Manager'], function (){
    Route::get('/index', 'ManagerController@index')->name('index');
});

Route::group(['prefix' => 'user', 'middleware' => 'user', 'namespace' => 'Users'], function (){
    Route::get('/index', 'UserController@index')->name('index');
});




