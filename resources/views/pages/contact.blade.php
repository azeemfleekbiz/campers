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
<div class="container">
<div class="row">
<div class="col-md-12 text-center">
<p><br/>Falls Sie Rückfragen haben oder weitere Informationen benötigen, so zögern Sie bitte nicht uns zu kontaktieren. Unser Team steht Ihnen gerne jederzeit zur Verfügung.<br/>Sie erreichen uns per Email:<br/><a href="mailto:info@sudafrika-wohnmobile-und-camper.de">info@sudafrika-wohnmobile-und-camper.de</a> <br/>Oder nutzen Sie unseren Rückrufservice
</p>
</div>
<div class="col-md-3"></div>
<div class="col-md-6 contact-form">
<div id="message" class="text-success"></div>
<form name="orderForm" id="orderForm" method="post" action="">
{{csrf_field()}}
<h3>Request a callback</h3>                        
<div class="form-group col-md-6 padding-left">
<label for="name" class="cols-sm-2 control-label">Name</label>
<div class="cols-sm-10">
<div class="input-group">
<input type="text" class="form-control" name="name" id="name"  placeholder="Enter your Name"/>
<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
</div>
</div>
</div>
<div class="form-group col-md-6 padding-right">
<label for="email" class="cols-sm-2  control-label">Email</label>
<div class="cols-sm-10">
<div class="input-group">
<input type="text" class="form-control" name="email" id="email"  placeholder="Enter your Email"/>
<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
</div>
</div>
</div>
<div class="form-group">
<label for="username" class="cols-sm-2 control-label">Takeover date and time</label>
<div class="input-group date">
<input type="text" class="form-control " placeholder="Takeover date and time" id="takedate" name="takedate">
<span class="input-group-addon btn_icon" id="basic-addon2">
<i class="fa fa-calendar-o" aria-hidden="true"></i>
</span>
</div>
</div>
<div class="form-group">
<label for="password" class="cols-sm-2 control-label">Takeover location</label>
<div class="cols-sm-10">
<div class="input-group">
<input type="text" class="form-control" name="takeover_loc" id="takeover_loc"  placeholder="Takeover location"/>
<span class="input-group-addon"><i class="fa fa-map-marker fa" aria-hidden="true"></i></span>
</div>
</div>
</div>
<div class="form-group">
<label for="username" class="cols-sm-2 control-label">Return date and time</label>
<div class="cols-sm-10">
<div class="input-group">
<input type="text" class="form-control" name="return_date" id="return_date"  placeholder="Return date and time"/>
<span class="input-group-addon"><i class="fa fa-clock-o fa" aria-hidden="true"></i></span>
</div>
</div>
</div>                      
<div class="form-group">
<label for="password" class="cols-sm-2 control-label">Return location</label>
<div class="cols-sm-10">
<div class="input-group">
<input type="text" class="form-control" name="return_loc" id="return_loc"  placeholder="Return location"/>
<span class="input-group-addon"><i class="fa fa-map-marker fa" aria-hidden="true"></i></span>
</div>
</div>
</div>      
<div class="form-group">
<label for="password" class="cols-sm-2 control-label">Pre-paid packages</label>
<div class="cols-sm-10">
<div class="input-group">
<select class="form-control" name="packages" id="packages">
<option value="">Select Pre-paid packages</option>	
<option value="30 Minutes @$1.99 per minute">30 Minutes @$1.99 per minute</option>
<option value="50 Minutes @$1.95 per minute">50 Minutes @$1.95 per minute</option>
<option value="100 Minutes @$1.90 per minute">100 Minutes @$1.90 per minute</option>
<option value="200 Minutes @$1.80 per minute">200 Minutes @$1.80 per minute</option>
</select>
<span class="input-group-addon"><i class="fa fa-archive fa" aria-hidden="true"></i></span>
</div>
</div>
</div>
<div class="button-select text-center">
<button type="submit" name="submit" id="submit" class="btn btn-default"><i class="fa fa-check" aria-hidden="true"></i>
</button>
</div>                                           
</form>
</div>
</div>
</div>
@include('include.footer')