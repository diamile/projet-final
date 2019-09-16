<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/*
    |-------------------------------------------------------------------
    | Création de ma table questions en lui spécifiant les noms et types 
    |de colonnes.
    |-------------------------------------------------------------------
*/  

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('number');
            $table->string('typeOfQuestion');
            $table->string('choice')->nullable();
            $table->boolean('is_email')->nullable()->default(false);
            $table->integer('poll_id')->unsigned()->index();
           
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
    |est de supprimer la table questions 
    |-------------------------------------------------------------------
    */ 

    public function down()
    {
        Schema::dropIfExists('questions');
    }
}
