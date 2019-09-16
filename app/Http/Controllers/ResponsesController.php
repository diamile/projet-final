<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reponse;
use Illuminate\Support\Str;

/*
    |------------------------------------------------
    | Création de mon controller ResponsesController
    |------------------------------------------------
*/

class ResponsesController extends Controller
{

/*
    |----------------------------------------------------------------
    | Création de ma fonction index  afin d'afficher ma page reponse 
    |----------------------------------------------------------------
*/
    public function index()
    {
      
      return view('pages.reponse');
    }


/*
    |--------------------------------------------------------------------------
    | Création de ma fonction store qui me permet d'abort de recuperer toutes 
    les données saisies par l'utilisateur et ensuite de l'inserer dans la 
    base de donnée
    |--------------------------------------------------------------------------
*/

    public function store(Request $request){ 
 
    
/*
    |--------------------------------------------------------------------------
    | creation d'un clé unique  pour chaque utilisateur En utilisant 
    l'universal unique identifiant qui genére une clé uniqiue
    |--------------------------------------------------------------------------
*/
    $Link = Str::uuid()->toString();
    
       
/*
    |--------------------------------------------------------------------------
    | Validation de chaque type de colonne avec la methode validate de laravel
    |--------------------------------------------------------------------------
*/
        $this->validate($request,[
          
            //toutes les reponses de chaque type de question
            'reponse_typeA.*' => 'required',
            'reponse_typeB.*' => 'required|min:1|max:255',
            'reponse_typeC.*' => 'required',
            'email.*' => 'required|email:filter'
            ]);
        
/*
    |--------------------------------------------------------------------------
    | Recuperation des reponses pur chaque de type de question avec $request , et je le mets 
    |dans un tableau afin de la boucler avec foreach pour recuperer les 
    |reponses pour chaque type de question
    |--------------------------------------------------------------------------
*/
            $reponses = array_replace(
                       
                        $request->reponse_typeA,
                        $request->reponse_typeB,
                        $request->reponse_typeC,
                        $request->email
            );

 /*
    |--------------------------------------------------------------------------
    | Utilisation de mon ksort afin d'ordonner mon tableau
    |--------------------------------------------------------------------------
*/
            ksort($reponses);
        
  
/*
    |--------------------------------------------------------------------------
    |  je fais une boucle au niveau de mon tableau afin de recuperer les reponses
    |  et de l'insererer dans la table answer
    |--------------------------------------------------------------------------
*/ 
            foreach($reponses as $key =>$value){
        
/*
    |---------------------------------------------------------------
    |  Utilisation de la methode create afin de faire des solutions
    |---------------------------------------------------------------
*/
                Reponse::create([
                 
                'answer' =>$value,
                'question_id' =>$key,
                'Url_user' =>$Link
        
                ]);
            }
        
        
/*
    |--------------------------------------------------------------------------
    |   redirection vers la page d'accueil en lui passant un message suivie d'un
    |   lien que j'ai concatener avec la clé unique .de ce fait si l'utilisateur
    |    clique sur ce lien il ne verra que ses reponse
    |--------------------------------------------------------------------------
*/
           return redirect('/')->with(
           "success",
           "toute l’équipe de Bigscreen vous remercie pour votre engagement. Grâce 
           votre investissement, nous vous préparons une application toujours plus facile à utiliser, 
           seul ou en famille. Si vous désirez consulter vos réponse ultérieurement, vous pouvez consultez 
           cette adresse:<a href='".url("/$Link")."'/>" .url("/$Link"). "  </a>"
        
           );
          
          
        }

    }


