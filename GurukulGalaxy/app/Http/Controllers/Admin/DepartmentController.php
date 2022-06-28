<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Departments;
use Illuminate\Support\Facades\Redirect;
use Session;
use DB;
use Log;


class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        $data = Departments::orderBy('id', 'DESC')->paginate(5);
        return view('department.add_department', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("department.create_department");
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
            'college_department'=>'required',
          
             ]);
            // store
            $data = new Departments;
            $data->college_department       = Input::get('college_department');
            $data->save();
            
          
           return redirect()->route('admin.add_department')->with('success', 'Department Added successfully.');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $data = Departments::find($id);
        return view('department.edit_department', compact('data'));

        
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
            'college_department'=>'required',
             ]);
        $data = Departments::find($id);
        $data->college_department = Input::get('college_department');
        $data->update();

        Session::flash('message', 'User Update Successfully');
        return redirect()->route('admin.add_department')->with('success', 'Department Edit successfully.');
             
    }
   
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Departments::findorFail($id);
        $data->delete();
        return redirect()->route('admin.add_department')->with('success','Department is successfully Deleted');
    }
}
