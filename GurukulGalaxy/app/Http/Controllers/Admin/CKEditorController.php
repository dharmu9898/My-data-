<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Notification;
use Illuminate\Support\Facades\Redirect;
use Session;
use DB;
use Log;

class CKEditorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Notification::orderBy('id', 'DESC')->paginate(5);
        return view('notice.add_notice', compact('data'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("notice.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Log::info("this is store method CKEditorController");
        $this->validate($request, [
            'notice'=>'required',
            'examination_details'=>'required',
            'links_title'=>'required',
            'important_links'=>'required',
            // 'filename.*'  =>'image|mimes:pdf|max:3048',
            ]);
        
             if($request->hasfile('filename'))
    {
        foreach($request->file('filename')as $image)
        {
            $name=$image->getClientOriginalName();
            $image->move(public_path().'/image/',$name); //your folder path
            $store[] = $name;
        }
    }
            // store
            $data = new Notification;
            $data->notice = Input::get('notice');
            $data->examination_details = Input::get('examination_details');
            $data->links_title = Input::get('links_title');
            $data->important_links = Input::get('important_links');
            $data->filename = json_encode($store);
            $data->save();

            // redirect
            
            return Redirect()->route('admin.add_notice')->with('success', 'Notice Added successfully.');
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
        $data = Notification::find($id);
        return view('notice.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'notice'=>'required',
            'examination_details'=>'required',
            'links_title'=>'required',
            'important_links'=>'required',
             ]);
        
        $data = Notification::find($id);
        $data->notice = Input::get('notice');
        $data->examination_details = Input::get('examination_details');
        $data->links_title = Input::get('links_title');
        $data->important_links = Input::get('important_links');
        $data->update();
        
        Session::flash('message', 'Notice Update Successfully ');
        return Redirect()->route('admin.add_notice')->with('success', 'Notice Edit successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Notification::findorFail($id);
        $data->delete();
        return Redirect()->route('admin.add_notice')->with('success', 'Notice delete successfully.');
    }

    
    public function upload(Request $request)
    {
        if($request->hasFile('upload')) {
            //get filename with extension
            $filenamewithextension = $request->file('upload')->getClientOriginalName();
      
            //get filename without extension
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
      
            //get file extension
            $extension = $request->file('upload')->getClientOriginalExtension();
      
            //filename to store
            $filenametostore = $filename.'_'.time().'.'.$extension;
      
            //Upload File
            $request->file('upload')->storeAs('public/uploads', $filenametostore);
 
            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('storage/uploads/'.$filenametostore);
            $msg = 'Image successfully uploaded';
            $re = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";
             
            // Render HTML output
            @header('Content-type: text/html; charset=utf-8');
            echo $re;
        }
    }
}