<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class htmlController extends Controller
{
    public function Home(){
            return view("html.home");
        }
        public function About(){
            return view("html.about");
    }
        public function Portfolio(){
            return view("html.portfolio");
    }
        public function Features(){
            return view("html.features");
    }
        public function Contact(){
            return view("html.contact");
    }
}