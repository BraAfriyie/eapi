<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'DDP') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" />

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="Illuminate\Support\Facades\URL::asset(' https://fonts.googleapis.com/css?family=Montserrat:400,700,200 "  rel="stylesheet" />
    <link href="  https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css  "  rel="stylesheet">
    <!-- CSS Files -->

    {{--   <link href="{{ URL::asset(' assets/css/bootstrap.min.css') }} " rel="stylesheet" />
       <link href=" {{URL::asset('assets/css/paper-kit.css?v=2.2.0')  }} " rel="stylesheet" />--}}

    <link href=" {{ asset(' assets/css/bootstrap.min.css') }} " rel="stylesheet" />
    <link href=" {{ asset( 'assets/css/paper-kit.css?v=2.2.0') }}" rel="stylesheet" />

</head>
<body  class="index-page sidebar-collapse">
<div id="app">


    @include('includes.nav')

    @include('includes.errors')
    @include('includes.success')


    <main >
        @yield('content')
    </main>


</div>



<!--   Core JS Files   -->
<script src="assets/js/core/jquery.min.js" type="text/javascript"></script>
<script src="assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="assets/js/plugins/bootstrap-switch.js"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
<!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
<script src="assets/js/plugins/moment.min.js"></script>
<script src="assets/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
<!-- Control Center for Paper Kit: parallax effects, scripts for the example pages etc -->
<script src="assets/js/paper-kit.js?v=2.2.0" type="text/javascript"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

<script>



    /*  $(document).ready(function() {

          setInterval(function() {
              cache_clear()
          }, 1000000);
      });

      function cache_clear() {
          window.location.reload(true);
          // window.location.reload(); use this if you do not remove cache
      }*/


    if ($("#datetimepicker").length != 0) {
        $('#datetimepicker').datetimepicker({
            icons: {
                time: "fa fa-clock-o",
                date: "fa fa-calendar",
                up: "fa fa-chevron-up",
                down: "fa fa-chevron-down",
                previous: 'fa fa-chevron-left',
                next: 'fa fa-chevron-right',
                today: 'fa fa-screenshot',
                clear: 'fa fa-trash',
                close: 'fa fa-remove'
            }
        });
    }

    function scrollToDownload() {

        if ($('.section-download').length != 0) {
            $("html, body").animate({
                scrollTop: $('.section-download').offset().top
            }, 1000);
        }
    }
    });
</script>
</body>
</html>
