<?php

namespace App\Http\Controllers\Api;

use App\Qa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use App\Http\Resources\QaResource;
use Illuminate\Support\Facades\Validator;


class MyQaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
         Log::info('ye h store function Qa ka ');
         Log::info ($request);
        $input = $request->all();
        // Log::info($input);
        $validator = Validator::make($input, [
            'trainer_list' =>'required|string',
            'title' => 'required|string',
            'url' =>'required|string',
            'status' =>'required|string',
            'description' =>'required|string',

            ]);
         if ($validator->fails()) {
            $response = [
                'success' => false,
                'data'    => 'Validation Error.',
                'message' => $validator->errors()
            ];
            // Log::info('validation ok');
            return response()->json($response, 422);
        }
        else {
            $lower = strtolower($request->trainer_list);
            $trainer_list = str_replace(" ", "-", $lower);
            $trainer =str_replace(" ", "-", $lower);
            $qa = new Ticket;
            $qa->trainer_list = $trainer;
            $qa->url = $request->url;
            $qa->title = $request->title;
            $qa->status = $request->status;
            $qa->description = $request->description;
            $qa->save();
                
                $response = [
                    'success' => true,
                    //'data' => $data,
                    'data' => $qa,
                    'message' => 'Qa Fetching successfully.'
                ];
                return response()->json($response, 200);
        }
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\c  $c
     * @return \Illuminate\Http\Response
     */
    public function show(c $c)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\c  $c
     * @return \Illuminate\Http\Response
     */
    public function edit(c $c)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\c  $c
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, c $c)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\c  $c
     * @return \Illuminate\Http\Response
     */
    public function destroy(c $c)
    {
        //
    }
}
