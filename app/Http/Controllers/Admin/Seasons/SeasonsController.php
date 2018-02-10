<?php

namespace App\Http\Controllers\Admin\Seasons;
use Illuminate\Support\Facades\DB;
use Auth;
use App\Companies;
use App\Cities;
use App\Seasons;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;

class SeasonsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    //--------------------list of all the Seasons-------------------- 
   public function index()
   {
       $seasons = DB::table('camp_season')
            ->join('camp_city', 'camp_city.id', '=', 'camp_season.city_id')
            ->join('camp_company', 'camp_company.id', '=', 'camp_season.company_id')
            ->select('camp_season.id','camp_season.season_name','camp_season.start_date','camp_season.end_date','camp_season.company_id', 'camp_city.city_name', 'camp_company.company_name')
            ->get();   
       
       return view('admin.seasons.index',array('page_title'=>"Admin Dashboard Seasons",'seasons'=>$seasons));
   }
   
   //-------------------------Add New Season form-------------------------
   public function addSeason()
   {
       $cities    = Cities::OrderBy('id','desc')->get();
       $companies = Companies::OrderBy('id','desc')->get();
       return view('admin.seasons.create',array('page_title'=>"Admin Dashboard Create Season",'cities'=>$cities,'companies'=>$companies));
       
   }
   
   //----------------------------save in database--------------------------
   public function create(Request $request)
   {
       $season = new Seasons();
       $season->city_id         = $request->input('city_id');
       $season->company_id      = $request->input('company_id');
       $season->season_name	= $request->input('season_name');
       $season->start_date      = date("Y-m-d H:i:s", strtotime($request->input('start_date')));
       $season->end_date        = date("Y-m-d H:i:s", strtotime($request->input('end_date')));
       $season->created_at      = date("Y-m-d H:i:s");
       $season->updated_at      = date("Y-m-d H:i:s");
       $season->save();
       return redirect('admin/seasons')->withMessage('Season Successfuly Created.');       
   }
   
   //--------------------------update Season form--------------------------
   public function updateSeason($season_id)
   {
       $season    = Seasons::find($season_id);
       $cities    = Cities::OrderBy('id','desc')->get();
       $companies = Companies::OrderBy('id','desc')->get();
       return view('admin.seasons.edit',array('page_title'=>"Admin Dashboard Edit Season",'cities'=>$cities,'companies'=>$companies,'season'=>$season));
       
   }
   //--------------------------update season------------------------------
   public function update(Request $request)
   {
       $season = Seasons::find($request->input('season_id'));
       if($season)
       {
           $season->city_id         = $request->input('city_id');
           $season->company_id      = $request->input('company_id');
           $season->season_name     = $request->input('season_name');
           $season->start_date      = date("Y-m-d H:i:s", strtotime($request->input('start_date')));
           $season->end_date        = date("Y-m-d H:i:s", strtotime($request->input('end_date')));           
           $season->updated_at      = date("Y-m-d H:i:s");
           $season->save();
           return redirect('admin/seasons')->withMessage('Season Successfuly updated.');   
       }else
       {
           return redirect('admin/seasons')->withMessage('Season does not exists.');    
       }
       
   }
   
   //-------------------------------delete season------------------------
   public function destroy($season_id)
   {
       
   }
   
   //------------------------get companies by cities--------------------
   public function getCompaniesByCity(Request $request)
   {
       $city_id = $request->input('city_id');
       $companies = DB::table('camp_company_cities')
            ->join('camp_city', 'camp_city.id', '=', 'camp_company_cities.city_id')
            ->join('camp_company', 'camp_company.id', '=', 'camp_company_cities.company_id')
            ->select('camp_company_cities.id','camp_company_cities.city_id','camp_company_cities.company_id', 'camp_city.city_name', 'camp_company.company_name')->where('camp_company_cities.city_id','=',$city_id)
            ->get();   
      if($companies)
      {
          return response()->json($companies);
      }else
      {
          return '';
      }
       
       
   }
   
   
   public function getCompaniesCity(Request $request)
   {
       print_r("hi");
   }
   
}
