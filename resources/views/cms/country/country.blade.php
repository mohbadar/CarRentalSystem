@extends('cms.layout.master')
 

 @section('content')


 <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Country Management</h3>
                @include('cms.layout.message')
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                       <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="clearfix"></div>


            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">

       @if(isset($update) && isset($country))
                <div class="x_title">
                    <h2>Update Country</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">


                    <form   action="{{route('updateCountry')}}" class="form-horizontal form-label-left" novalidate  method="POST" enctype="multipart/form-data">

                    {!!csrf_field()!!}

                    <input type="hidden" name="id" value="{{$country->id}}">
                   
                      <span class="section">Country Info</span>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input  value="{{$country->name}}" id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="name" placeholder="Name" required="required" type="text">
                        </div>
                      </div>

                      
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
    
                          <button  type="submit" class="btn btn-success">Update Country</button>
                        </div>
                      </div>
                    </form>
                  </div>

       @else 
                  <div class="x_title">
                    <h2>Add New Country</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">


                    <form   action="{{route('createCountry')}}" class="form-horizontal form-label-left" novalidate  method="POST" enctype="multipart/form-data">

                    {!!csrf_field()!!}
                   
                      <span class="section">Country Info</span>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="name" placeholder="Name" required="required" type="text">
                        </div>
                      </div>

                      
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
    
                          <button  type="submit" class="btn btn-success">Add New Country</button>
                        </div>
                      </div>
                    </form>
                  </div>


        <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>List Accounts</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>

                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
               
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Name</th>

                          <th>Action</th>
                        </tr>
                      </thead>


                      <tbody>

                      @if(isset($countries) && count($countries)>0)
                        @foreach($countries as $co)
                        <tr>
                          <td>{{$co->name}}</td>
                          <td>
                            <a href="{{route('delete_country',['id'=>$co->id])}}" class="fa fa-trash fa-2x confirm"></a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <a href="{{route('update_country',['id' => $co->id])}}" class="fa fa-pencil fa-2x"></a>
                          </td>

                        </tr>
                        @endforeach
                      @endif  
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>



                </div>
        @endif          

              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->





@stop