
@extends ('layouts.app')


@section('title','Gold Price' )



@section('content')


    <div class="container">


        <div class="row">

            <div class="col-12">


                <h4   > <a href="{{route('uploads.create')}}" > Click To Upload Image</a> </h4>


            </div>

        </div>

        <div class="row">


            <div><!-- Gallery -->
                @foreach($uploads as $upload)

                    <div class="mbr-gallery-row">

                        <div class="mbr-gallery-layout-default" >


                            <div class="row-first row justify-content-center m-0">
                                <div class="mbr-gallery-item col-lg-4 col-md-4 col-sm-12 p-2" data-video-url="false">

                                </div>

                            </div>
                        </div>
                    </div>

                @endforeach

            </div>





        </div>

    </div>











@endsection
