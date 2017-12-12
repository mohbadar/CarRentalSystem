<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use App\Car;
use App\Country;
use App\Book;
use App\Contact;
use App\Category;

class WebsiteController extends Controller
{
    //sign up 
    public function signup(Request $request)
    {
    	// dd($request);
    	$this->validate($request,[
    		'firstname' => 'required|min:3',
    		'lastname'  => 'required|min:3',
    		'email'     => 'email|required',
    		'password'  => 'required|min:6',
    	]);

        // dd($request->file);
    	// dd($request);
    	$user =new User;
    	$user->firstname = $request->firstname;
    	$user->lastname = $request->lastname;
    	$user->email = $request->email;
    	$user->password = bcrypt($request->password);
    	$user->isActive = 1;
        $user->city_id= $request->city;
    	$user->role  = "customer";

    	$user->save();

    

    	return redirect()->route('login')->with('successMsg','User account is created successfully!');
    }

    //get cars to book
    public function getCityCars(Request $request)
    {
        $cars = Car::where('city_id',$request->city)->get();
        $countries = Country::all();
        return view('website.car',compact('cars','countries'));
    }


    //book car
    public function book($id)
    {
        if(Auth::check()){
            $car  =Car::findOrFail($id);
            $countries = Country::all();
            $hide =true;
            $hide_header =true;
            return view('website.book',compact('car','countries','hide','hide_header'));
        }else{
           return back()->with('warningMsg','You need to be logged in!') ;
        }
    }


    //cars all 
    public function cars_all()
    {
        if(Auth::check()){
            $cars = Car::where('city_id',Auth::user()->city_id)->get();
        }else{
           $cars = Car::all(); 
        }
        
        $countries = Country::all();

        $hide_header=true;
        return view('website.car',compact('cars','countries','hide_header'));
    }

    //get previous books
    public function previous_books()
    {
        $books = Book::where('user_id',Auth::user()->id)->get();
        $hide_header =true;
        return view('website.pre_books',compact('books','hide_header'));
    }

    //get products
    public function getProducts()
    {
        $product =true;
        $hide_header =true;
        return view('website.static',compact('product','hide_header'));
    }

        //get services
    public function getServices()
    {
        $services =true;
        $hide_header=true;
        return view('website.static',compact('services','hide_header'));
    }


        //get Team member
    public function getTeam()
    {
        $team =true;
        $hide_header =true;
        return view('website.static',compact('team','hide_header'));
    }


        //get products
    public function getContact()
    {
        $contact =true;
        $hide_header=true;
        return view('website.static',compact('contact','hide_header'));
    }

    //create contact
    public function createContact(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|min:2',
            'email' => 'required|email',
            ]);

        $contact =new Contact;
        $contact->name =$request->name;
        $contact->email = $request->email;
        $contact->content =$request->content;
        $contact->save();

        return back()->with('successMsg','Contact is registered successfully!');
    }

    //cancel book 
    public function cancel_book($id)
    {
        $book = Book::findOrFail($id);
        $book->delete();

        return back()->with('successMsg','Book request is cancelled!');
    }

}
