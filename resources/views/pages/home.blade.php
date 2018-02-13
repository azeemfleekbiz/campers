@include('include.head')
<div class="banner">
<div class="container">
<div class="row">
<div class="col-md-12">
<h1>Beginnen Sie Ihr Afrika</h1>
<p>Abenteuer hier....</p>
</div>
</div>
</div>
</div>
<div class="bg-black vehicle-section">
<div class="container">
<div class="row">
<form name="searchForm" id="searchForm" action="{{ url('/search') }}" class="search_form" method="post">
{{csrf_field()}}	
<div class="col-md-2 col-xs-12 col-md-offset-1">
<h3>Select Your Vehicle</h3>
</div>
<div class="col-md-3 col-xs-12">
<label for="from" class="pick-date">Pick-up Date</label>
<div class="input-group date"> 
<input type="text" class="form-control " placeholder="Select Date" id="from" name="pick_date" aria-describedby="basic-addon2"> 
<span class="input-group-addon btn_icon" id="basic-addon2">
<i class="fa fa-calendar-o" aria-hidden="true"></i>
</span> 
</div>			
<label for="to" class="return-date">Return Date</label>					
<div class="input-group date"> 
<input type="text" class="form-control " placeholder="Select Date" id="to" name="drop_date" aria-describedby="basic-addon2"> 
<span class="input-group-addon btn_icon_drop" id="basic-addon2">
<i class="fa fa-calendar-o" aria-hidden="true"></i>
</span> 
</div>
</div>
<div class="col-md-3 col-xs-12">
<label class="pick-location">Pick-Up Location</label>
<select name='pick_loc' required class="form-control">
<option value=''>Select City</option>
@foreach($cities as $city)
<option value="{{$city->id}}">{{$city->city_name}}</option>
@endforeach;
</select>
<label class="drop-location">Drop-Off Location</label>
<select name='drop_loc' required class="form-control">
<option value=''>Select City</option>
@foreach($cities as $city)
<option value="{{$city->id}}">{{$city->city_name}}</option>
@endforeach;
</select>
</div>
<div class="col-md-2 col-xs-12">
<div class="button-select">
<button type="submit" class="btn btn-danger">
<i class="fa fa-check" aria-hidden="true"></i>
</button>
</div>
</div>
</form>
</div>
</div>
</div>
<div class="bg-image">
<div class="container">
<div class="row">
<div class="col-md-6 col-xs-12">
<h3>Seit 2006 sind wir Ihr Spezialist ....</h3>
<p>....für Allradfahrzeuge und Wohnmobile in Südafrika, Namibia und Botswana. 
Wir bieten eine reichhaltige Auswahl an Fahrzeugen von  renomierten Vermietern an und das zu günstigsten Preisen.  
<br><br>
Neben den beliebten Übernahmen und Rückgaben in Johannesburg, Kapstadt und Windhoek, ist es auch möglich Ihr Fahrzeug ab/bis Maun, Kasane, Victoria Falls, Livingstone, Port Elizabeth, Durban und vielen  anderen Städten anzumieten. Gerne erstellen wir ein individuelles Angebot für Sie. Übermitteln Sie uns einfach  Ihre Daten an info@sudafrika-wohnmobile-und-camper.de   </p>
<img src="{{ asset('assets/images/image-2.jpg') }}">
</div>
</div>
</div>
</div>
<div class="bg-black black-section">
<div class="container">
<div class="row">
<div class="col-md-6 col-xs-12"></div>
<div class="col-md-6 col-xs-12">
<h3>Lorem ipsum dolor sit amet.</h3>
<p>Entdecken Sie Afrika auf eigene Faust – oder in einer Gruppe Fahren Sie durch beeindruckenden Nationalparks, entdecken Sie die “Big Five” und lassen Sie sich von der vielfältigen Landschaft und Tierwelt bezaubern.<br><br>
Für diejenigen, die sich gerne im eigenen 4x4 Camper einer geführten Gruppe anschliessen möchten  bieten wir folgende Optionen:</p>
<ul>
<li><p>07 Tage Krüger National Park: Krüger Park Lebombo</p></li>
<li><p>13 Tage Botswana, Victoria Falls: Moremi, Okavango Delta, Central Kalahari Desert, Savuti, Chobe National Park, Victoria Falls.</p></li>
<li><p>11 Tage Koakoveld Safari Northern Namibia: Etosha, Koakoveld, Damaraland, Himba Culture, Rock engravings</p></li>
<li><p>18 Tage The Best of Namibia (Selbstfahrertour ohne Führung) : Fish River Canyon, Sossusvlei, Swakopmund and Twylfelfontein and Etosha.</p></li>
</ul>
<p>Für weitere Informationen, Daten und Preise kontaktieren Sie uns  info@sudafrika-wohnmobile-und-camper.de </p>
</div>
</div>
</div>
</div>
<div class="bg-red line"></div>
<div class="container popular-vehicle">
<div class="row">
<div class="col-md-12 col-xs-12">
<h3>Popular Vehicle Choices</h3>
</div>
</div>
<div class="resp-slider row">
    @foreach($vehicles as $vehicle)
<div class="col-md-4 col-xs-12">
<img src="{{asset('/public/uploads/vehicles/vehicle-1.jpg')}}" class="img-responsive">
<div class="bg-red">
<h5>{{$vehicle->v_name}}</h5>
</div>
<div class="col-md-5 col-xs-6 bg-black">
<div class="vehicle-text">
<p>Suitable for</p>
<p>Vehicle age</p>
<p>{{$vehicle->v_type}}</p>
</div>
</div>
<div class="col-md-7 col-xs-6 bg-black">
<div class="vehicle-description">
<p>{{$vehicle->v_person}}</p>
<p>{{$vehicle->v_age}}</p>
<p>{{$vehicle->v_type}}</p>
</div>
</div>
<div class="bg-black vehicle-button">
<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Vehicle Description</button>
</div>
</div>
    @endforeach
     <div id="myModal" class="modal fade" role="dialog">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h4 class="modal-title">Modal Header</h4>
</div>
<div class="modal-body">
<p></p>

<div id="popup-slider">
	<div class="item">
		<img src="assets/images/car-1.jpg" class="img-responsive">
	</div>
	<div class="item">
		<img src="assets/images/car-1.jpg" class="img-responsive">
	</div>
	<div class="item">
		<img src="assets/images/car-1.jpg" class="img-responsive">
	</div>
</div>

</div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- Modal -->

@include('include.footer')