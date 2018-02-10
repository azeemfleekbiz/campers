@include('include.head')
<div class="fare-banner">
<div class="container">
<div class="row">
<div class="col-md-12">
<h1>Fares</h1>
<p>Lorem ipsum dolor sit amet</p>
</div>
</div>
</div>
</div>
<form action="" method="post">
<div class="container-fluid">
<div class="container">
<div class="row" >
<div class="col-md-4 bg-success book-yourself">
<h3>INVOICE</h3>
<img class="center-block col-md-12 padding-zero img-responsive" src="assets/images/car-2.jpg">
<input type="hidden" name="vehicle_img" value="Britz 4x4 Trax Nissan Camper.png"/>
<h1 class="clearfix col-md-12">Bobocamper Discoverer 4</h1>
<input type="hidden" name="vehicle_title" value="Bobocamper Discoverer 4"/>
<table  class="table booking-yourself">
<tbody>
<tr>
<th>Country</th>
<td>USA</td>
</tr>                
<tr>
<th>From</th>
<td>Windhoek</td>
<td hidden><a href="#"><i  class="fa fa-pencil-square-o pull-right" aria-hidden="true"></i></a></td>
<input type="hidden" name="pick_loc" value="Windhoek"/>
</tr>
<tr>
<th>To</th>
<td>Johannesburg </td>
<td hidden><a href="#"><i hidden class="fa fa-pencil-square-o pull-right" aria-hidden="true"></i></a></td>
<input type="hidden" name="drop_loc" value="Johannesburg "/>
</tr>                
<tr>
<th>From</th>
<td>02/09/2018</td>
<td><a href="#"></a></td>
<input type="hidden" name="pick_date" value="02/09/2018"/>
</tr>                
<tr>
<th>Until</th>
<td>02/28/2018</td>
<td><a href="#"></a></td>
<input type="hidden" name="drop_date" value="02/28/2018"/>
</tr>   
<tr hidden>
<th>Vehicle</th>
<td>19</td>
<td><a href="#"><i class="fa fa-info-circle pull-right" aria-hidden="true"></i></a></td>
</tr>
<tr hidden>
<th>Company</th>
<td>19</td>
</tr>
<tr>
<td colspan="3" class="text-right"> <span class="badge badge-success"> </span> On Request <a href="#"><i class="fa fa-info-circle" aria-hidden="true" title="This is testing"></i></td>
</tr>
<tr>
<td colspan="3"> <hr> </td>
</tr>
<tr>
<td>Per Day Price</td>                            
<td colspan="2" class="text-right"><i class="fa fa-eur" aria-hidden="true"></i>2</td>
</tr>                
<tr>
<td>Rental Price</td>                           
<td colspan="2" class="text-right"><i class="fa fa-eur" aria-hidden="true"></i>38</td>
<input type="hidden" name="rent_price" value="38"/>
</tr>  
<tr>
<td colspan="1"><h4 class="rental-price">Rental Price<br>(payable upon booking)</h4></td>
<td colspan="2"><h4 class="rental-price"><i class="fa fa-eur pull-right" aria-hidden="true"> 38</i></h4></td>
<input type="hidden" name="rent_price_payble1" value="38"/>
</tr>  
<input type="hidden" name="one_way" value=""/>						
<tr class="equipment_ajax">
<td colspan="3"><h4 class="extra-charges"> Additional Services</h4></td>
</tr><tr class="space"><td colspan="2">Extra Driver Fee</td><td class="text-right">2</td></tr><input type='hidden' name='addl_services_title[]' value='Extra Driver Fee'/><input type='hidden' name='addl_services_fees[]' value='2'/>					
<tr>
<td colspan="3"> <hr> </td>
</tr>
<tr>
<td colspan="1"><h4 class="total-price">Total Price</h4></td>
<td colspan="2"><h4 class="margin_zero text-right"><i class="fa fa-eur" aria-hidden="true"></i> 40</h4></td>
<input type="hidden" name="rent_price_payble" value="40"/>
</tr>
<tr>
<td colspan="3">A deposit of 20% is paypable at the time of the booking confirmation, the remaining balance 6 weeks prior to travel.</td>
</tr>
<tr>
<td colspan="3"> <hr> </td>
</tr>
<tr>
<td colspan="3"><h4 class="extra-charges"> Extra Charges </h4></td>
</tr>
<tr>
<td>Toll Fee</td>
<td colspan="2" class="text-right ">Approx. <i class="fa fa-eur" aria-hidden="true">
200</i></td>
<input type="hidden" name="toll_fee" value="200"/>
</tr>
<tr>
<td>Deployment Fee</td>
<td colspan="2" class="text-right ">Approx. <i class="fa fa-eur" aria-hidden="true"></i> 555</td>
<input type="hidden" name="deployment_fee" value="555"/>
</tr>
<tr>
<td colspan="2"><h4 class="rental-price">Total Extras<br>(payable locally)</h4></td>
<td><h4 class="rental-price"><i class="fa fa-eur pull-right" aria-hidden="true"> 755 </i></h4></td>
<input type="hidden" name="total_extras" value=""/>
</tr>
<tr>
<td colspan="3"><h4 class="extra-charges"> Fees and Taxes  </h4></td>
</tr>
<tr><td>Gauteng Road Tax</td><td colspan="2" class="text-right">Approx. <i class="fa fa-eur" aria-hidden="true"> 500</td><tr><td>CO2 Tax</td><td colspan="2" class="text-right">Approx. <i class="fa fa-eur" aria-hidden="true"> 111</td>					<tr>
<td colspan="3"> <hr> </td>
</tr>
<tr>
<td colspan="2"><h4 class="rental-price">Directly Payable to the <br>(Rental company)</h4></td>
<td class="width"><h4 class="rental-price"><i class="fa fa-eur pull-right" aria-hidden="true"> 611 </i></h4></td>
</tr>
</tbody>
</table>
</div>
<div class="col-md-8 booking-form">
<h3>Book Yourself</h3>
<form method="post">
<div class="form-group">
<label class="control-label" for="select" placeholder="Select">Salutation</label>
<select class="select form-control" id="select" name="salutation">
<option value="First Choice">Mr.</option>
<option value="Second Choice">Ms.</option>
<option value="Third Choice">Mrs.</option>
</select>
</div>
<div class="form-group">
<label class="control-label" for="name">First Name</label>
<input class="form-control" id="name" name="f_name" type="text" placeholder="First Name" />
</div>
<div class="form-group">
<label class="control-label" for="name1">Last Name</label>
<input class="form-control" id="name1" name="l_name" type="text" placeholder="Last Name"/>
</div>
<div class="form-group">
<label class="control-label " for="date">Date of Birth</label>
<input class="form-control" id="date" name="dob" placeholder="Select" type="date"/>
</div>
<div class="form-group">
<label class="control-label" for="text">Address</label>
<input class="form-control" id="text" name="address1" placeholder="Strassse/Hausnummer" type="text"/>
</div>
<div hidden class="form-group">
<label class="control-label" for="text1">Address 2</label>
<input class="form-control" id="text1" name="address2" placeholder="Enter Your Home Address" type="text"/>
</div>
<div class="form-group col-md-4 padding-left">
<label class="control-label" for="text2">Postal Code</label>
<input class="form-control" id="text2" name="postal_code" type="text" placeholder="Postal Code"/>
</div>
<div class="form-group col-md-4">
<label class="control-label" for="text3">City</label>
<input class="form-control" id="text3" name="city" type="text" placeholder="Enter City" />
</div>
<div class="form-group col-md-4 padding-right">
<label class="control-label" for="country">Country</label>
<input class="form-control" id="text3" name="country" type="text" placeholder="Enter Country" />
</div>
<div class="form-group">
<label class="control-label" for="tel">Telephone</label>
<input class="form-control" id="tel" name="tel" type="text"/>
</div>
<div class="form-group">
<label class="control-label requiredField" for="email">Email Address</label>
<input class="form-control" id="email" name="email" type="text"/>
</div>
<div>
<label class="control-label requiredField" for="email">Confirm Email Address<span class="asteriskField">*</span></label>
<input class="form-control" id="email" name="email_confirm" type="text"/>
</div>
<hr>
<h3>Further travellers</h3>
<div class="form-group col-md-4 padding-left">
<label class="control-label" for="select" placeholder="Select">Salutation</label>
<select class="select form-control" id="select" name="select">
<option value="First Choice">First Choice</option>
<option value="Second Choice">Second Choice</option>
<option value="Third Choice">Third Choice</option>
</select>
</div>
<div class="form-group col-md-4">
<label class="control-label" for="name">First Name</label>
<input class="form-control" id="name" name="name" type="text" placeholder="Enter first name" />
</div>
<div class="form-group col-md-4 padding-right">
<label class="control-label" for="name1">Last Name</label>
<input class="form-control" id="name1" name="name1" type="text" placeholder="Enter first name"/>
</div>
<input type="checkbox" name=""> Child under 12 years old (at the beginning of the travel)
<hr>
<h4><input type="checkbox" name="" required> This booking is possible subject to availability of the vehicle.</h4>
<p>Availability of the required Motorhome can only be confirmed after consulting with the rental company. We will pass on your booking request to the rental company immediately (during our office hours) as soon as we receive your online booking request.<br>
Depending on your travel destination it might take up to 3 working days until we receive an answer from the rental company. Our service team will inform you immediately if your booking request was successfull.</p>

<p>If for some reason the vehicle or services you would like to book are not available and cannot be confirmed, no payment will be charged to your credit card and you will receive a non-binding alternative offer from us.</p>
<div class="form-group pull-right">
<button class="btn btn-primary" name="submit" type="submit">Continue</button>
</div>
</form>
</div>
</div>
</div>
</div>
</form>
@include('include.footer')