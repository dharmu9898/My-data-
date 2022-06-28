<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Redirect;
use Session;
use DB;

class ProductController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = DB::table("products")->get();
        return view('products',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'product_name'=>'required',
            'product_detailes'=>'required',
            
             ]);
            // store
            $data = new Product;
            $data->product_name       = Input::get('product_name');
            $data->product_detailes      = Input::get('product_detailes');
            $data->save();

            // redirect
            
            return Redirect::to('myproducts')->with('success', 'Product Added successfully.');
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    	DB::table("products")->delete($id);
    	return response()->json(['success'=>"Product Deleted successfully.", 'tr'=>'tr_'.$id]);
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function deleteAll(Request $request)
    {
        $ids = $request->ids;
        DB::table("products")->whereIn('id',explode(",",$ids))->delete();
        return response()->json(['success'=>"Products Deleted successfully."]);
    }
}
