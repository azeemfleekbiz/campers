<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seasons extends Model
{
    protected $table = 'camp_season';
    protected $primaryKey = 'id';
    protected $fillable   = ['company_id','city_id','season_name','start_date','end_date'];   
    protected $company_id;
    protected $city_id;
    protected $season_name;
    protected $start_date;
    protected $end_date;
    protected $created_at;
    protected $updated_at;
    public $timestamps = false; // for false updated_at and created_at
    
    
    //----------------relationship with Company--------------------------
    public function companyseason() 
    {
      return $this->belongsTo('App\Companies');
    } 
    
    //----------------relationship with Cities--------------------------
    public function citycompany() 
    {
      return $this->belongsTo('App\Cities');
    } 
    
    
}
