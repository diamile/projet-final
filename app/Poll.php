<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Poll extends Model
{
    protected $fillable=['name'];

    public function responses(){
        return $this->HasMany('App\Reponse');
    }
}
