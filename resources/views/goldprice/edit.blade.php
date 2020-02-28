
@extends ('layouts.app')


@section('title','Edit Details for ' .$goldprice->value )



@section('content')



    <div class="row">

        <div class="col-12">


            <h2>Edit Gold Price </h2>



        </div>

    </div>




    <div class="row">

        <div class="col-3">

            {{--<form action="/goldprice/{{$goldprice->id}}" method="POST" class="pb-5" enctype="multipart/form-data">--}}
            <form action="  {{ route('goldprice.update' ,['goldprice'=>$goldprice]) }} " method="POST" class="pb-5" enctype="multipart/form-data">
                @method('PATCH')

                <div class="form-group has-success">
                    <label for="name" >Gold Price </label>

                    <div class="form-group has-success">

                        <input type="text"  name="value" value="{{ old('value') ?? $goldprice ->value }}" class="form-control form-control-success" >

                    </div>
                    <div> {{$errors -> first ('value')}} </div>

                    <button type="submit" class="btn btn-primary">Save</button>


                </div>

                @csrf

            </form>



        </div>


    </div>



@endsection
