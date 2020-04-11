<?php

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
Route::get('/login','LoginController@login')->name('login');
Route::post('/postlogin','LoginController@postlogin');
Route::post('/register','LoginController@register');
Route::get('/logout','LoginController@logout');

Route::group(['middleware' => ['auth','checkRole:masyarakat, admin, petugas']],function(){
    Route::get('/dashboard','DashboardController@index');
    Route::get('/datamasyarakat','AdminController@masyarakat');
});


Route::group(['middleware' => ['auth','checkRole:masyarakat, admin']],function(){
    Route::get('/home','MasyarakatController@home');
    Route::post('/pengaduan','MasyarakatController@pengaduan');
});


