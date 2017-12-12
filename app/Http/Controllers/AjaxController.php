<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\City;
use App\Book;

class AjaxController extends Controller
{
    //get cities
    public function getCities(Request $request)
    {
    	$id =$request->id;

    	$cities = City::where('country_id',$id)->get();
    	return response()->json($cities);
    }

    //assign cost

    public function assgin_cost(Request $request)
    {
    	$id = $request->id;
    	$cost = $request->cost;

    	$book = Book::findOrFail($id);
    	$book->isServed=1;
    	$book->cost= $cost;
    	$book->update();

    	return response()->json(['data'=>true]);
    }
}
