<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App\Reponse;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Date;

class QuestionsController extends Controller
{
    public function index(){
        $questions=Question::all();
        $email="email";
        return view('pages.sondage',['questions'=>$questions,'email'=>$email]);
    }

    public function responses(string $userLink){
        $questions=Question::all();
        //orderBy('updated_at', 'DESC')->get();
        $responses=Reponse::UserLink($userLink)->pluck('answer','question_id');
        
        
        $date=Reponse::orderBy('created_at', 'DESC')->get();
        // $created_at->addMinutes(30);
        // addHours(2.5)
        $now=$date[0]->created_at->addHours(2);
       // $timestamp = Date::now(); 
        // $timestamp = now();
        $timestamp = \Carbon\Carbon::now()->addHours(2)->toDateTimeString();
        

        return view('pages.reponse',['questions'=>$questions,'responses'=>$responses,'now'=>$now,'timestamp'=>$timestamp]);
    }

   
}


