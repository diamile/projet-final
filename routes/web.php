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


/*
    |-------------------------------------------------------------------
    | affichage de ma page sondage avec la methode index qui se trouve 
    | au niveau du controlleur QuestionsController 
    |-------------------------------------------------------------------
 */ 

Route::get('/','QuestionsController@index');

Auth::routes();

/*
    |----------------------------------------------------------------
    |Route qui fait appel à ma fonction store afin de procéder à la 
    |recuperation des données saisie par l'utilisateur et insertion
    |----------------------------------------------------------------
 */ 

Route::post('/reponse','ResponsesController@store')->name('pages.reponse');

/*
    |----------------------------------------------------------------
    |Route qui nous permet d'afficher les reponses de l'utilisateur
    |-----------------------------------------------------------------
 */ 

 Route::get('/{id}', 'QuestionsController@responses');

/*
    |----------------------------------------------------------------
    |Route qui nous permet d'afficher les reponses de l'utilisateur
    |-----------------------------------------------------------------
 */ 

Route::resource('admin', 'AdminController');

/*
    |----------------------------------------------------------------
    |Route qui nous permet d'afficher lla page d'accueil ainsi 
    |que les graphes crées par chart js
    |-----------------------------------------------------------------
 */ 

Route::get('/administration', 'AdminController@index')->name('admin');

/*
    |----------------------------------------------------------------
    |Route qui nous permet d'afficher la page questionnaire
    |-----------------------------------------------------------------
 */ 

Route::get('/questionnaire', 'AdminController@showQuestion')->name('admin.questionnaire');

/*
    |----------------------------------------------------------------
    |route qui affiche toutes les reponses des utilisateurs
    |-----------------------------------------------------------------
 */ 

Route::get('/reponses', 'AdminController@showResponse')->name('admin.reponse');
