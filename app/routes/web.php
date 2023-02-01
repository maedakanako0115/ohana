<?php

use illuminate\Support\Facades\Route;
use App\Http\Controllers\DisplayController;
use App\Http\Controllers\RegistrationController;

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
Route::get('/main_guest', [DisplayController::class,'mainGast'])->name('main.guest');
Route::get('/diary/{id}/detail', [DisplayController::class,'detailDiary'])->name('detail.mydiary');
Route::get('/myaccount/{id}/detail', [DisplayController::class,'detailMyaccount'])->name('detail.myaccount');
Route::get('/useraccount/{id}/detail', [DisplayController::class,'detailUseraccount'])->name('detail.useraccount');
Route::get('/create_diary', [RegistrationController::class,'creatDiary'])->name('create.mydiary');
Route::get('/create_group', [RegistrationController::class,'createGroup'])->name('create.mydiary');
