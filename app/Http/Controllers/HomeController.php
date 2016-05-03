<?php namespace App\Http\Controllers;
use App\Submission;
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

	public function __construct()
	{
		$this->middleware('auth');
	}


	public function index()
	{
		$data=Submission::all();
		return view('pages.user.adminstrative')->with('data',$data);
	}

	/**
	 * @return mixed
     */
	public function loadProfile()
	{
			return view('pages.admin.adminProfilePage');
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
