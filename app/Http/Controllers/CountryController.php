<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;

class CountryController extends Controller
{
    //get country home
    public function countryHome()
    {
    	$countries = Country::all();
    	// dd($countries);
    	return view('cms.country.country',compact('countries'));
    }

    //create country
    public function createCountry(Request $request)
    {
    	$this->validate($request,[
    		'name' => 'required|min:2'
    		]);
    	// dd($request);
    	$country = new Country;
        $country->id =time();
    	$country->name =$request->name;
    	$country->save();

    	return back()->with('successMsg','Country is added successfully');
    }

    //get form to update country
    public function update_country($id)
    {
        $update =true;
        $country =Country::findOrFail($id);
        // dd($country);
        return view('cms.country.country',compact('update','country'));
    }

    //edit country info 
    public function updateCountry(Request $request)
    {
            $this->validate($request,[
                'name' => 'required|min:2',
                'id'   =>'required|int'
            ]);
        // dd($request);
        $country =  Country::findOrFail($request->id);
        $country->name =$request->name;
        $country->update();

        return back()->with('successMsg','Country is updated successfully!');
    }

    //delete country
    public function delete_country($id)
    {
        $country = Country::findOrFail($id);
        $country->delete();

        return back()->with('successMsg','Country is deleted successfully!');
    }
}
