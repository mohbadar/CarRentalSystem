<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;
use App\Contact;
use Auth;
use App\Car;

class HomeController extends Controller
{
    //get index'
    public function index()
    {
        if(Auth::check() && Auth::user()->role == "admin"){
            return redirect()->route('home');
        }elseif (Auth::check() && Auth::user()->role == "customer") {
            return redirect()->route('cars_all');
        }
        $cars = Car::orderBy('created_at','DESC')->limit(6)->get();
    	$countries  =Country::all();
    	return view('website.index',compact('countries','cars'));
    }

    //get home
    public function home()
    {
    	return view('welcome');
    }

    //get form to sign in 
    public function get_signin_form(){
        $countries  =Country::all();
        $signin =true;
        return view('website.signin',compact('countries','signin'));
    }

    //get form to sing up
    public function get_siginup_form()
    {
        $countries  =Country::all();
        $signup =true;
        return view('website.signin',compact('countries','signup'));   
    }

    //get contacts
    public function contacts()
    {
        $contacts  =Contact::orderBy('created_at','DESC')->get();
// dd($contacts);
        return view('cms.contact.contact',compact('contacts'));
    }

    //delete contact
    public function contact_delete($id)
    {
        $contact  = Contact::findOrFail($id);
        $contact->delete();

        return back()->with('successMsg','Contact is deleted!');
    }
}
