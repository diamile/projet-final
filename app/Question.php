<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable=['title','body','type','number'];

    public function response(){
        return $this->HasOne('App\Reponse');
    }

}
