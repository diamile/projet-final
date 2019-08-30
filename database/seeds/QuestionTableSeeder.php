<?php

use Illuminate\Database\Seeder;

class QuestionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questions')->insert([
        ['number' => 'Question 1/20',
        'title' =>'Votre adresse mail',
        'typeOfQuestion'=> 'B',
        'choice'=> 'email',
        'poll_id'=>1,
        
         
        ],

     [

        'number' => 'Question 2/20',
        'titre' =>'Votre age',
        'typeOfQuestion'=> 'B',
        'choice'=> 'saisie',
        'poll_id'=>1,
        
     ],

     [

        'number' => 'Question 3/20',
        'titre' =>'Votre sexe',
        'typeOfQuestion'=> 'A',
        'choice'=>json_encode(['Homme','Femme','Prefere de pas repondre']),
        'poll_id'=>1,
        
    ],

    [

        'number' => 'Question 4/20',
        'titre' =>'Nombre de personne dans votre foyer (adulte & enfants)',
        'typeOfQuestion'=> 'C',
        'choice'=> 'numerique',
        'poll_id'=>1,
        
    ],

     [

     'number' => 'Question 5/20',
     'title' =>'Votre profession ',
     'typeOfQuestion'=> 'B',
     'choice'=> 'saisie',
     'poll_id'=>1,
     
     ],

    [

     'number' => 'Question 6/20',
     'title' =>'Quel marque de casque VR utilisez vous ?',
     'typeOfQuestion'=> 'A',
     'choice'=>json_encode(['Occulus Rift/s',' HTC Vive',' Windows Mixed Reality',' PSVR']),
      'poll_id'=>1,
      
    ],

     [

     'number' => 'Question 7/20',
     'title' =>'Quel marque de casque VR utilisez vous ?',
     'typeOfQuestion'=> 'A',
     'choice'=>json_encode(['SteamVR','Occulus store',' Viveport',' Playstation VR',' Google Play','Windows store']),
      'poll_id'=>1,
     
    ],

    [

     'number' => 'Question 8/20',
     'title' =>'Quel casque envisagez vous d’acheter dans un futur proche ? ',
     'typeOfQuestion'=> 'A',
     'choice'=>json_encode(['Occulus Quest',' Occulus Go',' HTC Vive Pro','Autre','Aucun']),
      'poll_id'=>1,
     
    ],

    [

     'number' => 'Question 9/20',
     'titre' =>'Quel casque envisagez vous d’acheter dans un futur proche ? ',
     'typeOfQuestion'=> 'C',
     'choice'=>'',
      'poll_id'=>1,
      
    ],

     [

     'number' => 'Question 10/20',
     'title' =>'Vous utilisez principalement Bigscreen pour',
     'typeOfQuestion'=> 'A',
     'choice'=>json_encode(['regarder des émissions TV en direct','regarder des films','jouer en solo', 'jouer en team']),
      'poll_id'=>1,
      
    ],

    [

     'number' => 'Question 11/20',
     'title' =>'Combien donnez vous de point pour la qualité de l’image sur Bigscreen ?',
     'typeOfQuestion'=> 'C',
     'choice'=>'numerique',
      'poll_id'=>1,
      
    ],

      [

     'number' => 'Question 12/20',
     'title' =>'Combien donnez vous de point pour le confort d’utilisation de l’interface Bigscreen ? ',
     'typeOfQuestion'=> 'C',
     'choice'=>'numerique',
      'poll_id'=>1,
      
    ],

    [

     'number' => 'Question 13/20',
     'title' =>'Combien donnez vous de point pour la connection réseau de Bigscreen ? ',
     'typeOfQuestion'=> 'C',
     'choice'=>'numerique',
      'poll_id'=>1,
      
    ],

    [

     'number' => 'Question 14/20',
     'title' =>'Combien donnez vous de point pour la qualité des graphismes 3D dans Bigscreen ? ',
     'typeOfQuestion'=> 'C',
     'choice'=>'',
      'poll_id'=>1,
     
    ],

    [

     'number' => 'Question 15/20',
     'title' =>'Combien donnez vous de point pour la qualité audio dans Bigscreen ? ',
     'typeOfQuestion'=> 'C',
     'choice'=>'',
      'poll_id'=>1,
      
    ],

    [

     'number' => 'Question 16/20',
     'title' =>'Aimeriez vous avoir des notifications plus précises au cours de vos sessions Bigscreen ?',
     'typeOfQuestion'=> 'A',
     'choice'=>json_encode(['Qui','Nom']),
      'poll_id'=>1,
     
    ],

    [

     'number' => 'Question 17/20',
     'title' =>'Aimeriez vous pouvoir inviter un ami à rejoindre votre session via son smartphone ? ',
     'typeOfQuestion'=> 'A',
     'choice'=>json_encode(['Qui','Nom']),
      'sondage_id'=>1,
      
    ],

    [

     'number' => 'Question 18/20',
     'title' =>'Aimeriez vous pouvoir enregistrer des émissions TV pour pouvoir les regarder ultérieurement ? ',
     'typeOfQuestion'=> 'A',
     'choice'=>json_encode(['Qui','Nom']),
      'poll_id'=>1,
      
    ],

    [

     'number' => 'Question 19/20',
     'title' =>'Aimeriez vous jouer à des jeux exclusifs sur votre Bigscreen ? ',
     'typeOfQuestion'=> 'A',
     'choice'=>json_encode(['Qui','Nom']),
      'poll_id'=>1,
     
    ],

    [

     'number' => 'Question 20/20',
     'title' =>'Quelle nouvelle fonctionnalité de vos rêve devrait exister sur Bigscreen ? ',
     'typeOfQuestion'=> 'B',
     'choice'=> 'saisie',
     'poll_id'=>1,
     
     ],




   

  ]);

    }
}
