@extends('admin.layouts.header')
@section('contents')
<section class="content-header">
    <h1>
        Add New Seasons        
    </h1>
    <ol class="breadcrumb">
        <li class="active"><a href="{{ url('/admin/dashboard') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>     
        <li><a href="{{ url('/admin/seasons') }}"><i class="fa fa-dashboard"></i>Seasons</a></li>
        <li>Add New Seasons        </li>
    </ol>
</section>

<div class="box">
    <div class="box box-info">

        <!-- /.box-header -->
        <!-- form start -->
        <form class="form-horizontal" method="POST" action="{{url('/admin/seasons/create')}}" role="form" data-toggle="validator" id="create_author">
            {{ csrf_field() }}
            <div class="box-body"> 


                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Select City</label>

                    <div class="col-sm-10">
                        <select class="form-control" name="city_id" id="city_id" required="required">
                            <option value="">Select City</option> 
                            @foreach( $cities as $city )
                            <option value="{{$city->id}}">{{$city->city_name}}</option>                   
                            @endforeach
                        </select>
                    </div>
                </div> 


                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Select Comapny</label>

                    <div class="col-sm-10">                        
                        <select name="company_id" id="company_id" class="form-control" required="required">
                        </select>                        
                    </div>
                </div> 

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Season Name</label>

                    <div class="col-sm-10">
                        <input type="text" name="season_name" class="form-control" id="season_name" placeholder="Enter Season Name" required="required">
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Start Date:</label>
                    <div class="col-sm-10">
                        <div class=" input-group date">

                            <input type="text" name="start_date" class="form-control pull-right" id="datepicker">
                            <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                            </div>
                        </div>
                    </div>
                    <!-- /.input group -->
                </div>                
                <div style="height: 20px"></div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">End Date:</label>
                    <div class="col-sm-10">
                        <div class=" input-group date">                  
                            <input type="text" name="end_date" class="form-control pull-right" id="datepicker1">
                            <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                            </div>
                        </div>
                    </div>
                    <!-- /.input group -->
                </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                <button  type="submit" class="btn btn-info pull-right" id="createauthor">Submit</button>

                <button type="reset" value="Reset" class="btn btn-info pull-left" style="margin-left: 672px">Reset</button>
            </div>
            <!-- /.box-footer -->
        </form>
    </div>
    <!-- /.box-body -->
</div>








@extends('admin.layouts.footerinner')




<script type="text/javascript">
    $('#city_id').change(function(){
    var city_id = $(this).val();    
     var _token = $( "input[name*='_token']" ).val();
    if(city_id){
        $.ajax({
           type:"POST",
           url:"get-companies",
           data: {city_id: city_id,_token:_token},
           success:function(res){               
            if(res){
                $("#company_id").empty();
               $("#company_id").append('<option>Select Company</option>');
               $.each(res,function(key,value){
                   $("#company_id").append('<option value="'+value['id']+'">'+value["company_name"]+'</option>');
                });
           
            }else{
               $("#company_id").empty();
            }
           }
        });
    }else{
        $("#company_id").empty();        
    }      
   });
</script>







<script>
    $(function () {
        //Date picker
        $('#datepicker').datepicker({
            autoclose: true
        })
        //Date picker
        $('#datepicker1').datepicker({
            autoclose: true
        })


        $('#example1').DataTable()
        $('#example2').DataTable({
            'paging': true,
            'lengthChange': false,
            'searching': false,
            'ordering': true,
            'info': true,
            'autoWidth': false
        })
    })
</script>
@endsection