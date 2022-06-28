<?php
 
namespace App\Http\home\Controllers;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index(){
        $users = ["Pradeep", "Ajay","dharmu", "Rakesh", "Sushant","Amardeep"];
        $name ="Online Web Tutor";

        // return view("index",array("users"=>$users, "name"=>$name));

        // return view("index",compact("users","name"));

        // return view("index")->with(["users"=>$users,"name"=>$name]);

        return view("index")->withUsers($users)->withName($name);
    }

    public function services(){
        return view("home.services");
    }

    public function products(){
        return view("home.products");
    }

    public function team(){
        return view("home.team");
    }
}