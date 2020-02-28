
@extends ('layouts.app')


@section('title','Add New Image ' )


@section('content')

    <div class="container">

        <div class="row col-md-3">

        </div>

        <div class="row">

            <div class="col-md-3">


                <h3>Upload Image</h3>



            </div>

        </div>

        <div class="row col-md-3">

            <div >

                <form action="{{route('uploads.storeNewImage')}}" method="POST" class="pb-5" enctype="multipart/form-data" >

                    <div class="form-group d-flex flex-column" >

                        <label for="image" >Profile Images :</label>

                        <input type="file" name="image" class="py-2" >
                        {{-- <input type="file" name="[image]" class="py-2" >--}}

                        <div> {{$errors -> first ('image')}} </div>

                        <button type="submit" style="width: auto" class="btn btn-primary">Add Image</button>


                        @csrf



                    </div>


                </form>




            </div>


        </div>

    </div>



@endsection
