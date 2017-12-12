
    <script src="{{asset('assets/web/js/bootstrap.min.js')}}"></script> 
    <script src="{{asset('assets/web/js/mousescroll.js')}}"></script>
    <script src="{{asset('assets/web/js/smoothscroll.js')}}"></script>
    <script src="{{asset('assets/web/js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{asset('assets/web/js/jquery.isotope.min.js')}}"></script>
    <script src="{{asset('assets/web/js/jquery.inview.min.js')}}"></script>
    <script src="{{asset('assets/web/js/wow.min.js')}}"></script>
 <script src="{{asset('assets/web/contact/jqBootstrapValidation.js')}}"></script>
 <script src="{{asset('assets/web/contact/contact_me.js')}}"></script>
    <script src="{{asset('assets/web/js/custom-scripts.js')}}"></script>
<script type="text/javascript" src="{{asset('js/app.js')}}"></script>  

    <script type="text/javascript">

  var get_cities_url = "{{ route('getCountryCities') }}";
  $('.country').on('change', function() {
    var pId = $('.country').val();
    // alert(pId);
    $.ajax({
      method : 'GET',
      url    : get_cities_url,
      data   : {'id' : pId},
      dataType: "json",
    }).done(function(json) {
      var option = '<option value="" disabled selected class="center-align">Select City</option>';
      $('.city').empty();
      $.each(json, function(key, value) {
        option += "<option value='" + value['id'] +"'>" + value['name'] +"</option>";
      });

      $('.city').append(option);
      $('select').material_select();

     });

    });

  </script>