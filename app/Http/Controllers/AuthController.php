<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class AuthController extends Controller
{
     //signIn
    public function signIn(Request $request)
    {
      $this->validate($request,[
          'email'  => 'required|email|min:8',
          'password'=> 'required|min:4',
      ]);

     // dd($request);
      $email = $request->email;
      $password = $request->password;


		
  		//authenticat the user with the email and password.
  		if(Auth::attempt(['email' => $email, 'password' => $password, 'isActive' => 1])) {

  			$role  =Auth::user()->role;
  			switch ($role) {
  				case 'admin':
  					return redirect()->route('home');
  					break;

  				case 'customer':
  					return redirect()->route('cars_all');
  					break;	
  				
  				default:
  					return redirect()->route('index');
  					break;
  			}
  			
  		}
      else{
        // dd('not works');
        return redirect()->route('index');
      }

   	}

    //sign out
    public function signOut()
    {
      Auth::logout();
      return redirect()->route('index');
    }
}
