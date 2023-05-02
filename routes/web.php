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

Route::get('/',function(){
    return view('menu');
})->name('menu');
Route::get('/register','StudentController@studentRegister')->name('register');
Route::get('/list','StudentController@index')->name('list');
Route::get('/list/person','StudentController@personalInfo')->name('person');
Route::get('/list/person/edit','StudentController@personalEdit')->name('persnalEdit');
Route::get('/list/person/add','StudentController@gradesAdd')->name('add');
Route::get('/list/person/grades','StudentController@gradesEdit')->name('gradesEdit');
