<?php



namespace App\Http\Controllers\Manager;

use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\User;
use Redirect;
use Session;
use App\Admin;


class DashboardController extends Controller
{
    public function index()
    {
    
        return view('manager.dashboard');
    }  
}
