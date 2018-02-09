<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Companies extends Model
{
    protected $table = 'camp_company';
    protected $primaryKey = 'id';
    protected $fillable   = ['company_name'];   
    protected $company_name;
    protected $created_at;
    protected $updated_at;
    public $timestamps = false; // for false updated_at and created_at
}
