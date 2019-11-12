<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{


	public function __construct()
	{
		$this->middleware('guest',['expect' => 'destroy']);
	}

	public function create()
	{
		return view('session.login');
	}


	public function store()
	{
		if(auth()->attempt(request(['email','password']))){

			
			return redirect()->home();
				
		}else{

			return back()->withErrors([

					'message' => 'Please check your credentials and try again'

				]);

		}

		

			
		
	}

    public function destroy()
    {
    	auth()->logout();

    	return redirect()->home();
    }
}
