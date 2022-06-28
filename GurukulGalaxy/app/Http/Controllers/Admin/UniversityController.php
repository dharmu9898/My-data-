<?php
namespace App\Http\Controllers\Admin;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Admin;
use Redirect;
use Session;
use DB;
use Log;

class UniversityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $data = Admin::orderBy('id', 'DESC')->paginate(5);
        // return view("college_logo.index", compact('data'));

        $data = Admin::all();
     
        return view("college_logo.index",compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view("college_logo.add"); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file=$request->file("image");
      if($request->hasFile("image"))
      {
       $file->move("upload/",$file->getClientOriginalName());
      }
      else
      {
        $request->session()->flash('msg','Empty Data');
      }
        $data=new Admin;
         $data->university_name=$request->input('university_name');
         $data->image=$file->getClientOriginalName();
         $data->save();
       
         return Redirect::to('admin/dashboard')->with('success', 'Logo Added successfully.');
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
    public function edit($id)
    {
        $data = Admin::find($id);
        return view('college_logo.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $request->validate([
            'image'=>'required',
            'university_name'=>'required',
          ]);
          $file=$request->file("image");
      if($request->hasFile("image"))
      {
       $file->move("upload/",$file->getClientOriginalName());
      }
      else
      {
        $request->session()->flash('msg','Empty Data');
      }
      $data = Admin::find($id);
      $data->university_name=$request->input('university_name');
      $data->image=$file->getClientOriginalName();
      $data->save();

      return Redirect::to('admin/dashboard')->with('success', 'Logo Added Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
