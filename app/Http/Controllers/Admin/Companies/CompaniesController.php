<?php

namespace App\Http\Controllers\Admin\Companies;
use DB;
use Redirect;
use Auth;
use App\User;
use App\Companies;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CompaniesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    //--------------------list of all the companies-------------------- 
   public function index()
   {
       $companies = Companies::latest('id', 'desc')->get();           
       return view('admin.companies.index',array('page_title'=>"Admin Dashboard Companies",'companies'=>$companies));
       
   }
   
   //---------------------add new company----------------------------
   public function addCompany(Request $request)
   {
       if($request->get('company_name')) {      
           $company = Companies::where('company_name' , '=', $request->get('company_name'))->first();  //--get coupon by coupon code--//
          if($company==NULL  OR $company->company_name!=$request->get('company_name'))
          {    
            $companies = new Companies();
            $companies->company_name  = $request->input('company_name');        
            $companies->created_at      = date("Y-m-d H:i:s");
            $companies->updated_at     = date("Y-m-d H:i:s");
            $companies->save();
            return Redirect::back()->withMessage('Comapny Successfuly Created.'); 
          }else
          {                    
            return Redirect::back()->withMessage('Error occured Company Already Exists!'); 
          }
        }
       
   }
   
   //----------------------update update Company-----------------------
   public function updateCompany(Request $request)
   {
       $companies = Companies::find($request->input('company_id'));
        if($companies)
        {            
            $companies->company_name  = $request->input('company_name');        
            $companies->updated_at     = date("Y-m-d H:i:s");
            $companies->save();
           return Redirect::back()->withMessage('Company Successfuly Updated.');
        }else
        {
           return Redirect::back()->withMessage('Error Occured Try again later.'); 
        }
   }
   
   //---------------------delete Company-------------------------------
   public function destroy($company_id)
   {
         $companies = Companies::find($company_id);   
         $companies->delete();     
         return Redirect::back()->withMessage('Company Successfuly deleted.'); 
   }
}
