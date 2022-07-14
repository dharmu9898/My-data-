<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\Log;
use Carbon\Carbon;
use Carbon\CarbonPeriod;
use App\Tax;
use App\Trip;
use App\Ticket_title;
use App\Discount_title;
use App\Currency;
use App\Discount;
use App\Week;
use DB;
class Ticket extends Model
{
    protected $fillable = ['id' ,'ticket_event_id','discount','discount2','discount3','discountdate','discountseconddate','discountthirddate','ticket_real_cost','ticket_discount','week','ticket_id','discount_id','ticket_currency','discount_week','user_id','ticket_title','ticket_price','quantity','operator_email','status'];

    public function save_event($params = [], $ticket_id = null)
    {

       $cur=$params['ticket_currency'];
     $curr_name =Currency::where('currency_id', $cur)->first();
     $currency_name=$curr_name->currencies;
       $tick_id= Ticket::where('ticket_event_id', $ticket_id)->first();
       log::info($ticket_id);
       log::info($tick_id);
         if($tick_id){
            log::info($ticket_id);
             log::info($tick_id);
             $trip_id=$tick_id->ticket_event_id;
             log::info($trip_id);
             Ticket::where('ticket_event_id', $trip_id)->delete();
            log::info('save_event ticket');// if have no event id then create new event
            log::info($ticket_id);
            log::info($params);
            $trip_id=$params['ticket_event_id'];
            log::info($trip_id);
          $trips=  Trip::where('id', $trip_id)->first();
          $publish=$trips->publish;
          log::info($publish);
            $date = Carbon::today()->toDateString();
                log::info($date);
                if($trips->cost>1 && $publish==1){ 
             
                }
                else{
                    Ticket::updateOrCreate(
                        ['id' =>$trip_id],
                        $params
                    );
            //   if($date<=$params['discountseconddate'])  {
            //     $update_trip= DB::table("trips")->where('id', $trip_id)->
            //     update(array('cost2' => $params['ticket_price'],'discount_id' => $params['discount_id'],'discountweek_id' => $params['discount_week'],'discount' => $params['ticket_discount'],'discount2' => $params['ticket_discount'],'discount3' => $params['ticket_discount'],'cost3' => $params['ticket_price'],'cost' => $params['ticket_price'],'discountdate' => $params['discountseconddate'],'discountdate2' => $params['discountseconddate'],'discountdate3' => $params['discountseconddate'],  'real_cost' => $params['ticket_real_cost'],'title_id' => $params['ticket_title'],'currency_id' => $params['ticket_currency'],'currency_name' => $currency_name ));
            //               return Ticket::Create(                   
            //          $params
            //      );
            //             }
        }
        }
            else{
    log::info('save_event ticket1');// if have no event id then create new event
    log::info($ticket_id);
    log::info($params);
    $trip_id=$params['ticket_event_id'];
    log::info($trip_id);
    $trips=  Trip::where('id', $trip_id)->first();

    $ticket=  Ticket::where('ticket_event_id', $trip_id)->first();

    $publish=$trips->publish;
    log::info($publish);
    if($trips->cost>1 && $publish==1){
        log::info('$if me aaya');         
    }

   

    else{
        log::info($ticket_id); 
        $mttick_id= Ticket::where('ticket_event_id', $ticket_id)->first();
      
        log::info('$else me aaya');  
     $update_trip= DB::table("trips")->where('id', $trip_id)->
    update(array('cost2' => $params['ticket_price'],'discount_id' => $params['discount_id'],'discountweek_id' => $params['discount_week'],'discount' => $params['ticket_discount'],'discount2' => $params['ticket_discount'],'discount3' => $params['ticket_discount'],'cost3' => $params['ticket_price'],'cost' => $params['ticket_price'],'discountdate' => $params['discountseconddate'],'discountdate2' => $params['discountseconddate'],'discountdate3' => $params['discountseconddate'],  'real_cost' => $params['ticket_real_cost'],'title_id' => $params['ticket_title'],'currency_id' => $params['ticket_currency'],'currency_name' => $currency_name ));
    return Ticket::Create(
             
        $params
    );
}
            }
      
    }
    public function save_event1($params1 = [])
    {
        $cur=$params1['ticket_currency'];
        $curr_name =Currency::where('currency_id', $cur)->first();
        $currency_name=$curr_name->currencies;
       log::info('save_event1');// if have no event id then create new event
       $trip_id=$params1['ticket_event_id'];
       log::info($params1);
       $trips=  Trip::where('id', $trip_id)->first();
      
       $update_trip= DB::table("trips")->where('id', $trip_id)->
       update(array('cost2' => $params1['ticket_price'],'discount2' => $params1['ticket_discount'],'discount3' => $params1['ticket_discount'],'cost3' => $params1['ticket_price'],'discountdate2' => $params1['discountseconddate'],'discountdate3' => $params1['discountseconddate'],  'real_cost' => $params1['ticket_real_cost'],'title_id' => $params1['ticket_title'],'currency_id' => $params1['ticket_currency'],'currency_name' => $currency_name ));
               

      
       return Ticket::updateOrCreate(
         
            $params1
        );
    
}
    public function save_event2($params2 = [])
    {
        $cur=$params2['ticket_currency'];
        $curr_name =Currency::where('currency_id', $cur)->first();
        $currency_name=$curr_name->currencies;
       log::info('save_event2');// if have no event id then create new event
       $trip_id=$params2['ticket_event_id'];
       log::info($params2);
       $trips=  Trip::where('id', $trip_id)->first();
     
       $update_trip= DB::table("trips")->where('id', $trip_id)->
       update(array('cost3' => $params2['ticket_price'],'discount3' => $params2['ticket_discount'],'discountdate3' => $params2['discountseconddate'],  'real_cost' => $params2['ticket_real_cost'],'title_id' => $params2['ticket_title'],'currency_id' => $params2['ticket_currency'],'currency_name' => $currency_name ));
       
       return Ticket::updateOrCreate(
           
            $params2
        );
    
}
    public function get_event_tickets($params = [])
    {
        log::info('yanha get_event_tickets');
        log::info($params);
        
        if(!empty($params['ticket_ids']))
        {
            $result = Ticket::
                   where('event_id', $params['event_id'])
                    ->orderBy('price')
                    ->get();
        }
        else
        {
            $result = Ticket::where(['event_id' => $params['event_id'] ])
                ->orderBy('price')
                ->get();
        }
            
        return $result;
    }

    public function get_user_events($event_id = null, $user_id = null)
    {
        return Trip::select('trips.*')->from('trips')
                    ->where(['id' => $event_id, 'user_id' => $user_id ])
                   
                    ->first();
    }
    function user()
    {
        return $this->belongsTo(User::class);
    }
}
