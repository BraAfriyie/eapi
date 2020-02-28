
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta http-equiv="refresh" content="300">

    <title>{{ config('app.name', 'DDP') }}</title>


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" />

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />


    <!--     Fonts and icons     -->
    <link href="Illuminate\Support\Facades\URL::asset(' https://fonts.googleapis.com/css?family=Montserrat:400,700,200 "  rel="stylesheet" />
    <link href="  https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css  "  rel="stylesheet">
    <!-- CSS Files -->


    <link href=" {{ asset(' assets/css/bootstrap.min.css') }} " rel="stylesheet" />
    <link href=" {{ asset( 'assets/css/paper-kit.css?v=2.2.0') }}" rel="stylesheet" />

    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">--}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>





</head>
<body  class="index-page sidebar-collapse">



<div id="app" >

    @include('includes.nav')

    @include('includes.errors')
    @include('includes.success')

    <div class="container">


        <div class="col-12">


            <h6 style="padding: 0px"  > <a href="{{route('uploads.create')}}" > Click To Upload Image</a> </h6>


        </div>
        <div class=" row gallery">

            <div class="card border-success mb-3" >

                <ul class="reorder_ul reorder-photos-list">


                    @foreach( $uploads as $upload)


                        <li  id="{{ $upload->id }}" class="ui-sortable-handle">


                            <a href="javascript:void(0);" style="float:none;" class="image_link">
                                <img src="{{ asset('storage/'.$upload->image) }}" alt="">
                            </a>


                            @if($upload->status=='visible')

                                <p><a style="color: green; font-weight: bold " href=" {{ route('uploads.updateStatusVisible' ,['upload'=>$upload->id]) }}" >Status : Visible</a></p>

                            @else

                                <p><a style="color: red; font-weight: bold" href="  {{ route('uploads.updateStatusHidden' ,['upload'=>$upload->id]) }}"> Status : Hidden</a></p>



                            @endif


                            <p><a style="color: red " href=" {{ route('uploads.delete' ,['upload'=>$upload->id]) }}"  >DELETE</a></p>
                            {{--    <a href=" {{ route('uploads.updateOrder',['upload'=>$upload->id] ) }}" >Save Reordering</a>--}}
                            <a  > order number ={{ $upload->order }}</a>
                            <h6 class="card-title">Uploaded by {{$upload->user->name}}</h6>



                        </li>


                    @endforeach

                </ul>




            </div>


        </div>


    </div>

</div>


<script type="text/javascript">

    $(function() {
        $(".reorder-photos-list").sortable({
            stop: function() {
                $.map($(this).find('li'), function(el) {
                    var id = el.id;
                    var order = $(el).index();

                    // console.log('done');
                    console.log(order);
                    console.log(id);

                    $.ajax({

                        //url: 'http://127.0.0.1:8000/uploads/updateOrder',
                        url: 'updateOrder',
                        type: 'GET',
                        data: {
                            id: id,
                            order: order
                        },

                        success: function(response) {
                            console.log(response);
                        }
                    });
                });
            }
        });
    });


</script>




</body>
</html>
