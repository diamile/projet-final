<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

//model question 
class Question extends Model
{
    //les champs modifiables
    protected $fillable=['title','body','type','number'];

    //les relations entre le model question et le model reponse
    public function response(){
        //relation HasOne:une question à une seule reponse
        return $this->HasOne('App\Reponse');
    }

}
