<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Arr;
use App\Iternary_day;
class Iternary extends Model
{

    protected $table = 'iternary';
    protected $fillable = ['days','trip_id','title','status','location','description','operator_email','operator_id'];

    public function save_event($params = [], $trip_id = null)
    {
       log::info('iternary my save_event');// if have no event id then create new event
       log::info($trip_id);
       log::info($params);
       $widget_id = str_replace(array('[',']'), '',$params['days']);
       $explode_id = explode(',', $widget_id);
       log::info($explode_id);
       $get_days= Iternary_day::whereIn('id',$explode_id)->pluck('days');
        $dayss= Trip::where('id',$trip_id)->first();
       $days=$dayss->days;
       $user_id= $dayss->user_id;
       log::info($user_id);
       $status=$dayss->status;
       $title=$dayss->title;
        $op_mail=$dayss->operator_email;
        $op_mail=$dayss->operator_email;
       
       $myid= Iternary::where('trip_id',$trip_id)->pluck('trip_id');
       
       if(!$myid->isEmpty())
       {
            $myticketid=$params['id'];
       
        if($myticketid)
        {
            if(!$params['days'])
       {
             $itr=Iternary::where('id', $myticketid)->update(array('location' => $params['location'],'description' => $params['description']));
         }
       else{  
        log::info('outer else');
        Iternary::where('id', $myticketid)->delete();
     Iternary::where('trip_id', $trip_id)
->where(function ($query) use ($get_days) {
 $query->whereIn('days',$get_days);
 
})->delete();
            foreach ($get_days as $myday) {

                Iternary::create(['days' => $myday,'title' => $title, 'trip_id' => $trip_id,'location' => $params['location'],
                'description' => $params['description'],'operator_email' => $op_mail,'status' => $status]);
          
    
        }  
    } 
       
        
    }
    
    else{
       
        foreach ($get_days as $myday) {
           
            Iternary::create(['days' => $myday,'title' => $title, 'trip_id' => $trip_id,'location' => $params['location'],
            'description' => $params['description'],'operator_email' => $op_mail,'status' => $status]);
      

    }
       }
    
    }
       else{
        foreach ($get_days as $myday) {
            Iternary::create(['days' => $myday,'title' => $title, 'trip_id' => $trip_id,'location' => $params['location'],
            'description' => $params['description'],'operator_email' => $op_mail,'status' => $status]);
          }
    }
}  
    function user()
    {
        return $this->belongsTo(User::class);
    }
}
