<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Upload;
use App\Model\GoldPrice;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ImageUploadController extends Controller
{
    //

    //


    public function __construct()
    {
        $this->middleware('auth')->except(['index']);
    }

    public function index ()
    {

        $uploads= Upload::with('user')
            ->where('status','visible')->get()->sortBy("order");

        // dd($uploads);
        //More better way  show Goldprices ..
        $goldprices= Goldprice::with('user')->get();

        //dd($uploads);




        return view('uploads.index' , compact('uploads','goldprices'));

    }

    public function create()
    {

        // dd('to dare is to create');


        $uploads = Upload::all();
        // $upload = new Customer();

        return view('uploads.create',compact('uploads'));
    }


    public function  store()
    {


        // dd('hghgh');



        // $upload =  Upload::create($this->validateRequest());
        $upload = new Upload();

        $user = auth()->user();
        // $upload->user_id= '1';
        $upload->user_id= $user->id;


        $upload->save();

        $this->storeImage($upload);





        //event creation
        //  event(new NewCustomerHasRegisteredEvent($customer));




        // Register to Newsletter



        //Slack notification to Admin
        // listerners are created at the listerners folder

        return redirect('uploads');



        //  return back();

        // dd( request('customer_name'));
    }


    private function validateRequest()
    {




// A simple way to validate image using sometimes keyword

        //  dd(request()->image);

        return  request() -> validate ( [




            'image'=>'required|file|image|max:5000',



        ]);






    }


    private function storeImage($upload)
    {



        if (request()->has('image'))
        {


            $upload->update(
                [
                    // 'name' =>request()->file('name'),
                    'image'=>request()->image->store('uploads','public'),
                ]
            );



            $image= Image::make(public_path('storage/' . $upload->image ))->fit(960,720);


            $image->save();
        }

        else
        {
            dd('else condition');
        }


    }

    public function storeNewImage(Request $request)
    {


        $this->validate($request, array(

            'image'=>'required|file|image|max:5000',

        ));


        //save the data to the database
        // $person  = new person ;
        // $person->name = $request->name;


        // $upload =  Upload::create($this->validateRequest());


        $upload = new Upload();

        $user = auth()->user();
        // $upload->user_id= '1';
        $upload->user_id= $user->id;
        $upload->status='visible';
        $upload->order='0';
        //  dd($user->id);

        // $upload->save();

        if($request->hasFile('image')){


            $image = $request->file('image');
            // dd($image->getClientOriginalName());
            // $filename = time() . '.' . $image->getClientOriginalExtension();
            $filename =  $image->getClientOriginalName();

            // dd($filename);

            Image::make($image)->resize(960, 720)->save( public_path('storage/' . $filename ) );
            $upload->image = $filename;
            $upload->save();
        }

        else{

            dd('else');
        }
        ;

        // $upload->save();


        $uploads= Upload::with('user')->get();
        return redirect('uploads/home') ->with('success','Images Uploaded successfully');



    }

    public function home()
    {



        $uploads = Upload::with('user')->get()->sortBy("order");

        //dd($uploads);

        // return view('uploads.home',compact('uploads'));

        return view('uploads.images',compact('uploads'));


    }

    public function destroy(Upload $upload)
    {



        if(Auth::check())
        {

            //delete from database
            //dd($upload->image );
            $upload ->delete();


            //delete from public folder
            $destinationpath=public_path('storage/' );
            File::delete( $destinationpath.$upload->image);


            return redirect('uploads/home' ) ->with('success','Images Deleted successfully');

        }

        return back()->withInput()->with('errors','Error Deleting Image ');


    }

    public function updateStatusHidden(Upload $upload)
    {

        // dd('yea');
        $upload ->update(
            ['status' => 'hidden']
        );

        $uploads= Upload::with('user')->get();
        //return redirect('uploads') ->with('success','Images Uploaded successfully');

        //  return view('uploads.home',compact('uploads'));
        return view('uploads.images',compact('uploads'));


    }

    public function updateStatusVisible(Upload $upload)
    {

        // dd('yea');
        $upload ->update(
            ['status' => 'visible']
        );

        $uploads= Upload::with('user')->get();
        //return redirect('uploads') ->with('success','Images Uploaded successfully');

        //return view('uploads.home',compact('uploads'));
        return view('uploads.images',compact('uploads'));


    }

    public function updateOrder(Request $request)
    {





        $uploads = Upload::all()->sortBy("order");



        // $id = Input::get('id');
        // $order = Input::get('order');

        $id= $request ->input('id');
        $order= $request ->input('order');

        //Upload::where('order', '=', $order);

        DB::table('uploads')
            ->where('id', $id)
            ->update(['order'=>$order]);


    }
}
