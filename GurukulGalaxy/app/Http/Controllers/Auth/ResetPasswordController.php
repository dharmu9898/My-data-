<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Foundation\Auth\ResetsPasswords;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        if(Auth::check() && Auth::user()->role_id == 1){
            $this->redirectTo = route('admin.dashboard');
        } elseif(Auth::check() && Auth::user()->role_id == 2){
            $this->redirectTo = route('manager.dashboard');
        } elseif(Auth::check() && Auth::user()->role_id == 3){
            $this->redirectTo = route('teacher.dashboard');
        } else{
            $this->redirectTo = route('student.dashboard');
        }
        
       
        $this->middleware('guest')->except('logout');
    }
}
