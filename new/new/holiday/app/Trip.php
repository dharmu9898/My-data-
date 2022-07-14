<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\Log;
class Trip extends Model
{
    protected $fillable = ['id' ,'event_id','days','payment_terms','payment_mode','pay_cancel_policy','real_cost','discount','discount2','discount3','Night','price_title','currency','discountdate2','discountdate3','discountdate','cost3','cost','cost2','user_id','start_date','end_time','start_time','end_date','repetitive','merge_schedule','title','description','faq','thumbnail','poster','images','video_link','video','venue','address','category_id','category','featured','is_publishable','operator_email',
    'operator_name','slug','excerpt','currency_name','latitude','longitude','zipcode','country_id','flight','hotels','transfer','activity',
    'state_id','city_id','city','state','slug1','slug2','slug3','c_s_c_cat','country_state_city','country_state'];

    public function save_event($params = [], $event_id = null)
    {
       log::info('save_event');// if have no event id then create new event
       log::info($event_id);
       log::info($params);
       return Trip::updateOrCreate(
            ['id' => $event_id],
            $params
        );
    }
    public function get_user_event($event_id = null, $user_id = null)
    {
        return Trip::select('trips.*')->from('trips')
                    ->where(['id' => $event_id, 'user_id' => $user_id ])
                   
                    ->first();
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