<?php

namespace App\Http\Controllers\Admin;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\User;
use Redirect;
use Session;
use DB;


class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        $data = User::orderBy('id', 'DESC')->paginate(5);
        return view('usermanagement.dashboard', compact('data'));
}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("usermanagement.create");
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
            'names'=>'required',
            'email'=>'required',
            'password' => 'required',
             ]);
            $roll=$request->roll;
            if($roll=='Manager')
            {
            $data = new User;
            $data->names       = Input::get('names');
            $data->email      = Input::get('email');
            $data->name       = Input::get('roll');
            $data->password =   Hash::make($request->password);
            $data->role_id = "2";
            $data->save();
            }
            if($roll=='Teacher')
            {
            $data = new User;
            $data->names       = Input::get('names');
            $data->email      = Input::get('email');
            $data->name       = Input::get('roll');
            $data->password =   Hash::make($request->password);
            $data->role_id = "3";
            $data->save();
            }
            if($roll=='Student')
            {
            $data = new User;
            $data->names       = Input::get('names');
            $data->email      = Input::get('email');
            $data->name   = Input::get('roll');
            $data->password   = Hash::make($request->password);
            $data->role_id = "4";
            $data->save();
            }   
           return redirect()->route('admin.dashboard')->with('success', 'User Added successfully.');
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
        $data = User::find($id);
       
        $ex=$data->name;


        // laravel docs
        

       $role=   DB::table('users')
              ->whereNotIn('name', [$ex])
              ->pluck('name');
              
              $rolls=DB::table('roles')
              ->whereIn('role_name',  $role)
              ->pluck('role_name');
                
        return view('usermanagement.edit', compact('data','rolls'));
    
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
        [
            'names'       => 'required',
            'email'      => 'required',
            'password'   => 'required',        
             ];
             $roll=$request->roll;
             if($roll=='Manager')
             {
             $data = User::find($id);
             $data->names       = Input::get('names');
             $data->email      = Input::get('email');
             $data->name      = Input::get('roll');
             $data->password =   Hash::make($request->password);
             $data->role_id = "2";
             $data->save();
             }
             if($roll=='Teacher')
             {
             $data = User::find($id);
             $data->names       = Input::get('names');
             $data->email      = Input::get('email');
             $data->name      = Input::get('roll');
             $data->password =   Hash::make($request->password);
             $data->role_id = "3";
             $data->save();
             }
             if($roll=='Student')
             {
             $data = User::find($id);
             $data->names       = Input::get('names');
             $data->email      = Input::get('email');
             $data->name      = Input::get('roll');
             $data->password =   Hash::make($request->password);
             $data->role_id = "4";
             $data->update();
             }
        
        Session::flash('message', 'User Update Successfully');
        return redirect()->route('admin.dashboard')->with('success', 'User Edit successfully.');      
    }
    // public function update(Request $request,$id)
    // {
    //     log::info($request);
    //     $request->validate([
    //         'name'=>'required',
    //         'email'=>'required',
    //         'password'=>'required',
    //         'role_id'=>'required',
    //       ]);
    //       log::info($request);
    //       $data = User::where('id', '=', $id)->first();
          
    //                $data->name       =  $request->name;
    //                $data->email      =  $request->email;
    //                $data->password =   Hash::make($request->password);
    //                $data->role_id = $request->role_id;
    //                $data->save();

    //         Session::flash('message', 'User Update Successfully ');
    //         return Redirect::to('admin/dashboard')->with('success', 'User Edit successfully.');
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = User::findorFail($id);
        $data->delete();
        return redirect()->route('admin.dashboard')->with('success','User is successfully Deleted');
    }
}
