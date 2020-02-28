
@extends ('layouts.app')


@section('title','Gold Price' )


@section('content')

    <div class="row">

        <div class="col-12">


            <h1>Gold Price List</h1>


        </div>

    </div>


    <div class="row">

        @foreach($goldprices as $goldprice)

            <div class="col-12">



                <table class="table">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Gold Price</th>
                        <th scope="col">Updated By</th>
                        <th scope="col">Last Updated Date</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>  <a class="nav-link" href="{{route ('goldprice.show',[ $goldprice->id]) }} " > <strong> {{$goldprice->value}} </strong>  </a> </td>
                        <td>{{$goldprice->user->name}}</td>
                        <td>{{$goldprice->updated_at}}</td>
                    </tr>

                    </tbody>
                </table>


            </div>

        @endforeach

    </div>


@endsection
