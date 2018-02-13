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
<?php $imgs = explode(",",$vehicles->v_images); ?>
<img class="center-block col-md-12 padding-zero" src="../public/uploads/vehicles/<?php echo $imgs[0]; ?>">
<h1 class="clearfix col-md-12">{{$vehicles->v_name}}</h1>
<table class="table">
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
<tr>
<td colspan="1"><h4 class="total-price">Price</h4></td>
<td colspan="2"><h4 class="margin_zero text-right"><i class="fa fa-eur" aria-hidden="true"></i> {{$season->season_rate}}</h4></td>
</tr>
<tr>
<td colspan="3">A deposit of 10% is payable at the time of the booking confirmation, the remaining balance 45 days prior to travel.</td>
</tr>
<tr>
<td colspan="3"><h4 class="extra-charges"> Extra Charges </h4></td>
</tr>
<tr>
<td>Toll Fee</td>                            
<td colspan="2" class="text-right">Approx. <i class="fa fa-eur" aria-hidden="true"> {{$vehicles->v_toll_fee}} </td>
</tr>
<tr>
<td>Deployment Fee</td>                           
<td colspan="2" class="text-right">Approx. <i class="fa fa-eur" aria-hidden="true"> {{$vehicles->v_dep_fee}}</td>
</tr>
<tr>
<td colspan="3"> <hr> </td>
</tr>
<tr>
<td colspan="2"><h4 class="rental-price">Total<br>(payable locally)</h4></td>
<td class="width"><h4 class="rental-price"><i id="amn_tolt" class="fa fa-eur pull-right" aria-hidden="true"> {{$vehicles->v_toll_fee + $vehicles->v_dep_fee + $season->season_rate}} </i></h4></td>
</tr>
<tr>
<td colspan="3"> 
{{csrf_field()}}	
<input type="hidden" name="vehicle_id" id="vehicle_id" value="{{$vehicles->id}}">
<input type="hidden" name="amount" id="amount" value="{{$vehicles->v_toll_fee + $vehicles->v_dep_fee + $season->season_rate}}">
<input type="hidden" name="total_amount" id="total_amount" value="{{$vehicles->v_toll_fee + $vehicles->v_dep_fee + $season->season_rate}}">
<a class="btn btn-default col-md-12 btn-lg dropdown-toggle books" href="javascript:void(0);">Book Now</a>
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
<h2>Inclusions</h2><ul> 
@foreach($inclusion as $inclusions)
<li><i class="fa fa-check" aria-hidden="true"> </i> {{$inclusions->name}}</li> 
@endforeach	
</ul> 
<hr>							   
<form   action="" method="post">
<h2>Additional Service</h2>
<table class="table">
<tbody>
<input type="hidden" class="zar price" value="25"/>
@foreach($service as $services)
<tr>
<td>{{$services->name}}</td>
<td class='red text-center'><i class="fa fa-eur" aria-hidden="true"></i> {{$services->amount}}, Payable locally</td>
<td class='text-right'>
<input value='{{$services->amount}}' serid="{{$services->id}}" class="services serv" name='addl_service[]' type='checkbox' />
</td>
</tr>
@endforeach
</tbody>
</table>
<hr>
<h2>Equipment</h2>
<table class="table">
<tbody>
@foreach($equipment as $equipments)
<tr>
<td>{{$equipments->name}}</td>
<td class='red text-center'><i class="fa fa-eur" aria-hidden="true"></i> {{$equipments->amount}}, Payable locally</td><td class='text-right'>
<input value='{{$equipments->amount}}' equid="{{$equipments->id}}" class="services equip" name='equipment[]' type='checkbox' />
</td>
</tr>
@endforeach
</tbody>
</table>
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