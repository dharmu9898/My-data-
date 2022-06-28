<?php

namespace App\Http\Controllers\Institutes;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Validator;
use App\InstituteProfile;
use Illuminate\Support\Facades\Input;
use Redirect;
use Session;
use Auth;

class InstituteProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {       
        return view('institute.profile');
    }

    

    public function store(Request $request , $id){
    
        $request->validate([
        'filename' =>'required',
        'filename.*'  =>'image|mimes:jpeg,png,jpg,gif,svg|max:3048',
        
        'full_address'       => 'required',
        'phone_number'      => 'required|unique:institute_profiles',
        'description'       => 'required',
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
   
   
    $store = User::find($id);    
    $store->full_address = $request->get('full_address');
    $store->phone_number = $request->get('phone_number');    
    $store->description = $request->get('description'); 
    $store->filename = json_encode($data);
    $store->save();   
     // redirect
    
    return redirect()->route('institutes.dashboard')->with('success', 'Data Added successfully.');
 }




    // // testing close


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
    public function profileedit($id)
    {
        $user = User::find($id);
        return view('institute.profileedit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function profileupdate(Request $request, $id)
    {
        $this->validate($request, [
            "name"=>"required|max:35",
            'phone_number'=>'required|max:10',
            'full_address'=>'required',
            'description'=>'required',
             ]);

        $profileupdate =  User::find($id);
        $profileupdate->name = $request->get('name');
        $profileupdate->phone_number = $request->get('phone_number');
        $profileupdate->full_address = $request->get('full_address');
        $profileupdate->description = $request->get('description');
        $profileupdate->save();
        return redirect()->route('institutes.dashboard')->with('success', 'Profile Updated Successfully.');
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
