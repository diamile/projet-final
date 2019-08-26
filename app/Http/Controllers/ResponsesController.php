<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reponse;
use Illuminate\Support\Str;

class ResponsesController extends Controller
{
    public function index()
    {
      
      return view('pages.reponse');
    }

    public function store(Request $request){ 

    $Link = Str::uuid()->toString();
    
    
        $this->validate($request,[
            'reponse_typeA.*' => 'required',
            'reponse_typeB.*' => 'required|min:1|max:255',
            'reponse_typeC.*' => 'required'
            ]);
        
            $reponses = array_replace(
        
                        $request->reponse_typeA,
                        $request->reponse_typeB,
                        $request->reponse_typeC
            );
        
            ksort($reponses);
        
            foreach($reponses as $key =>$value){
        
                Reponse::create([
        
                'answer' =>$value,
                'question_id' =>$key,
                'Url_user' =>$Link
        
                ]);
            }
        
        
           return redirect('/')->with(
           "success",
           "toute l’équipe de Bigscreen vous remercie pour votre engagement. Grâce 
           votre investissement, nous vous préparons une application toujours plus facile à utiliser, 
           seul ou en famille. Si vous désirez consulter vos réponse ultérieurement, vous pouvez consultez 
           cette adresse:<a href='".url("/$Link")."'/>" .url("/$Link"). "  </a>"
        
           );
          
          
        }

    }


