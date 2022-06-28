<?php

namespace App\Http\Controllers\Institutes;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index(){
 
        return view('institutes.dashboard');
    }
}
