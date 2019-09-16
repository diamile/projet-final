<?php

use Illuminate\Database\Seeder;

/*
    |--------------------------------------------------------------------------
    |  Création de mon usersTableSeeder afin d'enregistrer les informations
    |  de connexion de l'administrateur dans la base de données
    |--------------------------------------------------------------------------
 */ 

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

/*
    |--------------------------------------------------------------------------
    |  Enregistrement des informations de connexion de l'administrateur
    |--------------------------------------------------------------------------
 */ 
        DB::table('users')->insert(
            ['name'=>'admin','email'=>'diamilesarr2006@gmail.com','password'=>Hash::make('admin')]
        );
    }
}
