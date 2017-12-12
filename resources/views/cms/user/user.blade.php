@extends('cms.layout.master')
 

 @section('content')


 <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Account Management</h3>
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
                    <h2>Add New User Account</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <form   action="{{route('create_user_account')}}" class="form-horizontal form-label-left" novalidate  method="POST" enctype="multipart/form-data">

                    {!!csrf_field()!!}
                   
                      <span class="section">Account Info</span>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">FirstName <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="firstname" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="firstname" placeholder="FirstName" required="required" type="text">
                        </div>
                      </div>


                     <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">LastName <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="lastname" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="lastname" placeholder="LastName" required="required" type="text">
                        </div>
                      </div>



                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="email" id="email" name="email" required="required" class="form-control col-md-7 col-xs-12" placeholder="someone@email.com">
                        </div>
                      </div>


                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Password <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="password" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="password" placeholder="Password" required="required" type="password">
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
    
                          <button type="submit" class="btn btn-success">Add New Account</button>
                        </div>
                      </div>
                    </form>
                  </div>


        <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>List Accounts</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>

                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
               
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>Role</th>
                         
                          <th>Email Address</th>
                          <th>Activation</th>
                          <th>Action</th>
                        </tr>
                      </thead>


                      <tbody>

                      @if(isset($users) && count($users)>0)
                        @foreach($users as $user)
                        <tr>
                          <td>{{$user->firstname.' '.$user->lastname}}</td>
                          <td>{{$user->role =="admin" ? "System Administrator" : 'Customer'}}</td>
                          
                          <td>{{$user->email}}</td>
                          <td>{{$user->isActive ==1 ? 'Active' : 'Deactive'}}</td>
                          <td>
                            <a href="{{route('delete_user',['id' =>$user->id])}}" class="fa fa-trash fa-2x confirm"></a>

                            <a href="{{route('user_profile',['id' =>$user->id])}}" class="fa fa-pencil fa-2x confirm"></a>
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
        <!-- /page content -->





@stop