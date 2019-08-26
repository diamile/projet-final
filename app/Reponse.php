<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reponse extends Model
{
    protected $fillable=['answer','question_id','Url_user'];

    public function scopeUserLink($query, $userLink){
        
        return $query->where('Url_user',$userLink);
     }
}
