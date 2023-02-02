<?php

use illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Auth;


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
Route::get('/diary/{id}/detail','HomeController@detail')->name('diaries.detail');
Route::get('/diary/create','RegistrationController@create')->name('diaries.create');
Route::get('/diary/{id}/edit','RegistrationController@edit')->name('diaries.edit');
Route::get('/diary/{id}','RegistrationController@destroy')->name('diaries.destroy');
