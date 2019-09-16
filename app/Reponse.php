<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\question;

  /*
    |--------------------------------------------------------------------------
    | Model Reponse
    |--------------------------------------------------------------------------
    */
class Reponse extends Model
{

      /*
    |--------------------------------------------------------------------------
    | Les champs modifiables 
    |--------------------------------------------------------------------------
    */
    protected $fillable=['answer','question_id','Url_user'];

      /*
    |--------------------------------------------------------------------------
    | Utilisation de la fonction scope de laravel que je vais appeler au niveau 
    |--------------------------------------------------------------------------
    */
    public function scopeUserLink($query, $userLink){
        
        return $query->where('Url_user',$userLink);
     }

       /*
    |--------------------------------------------------------------------------
    | Les relations entre le model  reponse et le model question
    |--------------------------------------------------------------------------
    */
     public function question(){
         
        return $this->belongsTo('App\Question');
    }
}
