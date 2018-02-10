<?php

namespace App\Http\Controllers;

use DB;
use Redirect;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class PagesController extends Controller
{
    public function homeVersion()
    {
    	$home = 'home';
      return view('pages.'.$home);
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

    public function faredetails(){
        $faredetails = 'faredetails';
        return view('pages.'.$faredetails);
    }

    public function booking(){
        $booking = 'booking';
        return view('pages.'.$booking);
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
}