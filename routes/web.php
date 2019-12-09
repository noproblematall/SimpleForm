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


Route::get('/', 'FrontendController@get_locations')->name('frontend');
Route::get('/save_info', 'FrontendController@save_info')->name('save_info');

Auth::routes();


Route::get('/admin', 'HomeController@index')->name('home');
Route::get('/password', 'HomeController@change_password')->name('password');
Route::get('/info_detail/{id}', 'HomeController@info_detail')->name('info_detail');
Route::get('/delete_info/{id}', 'HomeController@delete_info')->name('delete_info');
Route::post('/profile', 'HomeController@change_profile')->name('profile');

Route::get('/save_comment', 'HomeController@save_comment')->name('save_comment');
Route::get('/save_sell', 'HomeController@save_sell')->name('save_sell');
Route::get('/save_user_info', 'HomeController@save_user_info')->name('save_user_info');
Route::get('/get_all', 'HomeController@get_all')->name('get_all');

