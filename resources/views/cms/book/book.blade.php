@extends('cms.layout.master')
 

 @section('content')

 <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Books Management</h3>
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
                  <div class="x_title">
                    <h2>
                      @if(isset($unserve))
                        List Un-Served Requests
                      @elseif(isset($serve))
                        List Served Reqeusts
                      @endif
                    </h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>

                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
               
                
               </div>

               <h3 style="color: green" id="msg"></h3>
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Car</th>
                          <th>Car Image</th>
                         
                          <th>City</th>
                          <th>Country</th>
                          <th>Take Date</th>
                          <th>Return Date</th>
                          @if(isset($serve))
                          <th>Cost</th>
                          @endif
                          <th>Action</th>
                        </tr>
                      </thead>


                      <tbody>

                      @if(isset($books) && count($books)>0)
                        @foreach($books as $book)
                        <tr>
                          <td>{{$book->car->title}}</td>
                          <td><a href="{{$book->car->image}}" ><i class="fa fa-file fa-2x"></i></a></td>

                          <td>{{$book->car->city->name}}</td>
                          <td>{{$book->car->city->country->name}}</td>
                          
                          <td>{{$book->take_date}}</td>
                          <td>{{$book->return_date}}</td>
                          @if(isset($serve))
                            <td>{{$book->cost}}</td>
                          @endif
                          <td>
                            <a href="{{route('delete_book',['id' => $book->id])}}" class="fa fa-trash fa-2x confirm" ></a>

                            @if(isset($unserve))
                            <a href="#modal2" class="badar btn more" role="button"  data-toggle="modal" data-target="#myModal">
                        	<span style="visibility:hidden;" class="id">{{$book->id}}</span><i class="fa fa-plus fa-2x"></i></a>
                          @endif

            
                          </td>

                        </tr>
                        @endforeach
                      @endif  
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>


<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Add Cost</h4>
      </div>
      <div class="modal-body">

                      <div class="form-group">
                      	<label for="cost">Cost</label>
                      	<input type="number" name="cost" id="cost" class="form-control">
                      </div>

                     <input type="hidden" name="book_id" id="bid">


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="save">Save changes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

<script type="text/javascript">
	      //get advertisement
    $('.badar').click(function(event) {
    event.defaultPrevented;
      var id = $(this).find('.id').html();
      $('#bid').val(id);
    });

    $('#save').click(function(){
    	var id = $('#bid').val();
    	var cost =$('#cost').val();
    	// alert(id);
    	$.ajax({
		    method : 'GET',
		    url    : '/assgin_cost',
		    data   : {'id' : id, 'cost':cost}
		  }).done(function(data) {
		  	// alert(data);
		  		$('#msg').html('Cost is assigned and it served!');
		  		$('.model').close();	

		  });

    });

</script>

@stop