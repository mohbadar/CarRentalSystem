@extends('website.layout.master')

@section('content')


@if(isset($product))

<section class="download-now" id="products">
        <div class="container">
		 <div class="section-header">
                <h2 class="section-title wow fadeInDown">Our Product</h2>
                <p class="wow fadeInDown">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eget risus vitae massa <br> semper aliquam quis mattis quam.</p>
            </div>
			
          <div class="row">
            <div class="col-md-6 wp1 animated fadeInUp"> 
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eget risus vitae massa semper aliquam quis mattis quam. Morbi vitae tortor tempus, placerat leo et, suscipit lectus. Phasellus ut euismod massa, eu eleifend ipsum.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eget risus vitae massa semper aliquam quis mattis quam. Morbi vitae tortor tempus, placerat leo etorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eget risus vitae massa semper aliquam quis mattis quam. Morbi vitae tortor tempus, placerat leo et, suscipit lectus. Phasellus ut euismod massa, eu eleifend ipsum.</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eget risus vitae massa semper aliquam quis mattis quam. Morbi vitae tortor tempus, placerat leo et, suscipit lectus. Phasellus ut euismod massa, eu eleifend ipsum.</p>
             
            </div>
			<div class="col-md-6">
				  <div class="row">
                <div class="features">
                    <div class="col-md-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="0ms">
					 <div>
                                <i class="fa fa-futbol-o"></i>
                            </div>
                        <div class="media service-box">
                           
                            <div class="media-body">
                                <h4 class="media-heading">Mobile App</h4>
                                <p>Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater</p>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="100ms">
					<div>
                                <i class="fa fa-compass"></i>
                            </div>
                        <div class="media service-box">
                            
                            <div class="media-body">
                                <h4 class="media-heading">Custom App</h4>
                                <p>Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater</p>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="200ms">
					  <div>
                                <i class="fa fa-database"></i>
                            </div>
                        <div class="media service-box">
                          
                            <div class="media-body">
                                <h4 class="media-heading">E-Commerce</h4>
                                <p>Morbi vitae tortor tempus, placerat leo et, suscipit lectus. Phasellus ut euismod massa, eu eleifend ipsum.</p>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->
                
                    <div class="col-md-6 fadeInUp" data-wow-duration="300ms" data-wow-delay="300ms">
						<div>
                                <i class="fa fa-bar-chart"></i>
                            </div>
                        <div class="media service-box">                            
                            <div class="media-body">
                                <h4 class="media-heading">CMS App</h4>
                                <p>Morbi vitae tortor tempus, placerat leo et, suscipit lectus. Phasellus ut euismod massa, eu eleifend ipsum.</p>
                            </div>
                        </div>
                    </div><!--/.col-md-4--> 
                </div>
            </div><!--/.row-->  
			</div>
          </div>
        </div>
      </section>

@elseif(isset($services))
  
   <section id="services" >
        <div class="container">

             <div class="section-header">
                <h2 class="section-title wow fadeInDown">Our Services</h2>
                <p class="wow fadeInDown">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eget risus vitae massa <br> semper aliquam quis mattis quam.</p>
            </div>

            <div class="row">
                <div class="features">
                    <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="0ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                <i class="fa fa-futbol-o"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Car Rent</h4>
                                <p>Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater</p>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="100ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                <i class="fa fa-compass"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Online Booking of Car</h4>
                                <p>Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater</p>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="200ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                <i class="fa fa-database"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Support Several Countries</h4>
                                <p>Morbi vitae tortor tempus, placerat leo et, suscipit lectus. Phasellus ut euismod massa, eu eleifend ipsum.</p>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->
                
                    <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="300ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                <i class="fa fa-bar-chart"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Website</h4>
                                <p>Morbi vitae tortor tempus, placerat leo et, suscipit lectus. Phasellus ut euismod massa, eu eleifend ipsum.</p>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="400ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                <i class="fa fa-paper-plane-o"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Help & Support</h4>
                                <p>Morbi vitae tortor tempus, placerat leo et, suscipit lectus. Phasellus ut euismod massa, eu eleifend ipsum.</p>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="500ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                <i class="fa fa-bullseye"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">SharePoint</h4>
                                <p>Morbi vitae tortor tempus, placerat leo et, suscipit lectus. Phasellus ut euismod massa, eu eleifend ipsum.</p>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->
                </div>
            </div><!--/.row-->    
        </div><!--/.container-->
    </section><!--/#services-->


