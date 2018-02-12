jQuery("#orderForm").validate({
rules: {
name:"required",
email: {
required: true,
email: true
},
takedate:"required",
takeover_loc:"required",
return_date:"required",
return_loc:"required",
packages:"required"
},
messages: {
name:"Enter your name",
email: { required: "Enter your email", email:"Enter your correct email"},
takedate:"Select takeover date and time",
takeover_loc:"Enter takeover location",
return_date:"Select return date and time",
return_loc:"Enter return location",
packages:"Select pre-paid package"
},
submitHandler: function() {
sendOrder();
},
success: function(label) {
label.remove();
}
});
function sendOrder(){
var name = $('#name').val();
var email = $('#email').val();
var takedate = $('#takedate').val();
var takeover_loc = $('#takeover_loc').val();
var return_date = $('#return_date').val();
var return_loc = $('#return_loc').val();
var packages = $('#packages').val();
var _token = $( "input[name*='_token']" ).val();
$.ajax({
url: "order",
data: {name:name,email:email,takedate:takedate,takeover_loc:takeover_loc,return_date:return_date,return_loc:return_loc,packages:packages,_token:_token},
type: 'POST',
beforeSend: function () {
},
success: function (result) {
	if(result == 'done'){
		$("#message").html('<p>Thanks for ordering we will contact you shortly</p>');
	}
},
error: function () {
}
});	
}
    jQuery(document).ready(function() {
       jQuery("#popup-slider").owlCarousel({
        items : 1,
        lazyLoad : true,
        slideSpeed : 2000,
		paginationSpeed :2000,
		lazyLoad : true,
		stopOnHover : true,
		autoPlay : true,
		pagination:false,
		navigation:true,
		itemsDesktop : [1170,1], //5 items between 1000px and901px 
		itemsDesktopSmall : [900,1], // betweem 900px and 601px 
		itemsTablet: [600,1], //2 items between 600 and 0 
		itemsMobile : false // itemsMobile disabled - inherit from itemsTablet option       
      });
    });
