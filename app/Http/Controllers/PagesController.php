<?php

namespace App\Http\Controllers;

use DB;
use Redirect;
use App\Cities;
use App\Vehicles;
use App\Inclusions;
use App\Equipments;
use App\AdditionalServices;
use App\Companies;
use App\SeasonsPrices;
use App\BookingOrders;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class PagesController extends Controller
{
    public function homeVersion()
    {
      $home = 'home';
      $cities = DB::table('camp_city')->get();
      $vehicles = Vehicles::OrderBy('id','desc')->where('is_featured','yes')->take(3)->get();    
      return view('pages.'.$home)->with('cities',$cities)->with('vehicles',$vehicles);
    }

    public function satellitephone(){
    	$satellite = 'satelitephone';
    	return view('pages.'.$satellite);
    }

    public function tavelinsurance(){
    	$tavelinsurance = 'travelinsurance';
    	return view('pages.'.$tavelinsurance);
    }

    public function payments(){
    	$payments = 'payments';
    	return view('pages.'.$payments);
    }

    public function contact(){
    	$contact = 'contact';
    	return view('pages.'.$contact);
    }

    public function search(){
        $search = 'search';
        return view('pages.'.$search);
    }

    public function faredetails($id){
        $vehicles = Vehicles::find($id);
        $inclusion_ids = explode(",", $vehicles->inclusion_id);
        $equipments = explode(",", $vehicles->equipments);
        $services = explode(",", $vehicles->service_id);  
        $inclusion = Inclusions::find($inclusion_ids);
        $equipment = Equipments::find($equipments);
        $service = AdditionalServices::find($services);
        $city = Cities::find($vehicles->city_id);
        $company = Companies::find($vehicles->company_id);
        $season = SeasonsPrices::find($vehicles->season_id);
        $faredetails = 'faredetails';
        return view('pages.'.$faredetails)->with('vehicles',$vehicles)->with('inclusion',$inclusion)->with('equipment',$equipment)->with('service',$service)->with('city',$city)->with('company',$company)->with('season',$season);
    }

    public function fare_addservices(Request $request){
       $arr=implode(',', $request->input("arr"));
       $sum = array_sum(explode(",", $arr));
       $amount=$request->input("amount");
       echo $sum + $amount;
    }

    public function booknow(Request $request){
        $booking = new BookingOrders();
        $booking->vechicle_id=$request->input("vehicle_id");
        $booking->services=$request->input("addl_service_array") ? implode(',', $request->input("addl_service_array")) : '';
        $booking->equipments=$request->input("equipment_array") ? implode(',', $request->input("equipment_array")) : '';
        $booking->totl_amount = $request->input("total_amount");
        $booking->created_at=date("Y-m-d H:i:s");
        $booking->updated_at=date("Y-m-d H:i:s");
        $booking->save();
        $bookingId = $booking->id;    
        return $bookingId;
    }

    public function booking($id){
        $bookingorder = BookingOrders::find($id);
        $vehicles = Vehicles::find($bookingorder->vechicle_id);
        $inclusion_ids = explode(",", $vehicles->inclusion_id);
        $equipments = explode(",", $vehicles->equipments);
        $services = explode(",", $vehicles->service_id);  
        $inclusion = Inclusions::find($inclusion_ids);
        $equipment = Equipments::find($equipments);
        $service = AdditionalServices::find($services);
        $city = Cities::find($vehicles->city_id);
        $company = Companies::find($vehicles->company_id);
        $season = SeasonsPrices::find($vehicles->season_id);
        $book_add_services = explode(",", $bookingorder->services);
        $book_addservice = AdditionalServices::find($book_add_services);
        $book_add_equip = explode(",", $bookingorder->equipments);
        $book_addequipment = Equipments::find($book_add_equip);
        $booking = 'booking';
        return view('pages.'.$booking)->with('vehicles',$vehicles)->with('inclusion',$inclusion)->with('equipment',$equipment)->with('service',$service)->with('city',$city)->with('company',$company)->with('season',$season)->with('bookaddservices',$book_addservice)->with('bookaddequipment',$book_addequipment)->with('bookings',$bookingorder);
    }

    public function ordernow(Request $request){
        
        $name=$request->input("name");
        $email=$request->input("email");
        $takedate=$request->input("takedate");
        $takeover_loc=$request->input("takeover_loc");
        $return_date=$request->input("return_date");
        $return_loc=$request->input("return_loc");
        $packages=$request->input("packages");

        // Send email
        // $message =  "";
        // $message .=  "<table>";
        // $message .=  "<tr>";
        // $message .=  "<td>Name</td><td>".$name."</td>";
        // $message .=  "</tr>";
        // $message .=  "<tr>";
        // $message .=  "<td>Email</td><td>".$email."</td>";
        // $message .=  "</tr>";
        // $message .=  "<tr>";
        // $message .=  "<td>Takeover date and time</td><td>".$takedate."</td>";
        // $message .=  "</tr>";
        // $message .=  "<tr>";
        // $message .=  "<td>Takeover location</td><td>".$takeover_loc."</td>";
        // $message .=  "</tr>";
        // $message .=  "<tr>";
        // $message .=  "<td>Return date and time</td><td>".$return_date."</td>";
        // $message .=  "</tr>";
        // $message .=  "<tr>";
        // $message .=  "<td>Return location</td><td>".$return_loc."</td>";
        // $message .=  "</tr>";
        // $message .=  "<tr>";
        // $message .=  "<td>Pre-paid packages</td><td>".$packages."</td>";
        // $message .=  "</tr>";
        // $message .=  "</table>";
        // $headers = "MIME-Version: 1.0" . "\r\n";
        // $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        // $headers .= 'From: Camper<info@camper.com>' . "\r\n";
        // $to = 'camper@yopmail.com';
        // $subject = "Order Now";
        // $mail = mail($to,$subject,$message,$headers);

        return 'done';
    }

    public function searchingForm(Request $request){
        $pick_loc=$request->input("pick_loc");
        $drop_loc=$request->input("drop_loc");
        $vehicles = Vehicles::OrderBy('id','desc')->where('city_id',$pick_loc)->orWhere('city_id', $drop_loc)->get(); 
        $search = 'search';
        return view('pages.'.$search)->with('vehicles',$vehicles);
    }
}