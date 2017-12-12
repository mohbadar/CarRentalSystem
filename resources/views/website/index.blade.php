@extends('website.layout.master')

@section('content')
	
<section class="download-now" id="products">
        <div class="container">
         <div class="section-header">
                <h2 class="section-title wow fadeInDown">Available Cars</h2>
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

 <section id="about">
        <div class="container">

            <div class="section-header">
                <h2 class="section-title wow fadeInDown">About Us</h2>
                <p class="wow fadeInDown">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eget risus vitae massa <br> semper aliquam quis mattis quam.</p>
            </div>

            <div class="row">
                <div class="col-sm-6 wow fadeInLeft">
                  <img class="img-responsive" src="{{asset('assets/web/images/about.png')}}" alt="">
                </div>

                <div class="col-sm-6 wow fadeInRight">
                    <h3 class="column-title">Our Company</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eget risus vitae massa semper aliquam quis mattis quam. Morbi vitae tortor tempus, placerat leo et, suscipit lectus. Phasellus ut euismod massa, eu eleifend ipsum.</p>

                    <p>Nulla eu neque commodo, dapibus dolor eget, dictum arcu. In nec purus eu tellus consequat ultricies. Donec feugiat tempor turpis, rutrum sagittis mi venenatis at. Sed molestie lorem a blandit congue. Ut pellentesque odio quis leo volutpat, vitae vulputate felis condimentum. </p>

					<p>Praesent vulputate fermentum lorem, id rhoncus sem vehicula eu. Quisque ullamcorper, orci adipiscing auctor viverra, velit arcu malesuada metus, in volutpat tellus sem at justo.</p>


                    <a class="btn btn-primary" href="#">Learn More</a>

                </div>
            </div>
        </div>
    </section><!--/#about-->

   
  


    
 



 

@stop