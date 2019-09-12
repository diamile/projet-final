<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\question;

class Reponse extends Model
{
    protected $fillable=['answer','question_id','Url_user'];

    public function scopeUserLink($query, $userLink){
        
        return $query->where('Url_user',$userLink);
     }

     //relation entre le model reponse et le model question
     public function question(){
        //belongsTo :une reponse appartient à une question
        return $this->belongsTo('App\Question');
    }
}
