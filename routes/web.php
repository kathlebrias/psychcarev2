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
    return view('welcome');
});
Route::get('/dashboard', function(){
    return view ('dashboard');
});
Route::get('/question/viewquestion','QuestionController@index');
Route::get('/question/create', 'QuestionController@create');
Route::resource('/question','QuestionController');

Route::get('/appointment',function(){
    return view('appointment');
 });
 Route::get('/studentresult',function(){
    return view('studentresult');
 });