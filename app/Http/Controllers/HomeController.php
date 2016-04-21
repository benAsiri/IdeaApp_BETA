<?php namespace App\Http\Controllers;

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('pages.admin.adminIndexPage');
	}

	/**
	 * @return mixed
     */
	public function loadProfile()
	{
		$user = \Auth::user();

		return view('profile')->with('user',$user);
	}

	public function resetPassword(){
		return view('emails.password');
	}

	public function registerMe(){
		return view('auth.register');
	}

	public function logoutMe(){
		\Auth::logout(); // clear the session that i have already logged in
		return view('auth.login');
	}
}
