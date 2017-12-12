@extends('website.layout.master')

@section('content')

<section class="download" id="products">
        <div class="container">
		 <div class="section-header">
                <h2 class="section-title wow fadeInDown">Book Car</h2>
                <div class="row">
	                <div class="col-md-7">
	                	<p class="wow fadeInDown">
	                	<p>{{$car->title}}</p>
	                	<p>{{$car->description}}</p>
	                	<p>City: <strong>{{$car->city->name}}</strong></p>
	                	<p>Country: <strong>{{$car->city->country->name}}</strong></p>
	                </p>
	                </div>
	                <div>
	                	<img src="{{$car->image}}" class="img-responsive" width="300px">
	                </div>	
                </div>
            </div>      



              <div class="panel panel-default" style="z-index: 1000 !important">
                                  <div class="panel-heading" style="color: #000"><h2>Book the Car</h2></div>
                                      <div class="panel-body">
                                        
                                        <form method="post" action="{{route('book')}}" >
                                            {!!csrf_field()!!}



                                            <div class="control-group">
                                                <div class="controls">
                                                <input type="text" name="take_date" class="select2_single form-control city" tabindex="-1" id="take_date"  placeholder="Take Time">
                                              
                                             <p class="help-block"></p>
                                                </div>
                                            </div>

                                            <div class="control-group">
                                                <div class="controls">
                                                <input type="text" name="return_date" class="select2_single form-control " tabindex="-1" id="return_date"  placeholder="Return Time">
                                              
                                             <p class="help-block"></p>
                                                </div>
                                            </div>


                                            <div class="control-group">
                                                <div class="controls">
                                                <input type="text" name="phone" class="select2_single form-control " tabindex="-1" id="phone"  placeholder="Your Phone No">
                                              
                                             <p class="help-block"></p>
                                                </div>
                                            </div>


                                            <div class="control-group">
                                                <div class="controls">
                                                <textarea  name="address" class="select2_single form-control " tabindex="-1" id="address"  placeholder="Your Full Address"></textarea>
                                              
                                             <p class="help-block"></p>
                                                </div>
                                            </div>



                                            <input type="hidden" name="car_id" value="{{$car->id}}">
                                            <input type="hidden" name="city_id" value="{{$car->city->id}}">
                                            <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                                             <button type="submit" class="btn btn-primary pull-right">Book</button><br />

                                        </form>
                                      </div>
                                    </div>



</div>
</section>

  <script type="text/javascript" src="{{asset('assets/cal/calendar.js')}}"></script>
  <script type="text/javascript" src="{{asset('assets/cal/calendar-en.js')}}"></script>
  <script type="text/javascript" src="{{asset('assets/cal/calendar-setup.js')}}"></script>
  <link rel="stylesheet" type="text/css" href="{{asset('assets/cal/calendar-blue2.css')}}">


    <script type="text/javascript">
    function catcalc(cal) {
        var date = cal.date;
        var time = date.getTime()
        var field = document.getElementById("take_date");
        if (field == cal.params.inputField) {
            field = document.getElementById("take_date");
            time -= Date.WEEK;
        } else {
            time += Date.WEEK;
        }
        var date = new Date(time);
        field.value = date.print("%Y-%m-%d");
    }
    
  Calendar.setup({
        inputField      :    "take_date",
        ifFormat        :    "%Y-%m-%d",
        showsTime       :    false,
        timeFormat      :    "24"
    });

    Calendar.setup({
        inputField      :    "return_date",
        ifFormat        :    "%Y-%m-%d",
        showsTime       :    false,
        timeFormat      :    "24"
    });
</script>

@stop