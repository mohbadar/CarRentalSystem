 <div class="col-md-3 left_col">
          <div class="left_col scroll-view" style="">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Car Rental System</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="{{Auth::user()->image}}" alt="" class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <h2>{{Auth::user()->lastname}}</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

           
           
 <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Account <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{route('admin_user')}}">Administrator Accounts</a></li>
                      <li><a href="{{route('customer_accounts')}}">Customer Accounts</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-edit"></i> Location <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{route('countryHome')}}">Country</a></li>
                      <li><a href="{{route('cityHome')}}">City</a></li>

                    </ul>
                  </li>

                  <li><a><i class="fa fa-edit"></i> Category <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{route('categoryHome')}}">Country</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-desktop"></i> Car <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{route('carHome')}}">Add New Car</a></li>
                      <li><a href="{{route('all_cars')}}">Cars</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-table"></i> Book <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{route('servedbooks')}}">Served Books</a></li>
                      <li><a href="{{route('unservedbooks')}}">Un served Books</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-sitemap"></i> Setting<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="{{route('account_management')}}">Account Management</a></li>
                        <li><a href="{{route('contact_list')}}">Contact</a>
                        </li>
                    </ul>
                  </li>                  
              
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>


    <!-- top navigation -->
        <div class="top_nav" >
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="{{Auth::user()->image}}" alt="">{{Auth::user()->firstname.' '.Auth::user()->lastname}}
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="{{route('user_profile',['id' => Auth::user()->id])}}"> Profile</a></li>
                    <li><a href="{{route('signout')}}"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

              </ul>
            </nav>
          </div>
        </div>

        <!-- /top navigation -->