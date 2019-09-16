<?php

use Illuminate\Database\Seeder;

class pollsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    
    /*
    |-----------------------------------------------------------------
    |  L'enregistrement du nom de mon sondage dans la base de données
    |------------------------------------------------------------------
    */ 
             DB::table('polls')->insert([
                  'name' =>'Bigscreen'
            ]);
    
    }
}
