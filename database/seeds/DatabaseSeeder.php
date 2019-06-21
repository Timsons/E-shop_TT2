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
       /*DB::table('users')->insert([
         'roleID' => '1',
         'firstName' => 'Timurs',
         'lastName' => 'Sņetkovs',
         'email' => 'timurs@e-shop.lv',
         'password' => bcrypt('sophisticated'),
       ]);
       DB::table('users')->insert([
         'roleID' => '1',
         'firstName' => 'Sigurds',
         'lastName' => 'Skangals',
         'email' => 'sigurds@e-shop.lv',
         'password' => bcrypt('password'),
       ]);*/
       DB::table('product')->insert([
         'name' => 'Klepjdators DM-V4',
         'code' => '979-0-9005138-6-5',
         'price' => '399.99',
         'categoryID' => '1'
       ]);
     }


}
