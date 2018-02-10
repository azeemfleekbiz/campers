<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicles extends Model
{
    protected $table = 'camp_vechicle';
    protected $primaryKey = 'id';
    protected $fillable   = ['company_id','city_id','season_id','season_rate_id','v_name','v_person','v_age','v_type','v_engine','v_toll_fee','v_dep_fee','currency_id','category_id','v_images','equipments','service_id','inclusion_id'];   
    protected $v_name;
    protected $company_id;
    protected $city_id;
    protected $season_id;
    protected $season_rate_id;    
    protected $v_person;
    protected $v_type;
    protected $v_age;
    protected $v_engine;
    protected $v_toll_fee;
    protected $v_dep_fee;
    protected $currency_id;
    protected $category_id;
    protected $v_images;
    protected $equipments;
    protected $service_id;
    protected $inclusion_id;
    protected $status;    
    protected $created_at;
    protected $updated_at;
    public $timestamps = false; // for false updated_at and created_at
}
