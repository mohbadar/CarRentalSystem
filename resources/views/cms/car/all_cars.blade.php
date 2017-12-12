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



             <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>List Cars</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>

                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                  <form action="{{route('getCars')}}" method="POST">

                  {!!csrf_field()!!}
                  <div class="row">
                    <div class="item form-group col-md-5">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Country <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select name="country" class="select2_single form-control country" tabindex="-1"  >
                            <option  disabled selected>Select county</option>
                            @if(isset($countries) && count($countries)>0)
                              @foreach($countries as $co)
                                <option value ="{{$co->id}}">{{$co->name}}</option>
                              @endforeach
                            @endif

                          </select>
                        </div>
                      </div>


                    <div class="item form-group col-md-5">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">City
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select name="city" class="select2_single form-control city" tabindex="-1"  >
                            

                          </select>
                        </div>
                      </div>

                       <div class="form-group col-md-2">
                        <div class="col-md-6 col-md-offset-3">
    
                          <button type="submit" class="btn btn-success"><i class="fa fa-search fa-2x"></i></button>
                        </div>
                      </div>
                  </form>
               </div>
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Title</th>
                          <th>Description</th>
                         
                          <th>File</th>
                          
                          <th>Action</th>
                        </tr>
                      </thead>


                      <tbody>

                      @if(isset($cars) && count($cars)>0)
                        @foreach($cars as $car)
                        <tr>
                          <td>{{$car->title}}</td>
                          <td>{{$car->description}}</td>
                          
                          <td><a href="{{$car->image}}"><i class="fa fa-file fa-2x"></i></a></td>
                          <td>
                            <a href="{{route('delete_car',['id' => $car->id])}}" class="fa fa-trash fa-2x confirm"></a>

                            <a href="{{route('update_car',['id' =>$car->id])}}" class="fa fa-pencil fa-2x confirm"></a>
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



         </div>
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