<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App\Reponse;

class QuestionsController extends Controller
{
    public function index(){
        $questions=Question::all();
        $email="email";
        return view('pages.sondage',['questions'=>$questions,'email'=>$email]);
    }

    public function responses(string $userLink){
        $questions=Question::all();
        $responses=Reponse::UserLink($userLink)->pluck('answer','question_id');

        return view('pages.reponse',['questions'=>$questions,'responses'=>$responses]);
    }

   
}


