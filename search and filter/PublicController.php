<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PublicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $allrequests = DB::table('requesthelps')
                        ->leftJoin('users', 'requesthelps.user_id', '=', 'users.id')
                        ->leftJoin('countries','requesthelps.country', '=', 'countries.country_id')
                        ->leftJoin('states','requesthelps.state', '=', 'states.state_id')
                        ->leftJoin('cities','requesthelps.city', '=', 'cities.city_id')
                        ->orderBy('requesthelps.request_id','desc')
                        ->paginate(10);
        return view('welcome', compact('allrequests'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $allrequests = DB::table('requesthelps')
                        ->leftJoin('users', 'requesthelps.user_id', '=', 'users.id')
                        ->leftJoin('countries','requesthelps.country', '=', 'countries.country_id')
                        ->leftJoin('states','requesthelps.state', '=', 'states.state_id')
                        ->leftJoin('cities','requesthelps.city', '=', 'cities.city_id')
                         ->where('requesthelps.request_id', $id)
                        ->first();

        return view('show', compact('allrequests'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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

    function fetch_concern_data(Request $request){
            if($request->ajax()){
                $manual_filter = $request->get('manual_filter_table');
                  $manual_filter_tablesm = $request->get('manual_filter_tablesm');
                
                $mfiltersm = str_replace("","%",$manual_filter_tablesm);
                if($manual_filter != null){  
                 $allrequests = DB::table('requesthelps')
                        ->join('users', 'requesthelps.user_id', '=', 'users.id')
                        ->join('countries','requesthelps.country', '=', 'countries.country_id')
                        ->join('states','requesthelps.state', '=', 'states.state_id')
                        ->join('cities','requesthelps.city', '=', 'cities.city_id')
                     ->Where('requesthelps.concern', $manual_filter) 
                     ->orWhere('requesthelps.country', $manual_filter)
                     ->orWhere('requesthelps.state', $manual_filter)
                     ->orWhere('requesthelps.city', $manual_filter)
                    ->orderBy('requesthelps.request_id', 'DESC')
                    ->paginate(10); 
                    }   else{
                    $allrequests = DB::table('requesthelps')
                        ->leftJoin('users', 'requesthelps.user_id', '=', 'users.id')
                        ->leftJoin('countries','requesthelps.country', '=', 'countries.country_id')
                        ->leftJoin('states','requesthelps.state', '=', 'states.state_id')
                        ->leftJoin('cities','requesthelps.city', '=', 'cities.city_id')
                       ->where('users.name', 'like', '%'.$mfiltersm.'%')
                     ->orWhere('requesthelps.concern', 'like', '%'.$mfiltersm.'%')                
                ->orWhere('countries.country_name', 'like', '%'.$mfiltersm.'%')
                ->orWhere('states.state_name', 'like', '%'.$mfiltersm.'%')
                ->orWhere('cities.city_name', 'like', '%'.$mfiltersm.'%')                
                ->select('users.name', 'countries.country_name', 'states.state_name', 'cities.city_name', 'requesthelps.*')               
                ->orderBy('requesthelps.request_id', 'DESC')
                ->paginate(10); 
               }  
                    return view('welcome_paginated_data', compact('allrequests'))->render();        
             }
           }
}
