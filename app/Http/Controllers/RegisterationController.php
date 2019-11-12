<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\User;

class RegisterationController extends Controller
{
    
	public function create()
	{
		return view('session.register');
	}


	public function store()
	{
		$this->validate(request(), [

			'name' => 'required',
			'email' => 'required|email',
			'password' => 'required|confirmed'
 
		]);


		$user = User::create(request(['name', 'email', 'password']));


		auth()->login($user);

		return redirect()->home();


	}

}
