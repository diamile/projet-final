<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App\Reponse;
use App\Poll;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Date;

  /*
    |--------------------------------------------------------------------------
    | Création de mon controller QuestionsController
    |--------------------------------------------------------------------------
    */
class QuestionsController extends Controller
{

     /*
    |--------------------------------------------------------------------------
    | methode index qui permet d'affichage ma page sondage
    |--------------------------------------------------------------------------
    */

   
    public function index(){
        
     /*
    |--------------------------------------------------------------------------
    |creation d'instance $suestion en utilisant la methode all qui permet et
    | recuperer toutes mes questions
    |--------------------------------------------------------------------------
    */
        $questions=Question::all();
        $email="email";
        $polls=Poll::all();

     /*
    |--------------------------------------------------------------------------
    |retourne ma vue en lui passant mon instance question
    |--------------------------------------------------------------------------
    */
        
        return view('pages.sondage',['questions'=>$questions,'email'=>$email,'polls'=>$polls]);
    }

      /*
    |--------------------------------------------------------------------------
    | methode responses qui me permet d'afficher toutes questions
     et reponses d'un utilisateur
    |--------------------------------------------------------------------------
    */  

    public function responses(string $userLink){
      
    /*
    |--------------------------------------------------------------------------
    |Creation d'une instance de Question afin de recuperer toutes les questions
    |--------------------------------------------------------------------------
    */
        $questions=Question::all();
        

     /*
    |--------------------------------------------------------------------------
    |Creation d'une instance de Reponse afin de recuperer toutes les reponses
    |--------------------------------------------------------------------------
    */
        $responses=Reponse::UserLink($userLink)->pluck('answer','question_id');
        

     /*
    |--------------------------------------------------------------------------
    | recupereration de la date et l'heure juste à la fin du sondage
    |--------------------------------------------------------------------------
    */
       
        $date=Reponse::orderBy('created_at', 'DESC')->get();
        
        $now=$date[0]->created_at->addHours(2);
       
    
        return view('pages.reponse',['questions'=>$questions,'responses'=>$responses,'now'=>$now]);
    }

   
}

