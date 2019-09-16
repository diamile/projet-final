<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    
    /*
    |--------------------------------------------------------------------------
    |  L'enregistrement des seeders dans databaseSeeder en utilisant 
    |  la methode call de la class databaSeeder
    |--------------------------------------------------------------------------
    */ 
        $this->call(UsersTableSeeder::class);
        $this->call(QuestionTableSeeder::class);
        $this->call(pollsTableSeeder::class);
        
    }
}
