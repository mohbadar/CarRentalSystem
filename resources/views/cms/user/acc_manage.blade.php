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
                              @if($user->isActive ==1)
                                <a href="{{route('de_activate',['id' =>$user->id])}}" class="btn btn-warning confirm">De-activate</a>
                              @elseif($user->isActive ==0)  
                                <a href="{{route('activate',['id' =>$user->id])}}" class="btn btn-primary confirm">Activate</a>
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



                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
@stop