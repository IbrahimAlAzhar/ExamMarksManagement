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



Route::get('/dashboard','StudentController@dashboard')->name('dashboard');
Route::get('/admin','StudentController@admin')->name('admin')->middleware('guest');
Route::post('/logs','Auth\LoginController@login');
Route::get('/','StudentController@index')->name('index');
Route::get('/approve/{user}','StudentController@approve')->name('approve');

Route::get('/log','StudentController@log')->name('log');
Route::post('/store', 'StudentController@store');

Route::get('/studentsregister', 'AbcController@studentsregister')->name('studentsregister');
Route::post('/storeS', 'AbcController@storeS')->name('storeS');

Route::get('/data','StudentController@data')->name('data');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/studentslogin','StudentController@studentslogin')->name('studentslogin')->middleware('guest');
Route::post('/students_loginPost','StudentController@students_loginPost');

Route::post('/insert','MultipleController@insert')->name('insert');
Route::get('/pdf', 'HomeController@pdf')->name('pdf');
Route::get('dynamic_pdf','DynamicPDFController@index');

Route::get('/invoice','StudentController@invoice');
