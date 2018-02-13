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
<?php $imgs = explode(",",$vehicles->v_images); ?>
<img class="center-block col-md-12 padding-zero img-responsive" src="../public/uploads/vehicles/<?php echo $imgs[0]; ?>">
<input type="hidden" name="vehicle_img" value="Britz 4x4 Trax Nissan Camper.png"/>
<h1 class="clearfix col-md-12">{{$vehicles->v_name}}</h1>
<input type="hidden" name="vehicle_title" value="Bobocamper Discoverer 4"/>
<table  class="table booking-yourself">
<tbody>
<tr>
<th>Company</th>
<td>{{$company->company_name}}</td>
</tr>
<tr>
<th>City</th>
<td>{{$city->city_name}}</td>
</tr>
<tr>
<th>Person</th>
<td>{{$vehicles->v_person}}</td>
</tr>
<tr>
<th>From</th>
<td>{{$season->start_date}}</td>
</tr>                
<tr>
<th>Until</th>
<td>{{$season->end_date}}</td>
</tr>                
<tr>
<td colspan="3" class="text-right"> <span class="badge badge-success"> </span> On Request <i class="fa fa-info-circle " aria-hidden="true"></i></td>
</tr>
<tr>
<td colspan="3"> <hr> </td>
</tr>
<tr>
<td>Season</td>                            
<td colspan="2" class="text-right">{{$season->season_name}}</td>
</tr>                
<tr>
<td>Season Rental Price</td>                           
<td colspan="2" class="text-right"><i class="fa fa-eur" aria-hidden="true"></i>{{$season->season_rate}}</td>
</tr>  
<tr>
<td colspan="1"><h4 class="rental-price">Rental Price<br>(payable upon booking)</h4></td>
<td colspan="2"><h4 class="rental-price"><i class="fa fa-eur pull-right" aria-hidden="true"> {{$season->season_rate}}</i></h4></td>
</tr>                
<tr>
<td colspan="3"> <hr> </td>
</tr>
<?php if(isset($bookaddservices)): ?>
<tr class="equipment_ajax">
<td colspan="3"><h4 class="extra-charges"> Additional Services</h4></td>
</tr>	
<?php
foreach($bookaddservices as $bookadserv):
?>
<tr class="space">
<td colspan="2"><?php echo $bookadserv->name; ?></td>
<td class="text-right"><i class="fa fa-eur" aria-hidden="true"></i><?php echo $bookadserv->amount; ?></td>
</tr>		
<?php endforeach; endif; ?>
<?php if(isset($bookaddequipment)): ?>
<tr class="equipment_ajax">
<td colspan="3"><h4 class="extra-charges"> Additional Equipment</h4></td>
</tr>	
<?php
foreach($bookaddequipment as $bookequip):
?>
<tr class="space">
<td colspan="2"><?php echo $bookequip->name; ?></td>
<td class="text-right"><i class="fa fa-eur" aria-hidden="true"></i><?php echo $bookequip->amount; ?></td>
</tr>		
<?php endforeach; endif; ?>
<tr>
<td colspan="3"><h4 class="extra-charges"> Extra Charges </h4></td>
</tr>
<tr>
<td>Toll Fee</td>
<td colspan="2" class="text-right ">Approx. <i class="fa fa-eur" aria-hidden="true">
{{$vehicles->v_toll_fee}}</i></td>
</tr>
<tr>
<td>Deployment Fee</td>
<td colspan="2" class="text-right ">Approx. <i class="fa fa-eur" aria-hidden="true"></i> {{$vehicles->v_dep_fee}}</td>
</tr>
<tr>
<td colspan="2"><h4 class="rental-price">Total Extras<br>(payable locally)</h4></td>
<td><h4 class="rental-price"><i class="fa fa-eur pull-right" aria-hidden="true"> {{$bookings->totl_amount}} </i></h4></td>
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