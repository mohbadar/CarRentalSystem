<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;
use App\City;

class CityController extends Controller
{
    //get city home
    public function cityHome()
    {
    	$countries = Country::all();
    	$cities = City::all();
    	return view('cms.city.city',compact('countries','cities'));
    }

    //create city 
    public function createCity(Request $request)
    {
    	// dd($request->country);
    	$this->validate($request,[
    		'name'  => 'required|min:2',
    		'country' => 'required|int'
    		]);
    	// dd($request);
    	$city = new City;
        $city->id =time();
    	$city->name = $request->name;
    	$city->country_id= $request->country;
    	$city->save();

    	return back()->with('successMsg','City is added successfully!');
    }

    //update city info
    public function update_city($id)
    {
        $city = City::findOrFail($id);
        $countries = Country::all();
        $update =true;

        return view('cms.city.city',compact('city','countries','update'));
    }

    //update city 
    public function updateCity(Request $request)
    {
        $this->validate($request,[
            'name'  => 'required|min:2',
            'country' => 'required|int'
            ]);
        
        $city  =City::findOrFail($request->id);
        $city->name =$request->name;
        $city->country_id =$request->country;

        $city->update();

        return back()->with('successMsg','City info is updated successfully!');
    }

    //delete city 
    public function delete_city($id)
    {
        $city = City::findOrFail($id);
        $city->delete();

        return back()->with('successMsg','City is deleted successfully!');
    }
}
