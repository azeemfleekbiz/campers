@include('include.head')
<div class="search-banner">
<div class="container">
<div class="row">
<div class="col-md-12">
<h1>Select Vehicle</h1>
<p>Lorem ipsum dolor sit amet</p>
</div>
</div>
</div>
</div>
<section class="search-page">
<div class="container">
<div class="row">
<div class="col-md-4 search-filter">
<h3>Search Filter</h3>
<div class="bg-red search-line"></div>
<table class="table select-box-one">
<tbody>
<tr>
<th>Country</th>
<td>USA</td>
<td hidden><a href="#"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
</tr>
<tr>
<th class="padding-bottom">From</th>
<td class="padding-bottom">Windhoek</td>
<td><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
</tr>
<tr>
<th class="padding-top">To</th>
<td class="padding-top">Windhoek</td>
<td><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
</tr>
<tr>
<th class="padding-bottom">From</th>
<td class="padding-bottom"></td>
<td><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
</tr>
<tr>
<th class="padding-top">Until</th>
<td class="padding-top"></td>
<td><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
</tr>

<tr>
<th class="padding-top">Total Days</th>
<td class="padding-top">0</td>

</tr>
</tbody>
</table>
<div class="bg-red search-line"></div>
<table class="select-box-two">
<tbody>
<tr>
<td colspan="3">
<h4>Rental Company</h4>
</td>
</tr>

<tr>
<th><a href="#"><i class="color-white fa fa-circle" aria-hidden="true"></i></a></th>
<td>Britz</td>
<td>2</td>
</tr>
<tr>
<th><a href="#"><i class="color-white fa fa-circle" aria-hidden="true"></i></a></th>
<td>Acso</td>
<td>1</td>
</tr>
<tr>
<th><a href="#"><i class="color-white fa fa-circle" aria-hidden="true"></i></a></th>
<td>Bobocampers</td>
<td>1</td>
</tr>

</tbody>
</table>
<div class="bg-red search-line"></div>
<table class="select-box-three">
<tbody>
<tr>
<td colspan="3">
<h4 class="red-line">Vehicle Category / Type</h4>
</td>
</tr>

<tr>
<th><a href="javascript:void(0);"><i class="color-white fa fa-circle" aria-hidden="true"></i>
</a></th>
<td>2-bed camper </td>
<td class='grey'>2</td>
</tr>
<tr>
<th><a href="javascript:void(0);"><i class="color-white fa fa-circle" aria-hidden="true"></i>
</a></th>
<td>2-bed camper </td>
<td class='grey'>2</td>
</tr>
<tr>
<th><a href="javascript:void(0);"><i class="color-white fa fa-circle" aria-hidden="true"></i>
</a></th>
<td>4WD Camper </td>
<td class='grey'>1</td>
</tr>
<tr>
<th><a href="javascript:void(0);"><i class="color-white fa fa-circle" aria-hidden="true"></i>
</a></th>
<td>4WD vehicles without equipment </td>
<td class='grey'>1</td>
</tr>
<tr>
<th><a href="javascript:void(0);"><i class="color-white fa fa-circle" aria-hidden="true"></i>
</a></th>
<td>4-bed motorhome </td>
<td class='grey'>1</td>
</tr>
<tr>
<th><a href="javascript:void(0);"><i class="color-white fa fa-circle" aria-hidden="true"></i>
</a></th>
<td>6-bed motorhome </td>
<td class='grey'>3</td>
</tr>
</tbody>
</table>
</div>

<div class="col-md-8 search-result">
<h3>Search Results</h3>
<div class="bg-red search-line-3"></div>
<p>4 affordable Motorhomes from 1 rental company in Windhoek </p>

@if(isset($vehicles))
@foreach($vehicles as $vehicle)
<div class="row margin-bottom">
<div class="col-md-6 search-result-car padding-right">
<?php	
$imgs = explode(",",$vehicle->v_images);
for($i=0;$i<count($imgs);$i++):
if($i==1){
	break;
}
?>
<img src="public/uploads/vehicles/<?php echo $imgs[$i]; ?>" class="img-responsive">
<?php endfor; ?>	
<div class="bg-red">
<h4>{{$vehicle->v_name}}</h4>
</div>
</div>
<div class="col-md-6 search-result-car bg-black">
<div class="col-md-12">
<table class="table select-box-four">
<tr>
<th>Suitable for</th>
<td>{{$vehicle->v_person}}</td>
</tr>
<tr>
<th>Vehicle age</th>
<td>{{$vehicle->v_age}}</td>
</tr>
<tr>
<th>Vehicle type</th>
<td>{{$vehicle->v_type}}</td>
</tr>
<tr>
<th class="select-price">Price</th>
<td class="currency">{{$vehicle->v_toll_fee + $vehicle->v_dep_fee}} <i class="fa fa-eur" aria-hidden="true"></i></td>
<td><i class="info-button fa fa-info-circle select-vehicle" aria-hidden="true"></i></td>
</tr>
</table>
</div>
<div class="col-md-12 search-button text-center">
<a class="btn btn-lg" href="{{url('/faredetails')}}/{{$vehicle->id}}">Select Vehicle</a>
</div>
</div>
</div>
@endforeach
@else
<div>Sorry there no found search result</div>
@endif
</div>
</div>
</div>
</section>
@include('include.footer')