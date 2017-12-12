<!DOCTYPE html>
<html>
<head>
    @include('cms.layout.partials.links')
</head>
<body class="nav-md">


<!-- ///////////////////////////////////////////////////////////////// -->
                      <!-- Content  -->
<!-- ////////////////////////////////////////////////////////////////////// -->

<div class="container body">
      <div class="main_container">
        @include('cms.layout.partials.sidebar')

         @yield('content') 

        @include('cms.layout.partials.footer')
    </div>
</div>    

      

    @include('cms.layout.partials.scripts')


</body>
</html>