@elseif(isset($team))

       <section id="business-stats">
        <div class="container">
<div class="section-header">
                <h2 class="section-title wow fadeInDown">Our Team</h2>
                <p class="wow fadeInDown">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eget risus vitae massa <br> semper aliquam quis mattis quam.</p>
            </div>          
<div class="row" data-anim-type="fade-in-up">

<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
<div class="team-wrapper">
<div class="team-inner" style="background-image: url('images/team/01.jpg')">
<a href="#" target="_blank"> <i class="fa fa-twitter"></i></a>
</div>
<div class="description">
<h3> John Doe</h3>
<h5> <strong> Founder &amp; CEO </strong></h5>
<p>
Pellentesque elementum dapibus convallis.
Vivamus eget finibus.
</p>
</div>
</div>
</div>
<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
<div class="team-wrapper">
<div class="team-inner" style="background-image: url('images/team/02.jpg')">
<a href="#" target="_blank"> <i class="fa fa-twitter"></i></a>
</div>
<div class="description">
<h3> Armani Krist</h3>
<h5> <strong> Manager &amp; Designer </strong></h5>
<p>
Pellentesque elementum dapibus convallis.
Vivamus eget finibus.
</p>
</div>
</div>
</div>
<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
<div class="team-wrapper">
<div class="team-inner" style="background-image: url('images/team/03.jpg')">
<a href="#" target="_blank"> <i class="fa fa-twitter"></i></a>
</div>
<div class="description">
<h3> Micellir Faeny</h3>
<h5> <strong> Developer &amp; Designer </strong></h5>
<p>
Pellentesque elementum dapibus convallis.
Vivamus eget finibus.
</p>
</div>
</div>
</div>
<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
<div class="team-wrapper">
<div class="team-inner" style="background-image: url('images/team/04.jpg')">
<a href="#" target="_blank"> <i class="fa fa-twitter"></i></a>
</div>
<div class="description">
<h3> Kimten Lendy</h3>
<h5> <strong> Developer &amp; Designer </strong></h5>
<p>
Pellentesque elementum dapibus convallis.
Vivamus eget finibus.
</p>
</div>
</div>
</div>
</div>
</div>
    </section><!--/#business-stats-->

@elseif(isset($contact))
   <section id="contact-us">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title wow fadeInDown">Contact Us</h2>
                <p class="wow fadeInDown">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eget risus vitae massa <br> semper aliquam quis mattis quam.</p>
            </div>
        </div>
    </section><!--/#contact-us-->


    <section id="contact">
        
        <div class="container">
            <div class="container contact-info">
                <div class="row">
				  <div class="col-sm-4 col-md-4">
                        <div class="contact-form">
                            <h3>Our Address</h3>

                            <address>
                              <strong>Kabul, Afghanistan</strong><br>
                              Kabul University<br>
                              Afghanistan <br>
                              <abbr title="Phone">P:</abbr> +93 798 555 333
                            </address>
					</div></div>
                    <div class="col-sm-8 col-md-8">
                        <div class="contact-form">
                 		<!--NOTE: Update your email Id in "contact_me.php" file in order to receive emails from your contact form-->
		   <form name="sentMessage" id="contactForm"  novalidate method="post" action="{{route('createContact')}}"> 
				{!!csrf_field()!!}
				<div class="control-group">
					<div class="controls">
						<input type="text" class="form-control" 
						placeholder="Full Name" name="name" id="name" required
						data-validation-required-message="Please enter your name" />
						<p class="help-block"></p>
					</div>
				</div> 	


				<div class="control-group">
					<div class="controls">
							<input type="email" name="email" class="form-control" placeholder="Email" 
							id="email" required
							data-validation-required-message="Please enter your email" />
					</div>
				</div> 	

				<div class="control-group">
						<div class="controls">
							<textarea rows="10" cols="100" class="form-control" 
							placeholder="Message" id="message" required
							data-validation-required-message="Please enter your message" minlength="5" 
							data-validation-minlength-message="Min 5 characters" 
							maxlength="999" style="resize:none" name="content" id="content"></textarea>
						</div>
				</div>

				<div id="success"> </div> <!-- For success/fail messages -->
				<button type="submit" class="btn btn-primary pull-right">Send</button><br />
		</form>
                        </div>
                    </div>
                </div>
            </div>
        </div>   
   </section><!--/#bottom-->

@endif

@stop