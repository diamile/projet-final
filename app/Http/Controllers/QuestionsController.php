<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App\Reponse;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Date;

//controlleur questionsControlleur
class QuestionsController extends Controller
{

    //methode index qui permet d'affichage ma page sondage
    public function index(){
        
        //creation d'instance $suestion en utilisant la methode all qui permet e recuperer toutes mes questions
        $questions=Question::all();
        $email="email";

        //retourne ma vue en lui passant mon instance question
        return view('pages.sondage',['questions'=>$questions,'email'=>$email]);
    }

    //methode responses qui me permet d'afficher toutes questions et  reponses d'un utilisateur
    public function responses(string $userLink){
      
        //creations d'instance questions qui permet de recuprerer toutes les questions
        $questions=Question::all();
        
        //creation d'instance $reponse qui me permet recuperer toutes mes reponses
        $responses=Reponse::UserLink($userLink)->pluck('answer','question_id');
        
        //recupereration de la date et l'heure juste à la fin du sondage
        $date=Reponse::orderBy('created_at', 'DESC')->get();
        
        $now=$date[0]->created_at->addHours(2);
       
    
        return view('pages.reponse',['questions'=>$questions,'responses'=>$responses,'now'=>$now]);
    }

   
}


