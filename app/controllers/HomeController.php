<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/
	protected $layout = 'layouts.master';

	public function dashboard()
	{		
		$this->layout->content = View::make('dashboard.index')->withTitle('Dashboard');
	}

	public function comingsoon()
	{
		$this->layout->content = View::make('mahasiswa.comingsoon')->withTitle('Coming Soon');	
	}

	public function authenticate()
	{
		// Ambil credentials dari $_POST variable
		$credentials = array(
			'email' 	=> Input::get('email'),
			'password'	=> Input::get('password'),
		);

		try{
			//authentikasi user
			$user = Sentry::authenticate($credentials, false);
			//Redirect user ke dasboard
			return Redirect::intended('dashboard'); // yang mambuat tidak bisa diakses apabila tidak login (inteded)
		} catch (Cartalyst\Sentry\Users\WrongPasswordException $e) {			
			return Redirect::back()->with('errorMessage','Password yang Anda masukkan salah');
		} catch (Exception $e) {
			return Redirect::back()->with('errorMessage',trans('Email tidak terdaftar'));
		}
	}
	public function logout()
	{
		// logout user
		Sentry::logout();
		// Redirect user ke halaman login
		return Redirect::to('login')->with('successMessage','Anda berhasil logout');
	}
}
