<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    //get category home
    public function categoryHome()
    {
    	$categories =Category::all();
    	return view('cms.category.category',compact('categories'));
    }

    //create category
    public function createCategory(Request $request)
    {
    	$this->validate($request,[
    		'name'  => 'required|min:3'
    		]);

    	$category = new Category;
        $category->id =time();
    	$category->name= $request->name;
    	$category->save();


    	return back()->with('successMsg','Category is added successfully!');
    }

    //get form to update category
    public function update_category($id)
    {
        $category  = Category::findOrFail($id);
        $update = true;

        return view('cms.category.category',compact('category','update'));
    }

    //update category
    public function updateCategory(Request $request)
    {
        $this->validate($request,[
            'name'  => 'required|min:3',
            'id'    => 'int|required'
            ]);

        $category =Category::findOrFail($request->id);
        $category->name= $request->name;
        $category->update();

        return back()->with('successMsg','Category is updated successfully!');
    }

    //delete category
    public function delete_category($id)
    {
       $category =Category::findOrFail($id); 
       $category->delete();

       return back()->with('successMsg', 'Category is deleted successfully!');
    }
}
