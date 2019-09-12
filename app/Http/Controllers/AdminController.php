<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reponse;
use App\Question;
use Charts;
use App\User;
use DB;


class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function __construct()
     {
         $this->middleware('auth');
     }
 
     /**
      * Show the application dashboard.
      *
      * @return \Illuminate\Contracts\Support\Renderable
      */
  

    public function index()
    {
        //************************* debut de la section concernant le pie chart de la question 6**********************//
        
        $OcculusRift=DB::table('reponses')->where('answer','Occulus Rift/s')->count();
        $HTCVive=DB::table('reponses')->where('answer','HTC Vive')->count();
        $WindowsMixedReality=DB::table('reponses')->where('answer','Windows Mixed Reality')->count();
        $PSVR=DB::table('reponses')->where('answer','PSVR')->count();
       
        //les données que je devrais passé à pie chart pour la question6
        $pie6=[$OcculusRift,$HTCVive,$WindowsMixedReality,$PSVR];

        

         /************************* fin de la section concernant le pie chart de la question 6**********************/
        
    

        /************************* section concernant le pie chart de la question 7**********************/
        $SteamVR=DB::table('reponses')->where('answer','SteamVR')->count();
        $OcculusStore=DB::table('reponses')->where('answer','Occulus store')->count();
        $Viveport=DB::table('reponses')->where('answer','Viveport')->count();
        $PlaystationVR=DB::table('reponses')->where('answer','Playstation VR')->count();
        $GooglePlay=DB::table('reponses')->where('answer','Google Play')->count();
        $WindowsStore=DB::table('reponses')->where('answer','Windows store')->count();
        
        
        //les données que je devrai passé à pie chart pour la question7
        $pie7=[$SteamVR,$OcculusStore,$Viveport,$PlaystationVR,$GooglePlay,$WindowsStore];
       
        
        /************************* fin de la section concernant le pie chart de la question 7 **********************/
                    


         /************************* debut de la section concernant le pie chart de la question 10 **********************/
        $regarderEmissionsTV=DB::table('reponses')->where('answer','regarder des émissions TV en direct')->count();
        $regarderFilms=DB::table('reponses')->where('answer','regarder des films')->count();
        $jouerEnSolo=DB::table('reponses')->where('answer','jouer en solo')->count();
        $jouerEnTeam=DB::table('reponses')->where('answer','jouer en team')->count();

        //les données que je devrai passé à pie chart pour la question10
        $pie10=[$regarderEmissionsTV,$regarderFilms,$jouerEnSolo, $jouerEnTeam];


        /************************* fin de la section concernant le pie chart de la question 10 **********************/

                 

        /************************* debut de la section concernant le radar chart **********************/
                     $question11 = DB::table('reponses')
                    ->join('questions', 'reponses.question_id', '=', 'questions.id')
                    ->select('reponses.*')->where('reponses.question_id','11')
                    ->avg('answer');


                    $question12 = DB::table('reponses')
                    ->join('questions', 'reponses.question_id', '=', 'questions.id')
                    ->select('reponses.*')->where('reponses.question_id','12')
                    ->avg('answer');
                   
                    

                    $question13 = DB::table('reponses')
                    ->join('questions', 'reponses.question_id', '=', 'questions.id')
                    ->select('reponses.*')->where('reponses.question_id','13')
                    ->avg('answer');
                    

                    $question14 = DB::table('reponses')
                    ->join('questions', 'reponses.question_id', '=', 'questions.id')
                    ->select('reponses.*')->where('reponses.question_id','14')
                    ->avg('answer');
                    

                    $question15 = DB::table('reponses')
                    ->join('questions', 'reponses.question_id', '=', 'questions.id')
                    ->select('reponses.*')->where('reponses.question_id','15')
                   ->avg('answer');
                    
                   
            /************************* fin de la section concernant le radar chart **********************/
            
        
        return view('admin.accueil',['pie6'=>$pie6,'pie7'=>$pie7,'pie10'=>$pie10],compact('question11','question12','question13','question14','question15'));

    }


    public function showQuestion(){
        //creation de mon instance questions afin de recuprer toutes mes questions 
        $questions=Question::all();
        $email="email";
        return view('admin.questionnaire',['questions'=>$questions,'email'=>$email]);
        
    }


    public function showResponse(){
        //creation de mon instance questions afin de recuprer toutes mes questions et toutes mes reponses
        $questions=Question::all();
        //recuperation des reponses de chaque utilisateurs
        $reponses=Reponse::all()->groupBy('Url_user');

        return view('admin.reponses',['questions'=>$questions,'reponses'=>$reponses]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
