@extends('cms.layout.master')
 

 @section('content')


 <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Car Management</h3>
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

            @if(isset($update))


             <div class="x_title">
                    <h2>Update Car Information</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <form   action="{{route('updateCar')}}" class="form-horizontal form-label-left" novalidate  method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="{{$car->id}}"> 

                    {!!csrf_field()!!}
                   
                      <span class="section">Car Info</span>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Title <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input value="{{$car->title}}" id="title" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="title" placeholder="title" required="required" type="text">
                        </div>
                      </div>


                     <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Description
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea id="description" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="description" placeholder="description" required="required" type="text">{{$car->description}}</textarea>
                        </div>
                      </div>


                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Category <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select name="category" class="select2_single form-control" tabindex="-1" id="country" >
                            <option  disabled selected>Select category</option>
                            @if(isset($categories) && count($categories)>0)
                              @foreach($categories as $cat)
                                <option value ="{{$cat->id}}" {{$car->category_id == $car->id ? 'selected' : ''}}>{{$cat->name}}</option>
                              @endforeach
                            @endif

                          </select>
                        </div>
                      </div>

                     <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Country <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select name="country" class="select2_single form-control country" tabindex="-1" id="country" >
                            <option  disabled selected>Select country</option>
                            @if(isset($countries) && count($countries)>0)
                              @foreach($countries as $co)
                                <option value ="{{$co->id}}" {{$car->city->country->id ==$co->id ? 'selected' : ''}}>{{$co->name}}</option>
                              @endforeach
                            @endif

                          </select>
                        </div>
                      </div>


                    <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">City <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select name="city" class="select2_single form-control city" tabindex="-1" id="city" >
                            

                          </select>
                        </div>
                      </div>

                     <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">File 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input  class="form-control col-md-7 col-xs-12" name="file" type="file">
                        </div>
                      </div>

                      
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
    
                          <button type="submit" class="btn btn-success">Save Changes</button>
                        </div>
                      </div>
                    </form>
                  </div>

            
            @else    
                  <div class="x_title">
                    <h2>Add New Car</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <form   action="{{route('createCar')}}" class="form-horizontal form-label-left" novalidate  method="POST" enctype="multipart/form-data">

                    {!!csrf_field()!!}
                   
                      <span class="section">Car Info</span>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Title <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="title" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="title" placeholder="title" required="required" type="text">
                        </div>
                      </div>


                     <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Description
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea id="description" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="description" placeholder="description" required="required" type="text"></textarea>
                        </div>
                      </div>


                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Category <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select name="category" class="select2_single form-control" tabindex="-1" id="country" >
                            <option  disabled selected>Select category</option>
                            @if(isset($categories) && count($categories)>0)
                              @foreach($categories as $cat)
                                <option value ="{{$cat->id}}">{{$cat->name}}</option>
                              @endforeach
                            @endif

                          </select>
                        </div>
                      </div>

                     <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Country <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select name="country" class="select2_single form-control country" tabindex="-1" id="country" >
                            <option  disabled selected>Select country</option>
                            @if(isset($countries) && count($countries)>0)
                              @foreach($countries as $co)
                                <option value ="{{$co->id}}">{{$co->name}}</option>
                              @endforeach
                            @endif

                          </select>
                        </div>
                      </div>


                    <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">City <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select name="city" class="select2_single form-control city" tabindex="-1" id="city" >
                            

                          </select>
                        </div>
                      </div>

                     <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">File 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input  class="form-control col-md-7 col-xs-12" name="file" type="file">
                        </div>
                      </div>

                      
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
    
                          <button type="submit" class="btn btn-success">Add New Car</button>
                        </div>
                      </div>
                    </form>
                  </div>



          @endif      
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->




<script type="text/javascript">

  var get_cities_url = "{{ route('getCountryCities') }}";

  $('.country').on('change', function() {
    var pId = $('.country').val();
    // alert(pId);
    $.ajax({
      method : 'GET',
      url    : get_cities_url,
      data   : {'id' : pId},
      dataType: "json",
    }).done(function(json) {
      var option = '<option value="" disabled selected class="center-align">Select City</option>';
      $('.city').empty();
      $.each(json, function(key, value) {
        option += "<option value='" + value['id'] +"'>" + value['name'] +"</option>";
      });

      $('.city').append(option);
      $('select').material_select();

     });

    });

  </script>

@stop