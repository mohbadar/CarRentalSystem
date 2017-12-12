@extends('website.layout.master')

@section('content')

<section class="download-now" id="products">
        <div class="container">
		 <div class="section-header">
                <h2 class="section-title wow fadeInDown">Available Cars to Book</h2>
                <p class="wow fadeInDown">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eget risus vitae massa <br> semper aliquam quis mattis quam.</p>
            </div>      

 @if(session()->has('warningMsg') && is_array(session('warningMsg')) )
	<div class="alert alert-success">
 		<a href="#" class="my-alert-dismissible close " data-dismiss="alert" aria-label="close">&times;</a>
 		@foreach (session('warningMsg') as $msg)
 			<li><strong><i class="fa fa-check" aria-hidden="true"></i> </strong> {{ $msg }}</li>
 		@endforeach
 		
      
    </div>
@endif


@if(isset($cars) && count($cars)>0)
	
<div class="row">
	@foreach($cars->chunk(3) as $chunk)

		@foreach($chunk as $car)

		  <div class="col-sm-6 col-md-4">
		    <div class="thumbnail">
		      <img src="{{$car->image}}" alt="">
		      <div class="caption">
		        <h5>{{$car->title}}</h5>
		        <p style="color: #000">Category : <small style="color: #000">{{$car->category->name}}</small></p>
		        <p style="color: #000">{{str_limit($car->description,500)}}</p>
		        <p>  <a href="{{route('book_car',['id' =>$car->id])}}" class="btn btn-success">Book</a></p>
		      </div>
		    </div>
		  </div>
		@endforeach
		</div>  
	@endforeach
@else
	<h3>No Car is availiable</h3>	
@endif



</div>
</section>

@stop