<?php

namespace App\Http\Controllers;
use DB;
use App\product;
use Illuminate\Http\Request;
use App\Author;

class ProductController extends Controller
{

    public function selectmodel(){

        $author = new Author;
        $data = $author->all();
        
        foreach($data as $key=>$value){
            echo $value['name']." ".$value['email']."<br/>";
        }
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function insertorm()
    {
        // $product = new Product([
        //     "name"=>"test demo 7",
        //     "quantity"=>"10",
        //     "description"=>"This is best controller Point"
        // ]);
        // $product->save();


        $product = Author::create([
            "name"=>"dharam kumar",
            "email"=>"dharm98@gmail.com"
            

        ]);

        $product->save();

        print_r($product);
           

        // $product->name ="Demo Product 2";
        // $product->quantity = 12;
        // $product->description = "Secound This is my sample description for this text";
        // $data = $product->save();
        // print_r($product['id']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\products  $products
     * @return \Illuminate\Http\Response
     */
    public function show(product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\products  $products
     * @return \Illuminate\Http\Response
     */
    public function edit(product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\products  $products
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\products  $products
     * @return \Illuminate\Http\Response
     */
    public function destroy(product $product)
    {
        //
    }
}
