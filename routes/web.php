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
    return view('landing.landing');
});


Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/home', function() {
//     $hitungPerjalanan = \App\Perjalanan::count();
//     return view('home',compact('hitungPerjalanan'));
// })->middleware('auth','CheckRole:user')->name('home');

// Route::get('/home', function() {
//     $hitungUser = \App\User::count();
//     return view('home',compact('hitungUser'));
// })->middleware('auth','CheckRole:admin')->name('home');

/*login & register*/
Route::get('/register','AuthController@getRegister')->name('register')->middleware('guest');
Route::post('/register','AuthController@postRegister')->middleware('guest');
Route::get('/login','AuthController@getLogin')->middleware('guest')->name('login');
Route::post('/postlogin','AuthController@postLogin')->middleware('guest');;
Route::get('/logout', 'AuthController@logout')->middleware('auth')->name('logout');


//=============Public Route======================
Route::group(['middleware' => 'auth'], function(){

    Route::get('/user','UserprofileController@index')->name('user.index');
    Route::post('/user','UserprofileController@update');
    Route::post('/changepassword','UserprofileController@changepassword')->name('changepassword');

});
//=============End Public Route====================


//================Admin Route=====================
Route::group(['middleware' => ['auth','CheckRole:admin']], function(){

    Route::get('/data', 'userController@index');
    Route::get('/data/delete/{id}', 'userController@destroy');
    Route::get('/data/cari','userController@cari');
    Route::get('/data/cetak_pdf', 'userController@cetak_pdf');

});
//==================End Admin Route======================

//====================User Route========================
Route::group(['middleware' => ['auth','CheckRole:user']], function(){
   
    /*Perjalanan*/
    Route::get('/perjalanan', 'PerjalananController@index');
    Route::get('/perjalanan/tambah', 'PerjalananController@create');
    Route::post('perjalanan/store', 'PerjalananController@store');
    Route::get('/perjalanan/delete/{id_perjalanan}', 'PerjalananController@destroy');
    Route::get('/hitung', 'PerjalananController@hitung');
    Route::get('/perjalanan/cari','PerjalananController@cari');

});
//=====================End User Route======================


