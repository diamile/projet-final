<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePollsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    
    /*
    |-------------------------------------------------------------------
    | Création de ma table polls en lui spécifiant les noms et types 
    |de colonnes.
    |-------------------------------------------------------------------
    */ 
        Schema::create('polls', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */


    /*
    |-------------------------------------------------------------------
    |La fonction down sera appellée quand on fait un rollback,son role 
    |est de supprimer la table polls 
    |-------------------------------------------------------------------
    */ 

    public function down()
    {
        Schema::dropIfExists('polls');
    }
}
