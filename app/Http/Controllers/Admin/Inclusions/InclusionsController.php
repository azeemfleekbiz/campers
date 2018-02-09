<?php

namespace App\Http\Controllers\Admin\Inclusions;
use Redirect;
use Auth;
use App\Inclusions;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

class InclusionsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //--------------------list of all the inclusions-------------------- 
   public function index()
   {
       $inclusions = Inclusions::latest('id', 'desc')->get();           
       return view('admin.inclusions.index',array('page_title'=>"Admin Dashboard Inclusions",'inclusions'=>$inclusions));
   }
   
   //---------------------add new inclusions----------------------------
   public function addInclusion(Request $request)
   {
       if($request->get('category_name')) {      
           $category = Inclusions::where('category_name' , '=', $request->get('category_name'))->first();  //--get coupon by coupon code--//
          if($category==NULL  OR $category->category_name!=$request->get('category_name'))
          {    
            $category = new Inclusions();
            $category->category_name  = $request->input('category_name');        
            $category->created_at      = date("Y-m-d H:i:s");
            $category->updated_at     = date("Y-m-d H:i:s");
            $category->save();
            return Redirect::back()->withMessage('Category Successfuly Created.'); 
          }else
          {                    
            return Redirect::back()->withMessage('Error occured Category Name Already Exists!'); 
          }
        }
   }
   
   //----------------------update update inclusions-----------------------
   public function updateInclusion(Request $request)
   {
       if($request->get('category_name')) {      
           $category = Inclusions::where('category_name' , '=', $request->get('category_name'))->first();  //--get coupon by coupon code--//
          if($category==NULL  OR $category->category_name!=$request->get('category_name'))
          {    
            $category = new Inclusions();
            $category->category_name  = $request->input('category_name');        
            $category->created_at      = date("Y-m-d H:i:s");
            $category->updated_at     = date("Y-m-d H:i:s");
            $category->save();
            return Redirect::back()->withMessage('Inclusions Successfuly Created.'); 
          }else
          {                    
            return Redirect::back()->withMessage('Error occured Category Name Already Exists!'); 
          }
        }
   }
   
   //---------------------delete inclusions-------------------------------
   public function destroy($inclusion_id)
   {
         $inclusion = Inclusions::find($inclusion_id);   
         $inclusion->delete();     
         return Redirect::back()->withMessage('Inclusions Successfuly deleted.'); 
   }
}
