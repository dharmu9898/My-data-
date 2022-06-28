<?php
namespace App\Http\Controllers\Admin;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Syllabus;
use App\dept;
use App\subject;
use Redirect;
use Session;
use DB;
use Log;



class SyllabusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $data =Syllabus::orderBy('id', 'DESC')->paginate(5);
           return view("syllabus.add_syllabus", compact('data'));
          //return $data;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = dept::orderBy('id', 'DESC')->paginate(5);
        $sub = subject::orderBy('id', 'DESC')->paginate(5);
       return view("syllabus.create_syllabus", compact('data','sub')); 
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
        'class'=>'required',
        'subject'=>'required',
        ]);
    
         if($request->hasfile('syllabus_pdf'))
{
    foreach($request->file('syllabus_pdf')as $image)
    {
        $name=$image->getClientOriginalName();
        $image->move(public_path().'/image/',$name); //your folder path
        $store[] = $name;
    }
}
        // store
        $data = new Syllabus;
        $data->class = Input::get('class');
        $data->subject = Input::get('subject');
        $data->syllabus_pdf = json_encode($store);
        $data->save();

        // redirect
        
        return Redirect()->route('admin.add_syllabus')->with('success', 'Notice Added successfully.');
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
