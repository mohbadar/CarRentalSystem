<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class UserController extends Controller
{
    //

    public function getUserHome()
    {
    	$users = User::where('role','admin')->get();
    	// dd($users);
    	return view('cms.user.user',compact('users'));
    }

    //create user account
    public function create(Request $request)
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
        $user->id =time();
    	$user->firstname = $request->firstname;
    	$user->lastname = $request->lastname;
    	$user->email = $request->email;
    	$user->password = bcrypt($request->password);
    	$user->isActive = 1;
    	$user->role  = "admin";

        $file = $request->file('file');
        if($file){
            $fileExtension = $file->getClientOriginalExtension();
            $dbPath = "/files/user/".$request->firstname.'_'.$request->lastname.'_img_'.time().'.'.$fileExtension;
            $file->move(public_path("/files/user/"), $dbPath);
            $user->image=$dbPath;
        }


    	$user->save();

    	return back()->with('successMsg','User account is created successfully!');
    }

    //get customer accounts
    public function customer_accounts()
    {
        $users = User::where('role','customer')->orderBy('created_at','DESC')->get();
        // dd($users);
        return view('cms.user.user',compact('users'));
    }

    //get account for management section
    public function account_management()
    {
        $users = User::where('role','admin')->where('id','!=',Auth::user()->id)->get();
        // dd($users);
        return view('cms.user.acc_manage',compact('users'));
    }

    //de actiavate user account
    public function de_activate($id)
    {
        $user = User::findOrFail($id);
        $user->isActive =0;
        $user->update();

        return back()->with('successMsg','User account is deactivated!');
    }
    //activate user account
    public function activate($id)
    {
        $user = User::findOrFail($id);
        $user->isActive =1;
        $user->update();

        return back()->with('successMsg','User account is activated!');   
    }

    //get user profile
    public function user_profile($id)
    {
        $user = User::findOrFail($id);
        return view('cms.user.profile',compact('user'));
    }

    //update user profile
    public function update_user_profile(Request $request)
    {
             // dd($request);
        $this->validate($request,[
            'firstname' => 'required|min:3',
            'lastname'  => 'required|min:3',
            'email'     => 'email|required',
            'password'  => 'required|min:6',
            'id'        =>'required|int'
            ]);

        
        $user =User::findOrFail($request->id);
        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->isActive = 1;
        $user->role  = "admin";

        $file = $request->file('file');
        if($file){
            $fileExtension = $file->getClientOriginalExtension();
            $dbPath = "/files/user/".$request->firstname.'_'.$request->lastname.'_img_'.time().'.'.$fileExtension;
            $file->move(public_path("/files/user/"), $dbPath);
            $user->image=$dbPath;
        }


        $user->update();

        return back()->with('successMsg','Account is updated successfully!');   
    }

    //delete user account
    public function delete_user($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return back()->with('successMsg','Account is deleted successfully!');
    }
}
