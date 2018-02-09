<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cities extends Model
{
    protected $table = 'camp_city';
    protected $primaryKey = 'id';
    protected $fillable   = ['city_name'];   
    protected $name;
    protected $created_at;
    protected $updated_at;
    public $timestamps = false; // for false updated_at and created_at
}
