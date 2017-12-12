@extends('website.layout.master')

@section('content')

<section class="download-now" id="products">
        <div class="container">
		 <div class="section-header">
                <h2 class="section-title wow fadeInDown">{{Auth::user()->firstname.' '.Auth::user()->lastname}} Previous Books</h2>
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


@if(isset($books) && count($books)>0)
	
<div class="row">
	@foreach($books->chunk(3) as $chunk)

		@foreach($chunk as $book)

		  <div class="col-sm-6 col-md-4">
		    <div class="thumbnail">
		      <div class="caption">
		        <h5>Take Date:{{$book->take_date}}</h5>
		        <h5>Return Date : {{$book->return_date}}</h5>
		        <p style="color: #000">Car Category : <small style="color: #000">
		        {{$book->car->category->name}}</small></p>
		        <p style="color: #000">Cost: {{$book->cost}}</p>
		        <p style="color: #000">Cost: {{$book->car->title}}</p>
		        @if($book->isServed ==0)
		        	<p><a href="{{route('cancel_book',['id'=>$book->id])}}" class="btn btn-danger confirm">cancel</a></p>
		        @endif

		        <p><a href="{{route('cancel_book',['id'=>$book->id])}}" class="confirm"><i class="fa fa-trash fa-2x"></i></a></p>
		      </div>
		    </div>
		  </div>
		@endforeach
		</div>  
	@endforeach
	
@endif



</div>
</section>

@stop