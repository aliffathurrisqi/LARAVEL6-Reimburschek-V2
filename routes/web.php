<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ContentMenuController;
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

// Example Routes
// Route::view('/', 'landing');
// Route::match(['get', 'post'], '/dashboard', function(){
//     return view('dashboard');
// });
Route::view('/pages/slick', 'pages.slick');
Route::view('/pages/datatables', 'pages.datatables');
Route::view('/pages/blank', 'pages.blank');

Route::get('/', 'DashboardController@default')->name('default');
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::get('/reimbesement/user/edit', 'DashboardController@edit')->name('user');
Route::post('/reimbesement/user/edit', 'DashboardController@update')->name('user-update');

Route::get('/reimbesement/history', 'ReimbesementController@index')->name('reimbesement');
Route::get('/reimbesement/create', 'ReimbesementController@create')->name('reimbesement-create');
Route::post('/reimbesement/create', 'ReimbesementController@store')->name('reimbesement-store');
Route::get('/reimbesement/history/{id}', 'ReimbesementController@show')->name('reimbesement-show');
Route::get('/reimbesement/create/{id}/step', 'ReimbesementController@step')->name('reimbesement-step');
Route::get('/reimbesement/create/{id}/outlet', 'ReimbesementController@outlet')->name('reimbesement-step');
Route::post('/reimbesement/create/outlet', 'ReimbesementController@outlet_store')->name('reimbesement-outlet-store');
Route::get('/reimbesement/{id}/edit', 'ReimbesementController@edit')->name('reimbesement-edit');
Route::post('/reimbesement/edit', 'ReimbesementController@update')->name('reimbesement-update');
Route::post('/reimbesement/delete', 'ReimbesementController@destroy')->name('reimbesement-destroy');
Route::get('/reimbesement/outlet/{id}/delete', 'ReimbesementController@destroy_outlet')->name('reimbesement-outlet-destroy');
Route::get('/reimbesement/history/print', 'ReimbesementController@print')->name('reimbesement-print');
