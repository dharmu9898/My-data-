<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HtmlController extends Controller
{
    public function home(){
        $names=["Sanjay", "dharmu", "Sam"];
        return view("html.home",compact("names"));

    }
    public function about(){
        return view("html.about");

    }
    public function portfolio(){
        return view("html.portfolio");
    }
    public function features(){
        return view("html.features");

    }
    public function contact(){
        return view("html.contact");

    } 
}
