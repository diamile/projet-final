<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reponse;
use Illuminate\Support\Str;

//ResponsesController
class ResponsesController extends Controller
{
    public function index()
    {
      
      return view('pages.reponse');
    }


//methode store qui me permet de recuperer les valeurs saisies par l'utilisateur et le stockage dans la base de données
    public function store(Request $request){ 
 
    //creation d'un clé unique  pour chaque utilisateur
    $Link = Str::uuid()->toString();
    
    //utilisation de la methode validate qui permet de valider mes champs
        $this->validate($request,[
          
            //toutes les reponses de chaque type de question
            'reponse_typeA.*' => 'required',
            'reponse_typeB.*' => 'required|min:1|max:255',
            'reponse_typeC.*' => 'required',
            'email.*' => 'required|email:filter'
            ]);
        
            //utilisation de la fonction array_replace pour 
            $reponses = array_replace(
                       
                        $request->reponse_typeA,
                        $request->reponse_typeB,
                        $request->reponse_typeC,
                        $request->email
            );

           //utilisation de ksort afin de ranger mes données par ordre croissant
            ksort($reponses);
        
            //je fais une boucle au niveau de mon tableau afin de recuperer les valeurs
            foreach($reponses as $key =>$value){
        
                //Utilisation de la methode create afin d'inserer les données au niveau de la base de données
                Reponse::create([
                 
                'answer' =>$value,
                'question_id' =>$key,
                'Url_user' =>$Link
        
                ]);
            }
        
         //redirection vers la page d'accueil 
           return redirect('/')->with(
           "success",
           "toute l’équipe de Bigscreen vous remercie pour votre engagement. Grâce 
           votre investissement, nous vous préparons une application toujours plus facile à utiliser, 
           seul ou en famille. Si vous désirez consulter vos réponse ultérieurement, vous pouvez consultez 
           cette adresse:<a href='".url("/$Link")."'/>" .url("/$Link"). "  </a>"
        
           );
          
          
        }

    }


