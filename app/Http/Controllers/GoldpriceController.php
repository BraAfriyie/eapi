<?php

namespace App\Http\Controllers;

use App\Model\GoldPrice;
use Illuminate\Http\Request;



class GoldpriceController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except(['index']);
    }

    public function index ()
    {


        //More better way  show Goldprices ..
        $goldprices= Goldprice::with('user')->get();


        return view('goldprice.index' , compact('goldprices'));



    }


   /* public function create()
    {
        $companies = Company::all();
        $customer = new Customer();

        return view('customers.create',compact('companies','customer'));
    }*/

    public function show( Goldprice $goldprice)
    {


        return view('goldprice.show',compact('goldprice'));

    }

    public function edit(Goldprice $goldprice)
    {

        $goldprices = Goldprice::all();

        return view('goldprice.edit',compact('goldprice'));

    }



    public function update(Goldprice $goldprice)
    {


        // echo 'hello';


        // dd($goldprice);

        $goldprice ->update($this->validateRequest());


       // return redirect('goldprice/' . $goldprice->id);
        return redirect('goldprice/' );


    }

    private function validateRequest()
    {

        return  request() -> validate ( [

            'value' => 'required',

        ]);

    }

}
