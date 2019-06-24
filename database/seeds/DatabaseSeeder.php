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
       DB::table('user1')->insert([
         'roleID' => '1',
         'firstName' => 'Timurs',
         'lastName' => 'Sņetkovs',
         'email' => 'timurs@e-shop.lv',
         'password' => bcrypt('sophisticated'),
         'phoneNumber' => '24442555',
         'shippingAddress' => 'Brīvības iela 100',
       ]);
       DB::table('user1')->insert([
         'roleID' => '1',
         'firstName' => 'Sigurds',
         'lastName' => 'Skangals',
         'email' => 'sigurds@e-shop.lv',
         'password' => bcrypt('password'),
         'phoneNumber' => '24442888',
         'shippingAddress' => 'Maskavas iela 100',
       ]);/*
       DB::table('product')->insert([
         'name' => 'Klepjdators DM-V4',
         'code' => '979-0-9005138-6-5',
         'price' => '399.99',
         'categoryID' => '1'
       ]);*/
     }


}
