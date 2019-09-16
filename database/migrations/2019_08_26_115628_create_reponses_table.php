<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

 /*
    |-------------------------------------------------------------------
    | Création de ma table reponses en lui spécifiant les noms et types 
    |de colonnes.
    |-------------------------------------------------------------------
*/ 

class CreateReponsesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reponses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('answer',255);
            $table->integer('question_id')->unsigned()->index();
            $table->foreign('question_id')->references('id')->on('questions');
            $table->string('Url_user');
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
    |est de supprimer la table reponses
    |-------------------------------------------------------------------
    */ 
    public function down()
    {
        Schema::dropIfExists('reponses');
    }
}
