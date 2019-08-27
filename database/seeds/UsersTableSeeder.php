<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            ['name'=>'admin','email'=>'diamilesarr2006@gmail.com','password'=>Hash::make('admin')]
        );
    }
}
