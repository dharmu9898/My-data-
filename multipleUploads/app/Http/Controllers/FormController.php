<?php

namespace App\Http\Controllers;

use App\rc;
use Illuminate\Http\Request;
use App\FormMultipleUpload;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = FormMultipleUpload::all();
        return view ('form_upload', compact('data'));
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
        $this->validate($request,[
            'filename' =>'required',
            'filename.*'  =>'image|mimes:jpeg,png,jpg,gif,svg|max:3048'
        ]);
    if($request->hasfile('filename'))
    {
        foreach($request->file('filename')as $image)
        {
            $name=$image->getClientOriginalName();
            $image->move(public_path().'/image/',$name); //your folder path
            $data[] = $name;
        }
    } 
    $Upload_model = new FormMultipleUpload;
    $Upload_model->filename =json_encode($data);
    $Upload_model->save();
    return back()->with('success', 'Your images has been successfully'); 

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\rc  $rc
     * @return \Illuminate\Http\Response
     */
    public function show(rc $rc)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\rc  $rc
     * @return \Illuminate\Http\Response
     */
    public function edit(rc $rc)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\rc  $rc
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, rc $rc)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\rc  $rc
     * @return \Illuminate\Http\Response
     */
    public function destroy(rc $rc)
    {
        //
    }
}
