<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;

class FirstController extends Controller
{
    //
	public function index()
    {
		$categories=category::all();
		return view('first',['categories'=>$categories]);

    }
	
	public function store($id,$name,$price,$code)
     {
        	$category = new Category();
 	        $category->name=$name;
     }
}
