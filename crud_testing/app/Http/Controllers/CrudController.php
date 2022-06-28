<?php
namespace App\Http\Controllers;
use Session;
use App\Crud;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use DB;

class CrudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Crud::orderBy('id', 'DESC')->paginate(5);
        return view('crud.dashboard',compact('data'));
    }


    function search(Request $request){
        if($request->ajax()){ 
              $manual_filter_tablesm = $request->get('manual_filter_tablesm');
              $manual_filter = $request->get('manual_filter_table');
            
              $mfiltersm = str_replace("","%",$manual_filter_tablesm);
              if($manual_filter != null){ 
                  $data = DB::table('cruds')
                      ->Where('cruds.class', $manual_filter) 
                     ->orderBy('cruds.id', 'DESC')
                     ->paginate(5); 
                     }   else{
                      $data = DB::table('cruds')
               ->Where('cruds.first_name', 'like', '%'.$mfiltersm.'%') 
               ->orWhere('cruds.last_name', 'like', '%'.$mfiltersm.'%') 
               ->orWhere('cruds.email', 'like', '%'.$mfiltersm.'%') 
               ->orWhere('cruds.class', 'like', '%'.$mfiltersm.'%') 
               ->orWhere('cruds.roll', 'like', '%'.$mfiltersm.'%') 
                  ->orderBy('cruds.id', 'DESC')
                  ->paginate(5); 
                }  
        
                return view('crud.paginated_data', compact('data'))->render();        
         }
       }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('crud.create');
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
            'first_name'=>'required',
            'last_name'=>'required',
            'email'=>'required',
            'class'=>'required',
            'roll'=>'required',
            
             ]);
            // store
            $data = new Crud;
            $data->first_name = Input::get('first_name');
            $data->last_name      = Input::get('last_name');
            $data->email      = Input::get('email');
            $data->class      = Input::get('class');
            $data->roll      = Input::get('roll');
            $data->save();

            // redirect
            
            return Redirect()->route('dashboard')->with('success', 'Course Added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\crud  $crud
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Crud::find($id);
        return view('crud.show',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\crud  $crud
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Crud::find($id);
        return view('crud.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\crud  $crud
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $this->validate($request,[
            "first_name"=>"required",
            "last_name"=>"required",
            "email"=>"required",
            "class"=>"required",
            "roll"=>"required"

        ]);
        
        $data = Crud::find($id);
        $data->first_name       = Input::get('first_name');
        $data->last_name      = Input::get('last_name');
        $data->email       = Input::get('email');
        $data->class      = Input::get('class');
        $data->roll       = Input::get('roll');
        $data->save();
    
        Session::flash('message', 'Course Update Successfully ');
        return redirect()->route('dashboard')->with('success', 'Data Update Successfully.');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\crud  $crud
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Crud::find($id);
        $data->delete();
        return redirect()->route('dashboard')->with('success', 'Data Deleted Successfully.');
    }
}