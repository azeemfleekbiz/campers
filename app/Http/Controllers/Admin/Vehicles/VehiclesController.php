<?php

namespace App\Http\Controllers\Admin\Vehicles;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Vehicles;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VehiclesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    //-------------------------------list of all vehicles----------------------
    public function index()
    {
        
    }
    
    //------------------------------add new vehicle form----------------------------
    public function addVehicle()
    {
        
    }
    
    //----------------------------save vehicle in database---------------------------
    public function create(Request $request)
    {
        
    }
    
    //----------------------------update vehicle form--------------------------------
    public function updateVehicle()
    {
        
    }
    
    //-------------------------update vehicle database------------------------------
    public function update()
    {
        
    }
    
    //-----------------------------delete vehicle-----------------------------------
    public function destroy()
    {
        
    }
}
