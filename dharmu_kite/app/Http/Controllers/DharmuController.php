<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use App\Dharmu;
use Redirect;
use Session;


class DharmuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = dharmu::orderBy('id', 'DESC')->paginate(5);
        return view('index', compact('data'));
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
            'course_name'=>'required',
            'course_description'=>'required',
            
             ]);
            // store
            $data = new Dharmu;
            $data->course_name       = Input::get('course_name');
            $data->course_description      = Input::get('course_description');
            $data->save();

            // redirect
            
            return Redirect::to('index')->with('success', 'Course Added successfully.');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\dharmu  $dharmu
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Dharmu::findorFail($id);
        return view('show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\dharmu  $dharmu
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Dharmu::find($id);
        return view('edit', compact('data'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\dharmu  $dharmu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        [
            'course_name'       => 'required',
            'course_description'      => 'required',
            
                        
             ];
        
        $data = Dharmu::find($id);
        $data->course_name       = Input::get('course_name');
        $data->course_description      = Input::get('course_description');
        $data->save();
        
        Session::flash('message', 'Course Update Successfully ');
            return Redirect::to('index')->with('success', 'Course Edit successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\dharmu  $dharmu
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Dharmu::findorFail($id);
        $data->delete();
        return redirect('index')->with('success','Data is successfully Deleted');
    }
}
