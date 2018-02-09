<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipments extends Model
{
    protected $table = 'camp_equipment';
    protected $primaryKey = 'id';
    protected $fillable   = ['name','amount'];   
    protected $name;
    protected $amount;
    protected $created_at;
    protected $updated_at;
    public $timestamps = false; // for false updated_at and created_at
}
