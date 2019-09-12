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


//affichage de ma page sondage avec la methode index qui se trouve au niveau du controlleur QuestionsController 
Route::get('/','QuestionsController@index');

Auth::routes();

//recuperation des données saisie par l'utilisateur et insertion
Route::post('/reponse','ResponsesController@store')->name('pages.reponse');

//cette route nous permet d'afficher les reponses d'un utilisateurs
 Route::get('/{id}', 'QuestionsController@responses')->where('id','[0-9a-fA-F]{8}\-[0-9a-fA-F]{4}\-[0-9a-fA-F]{4}\-[0-9a-fA-F]{4}\-[0-9a-fA-F]{12}');

//route qui ffiche ma page d'administration
Route::resource('admin', 'AdminController');

//routes qui affiche ma page d'accueil 
Route::get('/administration', 'AdminController@index')->name('admin');

//route qui affiche ma page questionnaire
Route::get('/questionnaire', 'AdminController@showQuestion')->name('admin.questionnaire');

//route qui affiche toutes les reponses des utilisateurs
Route::get('/reponses', 'AdminController@showResponse')->name('admin.reponse');
