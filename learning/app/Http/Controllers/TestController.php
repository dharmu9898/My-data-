<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;

class TestController extends Controller
{

    

    public function queryrun(){
        // $data = DB::table("companies")->insert(
        //     [
        //         ["companies_name"=>"Youtube pvt ltd","email_id"=>"google@gmail.com"],
        //         ["companies_name"=>"Twitter pvt ltd","email_id"=>"you@gmail.com"],
        //         ["companies_name"=>"Fecebook","email_id"=>"dk@gmail.com"]
        //     ]
        //     );
        // echo $data;
        // $data = DB::table("companies")->orderBy("id","desc")->get();
        // print_r($data);
        // $data = DB::table("companies")->where("id",10)->get();
        // return view("test.query",compact("data"));

    //  echo $data = DB::table("companies")->where(["id"=>7])->delete();
    // echo $data = DB::table("companies")->where(["id"=>8])->update
    // (["companies_name"=>"Dharmu Enterprises",
    // "email_id"=>"dharmu78@gmail.com"]);
    // $data = DB::table("companies")->pluck("Companies_name");
    //         return view("test.query",compact("data"));
    // $data = DB::table("companies")->get();
    //         return view("test.query",compact("data")); 
    // $data = DB::table("companies")->delete();
    //         return view("test.query",compact("data"));
    // $data = DB::table("companies")->insert(
    //     [
    //         ["companies_name"=>"cotocus", "email_id"=>"cotocus@gmail.com","location"=>"bokaro"],
    //         ["companies_name"=>"cotocus1", "email_id"=>"cotocus1@gmail.com","location"=>"ranchi"],
    //         ["companies_name"=>"cotocus2", "email_id"=>"cotocus2@gmail.com","location"=>"dhanbad"]
    //     ]
    //     );
    //     return view("test.query",compact("data"));
    // $data = DB::table("companies")->get();
    //     return view("test.query",compact("data"));
    // $data = DB::table("companies")->orderBy("id","desc")->get();
    //  return view("test.query",compact("data"));
    // $data = DB::table("companies")->select("email_id","companies_name")->get();
    //     return view("test.query",compact("data"));
    // $data = DB::table("companies")->pluck("email_id");
    //  return view("test.query",compact("data"));
    // $data = DB::table("companies")->where("id",12)->update(["companies_name"=>"devops","email_id"=>"dharmu97898@gmail.com"]);
    //  return view("test.query",compact("data"));
    $data = DB::table("companies")->where("id",23)->delete();
        return view("test.query",compact("data"));
}
    
    
    
    
    public function conditional(){
        $name ="Online Web Tutoria";
        $names=["Sanjay","Rahul","dharmu","Sam"];
        return view ("test.conditional",compact("name","names"));
    }
}
    