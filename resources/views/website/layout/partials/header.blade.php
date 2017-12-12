

    <header id="header">
        <nav id="main-nav" class="navbar navbar-default navbar-fixed-top" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><img src="{{asset('assets/web/images/logo.png')}}" alt="logo"></a>
                </div>
				
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="scroll active"><a href="{{route('index')}}">Home</a></li> 
                    @if(!Auth::check())
						<li class="scroll"><a href="{{route('product')}}">Products</a></li>
                        <li class="scroll"><a href="{{route('services')}}">Services</a></li>
                                             
                        <li class="scroll"><a href="{{route('team')}}">Team</a></li>
                        <li class="scroll"><a href="{{route('contact')}}">Contact</a></li>
                       
                            <li class="scroll"><a href="{{route('get_siginup_form')}}">Sign Up</a></li>
                            <li class="scroll">
                                <a href="{{route('login')}}" >Sign In</a>

                            </li>
                        @else
                            <li class="scroll"><a href="{{route('signout')}}">Sign Out</a></li> 
                            <li class="scroll"><a href="{{route('previous_books')}}">Your Previous Books</a></li>  
                            <li class="scroll"><a href="{{route('cars_all')}}">Availiable Cars</a></li>     
                        @endif

                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
    </header><!--/header-->



@if(!isset($hide_header))
    <section id="hero-banner">
             <div class="banner-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                  
									<h2>We provide the best services</h2> 
                                @if(!isset($hide))    
                                  <div class="panel panel-default">
                                  <div class="panel-heading" style="color: #000"><h4>
                                      @if(isset($signin))
                                        Sign In Panel
                                      @elseif(isset($signup))
                                        Sign Up Panel
                                      @else
                                       Search Car
                                      @endif
                                      </h4>
                                  </div>
                                      <div class="panel-body">
                                        

                                        @if(isset($signin))

            <form name="sentMessage" id="contactForm"  novalidate method="post" action="{{route('signin')}}"> 
                {!!csrf_field()!!}
                <div class="control-group">
                    <div class="controls">
                    <input name="email" type="email" class="form-control" placeholder="Email" 
                    id="email" required
                    data-validation-required-message="Please enter your email" />
                    </div>
                </div>  <p></p>
                <div class="control-group">
                        <div class="controls">
                        <input name="password" type="password" class="form-control" 
                        placeholder="Password" id="password" required
                        data-validation-required-message="Please enter your password" />
                        <p class="help-block"></p>
                        </div>
                </div> 
            
                <div id="success"></div> <!-- For success/fail messages -->
                    <button type="submit" class="btn btn-primary pull-right">Sign In</button><br />
                </form>
@elseif(isset($signup))
  <form name="sentMessage" id="contactForm"  novalidate method="post" action="{{route('signup')}}"> 

    {!!csrf_field()!!}
        <div class="control-group">
                <div class="controls">
                <input name="firstname" type="text" class="form-control" 
                placeholder="FirstName" id="firstname" required
                data-validation-required-message="Please enter your first name" />
                <p class="help-block"></p>
                </div>
        </div>  

        <div class="control-group">
                <div class="controls">
                <input name="lastname" type="text" class="form-control" 
                placeholder="Last Name" id="lastname" required
                data-validation-required-message="Please enter your last name" />
                <p class="help-block"></p>
                </div>
        </div>  

 

        <div class="control-group">
            <div class="controls">
            <input name="email" type="email" class="form-control" placeholder="Email" 
            id="email" required
            data-validation-required-message="Please enter your email" />
            </div>
        </div>  
        <p></p>
        <div class="control-group">
                <div class="controls">
                <input name="password" type="password" class="form-control" 
                placeholder="Password" id="password" required
                data-validation-required-message="Please enter your password" />
                <p class="help-block"></p>
                </div>
        </div> 

         <div class="control-group">
                                                <div class="controls">
                                              <select name="country" class="select2_single form-control country" tabindex="-1" id="country" >
                                                <option  disabled selected>Select country</option>
                                                @if(isset($countries) && count($countries)>0)
                                                  @foreach($countries as $co)
                                                    <option value ="{{$co->id}}">{{$co->name}}</option>
                                                  @endforeach
                                                @endif

                                              </select>                    
                                                        <p class="help-block"></p>
                                                </div>
                                            </div>

                                            <div class="control-group">
                                                <div class="controls">
                                                <select name="city" class="select2_single form-control city" tabindex="-1" id="city" >
                            

                                                  </select>                     
                                             <p class="help-block"></p>
                                                </div>
                                            </div>
    
        <div id="success"></div> <!-- For success/fail messages -->
            <button type="submit" class="btn btn-primary pull-right">Sign Up</button><br />
        </form>
                                     @else
                                        <form method="post" action="{{route('getCityCars')}}" >
                                            {!!csrf_field()!!}
                                            <div class="control-group">
                                                <div class="controls">
                                              <select name="country" class="select2_single form-control country" tabindex="-1" id="country" >
                                                <option  disabled selected>Select country</option>
                                                @if(isset($countries) && count($countries)>0)
                                                  @foreach($countries as $co)
                                                    <option value ="{{$co->id}}">{{$co->name}}</option>
                                                  @endforeach
                                                @endif

                                              </select>                    
                                                        <p class="help-block"></p>
                                                </div>
                                            </div>

                                            <div class="control-group">
                                                <div class="controls">
                                                <select name="city" class="select2_single form-control city" tabindex="-1" id="city" >
                            

                                                  </select>                     
                                             <p class="help-block"></p>
                                                </div>
                                            </div>

                                            



                                             <button type="submit" class="btn btn-primary pull-right"><i class="fa fa-search fa-2x"></i></button><br />

                                        </form>

                                        @endif
                                      </div>
                                    </div>
                                  @endif  

                                     <a href="{{route('cars_all')}}" class="download-btn">Availiable Cars</a>
                                
                            </div>
                        </div>
                    </div>
                </div>
    </section><!--/#main-slider-->

@endif



