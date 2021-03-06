@extends('admin.layouts.header')
@section('contents')
<section class="content-header">
      <h1>
        Currencies        
      </h1>
      <ol class="breadcrumb">
          <li class="active"><a href="{{ url('/admin/dashboard') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>     
          <li>Currencies</li>
      </ol>
    </section>
 <div class="box">
            <div class="box-header">
                @if (Session::has('message'))
                <div class="alert alert-success">{{ Session::get('message') }}</div>
            @endif
            @if (Session::has('error'))
                <div class="alert alert-danger">{{ Session::get('error') }}</div>
            @endif
        <button rel="{{url('')}}" type="button" 
                class="btn btn-info make-modal-large iframe-form-open" 
                data-toggle="modal" data-target="#modal-default" title="Add Currency">
            <span class="glyphicon glyphicon-plus"></span>Add
        </button>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>                
                  <th>Currency Code</th>
                  <th>Currency Symbol</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach( $currencies as $currency )
                <tr>                              
                    <td>{{$currency->currency_code}}</td>
                    <td>{{$currency->currency_symbol}}</td>
                    <td><a href="#editcurrency{{$currency->id}}" rel="" type="button" 
                           class="btn btn-info make-modal-large iframe-form-open" 
                           data-toggle="modal"  title="Edit Currency {{$currency->currency_code}}">
                            <span class="glyphicon glyphicon-pencil"></span>
                        </a>
                        <a href="#deletecurrency{{$currency->id}}" rel="" type="button" 
                           class="btn btn-info make-modal-large iframe-form-open" 
                           data-toggle="modal"  title="Delete Currency">
                            <span class="glyphicon glyphicon-remove"></span>
                        </a></td>
                </tr>


            <div class="modal fade" id="editcurrency{{$currency->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">Edit Currency</h4>
                        </div>
                        <div class="modal-body">
                            <form role="form" method="POST" action="{{url('/admin/currencies/update-currencies')}}" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <input type="hidden" name="currency_code_id" value="{{$currency->id}}">
                                <div class="box-body">
                                    
                                    <div class="form-group">
                            <label for="exampleInputEmail1">Currency Code</label>
                            <input type="text" name="currency_code" value="{{$currency->currency_code}}" class="form-control" id="exampleInputEmail1" placeholder="Enter currency code" required="required">
                        </div> 
                        
                        <div class="form-group">
                            <label for="exampleInputEmail1">Currency Symbol</label>
                            <input type="text" name="currency_symbol" value="{{$currency->currency_symbol}}"  class="form-control" id="exampleInputEmail1" placeholder="Enter currency symbol" required="required">
                        </div> 
                        
                                                                                            

                                    
                                </div>
                                <!-- /.box-body -->
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary" id="btn_save">Save</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>



            <div class="modal fade" id="deletecurrency{{$currency->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">Delete currency code</h4>
                        </div>
                        <div class="modal-body">
                            <p>Are you sure you want to Delete this Currency Code <b>{{$currency->currency_code}}</b>?</p>  

                            <div class="modal-footer">
                                <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
                                <a href="{{ url('/admin/currencies/destroy/'.$currency->id) }}">
                                    <button 
                                        class="btn btn-primary">Delete</button>
                                </a>
                            </div>

                        </div>

                    </div>
                </div>
            </div>

            @endforeach

            </tbody>  

        </table>
    </div>
    <!-- /.box-body -->
</div>
<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Add New Currency</h4>
            </div>
            <div class="modal-body">
                <form role="form" method="POST" action="{{url('/admin/currencies/add-currencies')}}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="box-body">
                        
                        <div class="form-group">
                            <label for="exampleInputEmail1">Currency Code</label>
                            <input type="text" name="currency_code" class="form-control" id="exampleInputEmail1" placeholder="Enter currency code" required="required">
                        </div> 
                        
                        <div class="form-group">
                            <label for="exampleInputEmail1">Currency Symbol</label>
                            <input type="text" name="currency_symbol" class="form-control" id="exampleInputEmail1" placeholder="Enter currency symbol" required="required">
                        </div> 
                        
                    </div>
                    <!-- /.box-body -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" id="btn_save">Save</button>
                    </div>
                </form>
            </div>

        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
@extends('admin.layouts.footerinner')
<script>
    $(function () {
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

