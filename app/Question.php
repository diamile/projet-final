<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

  /*
    |--------------------------------------------------------------------------
    | Model Question 
    |--------------------------------------------------------------------------
    */
class Question extends Model
{
      /*
    |--------------------------------------------------------------------------
    | Les champs modifiables
    |--------------------------------------------------------------------------
    */
    protected $fillable=['title','body','type','number'];

     /*
    |--------------------------------------------------------------------------
    | Relation entre le model Question et le model Reponse
    |--------------------------------------------------------------------------
    */
    public function response(){
       
        return $this->HasOne('App\Reponse');
    }

}
