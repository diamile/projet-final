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

Route::get('/','QuestionsController@index');

Auth::routes();

Route::post('/reponse','ResponsesController@store')->name('pages.reponse');


 Route::get('/{id}', 'QuestionsController@responses')->where('id','[0-9a-fA-F]{8}\-[0-9a-fA-F]{4}\-[0-9a-fA-F]{4}\-[0-9a-fA-F]{4}\-[0-9a-fA-F]{12}');


//Route::ressource('/accueil', 'AdminController@index')->name('accueil');

Route::resource('admin', 'AdminController');

//Route::get('chart', 'ChartController@index');



Route::get('/administration', 'AdminController@index')->name('admin');
Route::get('/questionnaire', 'AdminController@showQuestion')->name('admin.questionnaire');
Route::get('/reponses', 'AdminController@showResponse')->name('admin.reponse');
