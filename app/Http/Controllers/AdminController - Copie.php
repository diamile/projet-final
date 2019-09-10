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
       
        //creation de mon pie Chart pour la question6
		$pie6 =Charts::create('pie', 'highcharts')
				    ->title('Question 6')
				    ->labels(['Occulus Rift/s','HTC Vive','Windows Mixed Reality',' PSVR'])
				    ->values([$OcculusRift,$HTCVive,$WindowsMixedReality,$PSVR])
				    ->dimensions(550,250)
                    ->responsive(false);
         /************************* fin de la section concernant le pie chart de la question 6**********************/
        
    

        /************************* section concernant le pie chart de la question 7**********************/
        $SteamVR=DB::table('reponses')->where('answer','SteamVR')->count();
        $OcculusStore=DB::table('reponses')->where('answer','Occulus store')->count();
        $Viveport=DB::table('reponses')->where('answer','Viveport')->count();
        $PlaystationVR=DB::table('reponses')->where('answer','Playstation VR')->count();
        $GooglePlay=DB::table('reponses')->where('answer','Google Play')->count();
        $WindowsStore=DB::table('reponses')->where('answer','Windows store')->count();
        
        //creation de mon pie chart 7
        $pie7 =Charts::create('pie', 'highcharts')
				    ->title('Question 7')
				    ->labels(['SteamVR','Occulus store',' Viveport',' Playstation VR',' Google Play','Windows store'])
				    ->values([$SteamVR,$OcculusStore,$Viveport,$PlaystationVR,$GooglePlay,$WindowsStore])
				    ->dimensions(550,250)
                    ->responsive(false);
        /************************* fin de la section concernant le pie chart de la question 7 **********************/
                    


        /************************* debut de la section concernant le pie chart de la question 10 **********************/
                    $regarderEmissionsTV=DB::table('reponses')->where('answer','regarder des émissions TV en direct')->count();
                    $regarderFilms=DB::table('reponses')->where('answer','regarder des films')->count();
                    $jouerEnSolo=DB::table('reponses')->where('answer','jouer en solo')->count();
                    $jouerEnTeam=DB::table('reponses')->where('answer','jouer en team')->count();

        $pie10 =Charts::create('pie', 'highcharts')
				    ->title('Question 10')
				    ->labels(['regarder des émissions TV en direct','regarder des films','jouer en solo', 'jouer en team'])
				    ->values([$regarderEmissionsTV,$regarderFilms,$jouerEnSolo, $jouerEnTeam])
				    ->dimensions(550,250)
                    ->responsive(false);
        /************************* fin de la section concernant le pie chart de la question 10 **********************/

                 

         /************************* debut de la section concernant le radar chart **********************/
                     $question11 = DB::table('reponses')
                    ->join('questions', 'reponses.question_id', '=', 'questions.id')
                    ->select('reponses.*')->where('questions.title','Combien donnez vous de point pour la qualité de l’image sur Bigscreen ?')
                    ->avg('answer');


                    $question12 = DB::table('reponses')
                    ->join('questions', 'reponses.question_id', '=', 'questions.id')
                    ->select('reponses.*')->where('questions.title','Combien donnez vous de point pour le confort d’utilisation de l’interface Bigscreen ?')
                    ->avg('answer');
                   
                    

                    $question13 = DB::table('reponses')
                    ->join('questions', 'reponses.question_id', '=', 'questions.id')
                    ->select('reponses.*')->where('questions.title','Combien donnez vous de point pour la connection réseau de Bigscreen ?')
                    ->avg('answer');
                    

                    $question14 = DB::table('reponses')
                    ->join('questions', 'reponses.question_id', '=', 'questions.id')
                    ->select('reponses.*')->where('questions.title','Combien donnez vous de point pour la qualité des graphismes 3D dans Bigscreen ? ')
                    ->avg('answer');
                    

                    $question15 = DB::table('reponses')
                    ->join('questions', 'reponses.question_id', '=', 'questions.id')
                    ->select('reponses.*')->where('questions.title','Combien donnez vous de point pour la qualité audio dans Bigscreen ? ')
                   ->avg('answer');
                    
                   
            /************************* fin de la section concernant le radar chart **********************/
            
        
        return view('admin.accueil',['pie6'=>$pie6,'pie7'=>$pie7,'pie10'=>$pie10],compact('question11','question12','question13','question14','question15'));

    }


    public function showQuestion(){
        $questions=Question::all();
        $email="email";
        return view('admin.questionnaire',['questions'=>$questions,'email'=>$email]);
        
    }


    public function showResponse(){
        $questions=Question::all();
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
