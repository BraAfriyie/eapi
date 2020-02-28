<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta http-equiv="refresh" content="30000">

    <title>{{ config('app.name', 'DDP') }}</title>



    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" />

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="Illuminate\Support\Facades\URL::asset(' https://fonts.googleapis.com/css?family=Montserrat:400,700,200 "  rel="stylesheet" />
    <link href="  https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css  "  rel="stylesheet">
    <!-- CSS Files -->


    <link href=" {{ asset(' assets/css/bootstrap.min.css') }} " rel="stylesheet" />



</head>
<body style="margin: 0; padding: 0;  " class="index-page sidebar-collapse">
<div   class="index-page sidebar-collapse"  id="app">

    <main >


        <div  class="container-fluid" >

            <div class="row">

                <div style="background-color: #008000"  class="col" >

                    @foreach($goldprices as $goldprice)

                        <h3 style="color: gold; text-align: center; font-size: 40px; font-family: 'Arial Black'"> GOLD PRICE  {{ $goldprice->value }} </h3>

                    @endforeach



                </div>

            </div>

            <div  class="row">


                <div class="col-xl-12">



                    <div  id="carouselExampleControls" class="carousel slide " data-ride="carousel" >




                        <div   class="carousel-inner"  >

                            @foreach ( $uploads as $key => $upload)


                                <div  class="carousel-item {{$key == 0 ? 'active' : '' }} "  >
                                    <img style="height: 100vh; width: 100%" class="img-fluid" height="auto" src="{{ asset('storage/'.$upload->image) }}" alt="First slide">
                                </div>

                            @endforeach

                        </div>

                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>


                    </div>


                </div>


            </div>


        </div>


    </main>
</div>


<script>
    $(document).ready(function()

    {



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

        function scrollToDownload()
        {

            if ($('.section-download').length != 0) {
                $("html, body").animate({
                    scrollTop: $('.section-download').offset().top
                }, 1000);
            }
        }



    });





</script>

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


</body>
</html>


@section('content')




@endsection
