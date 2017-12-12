<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;
use App\City;
use App\Car;
use App\Category;



class CarController extends Controller
{
    //get car home 
    public function carHome()
    {
    	$countries = Country::all();
    	$categories = Category::all();
    	return view('cms.car.car',compact('countries','categories'));
    }

    //create car
    public function createCar(Request $request)
    {

    	$this->validate($request,[
    		'title' => 'required|min:3',
    		'city'     => 'required|int',
            'category' => 'required|int'
    		]);

    	// dd($request->file);
    	$car= new Car;
        $car->id =time();
    	$car->title = $request->title;
    	$car->description = $request->description;
    	$car->city_id = $request->city;
        $car->category_id = $request->category;

    	 $file = $request->file('file');
        if($file){
            $fileExtension = $file->getClientOriginalExtension();
            $dbPath = "/files/car/".substr($request->title,0,10).'_'.time().'.'.$fileExtension;
            $file->move(public_path("/files/car/"), $dbPath);
            $car->image=$dbPath;
        }


    	$car->save();

    	return back()->with('successMsg','Car is added successfully!');
    }

    //get cars
    public function getCars(Request $request)
    {
    	$this->validate($request,[
    		'city'  =>'required|int'
    		]);

    	$cars = Car::where('city_id',$request->city)->paginate(15);
    	$countries = Country::all();
    	return view('cms.car.car',compact('cars','countries'));
    }

    //delete car
    public function delete_car($id)
    {
        $car = Car::findOrFail($id);
        $car->delete();

        return redirect()->route('carHome')->with('successMsg','Car is deleted successfully!');
    }

    //update car
    public function update_car($id)
    {
        $car = Car::findOrFail($id);
        $update =true;
        $countries = Country::all();
        $categories = Category::all();

        return view('cms.car.car',compact('car','update','countries','categories'));
    }

    //update car
    public function updateCar(Request $request)
    {


        $this->validate($request,[
            'title' => 'required|min:3',
            'city'     => 'required|int',
            'category' => 'required|int'
            ]);

        // dd($request->file);
        $car= Car::findOrFail($request->id);
        $car->title = $request->title;
        $car->description = $request->description;
        $car->city_id = $request->city;
        $car->category_id = $request->category;

         $file = $request->file('file');
        if($file){
            $fileExtension = $file->getClientOriginalExtension();
            $dbPath = "/files/car/".substr($request->title,0,10).'_'.time().'.'.$fileExtension;
            $file->move(public_path("/files/car/"), $dbPath);
            $car->image=$dbPath;
        }


        $car->update();

        return back()->with('successMsg','Car is updated successfully!');

    }

    //get all cars
    public function all_cars()
    {
        $cars = Car::all();
        $countries = Country::all();
        return view('cms.car.all_cars',compact('cars','countries'));
    }


}
