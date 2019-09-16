<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

  /*
    |--------------------------------------------------------------------------
    | Model Poll 
    |--------------------------------------------------------------------------
    */
class Poll extends Model
{
      /*
    |--------------------------------------------------------------------------
    | Les champs modifiables 
    |--------------------------------------------------------------------------
    */
    protected $fillable=['name'];

      /*
    |--------------------------------------------------------------------------
    | Relation entre le model Poll et le model Reponse
    |--------------------------------------------------------------------------
    */
    public function responses(){
        return $this->HasMany('App\Reponse');
    }
}
