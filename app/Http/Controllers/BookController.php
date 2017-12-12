<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class BookController extends Controller
{
    //book the car
    public function book(Request $request)
    {
    	$this->validate($request,[
    		'take_date' => 'required',
    		'return_date' => 'required',
    		'car_id'      => 'required|int',
    		'phone'       => 'required|min:8',
    		'address'     => 'required|min:6'
    		]);
    	// dd($request);

    	$book = new Book;
        $book->id =time();
    	$book->take_date= $request->take_date;
    	$book->return_date = $request->return_date;
    	$book->car_id = $request->car_id;
    	$book->phone = $request->phone;
    	$book->address = $request->address;
        $book->user_id = $request->user_id;
    	$book->save();

    	return back()->with('successMsg','Car is booked successfully, We will Call you by phone');
    }

    public function unservedbooks()
    {
        $unserve =true;
        $books = Book::where('isServed',0)->get();

        return view('cms.book.book',compact('books','unserve'));
    }

    //get served books
    public function servedbooks()
    {
        $books = Book::where('isServed',1)->get();
        $serve =true;
        return view('cms.book.book',compact('serve','books'));
    }

    //delete book request
    public function delete_book($id)
    {
        $book = Book::findOrFail($id);
        $book->delete();

        return back()->with('successMsg','Book request is deleted successfully!');
    }
}
