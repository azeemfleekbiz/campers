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
<div class="container-fluid">
<div class="container">
<div class="row" >
<div class="col-md-4 bg-success">
<h3>Invoice</h3>
<img class="center-block col-md-12 padding-zero" src="assets/images/car-1.jpg">
<h1 class="clearfix col-md-12">Britz 4x4 Trax Nissan Camper.png</h1>
<table class="table">
<tbody>
<tr>
<th>Country</th>
<td>USA</td>
</tr>                
<tr>
<th>From</th>
<td>Windhoek</td>
<td hidden><a href="#"><i  class="fa fa-pencil-square-o pull-right" aria-hidden="true"></i></a></td>
</tr>
<tr>
<th>To</th>
<td>Johannesburg </td>
<td hidden><a href="#"><i hidden class="fa fa-pencil-square-o pull-right" aria-hidden="true"></i></a></td>
</tr>                
<tr>
<th>From</th>
<td>02/09/2018</td>
<td><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-pencil-square-o pull-right" aria-hidden="true"></i></a></td>
</tr>                
<tr>
<th>Until</th>
<td>02/28/2018</td>
<td><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-pencil-square-o pull-right" aria-hidden="true"></i></a></td>
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
<td colspan="3" class="text-right"> <span class="badge badge-success"> </span> On Request <a href="#"><i class="fa fa-info-circle " aria-hidden="true"></i></td>
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
</tr>  
<tr>
<td colspan="1"><h4 class="rental-price">Rental Price<br>(payable upon booking)</h4></td>
<td colspan="2"><h4 class="rental-price"><i class="fa fa-eur pull-right" aria-hidden="true"> 38</i></h4></td>
</tr>                
<tr>
<td colspan="3"> <hr> </td>
</tr>
<tr>
<td colspan="1"><h4 class="total-price">Price</h4></td>
<td colspan="2"><h4 class="margin_zero text-right"><i class="fa fa-eur" aria-hidden="true"></i> 38</h4></td>
</tr>
<tr>
<td colspan="3">A deposit of 10% is payable at the time of the booking confirmation, the remaining balance 45 days prior to travel.</td>
</tr>
<tr>
<td colspan="3"><h4 class="extra-charges"> Extra Charges </h4></td>
</tr>
<tr hidden>
<td>Weekend OR Holiday supplement</td>                         
<td colspan="2" class="text-right">Approx. <i class="fa fa-eur" aria-hidden="true"> NIL</td>
</tr>
<tr>
<td>Toll Fee</td>                            
<td colspan="2" class="text-right">Approx. <i class="fa fa-eur" aria-hidden="true"> 200 </td>
</tr>
<tr>
<td>Deployment Fee</td>                           
<td colspan="2" class="text-right">Approx. <i class="fa fa-eur" aria-hidden="true"> 555</td>
</tr>
<tr>
<td colspan="3"> <hr> </td>
</tr>
<tr>
<td colspan="2"><h4 class="rental-price">Total Extras<br>(payable locally)</h4></td>
<td class="width"><h4 class="rental-price"><i class="fa fa-eur pull-right" aria-hidden="true"> 755 </i></h4></td>
</tr>
<tr>
<td colspan="3"><h4 class="extra-charges"> Fees and Taxes  </h4></td>
</tr>
<tr><td>Gauteng Road Tax</td><td colspan="2" class="text-right">Approx. <i class="fa fa-eur" aria-hidden="true"> 500</td><tr><td>CO2 Tax</td><td colspan="2" class="text-right">Approx. <i class="fa fa-eur" aria-hidden="true"> 111</td>
<tr>
<td colspan="3"> <hr> </td>
</tr>
<tr>
<td colspan="2"><h4 class="rental-price">Directly Payable to the <br>(Rental company)</h4></td>
<td class="width"><h4 class="rental-price"><i class="fa fa-eur pull-right" aria-hidden="true"> 611 </i></h4></td>
</tr>
<tr>
<td colspan="3"> 
<a class="btn btn-default col-md-12 btn-lg dropdown-toggle" href="javascript:void(0);">Book Now</a>
</td>
</tr>
<tr>
<td colspan="3">
<a class="btn btn-default col-md-12 btn-lg dropdown-toggle" href="javascript:void(0);">I have questions</a>
</td>
</tr>
</tbody>
</table>
</div>
<div class="col-md-6">
<div class="fare-div">
<h3>Fare</h3>
<ul hidden class="nav nav-tabs">
<li class="active"><a data-toggle="tab" href="#home">Standard Package</a></li>
<li><a data-toggle="tab" href="#menu1">All Inclusive Package</a></li>
</ul>
<div class="tab-content">
<div id="home" class="tab-pane fade in active">
<h2>Inclusions</h2><ul> <li><i class="fa fa-check" aria-hidden="true"> </i> Kompressor (nur Allrad Fahrzeuge)</li> </ul> 
<hr>							   
<form   action="" method="post">
<h2>Additional Service</h2>
<table class="table">
<tbody>
<input type="hidden" class="zar price" value="25"/><tr><td>Extra Driver Fee</td><td class='red text-center'> <i class="fa fa-eur" aria-hidden="true"></i> 2, Payable locally</td><td class='text-right'>
<input value='Extra Driver Fee:2'  name='addl_service[]' type='checkbox' />
</td></tr>											
</tbody>
</table>
<hr>
<h2>Equipment</h2>
<table class="table">
<tbody>
<tr><td>Camping table</td><td class='red text-center'><i class="fa fa-eur" aria-hidden="true"></i> 1, Payable locally</td><td class='text-right'>
<input value='Camping table:<i class="fa fa-eur" aria-hidden="true"></i> 1, Payable locally'  name='equipment[]' type='checkbox' />
</td></tr>										
</tbody>
</table>
<div class="text-right">
<input type="submit" class="btn btn-default  dropdown-toggl " id="update_invoice" value="Update Invoice"/>
</div>
</form>
</div>
<div id="menu11" class="tab-pane fade">
</div>
</div>
</div>
</div>
</div>
</div>
</div>
@include('include.footer')