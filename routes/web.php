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

Route::get('/thanks', function () {
    return view('thanks');
});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::post('/', 'HomeController@contact');


Route::get('/brief', 'BriefController@brief')->name('brief');
Route::post('/brief', 'BriefController@addBrief');




Route::group(['middleware' => 'auth'], function (){
    Route::group(['middleware' => 'admin', 'prefix' => 'admin'], function () {
        Route::get('/', 'Admin\DashboardController@index');
        Route::get('/brief', 'Admin\BriefController@index');
    });
});