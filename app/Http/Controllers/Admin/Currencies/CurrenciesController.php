<?php

namespace App\Http\Controllers\Admin\Currencies;

use DB;
use Redirect;
use Auth;
use App\User;
use App\Currencies;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CurrenciesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
   //--------------------list of all the currency-------------------- 
   public function index()
   {
       $currencies = Currencies::latest('currency_id', 'desc')->get();
       return view('admin.currencies.index',array('page_title'=>"Admin Dashboard Currencies",'currencies'=>$currencies));
   }
   
   //---------------------add new currency----------------------------
   public function addCurrency(Request $request)
   {
       
   }
   
   //----------------------update update currency-----------------------
   public function updateCurrency(Request $request)
   {
       
   }
   
   //---------------------delete currency-------------------------------
   public function destroy($currency_id)
   {
       
   }
}
