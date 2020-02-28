
@extends ('layouts.app')


@section('title','Gold Price' )



@section('content')


    <div class="row">

        <div class="col-12">

            <h3>Gold Price at   {{$goldprice->updated_at}} is   {{ $goldprice->value }}</h3>
            <p><a href="/goldprice/{{ $goldprice->id }}/edit">Click here to edit</a></p>

            <form action="/goldprice/ {{$goldprice->id}}"  method="POST">
                @method ('DELETE')
                @csrf


                <button class="btn btn-danger" type="submit">Delete</button>
            </form>

        </div>

    </div>



    <div class="row">

        <div class="col-12">

            <p> <strong> Last Updated by:</strong>  {{$goldprice->user->name}}</p>




        </div>


    </div>


@endsection
