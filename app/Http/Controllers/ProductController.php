<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
    */
    public function new () {
 	    //$products=Product::where('categoryID','=',$categoryID)->get();
 	    return view('product_new');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     public function store($id,$name,$price,$code)
     {
        	$product = new Product();
 	        $product->name=$name;
          $product->categoryID=$id;
          $product->price=$price;
          $product->code=$code;
		  $product->image=$image;
 	        $product->save();
 	        return redirect('/');
     }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($productID)
    {
        $product = Product::all();
        $neededProduct = Product::where('productID', $productID);
        return view('product_edit',['product'=>$product],['neededProduct'=>$neededProduct]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(/*Request $request,*/ $productID,$categoryID,$name,$price,$code)
    {
        Product::where('productID', $productID)->update(['categoryID' => $categoryID]);
        Product::where('productID', $productID)->update(['name' => $name]);
        Product::where('productID', $productID)->update(['price' => $price]);
        Product::where('productID', $productID)->update(['code' => $code]);
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($productID)
    {
      Product::where('productID','=',$productID)->delete();
      return redirect('./product/');

    }
}
